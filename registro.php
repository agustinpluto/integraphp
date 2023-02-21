<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <header>
        <a href="/integra">Turnos Integra</a>
    </header>

    <h2>
        Complete el formulario con todos los datos solicitados
    </h2>
    
    <div class="barra">
        <div class="navitem">
            <a href="/integra">Inicio</a> 
        </div>
        <div class="navitem">
            <a href="login.php">Iniciar sesión</a> 
        </div>
    </div>

    <div class="contenedor">
        <form action="registro.php" method="post" class="formulario">
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="apellido" placeholder="Apellido">
            <input type="text" name="email" placeholder="E-Mail">
            <input type="text" name="dom" placeholder="DNI/Matricula">
            <input type="password" name="contraseña" placeholder="Contraseña">
            <input type="password" name="validacionContraseña" placeholder="Confirme su contraseña">
            <input type="submit" value="Registrarse"> 

        </form>
    </div>

    <footer>
        <a class="diseño">Designed by Agustin Pluto - 2023</a>
        <div class="redes-sociales">
          <ul>
            <a><a href="#"><i class="fab fa-facebook">Facebook</i></a></a>
            <a><a href="#"><i class="fab fa-instagram">Instagram</i></a></a>
            <a><a href="#"><i class="fab fa-whatsapp">WhatsApp</i></a></a>
          </ul>
        </div>
    </footer>

</body>
</html>