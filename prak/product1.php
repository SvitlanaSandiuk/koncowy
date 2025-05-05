<?php
include 'db.php';

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

$stmt = $conn->prepare("SELECT * FROM ubrania WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$produkt = $stmt->get_result()->fetch_assoc();

if (!$produkt) {
    die("Produkt nie istnieje.");
}


if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST['komentarz'])) {
    $komentarz = trim($_POST['komentarz']);
    if (!empty($komentarz)) {
        $add = $conn->prepare("INSERT INTO komentarze (kategoria, produkt_id, tresc) VALUES ('kimono', ?, ?)");
        $add->bind_param("is", $id, $komentarz);
        $add->execute();
    }
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($produkt['opis']) ?></title>
    <link rel="stylesheet" href="stele.css">
    <style>
        .product-box {
            max-width: 900px;
            margin: 40px auto;
            background: rgba(255,255,255,0.9);
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        .product-info {
            display: flex;
            gap: 20px;
            align-items: flex-start;
            margin-bottom: 30px;
        }

        .product-info img {
            width: 200px;
            height: auto;
            border-radius: 8px;
            object-fit: contain;
            box-shadow: 0 0 5px rgba(0,0,0,0.2);
        }

        .product-details p {
            font-size: 16px;
            margin-bottom: 8px;
        }

        textarea {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
            resize: vertical;
            margin-top: 10px;
        }

        button {
            margin-top: 10px;
            background-color: #27ae60;
            color: white;
            border: none;
            padding: 10px 16px;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background-color: #219150;
        }

        .comment {
            background: #f9f9f9;
            padding: 10px 15px;
            margin-top: 10px;
            border-radius: 8px;
            box-shadow: 0 1px 5px rgba(0,0,0,0.05);
        }

        .comments-section {
            margin-top: 40px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="product-box">
        <div class="product-info">
            <img src="images/<?= htmlspecialchars($produkt['zdjecie']) ?>" alt="Produkt">
            <div class="product-details">
                <h2><?= htmlspecialchars($produkt['opis']) ?></h2>
                <p><strong>Cena:</strong> <?= $produkt['cena']; ?> zł</p>
                <p><strong>Rozmiar:</strong> <?= $produkt['rozmiar']; ?></p>
            </div>
        </div>

        <div class="comments-section">
            <h3>Dodaj komentarz</h3>
            <form method="post">
                <textarea name="komentarz" placeholder="Twoja opinia..." rows="4" required></textarea><br>
                <button type="submit">Wyślij</button>
            </form>

            <h3 style="margin-top: 30px;">Komentarze:</h3>
            <?php
            $koms = $conn->prepare("SELECT tresc, data FROM komentarze WHERE kategoria='kimono' AND produkt_id=? ORDER BY data DESC");
            $koms->bind_param("i", $id);
            $koms->execute();
            $rez = $koms->get_result();
            if ($rez->num_rows === 0) {
                echo "<p>Brak komentarzy dla tego produktu.</p>";
            } else {
                while ($r = $rez->fetch_assoc()) {
                    echo '<div class="comment">🗨️ ' . htmlspecialchars($r['tresc']) . '</div>';
                }
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>