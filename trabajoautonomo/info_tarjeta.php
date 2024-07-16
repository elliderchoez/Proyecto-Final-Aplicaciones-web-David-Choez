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
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion de tarjeta</title>
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
        .usuarioo {
            padding: 10px 200px;
        }

        .header-usuario {

            padding: 10px 100px;
        }

        .header-usuario button {
            margin-left: 10px;
            padding: 10px 30px;
        }

        .botones-usuario {
            padding: 10px 20px;
            background-color: b7e4c7;
            /* Color de fondo de los botones */
            color: black;
            /* Color del texto de los botones */
            border: none;
            border-radius: 25px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .botones-usuario:hover {
            background-color: #FEBAAD;
            /* Color al pasar el mouse sobre los botones */
        }

        .busqueda_tarjeta {
            padding: 10px 500px;

        }

        .text_center {
            padding: 10px 70px;
            font-size: 27px;
            /* Tamaño grande */
            font-weight: bold;
            /* Negrita */


        }

        .contenedor_busqueda {
            max-width: 300px;
            margin: 25px auto;
            padding:10px;
            text-align: center;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px #fff(0, 0, 0, 10.1);
            background-color: rgba(255, 255, 255, 0.7);
            /* Color blanco con opacidad del 50% */


        }
    </style>

    <form action="" method="get" class="busqueda_tarjeta">
        <label class="text_center">Tarjetas por placa</label>
        <input type="text" name="busqueda"><br>
        <input type="submit" name="enviar" value="Buscar tarjeta por placa"><br>
        <input type="submit" name="enviar" value="Todas las tarjeta "><br>


    </form>

    <div class="contenedor_busqueda">
        <?php
        if (isset($_GET['enviar'])) {
            $busqueda = $_GET['busqueda'];
            $consulta1 = $conexion->query("SELECT * FROM vehiculos WHERE numero_placa LIKE '%$busqueda%'");


            while ($row = $consulta1->fetch_assoc()) {
                echo '<br>'.'<br>'."Numero de placa:  ".$row['numero_placa'] . '<br>'.'<br>'."Nombre del propietario:  " 
                .$row['nombre_propietario'] .'<br>'.'<br>'."Cedula del propietario:  ".$row['cedula_propietario'] .
                '<br>'.'<br>'."Modelo del vehiculo:  ".$row['modelo_vehiculo'].'<br>'.'<br>'."Color de vehiculo:  "
                .$row['color_vehiculo'].'<br>'.'<br>'."Telefono:  ". $row['telefono'].'<br>'.'<br>';

                
            }


        }
        ?>
    </div>


    
    <script src="scripts.js"></script>
</body>

</html>