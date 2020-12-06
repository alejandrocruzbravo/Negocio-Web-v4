<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="node_modules/bulma/css/bulma.min.css" rel="stylesheet">
    <link href="background.css" rel="stylesheet">
    <title>Spartan Gym - Tienda</title>
</head>
<body id="back">
    <?php require "partials/header.php"?>

    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="buttons are-medium">
      <a href="frm_compra.php"class="button is-primary">COMPRAR ALGÚN PRODUCTO</a>
    </div>
    <div class="columns">
        <div class="column">
        <div class="card">
  <div class="card-image">
    <figure class="image is-128x128">
      <img src="img/proteina1.jpg" alt="Proteina Hydrotein">
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">
        <figure class="image is-48x48">
        </figure>
      </div>
      <div class="media-content">
      <br>
        <p class="title is-4">PROTEINA HYDROTEIN - $500</p>
        <p class="subtitle is-6">Suplemento alimenticio</p>
      </div>
    </div>

    <div class="content">
    Proteína hidrolizada que no debe faltar en tu rutina físico. 
    Todos los suplementos necesarios.<br>
      <br>
    </div>
  </div>
</div>
        </div>
        <div class="column">
        <div class="card">
  <div class="card-image">
    <figure class="image is-128x128">
      <img src="img/proteina2.jpg" alt="Proteina Nitro tech">
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">
      </div>
      <div class="media-content">
        <p class="title is-4">PROTEINA NITRO TECH - $650</p>
        <p class="subtitle is-6">Suplemento alimenticio</p>
      </div>
    </div>

    <div class="content">
    Nitro-Tech contiene proteínas derivadas principalmente del aislado de proteína del suero, 
    una de las fuentes de proteínas más limpia y pura disponible para los atletas. <br>
      <br>
    </div>
  </div>
</div>
            
        </div>
        <div class="column">
        <div class="card">
  <div class="card-image">
    <figure class="image is-128x128">
      <img src="img/proteina3.jpg" alt="Proteina Carnivor">
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">
        <figure class="image is-48x48">
        </figure>
      </div>
      <div class="media-content">
        <p class="title is-4">PROTEINA CARNIVOR - $420</p>
        <p class="subtitle is-6">Suplemento alimenticio</p>
      </div>
    </div>

    <div class="content">
    Carnivor es la proteína que te ayudará a ganar masa muscular rápidamente. 
    Incluye proteína de carne como Carnivor para completar tu entrenamiento físico.<br>
      <br>
    </div>
  </div>
</div>
            
        </div>
        <div class="column">
        <div class="card">
  <div class="card-image">
    <figure class="image is-128x128">
      <img src="img/proteina4.jpg" alt="Proteina Whey pro">
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">
        <figure class="image is-48x48">
        </figure>
      </div>
      <div class="media-content">
        <p class="title is-4">PROTEINA WHEY PRO - $330</p>
        <p class="subtitle is-6">Suplemento alimenticio</p>
      </div>
    </div>

    <div class="content">
    whey protein es un producto natural de alta calidad nutritiva de fácil absorción por el cuerpo,
     baja en grasa y carbohidratos, obtenido de productos lacteos. <br>
      <br>
    </div>
  </div>
</div>
            
        </div>
    </div>  
    <?php require "partials/footer.php"?>
</body>
</html>