<?php
    session_start();

    if (!isset($_SESSION['usuario'])){
        echo'
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
  <title>Inicio</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
<img class="imagen1" src="imagenes/imagen1.png">

    <header>  
        <div class="usuarioo">
            <div class="header-usuario">
            <a href="bienvenido_usuario.php">
                <button class="botones-usuario" >Inicio</button>
            </a>
            <a href="generacion_tarjeta.php">
                <button class="botones-usuario">Generacion de tarjeta/busqueda vehiculo</button>
            </a>
            
            <a href="Notificaciones.php">
                <button class="botones-usuario">Notificaciones</button>
            </a>
            <a href="contacto.php">
                <button class="botones-usuario">Contacto</button>
            </a>
            <a href="php/cerrar_sesion.php">
                <button class="botones-usuario">Cerrar sesion</button>
            </a>
            </div>
        </div>
    </header>
            <style>
                .usuarioo{
                padding: 10px 90px;
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
                .jj{
                    padding: 0px 700px;

                }
            </style>
        <div class="title1"><h1>PARQUEADERO ULEAM</h1></div>
        </div>
    <div class="title2">
        <h1>Bienvenido al sistema de parqueadero de la ULEAM</h1>
    <section class="hero">
        <div class="container">
        <h3>Informacion de general del parqueadero</h3><br>
            <p>Esta es una web de un parqueadero de vehiculo Uleam</p>        </div>
    </section>
    
    <section class="services">
        <div class="container">
            <h2>Mensaje</h2>
            <div class="service">
                
                <p>Su propósito es proporcionar un lugar seguro y organizado donde los conductores puedan dejar sus vehículos por un período de tiempo determinado.</p>
            </div>
            
        </div>
    </section>
    </div>
    <script src="script.js"></script>
</body>
</html>
