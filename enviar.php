<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Universo Onírico</title>
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
                <a href="usuario.html" class="user-icon">
                    <span class="material-symbols-outlined">
                        account_circle
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
                <li><a href="contacto.html"id="indicador">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <main class="container">
    
<?php

//se arma el array POST
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$comentario=$_POST["comentario"];

$destino="mail@mail.com";
$asunto="Contacto desde el sitio";
$mensaje="Nombre: ".$nombre." Email: ".$email." Mensaje: ".$comentario;

$header="From: ".$nombre."<".$email.">";

@$enviado = mail($destino,$asunto,$mensaje,$header);

if($enviado == true){
    echo "Su correo ha sido enviado.";
}else{
    echo "Hubo un error en el envio del mail.";
}

include ("conexion.php") ;

$consulta = mysqli_query($conexion, "INSERT INTO contactos (nombre,email,comentario)VALUES ( '$nombre','$email','$comentario')") or die(mysqli_error($conexion));

?>
    <section class="contact-images">
            <div class="img-container rectangular-img">
                <img src="img/el_gran_masturbador.jpg" alt="El gran masturbador">
            </div>
            <div class="img-container square-img">
                <img src="img/casa_batlo.jpg" alt="Dalí">
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