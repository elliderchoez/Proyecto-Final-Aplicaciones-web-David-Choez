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
  <title>Notificaciones</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<img class="imagen1" src="imagenes/imagen1.png">

<header>  
        <div class="usuarioo">
            <div class="header-usuario">
            <a href="bienvenido_usuario.php">
                <button class="botones-usuario" >Inicio</button>
            </a>
            <a href="Generacion_tarjeta.php">
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
            </style>
<body>
    <header>
        <div class="title1"><h1>PARQUEADERO ULEAM</h1>
        </div>
        <img class="imagen1" src="imagenes/imagen1.png">
    </header>  
    <section class="services">
        <div class="container">
            <h2>Notificaciones</h2>
            <div class="service">
                <p>Notificacion 1</p><br>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum et reiciendis quasi perspiciatis minus atque fugiat mollitia numquam autem enim voluptatibus in necessitatibus cum ipsam incidunt eaque harum, nisi eos.</p>
            </div>
            <div class="service">
                <p>Notificacion 2</p><br>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum et reiciendis quasi perspiciatis minus atque fugiat mollitia numquam autem enim voluptatibus in necessitatibus cum ipsam incidunt eaque harum, nisi eos.</p>
            </div>
        </div>
    </section>
</body>
</html>
