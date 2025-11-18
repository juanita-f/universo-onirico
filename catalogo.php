<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universo Onírico - Actualidad</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <header class="header">
        <div class="header-top">
            <a href="index.html"><h1 class="logo">Universo Onírico</h1></a>
           <div class="search-container">
                <form action="resultados_buscar.php" method="post" class="search-form">
                    <input type="search" name="buscar" placeholder="Buscar..." class="search-input"/>
                    <button type="submit" class="search-button">
                        <i class="material-icons">search</i>
                    </button>
                </form>
                <a href="salir.php" class="user-icon">
                    <span class="material-symbols-outlined">
                        logout
                    </span>
                </a>
            </div>
        </div>
        <nav class="navigation">
            <ul>
                <li><a href="historia.html">Historia</a></li>
                <li><a href="artistas.html">Artistas</a></li>
                <li><a href="obras.html">Obras</a></li>
                <li><a href="influencia.html">Influencia</a></li>
                <li><a href="actualidad.html">Actualidad</a></li>
                <li><a href="contacto.html">Contacto</a></li>
                 <li><a href="catalogo.php"id="indicador">Catálogo</a></li>
            </ul>
        </nav>
    </header>
    <main class="container">
<?php

if(isset($_SESSION['nombre']) and isset($_SESSION['apellido']) ){
	
echo "Hola! ";
echo $_SESSION['nombre']." ";
echo $_SESSION['apellido'];
}

?>
        <h2 class="section-title">Inventario de Objetos que Sueñan</h2>
        <div class="catalogo-container">
            <!-- Producto 1 -->
            <div class="producto-card">
                <img src="img/jarron_labios.jpg" alt="Producto jarron labios rojos">
                <h3>Jarron Labios Rojo</h3>
                <a href="https://www.hi-werns.com/es/Jarron-Labios-Lips-rojo/55997" class="comprar-btn">Comprar</a>
            </div>
            <!-- Producto 2 -->
            <div class="producto-card">
                <img src="img/sillon_labios.jpg" alt="Sillón Labios">
                <h3>Sofa Bocca</h3>
                <a href="https://luminaire.com/es/products/bocca-sofa-studio-65?variant=45029328224488" class="comprar-btn">Comprar</a>
            </div>
            <!-- Producto 3 -->
            <div class="producto-card">
                <img src="img/lampara_caballo.jpg" alt="Lampara de caballo">
                <h3>Horse Lamp</h3>
                <a href="https://aplusrstore.com/products/moooi-horse-lamp" class="comprar-btn">Comprar</a>
            </div>
            <!-- Producto 4 -->
            <div class="producto-card">
                <img src="img/mono.jpg" alt="Reloj Mono">
                <h3>Haas One Minute Timer</h3>
                <a href="https://www.l-objet.com/products/haas-one-minute-timer" class="comprar-btn">Comprar</a>
            </div>
            <!-- Producto 5 -->
            <div class="producto-card">
                <img src="img/mermaid.jpg" alt="Jarron sirena">
                <h3>Mermaid Jar</h3>
                <a href="https://www.seletti.it/products/mermaid-jar" class="comprar-btn">Comprar</a>
            </div>
            <!-- Producto 6 -->
            <div class="producto-card">
                <img src="img/lito-candle.jpg" alt="Vela ojo">
                <h3>Lito Candle Gold</h3>
                <a href="https://www.l-objet.com/products/lito-candle-gold?utm_source=Gorgias&utm_medium=ChatCampaign&utm_campaign=US%20-%20Decor%20-%20Desktop" class="comprar-btn">Comprar</a>
            </div>
            <!-- Producto 7 -->
            <div class="producto-card">
                <img src="img/anillo.jpg" alt="Anillo personas">
                <h3>Danca Ring</h3>
                <a href="https://www.paolavilas.com/products/danca-ring" class="comprar-btn">Comprar</a>
            </div>
            <!-- Producto 8 -->
            <div class="producto-card">
                <img src="img/mesa.jpg" alt="Mesa patas de tero">
                <h3>Mesa Traccia Meret Oppenheim</h3>
                <a href="https://www.morgadoestudio.com/product-page/mesa-traccia-meret-oppenheim" class="comprar-btn">Comprar</a>
            </div>
            <!-- Producto 9 -->
            <div class="producto-card">
                <img src="img/plato_sapo.jpg" alt="Plato sapo">
                <h3>Enamel Plate Toad</h3>
                <a href="https://www.seletti.it/products/enamel-plate-toad" class="comprar-btn">Comprar</a>
            </div>
            <!-- Producto 10 -->
            <div class="producto-card">
                <img src="img/platos.jpg" alt="Platos">
                <h3>Ming Servizio di Piatti</h3>
                <a href="https://shop.mohd.it/en/ming-servizio-di-piatti.html?country=AR&currency=USD" class="comprar-btn">Comprar</a>
            </div>
            <!-- Producto 11 -->
            <div class="producto-card">
                <img src="img/Nacho-Carbonell.jpg" alt="Producto 11">
                <h3>Study N.24</h3>
                <a href="https://www.rossanaorlandi.com/collections/study-n-24/" class="comprar-btn">Comprar</a>
            </div>
            <!-- Producto 12 -->
            <div class="producto-card">
                <img src="img/sal-pimentero.jpg" alt="Sal pimentero">
                <h3>Sal Pimentero</h3>
                <a href="https://www.lacomercial.info/es/vajillas/sal-pimentero-salty-y-peppery#/253-talla-tu/257-color-1" class="comprar-btn">Comprar</a>
            </div>
        </div>
    </main>
     <footer class="footer">
        <p class="quote">"La diferencia entre un loco y yo es que yo no estoy loco." - Dalí</p>
        <div class="contact-info">
            <img src="img/sobre.svg" alt="Contacto">
            <p>universo.onirico@gmail.com</p>
        </div>
    </footer>

    <script src="js/main.js"></script>
</body>
</html>