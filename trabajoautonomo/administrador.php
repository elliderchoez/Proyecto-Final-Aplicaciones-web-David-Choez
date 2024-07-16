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
  <title>Inicio adminitrador</title>
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
            </style>
        <div class="title1"><h1>PARQUEADERO ULEAM</h1></div>
        <div class="title1"><h5>Bienvenido adminitrador</h5>
        </div>
    <div class="title2">
        <h1>Bienvenido al sistema de parqueadero de la ULEAM</h1>
    <section class="hero">
        <div class="container">
        <h3>Informacion de general del parqueadero</h3><br>
            <p>Esta es una web de un parqueadero de vehiculo Uleam</p>        </div>
    </section>
            
    </div>
    
    <script src="script.js"></script>
</body>
</html>
