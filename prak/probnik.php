<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stele.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Sklep Online</title>
    
</head>
<body>





<header>
    <div style="display: flex; justify-content: space-between; align-items: center;">
        
            <div style="position: fixed;top:0; left: 0; width: 100%; overflow: hidden; white-space: nowrap; background-color: black; color: aliceblue; ">
                <div style="display: inline-block; padding-left: 100%; animation: marquee 30s linear infinite; margin: 5px;">
                 <span style="margin-right: 100px">Już otwarte !</span>
                 <span style="margin-right: 100px">Już otwarte !</span>
                 <span style="margin-right: 100px">Już otwarte !</span>
                 <span style="margin-right: 100px">Już otwarte !</span>
                </div>
              </div>
              </div>
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

<div class="container">
    

<h1>Japonski styl</h1>

    <div class="image" style="display: flex;">
        <img src="999.jpg"></src>
    </div>
    <h2>Nowe!</h2>
    <div class="products">
        <div class="product">
            <img src="11.webp" alt="Produkt 1">
            <p>Produkt 1</p>
            <p>Cena: 99 zł</p>
            <button>Kup</button>
        </div>
        <div class="product">
            <img src="22.webp" alt="Produkt 2">
            <p>Produkt 2</p>
            <p>Cena: 149 zł</p>
            <button>Kup</button>
        </div>
        <div class="product">
            <img src="33.webp" alt="Produkt 3">
            <p>Produkt 3</p>
            <p>Cena: 199 zł</p>
            <button>Kup</button>
        </div>
        <div class="product">
            <img src="44.webp" alt="Produkt 4">
            <p>Produkt 4</p>
            <p>Cena: 99 zł</p>
            <button>Kup</button>
        </div>
        
    </div>
    <div class="image" style="display: flex; width: 300px; height: 450px;">
        <img src="888.jpg"></src>
    </div>
    <div class="products">
        <div class="product">
            <img src="55.webp" alt="Produkt 1">
            <p>Produkt 1</p>
            <p>Cena: 99 zł</p>
            <button>Kup</button>
        </div>
        <div class="product">
            <img src="66.webp" alt="Produkt 2">
            <p>Produkt 2</p>
            <p>Cena: 149 zł</p>
            <button>Kup</button>
        </div>
        <div class="product">
            <img src="77.jpg" alt="Produkt 3">
            <p>Produkt 3</p>
            <p>Cena: 199 zł</p>
            <button>Kup</button>
        </div>
        <div class="product">
            <img src="88.webp" alt="Produkt 4">
            <p>Produkt 4</p>
            <p>Cena: 99 zł</p>
            <button>Kup</button>
        </div>
        
    </div>
</div>

<footer>
    &copy; 2025 Sklep Online. Wszelkie prawa zastrzeżone.
</footer>
<script>
    const toggleBtn = document.getElementById('catalogToggle');
    const catalog = document.getElementById('catalog');
  
    toggleBtn.addEventListener('click', () => {
      catalog.classList.toggle('hidden');
    });
  </script>
</body>
</html>