<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>VegBurg</title>
</head>

<body>
    <main>
        <h1>Restaurante VegBurg</h1>
        <h3>Pide la comida más sana a domicilio</h3>
        <form action="resultado.php" method="post">
            <div id="contenedor">
                <!-- Aquí se generará el contenido dinámicamente -->
                <div>
                    <img src="media/hamburguesa.png" alt="burger"><br>
                    <input type="number" min="0" name="cantidad" id="cantidad" value="0">
                </div>
                <div>
                    <img src="media/pasta.png" alt="pasta"><br>
                    <input type="number" min="0" name="cantidad2" id="cantidad2" value="0">
                </div>
                <div>
                    <img src="media/pizza.png" alt="pizza"><br>
                    <input type="number" min="0" name="cantidad3" id="cantidad3" value="0">
                </div>
                <div>
                    <img src="media/quinoa.png" alt="quinoa"><br>
                    <input type="number" min="0" name="cantidad4" id="cantidad4" value="0">
                </div>
                <div>
                    <img src="media/agua.png" alt="agua"><br>
                    <input type="number" min="0" name="cantidad5" id="cantidad5" value="0">
                </div>
                <div>
                    <img src="media/cerveza.png" alt="cerveza"><br>
                    <input type="number" min="0" name="cantidad6" id="cantidad6" value="0">
                </div>
                <div>
                    <img src="media/refresco.png" alt="refresco"><br>
                    <input type="number" min="0" name="cantidad7" id="cantidad6" value="0">
                </div>
            </div>
            <button type="submit" name="enviar">Enviar pedido</button>
        </form>
    </main>
</body>

</html>