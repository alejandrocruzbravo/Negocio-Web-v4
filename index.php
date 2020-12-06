<?php
    session_start();
    require "vendor/autoload.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="node_modules/bulma/css/bulma.min.css" rel="stylesheet">
    <link href="background.css" rel="stylesheet">
    <title>Spartan Gym - Inicio</title>
</head>
<body id="back">
    <?php require "partials/header.php"?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section>
        <div class="columns is-mobile">
            <div class="column">
                <h1 class="title is-1 has-text-white">¡SE PARTE DE NUESTRA FAMILIA!</h1> 
                <p class="subtitle has-text-grey-light">Spartan Gym se enorgullece de ofrecer clases de fitness divertidas y duras. Especializado en fuerza y acondicionamiento, entrenamiento espartano y carrera de obstáculos, y bootcamps para empoderar a otros para alcanzar sus metas de fitness. Ofrecemos membresías de gimnasio, entrenamiento personal y clases de fitness en grupo especializadas. Cuando te registras con nosotros, tu no te unes a un gimnasio, ¡te unes a una familia!</p>
                <img src="img/section1.svg" width="300px" height="300px">
            </div>

            <div class="column">
            <div class="notification is-danger">
                <p class="subtitle is-2">
                    “Es un proceso lento pero nunca te detengas”
                </p>
                <p class="subtitle">En SPARTAN GYM estamos especializados en Rutinas de Gimnasio y en técnicas de musculación tanto para principiantes que se acaban de apuntar al gimnasio como para los más avanzados. Las rutinas de gimnasio no solo se pueden realizar en un centro de Fitness, también puedes realizarlas en tu casa, por eso tenemos además una completa selección de rutinas de pesas para hacer en casa.</p>
                
                <img src="img/section2.svg" width="300px" height="300px">
            </div>
    </section>
    <br>
    <br>
    <br>
    <section>
        <h1 class="title is-1 has-text-white">ELECTROESTIMULACIÓN Y FISIOTERAPIAS!</h1>
        <div class="block">
            <p class="subtitle has-text-grey-light">La EEM ayuda a la recuperación de lesiones, así como un incremento de la masa muscular</p>            
            <p class="subtitle has-text-grey-light">La electroestimulación muscular (EEM) o estimulación neuromuscular eléctrica (ENE) o electroestimulación, es la forma de ejercitar usando impulsos eléctricos. Los impulsos se generan en un dispositivo que se aplica con electrodos en la piel próxima a los músculos que se pretenden estimular. Los impulsos imitan el potencial de acción proveniente del sistema nervioso central, causando la contracción muscular. Los electrodos generalmente se adhieren a la piel. La EEM es una forma de electroterapia o de entrenamiento muscular. Diversos autores la citan como una técnica complementaria para el entrenamiento deportivo, existiendo numerosos estudios publicados al respecto. Para determinar cuántas sesiones necesito. Primero se debe determinar qué propósito o necesidades posee el paciente o usuario. De allí partirá la idea central de un cronograma de sesiones Los número de sesiones partirá de acuerdo a la duración de las misma. Si te aplicas sesiones de gran duración. La repetición de la misma es más prolongada. Para así no sobrecargar el músculo en el cual se está trabajando.</p>
            <img align="center" src="img/section3.svg" width="300px" height="300px">
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <?php require "partials/footer.php"?>
</body>
</html>