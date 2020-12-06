<?php 
    if(!isset($_SESSION['rol'])){
        $_SESSION['rol'] = 0;
    }
?>
<nav class="navbar is-fixed-top is-light">
    <a href="index.php"> 
        <img src="img/logogym.png">
    </a>

    <div class="navbar-menu">
        <a href="index.php" class="navbar-item">
            Principal
        </a>
        <a href="shop.php" class="navbar-item">
            Productos
        </a>
        <a href="#footer" class="navbar-item">
            Contactanos
        </a>
        <?php if(isset($_SESSION['rol'])){
                    if($_SESSION['rol'] == 1){?>
                        <a href="panel.php" class="navbar-item">
                            Panel
                        </a>
                    <?php } ?>
        <?php } ?>
                
    </div>
    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a href="login.php" class="button is-primary">
          <strong> Iniciar sesión</strong>
          </a>
          <a href="signup.php" class="button is-success">
           <strong> Registrarse</strong>
          </a>
          <form action="database/logout.php" method="post">
            <?php if(isset($_SESSION['email'])){ ?>
            <?php $name_user = $_SESSION['email']?>
            <input type="submit" value="Cerrar sesión [<?= $name_user?>]" class="button is-warning">
            <?php } ?>
        </form>

        </div>
      </div>
</nav>