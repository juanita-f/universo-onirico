<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universo Onírico - Artistas Surrealistas</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&family=Nunito:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="header-top">
            <a href="index.html"><h1 class="logo">Universo Onírico</h1></a>
           <div class="search-container">
                <form action="resultados_buscar.php" method="post">
              <div class="search-bar">
                    <input type="search" name="buscar" placeholder="Buscar..." />
                </div>
              </form>
            </div>
        </div>
        <nav class="navigation"> 
            <ul>
                <li><a href="historia.html">Historia</a></li>
                <li><a href="artistas.html" class="active">Artistas</a></li>
                <li><a href="obras.html">Obras</a></li>
                <li><a href="influencia.html">Influencia</a></li>
                <li><a href="actualidad.html">Actualidad</a></li>
                <li><a href="contacto.html">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <main class="container">
    
       <?php
	include('conexion.php');

	$buscar = $_POST['buscar'];
	echo "Su consulta: <em>".$buscar."</em><br>";

	$consulta = mysqli_query($conexion, "SELECT * FROM artistas WHERE nombre LIKE '%$buscar%'");
?>
	<p>Cantidad de Resultados: 
	<?php
		$nros=mysqli_num_rows($consulta);
		echo $nros;
	?>
	</p>
     
	<?php
		while($resultados=mysqli_fetch_assoc($consulta)) {
	?>
    <p>
    <?php	
			echo "<h2>".$resultados['nombre']."</h2><br>";
            echo $resultados['bio'];
	?>
    </p>
    <hr/>
    <?php
		}

		mysqli_free_result($consulta);
		mysqli_close($conexion);

	?>

        <section class="behind-the-scenes">
            <h2>Entre Bastidores</h2>
            <div class="grid-container">
                <div class="grid-item">
                    <img src="img/breton3.jpg" alt="André Breton">
                    <div class="overlay"><span>André Breton</span></div>
                </div>
                <div class="grid-item">
                    <img src="img/dali2.jpg" alt="Salvador Dalí">
                    <div class="overlay"><span>Salvador Dalí</span></div>
                </div>
                <div class="grid-item">
                    <img src="img/gaudi2.jpg" alt="Antoni Gaudí">
                    <div class="overlay"><span>Antoni Gaudí</span></div>
                </div>
                <div class="grid-item">
                    <img src="img/rene_magritte2.jpg" alt="René Magritte">
                    <div class="overlay"><span>René Magritte</span></div>
                </div>
                <div class="grid-item">
                    <img src="img/joan_miro2.jpg" alt="Joan Miró">
                    <div class="overlay"><span>Joan Miró</span></div>
                </div>
                <div class="grid-item">
                    <img src="img/luis_buñuel2.jpg" alt="Luis Buñuel">
                    <div class="overlay"><span>Luis Buñuel</span></div>
                </div>
            </div>
        </section>
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