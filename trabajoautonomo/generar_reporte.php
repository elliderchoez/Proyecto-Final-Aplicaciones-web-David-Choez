<?php
session_start();
include 'php/conexion.php';

if (!isset($_SESSION['usuario'])) {
    echo '
            <script>
                alert("Porfavor iniciar sesion");
                window.location = "inicio-sesion.php";
            </script>
        ';
    session_destroy();
    die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reporte</title>
  <link rel="stylesheet" href="estilos.css">
  
</head>
<body>
<img class="imagen1" src="imagenes/imagen1.png">

<header>  
        <div class="usuarioo">
            <div class="header-usuario">
            <a href="administrador.php">
                <button class="botones-usuario" >Inicio</button>
            </a>
            <a href="ad_generacion_tarjeta.php">
                <button class="botones-usuario">Generar tarjeta</button>
            </a>             
            <a href="info_tarjeta.php">
                <button class="botones-usuario">Informacion de tarjetas</button>
            </a>
            <a href="generar_reporte.php">
                <button class="botones-usuario">Generar reporte</button>
            </a>
           
            <a href="php/cerrar_sesion.php">
                <button class="botones-usuario">Cerrar sesion</button>
            </a>
            </div>
        </div>
    </header>
            <style>
                .usuarioo{
                padding: 10px 200px;
                }
                .header-usuario{
                
                padding: 10px 100px;
                }
                .header-usuario button {   
                margin-left: 10px;
                padding: 10px 30px;
                }
                .botones-usuario{
                padding: 10px 20px;
                background-color: b7e4c7; /* Color de fondo de los botones */
                color: black; /* Color del texto de los botones */
                border: none;
                border-radius: 25px;
                cursor: pointer;
                transition: background-color 0.3s;
                }
                .botones-usuario:hover {
                background-color: #FEBAAD; /* Color al pasar el mouse sobre los botones */
                }
                .container_reporte{
                    width: 97%;
                    padding: 10px;
                    margin-bottom: 15px;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                }
            </style>


  <div class="container">
    <h1>Generar Reporte</h1>
    <form action="php/generacion_reporte.php" method="POST" class="formarlurario_register" onsubmit="return validateForm()">
      <input type="text" name="nombre" placeholder="Nombre" required>
      <input type="correo" name="correo" placeholder="Correo" >
      <textarea class="container_reporte" name="descripcion" required></textarea>
      <div class="button">
      <button>Generar reporte</button>
      </div>

    </form>
   
    <script>
    function validateForm() {
    var nombre = document.getElementById("nombre").value;
    var correo = document.getElementById("correo").value;
    var descripcion = document.getElementById("descripcion").value;

    if (nombre == "" || correo == "" || descripcion == "") {
        alert("Todos los campos son obligatorios");
        return false;
    }

    // Validación de email básica
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(correo)) {
        alert("Por favor, ingrese un correo electrónico válido");
        return false;
    }
    return true;
}
    </script>
</body>
</html>
