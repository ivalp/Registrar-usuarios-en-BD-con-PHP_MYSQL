<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    	<title>Registrar usuario</title>
    	<link rel="stylesheet" type="text/css" href="estilo.css" />
    </head>

    <body>
        <form method="post">
        	<h1>¡Regístrate!</h1>
        	<input type="text" name="name" placeholder="Nombre" />
        	<input type="email" name="email" placeholder="Email" />
        	<input type="submit" name="register" value="ENVIAR" />
        </form>

        <?php
            include("registrar.php");
        ?>
    </body>
</html>