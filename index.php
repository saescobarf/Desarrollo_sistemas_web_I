<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captura de datos</title>
    <script src="https://kit.fontawesome.com/a71707a89a.js" crossorigin= "anonymous"> </script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="dive">
        <h1>Captura de datos personales</h1>
        <br>
        <h2>Ingresa los datos que se te piden</h2>
        <br>
        <center>
            <p>Mi primera encuesta</p>
        </center>
        <hr>
        <form action="Resultados.php" method="POST">
            <center>
            <label for="Nombre">Nombre:</label>
            <input type="text" id="Nombre" name ="Nombre" placeholder="Ingresa tu nombre"><hr>
            <label for="Edad">Edad:</label>
            <input type="number" id="Edad" name ="Edad" placeholder ="Ingresa tu edad"><hr>
            <label for="Ciudad">Ciudad donde vives:</label>
            <input type="text" id="Ciudad" name ="Ciudad" placeholder ="Ingresa tu ciudad"><hr>
            <label for="fechacumple">Fecha de nacimiento:</label>
            <input type="Date" id="fechacumple" name ="fechacumple"><hr>
            <label for="Pasatiempo">Pasatiempo favorito:</label>
            <input type="text" id="Pasatiempo" name ="Pasatiempo" placeholder ="Ingresa tu pasatiempo fav"><hr>
            <br>
            <button type="submit">
            ¡Ingresamos datos!
            </button>
            </center>
        </form>
    </div>
    

</body>
</html>