<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universo Onírico - Usuario</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
 <main class="container">
	<div class="contact-form">
        <h2>Registrate en el sitio</h2>
        <form action="registro.php" method="post" class="login-form">
        <div class="form-group">
                        <label>Nombre
                            <input type="text" name="nombre" required />
                        </label><br />
                    </div>
                    <div class="form-group">
                        <label>Apellido
                            <input type="text" name="apellido" required />
                        </label><br />
                    </div>
                    <div class="form-group">
                        <label>Email
                            <input type="email" name="email" required />
                        </label><br />
                    </div>
                    <div class="form-group">
                        <label>Nombre de usuario
                            <input name="usuario" type="text" maxlength="12" />
                        </label><br />
                    </div>
                    <div class="form-group">
                        <label>Contraseña
                            <input type="password" name="password" maxlength="12" />
                        </label><br />
                    </div>
                    <div class="form-group">
                    </div>
                    <input class="btn" type="submit" value="Registrarse"/>	
                </form>
            </div>
     </main>

    <script src="js/main.js"></script>
</body>
</html>