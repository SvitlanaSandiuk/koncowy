<?php
session_start();


if (isset($_GET['remove'])) {
    $index = $_GET['remove'];
    if (isset($_SESSION['cart'][$index])) {
        unset($_SESSION['cart'][$index]);
        $_SESSION['cart'] = array_values($_SESSION['cart']); 
    }
}

$cart = $_SESSION['cart'] ?? [];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Koszyk</title>
    <link rel="stylesheet" href="stele.css">
    <style>
        .cart-box {
            max-width: 800px;
            margin: 50px auto;
            background: rgba(255,255,255,0.85);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid #ddd;
        }
        .cart-item:last-child {
            border-bottom: none;
        }
        .cart-item span {
            font-size: 16px;
        }
        .remove-button {
            background-color: #c0392b;
            color: white;
            border: none;
            padding: 6px 12px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
        }
        .remove-button:hover {
            background-color: #a93226;
        }
        .empty {
            text-align: center;
            font-size: 18px;
            color: #555;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="cart-box">
        <h1>🛒 Twój koszyk</h1>
        <?php if (empty($cart)): ?>
            <p class="empty">Koszyk jest pusty.</p>
        <?php else: ?>
            <?php foreach ($cart as $index => $item): ?>
                <div class="cart-item">
                    <span><?= htmlspecialchars($item['opis']); ?> — <?= $item['cena']; ?> zł</span>
                    <a href="cart.php?remove=<?= $index; ?>">
                        <button class="remove-button">Usuń</button>
                    </a>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
</body>
</html>