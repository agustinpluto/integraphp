<?php

    require 'database.php';

    $message = '';

    if ((!empty($_POST['email'])) && (!empty($_POST['password']))) {
        $sql = "INSERT INTO users (email, password) VALUES (:email; :password)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT)
        $stmt->bindParam(':password', $password);

        if ($stmt->execute()) {
            $message = 'Usuario creado correctamente!'
        } else {
            $message = 'Ha ocurrido un error, intente nuevamente!'
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <header>
        <a href="/integra">Turnos Integra</a>
    </header>

    <?php if (!empty($message)): <p><?= $message ?></p> ?>
    <?php endif;?>

    <h2>
        Ingreso al Turnero On-Line
    </h2>
    
    <div class="barra">
        <div class="navitem">
            <a href="/integra">Inicio</a> 
        </div>
        <div class="navitem">
            <a href="registro.php">Registrarse</a>
        </div>
    </div>


    <div class="contenedor">
        <form action="login.php" method="post" class="formulario">
            <input type="text" name="email" placeholder="E-Mail">
            <input type="password" name="contraseña" placeholder="Contraseña">
            <input type="submit" value="Entrar"> 

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

