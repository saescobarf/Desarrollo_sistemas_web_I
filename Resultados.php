<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Resultados de datos!</title>
    <script src="https://kit.fontawesome.com/a71707a89a.js" crossorigin= "anonymous"> </script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="dive2">
        <h1>¡Resultados!</h1>
        <div style="text-align: center;">
            <img src="img/bien_hecho_gohan.jpg" alt="inserte aqui una imagen de gohan*" style="width: 500px; height: auto;">
        </div>
    <h2>¡Bien Hecho!</h2>
    <center>
    <?php
        $Nombre = $_POST['Nombre'];
        $Edad = $_POST['Edad'];
        $Ciudad = $_POST['Ciudad'];
        $fechacumple = $_POST['fechacumple'];
        $Pasatiempo = $_POST['Pasatiempo'];
        
        echo '<p><b>Nombre:</b> '.$Nombre.'</p>';
        echo '<p><b>Edad:</b> '.$Edad.'</p>';
        echo '<p><b>Ciudad:</b> '.$Ciudad.'</p>';
        echo '<p><b>Cumpleaños:</b> '.$fechacumple.'</p>';
        echo '<p><b>Pasatiempo:</b> '.$Pasatiempo.'</p>';
    ?>
    
     <div id="popUpOverlay"></div>
        <div id="popUpBox">
            <div id="box">
                <i class="fas fa-question-circle fa-5x"></i>
                <h1>¿Volver a ingresar datos?</h1>
                <div id="closeModal"></div>
            </div>
        </div>
        <button onclick="Alert.render('You look very pretty today.')" class="btn">
        ¡Volver a Ingresar!
    </button>
    </center>
    <script src="js/app.js"></script>
    </div>

</body>
</html>

 