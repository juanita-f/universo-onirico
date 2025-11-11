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
                <li><a href="contacto.html">Contacto</a></li>
            </ul>
        </nav>
    </header>

<body>
	<main class="container">
	<h2>Logueate</h2>
	<form action="login.php" method="post" class="contact-section contact-form">
    	<label class="form-group">Nombre de usuario
        	<input name="usuario" type="text" maxlength="12" />
        </label><br />
        <label class="form-group">Contraseña
        	<input type="password" name="password" maxlength="12" />
        </label><br />
        	<input class="btn" type="submit" value="Login"/>	
    </form>
    <a href="form_registro.php">Registrate</a> si no sos usuario.
    </main>

</body>
</html>