var Alert = new CustomAlert();

function CustomAlert() {
    this.render = function() {
        // Muestra el modal
        let popUpBox = document.getElementById('popUpBox');
        popUpBox.style.display = "block";

        // Botón que redirige a index.php
        document.getElementById('closeModal').innerHTML = 
    '<button type="button" onclick="location.href=\'index.php\'">¡Sí quiero!</button>';

    }

    this.ok = function() {
        // Oculta el modal
        document.getElementById('popUpBox').style.display = "none";
        document.getElementById('popUpOverlay').style.display = "none";
    }
}

