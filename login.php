<?php
    session_start();
    if(!isset($_SESSION['mensaje'])){
        $_SESSION['mensaje'] = '';
    }

    /*unset($_SESSION['user_id']);
    unset($_SESSION['rol']);*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="node_modules/bulma/css/bulma.min.css" rel="stylesheet">
    <link href="background.css" rel="stylesheet">
    <title>Spartan Gym - Login</title>
</head>
<body id="back">
    <?php require "partials/header.php"?>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="columns is-mobile ">
            <div class="column is-three-fifths is-offset-one-fifth">
                <div class="container">
                    <div class="notification is-light">

                        <form action="database/db_login.php" method="post" class="form">
                            <h2 class="title is-2" align="center">INICIO DE SESIÓN</h2>
                            <div class="form-group">
                            <h3><?php echo $_SESSION['mensaje']; ?></h3>
                                <label>CORREO ELECTRONICO</label>
                                <div class="field">
                                    <div class="control">
                                        <input name="email" class="input is-primary" type="text" placeholder="example@mail.com">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="field">
                                <label>CONTRASEÑA</label>
                                <div class="control">
                                    <input name="password" class="input is-primary" type="password" placeholder="Contraseña">
                                </div>
                            </div>
                            <br>
                            <div class="buttons">
                                <input type="submit" class="button is-primary" value="Acceder">
                                <a href="signup.php" class="button is-link">Registrarse</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
    <?php require "partials/footer.php"?>
</body>
</html>