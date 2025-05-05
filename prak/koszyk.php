<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Koszyk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fdfdfd;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 16px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
        }

        h1 {
            text-align: center;
            color: #b30059;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
        }

        th, td {
            padding: 14px 12px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #ffe6f0;
            color: #b30059;
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            background-color: #b30059;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: #99004d;
        }

        .total {
            font-weight: bold;
            font-size: 18px;
            text-align: right;
            margin-top: 20px;
        }

        .empty {
            text-align: center;
            padding: 40px;
            color: #888;
            font-size: 20px;
        }

        .back-link {
            display: inline-block;
            margin-top: 20px;
            color: #b30059;
            text-decoration: none;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Twój Koszyk</h1>

        <?php if (!empty($_SESSION['cart'])): ?>
            <table>
                <thead>
                    <tr>
                        <th>Produkt</th>
                        <th>Cena</th>
                        <th>Ilość</th>
                        <th>Suma</th>
                        <th>Usuń</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total = 0;
                    foreach ($_SESSION['cart'] as $id => $item):
                        $item_total = $item['price'] * $item['quantity'];
                        $total += $item_total;
                    ?>
                    <tr>
                        <td><?= htmlspecialchars($item['name']) ?></td>
                        <td><?= number_format($item['price'], 2) ?> zł</td>
                        <td><?= $item['quantity'] ?></td>
                        <td><?= number_format($item_total, 2) ?> zł</td>
                        <td>
                            <form method="post" style="display:inline;">
                                <input type="hidden" name="remove_id" value="<?= $id ?>">
                                <button class="btn" type="submit">Usuń</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <div class="total">
                Łącznie: <?= number_format($total, 2) ?> zł
            </div>

        <?php else: ?>
            <div class="empty">Koszyk jest pusty.</div>
        <?php endif; ?>

        <a class="back-link" href="kimono.php">← Powrót do sklepu</a>
    </div>

<?php

if (isset($_POST['remove_id'])) {
    $remove_id = $_POST['remove_id'];
    unset($_SESSION['cart'][$remove_id]);
    header("Location: cart.php");
    exit();
}
?>
</body>
</html>