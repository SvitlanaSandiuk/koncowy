<?php
session_start();
include 'db.php';

$result = $conn->query("SELECT * FROM ubrania");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Męskie ubrania</title>
    <link rel="stylesheet" href="stele.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<header>
<div class="top-bar">
    <div class="logo">
        <img src="logi.png" alt="Kitajosa"/>
    </div>
              
        
       <div class="icon-buttons">
        <button class="icon-button">
            <i class="fas fa-search"></i>
        </button>
        <a href="ulubione.php">
        <button class="icon-button">
       <i class="fas fa-heart">
        <span class="badge">0</span>
       </i> </button></a>
       <a href="cart.php">
       <button class="icon-button">
       <i class="fas fa-shopping-bag">
        <span class="badge">0</span>
       </i></button></a>
       <a href="register.php">
       <button class="icon-button">
       <i class="fas fa-user"></i>
       </button></a>
       <div class="catalog-container">
       <button id="catalogToggle" class="icon-button">
       <i class="fas fa-bars"></i>
       <div id="catalog" class="catalog hidden">
        <ul>
        <li><a href="http://localhost/prak/kimono.php">Kimono</a></li>
            <li><a href="http://localhost/prak/ubrania.php">Ubrania</a></li>
            <li><a href="http://localhost/prak/bielizna.php">Bielizna</a></li>
            <li><a href="http://localhost/prak/obuwie.php">Obuwie</a></li>
            <li><a href="http://localhost/prak/skarpety.php">Skarpety</a></li>
            <li><a href="http://localhost/prak/spodnie.php">Spodnie</a></li>
            <li><a href="http://localhost/prak/spodnicy.php">Spodnicy</a></li>
        </ul>
        </div>
       </button>
       </div>
       </div>
    </div>
</div>
    

</header>
<body>
<div class="container">
    <h1>Męskie ubrania</h1>
    <div class="products">
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="product">
                <a href="product1.php?kategoria=ubrania&id=<?= $row['id']; ?>">
                    <img src="images/<?= htmlspecialchars($row['zdjecie']); ?>" alt="Obrazek produktu">
                </a>
                <p><?= htmlspecialchars($row['opis']); ?></p>
                <p>Cena: <?= $row['cena']; ?> zł</p>

               
                <form method="POST" action="add_to_cart.php">
                    <input type="hidden" name="id" value="<?= $row['id']; ?>">
                    <input type="hidden" name="sklep" value="ubrania">
                    <input type="hidden" name="opis" value="<?= htmlspecialchars($row['opis']); ?>">
                    <input type="hidden" name="cena" value="<?= $row['cena']; ?>">
                    <button type="submit">🛒 Dodaj do koszyka</button>
                </form>

               
                <form method="POST" action="add_to_fav.php" style="margin-top:5px;">
                    <input type="hidden" name="id" value="<?= $row['id']; ?>">
                    <input type="hidden" name="sklep" value="ubrania">
                    <input type="hidden" name="opis" value="<?= htmlspecialchars($row['opis']); ?>">
                    <input type="hidden" name="cena" value="<?= $row['cena']; ?>">
                    <button type="submit">❤️ Ulubione</button>
                </form>
            </div>
        <?php endwhile; ?>
    </div>
</div>
</body>
</html>