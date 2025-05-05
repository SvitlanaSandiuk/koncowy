<?php
session_start();


$fav = $_SESSION['fav'] ?? [];


if (isset($_GET['remove'])) {
    $index = $_GET['remove'];
    if (isset($_SESSION['fav'][$index])) {
        unset($_SESSION['fav'][$index]);
        $_SESSION['fav'] = array_values($_SESSION['fav']);
    }
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Ulubione produkty</title>
    <link rel="stylesheet" href="stele.css">
    <style>
        .fav-box {
            max-width: 1000px;
            margin: 40px auto;
            background: rgba(255,255,255,0.95);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .fav-title {
            text-align: center;
            margin-bottom: 30px;
        }

        .fav-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }

        .fav-item {
            background: #fff;
            border-radius: 10px;
            padding: 15px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .fav-item p {
            margin: 8px 0;
            font-size: 16px;
        }

        .fav-item a.button, .fav-item form button {
            display: inline-block;
            margin-top: 8px;
            padding: 6px 12px;
            font-size: 14px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            text-decoration: none;
            color: white;
        }

        .fav-item a.button {
            background-color: #3498db;
        }

        .fav-item a.button:hover {
            background-color: #2980b9;
        }

        .fav-item form button {
            background-color: #e74c3c;
        }

        .fav-item form button:hover {
            background-color: #c0392b;
        }

        .empty-msg {
            text-align: center;
            font-size: 18px;
            color: #555;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="fav-box">
        <h1 class="fav-title">❤️ Ulubione produkty</h1>

        <?php if (empty($fav)): ?>
            <p class="empty-msg">Brak ulubionych produktów.</p>
        <?php else: ?>
            <div class="fav-grid">
                <?php foreach ($fav as $index => $f): ?>
                    <div class="fav-item">
                        <p><strong><?= htmlspecialchars($f['opis']); ?></strong></p>
                        <p><?= $f['cena']; ?> zł</p>
                        <p><em><?= htmlspecialchars($f['kategoria']); ?></em></p>

                        <a class="button" href="produkt.php?kategoria=<?= $f['kategoria']; ?>&id=<?= $f['id']; ?>">
                            Zobacz produkt
                        </a>

                        <form method="GET" action="ulubione.php" style="margin-top: 10px;">
                            <input type="hidden" name="remove" value="<?= $index; ?>">
                            <button type="submit">Usuń z ulubionych</button>
                        </form>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
</body>
</html>