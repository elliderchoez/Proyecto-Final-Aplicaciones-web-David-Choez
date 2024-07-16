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
    <title>Generacion tarjeta/busqueda vehiculo</title>
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
    
    <div class="container">
        <h1>Registro de Vehículo</h1>
        <form action="php/ad_generar_tarjeta.php" method="POST" id="vehicleForm" onsubmit="return validateForm()"  >
            <label>Número de Placa:</label>
            <input type="text" name="numero_placa" id="numero_placa" required>

            <label>Nombre del Propietario:</label>
            <input type="text" name="nombre_propietario" id="nombre_propietario" required>

            <label>Cédula del Propietario:</label>
            <input type="text" name="cedula_propietario" id="cedula_propietario" required>

            <label>Modelo del Vehículo:</label>
            <input type="text" name="modelo_vehiculo" id="modelo_vehiculo" required>

            <label>Color del Vehículo:</label>
            <input type="text" name="color_vehiculo" id="color_vehiculo" required>

            <label>Telefono:</label>
            <input type="text" name="telefono" id="telefono" required>

            <div class="button">
                <button>Registrar Vehículo</button>
            </div>
        </form>
    </div>
    <script>
        function validateForm() {
            let numeroPlaca = document.getElementById('numero_placa').value;
            let nombrePropietario = document.getElementById('nombre_propietario').value;
            let cedulaPropietario = document.getElementById('cedula_propietario').value;
            let modeloVehiculo = document.getElementById('modelo_vehiculo').value;
            let colorVehiculo = document.getElementById('color_vehiculo').value;
            let telefono = document.getElementById('telefono').value;

            if (!numeroPlaca.match(/^[A-Z0-9-]{6,10}$/)) {
                alert("El número de placa debe tener entre 6 y 8 caracteres alfanuméricos.");
                return false;
            }
            if (!nombrePropietario.match(/^[a-zA-Z\s]+$/)) {
                alert("El nombre del propietario solo debe contener letras y espacios.");
                return false;
            }
            if (!cedulaPropietario.match(/^\d{10}$/)) {
                alert("La cédula del propietario debe contener 10 dígitos numéricos.");
                return false;
            }
            if (!modeloVehiculo.match(/^[a-zA-Z0-9\s]+$/)) {
                alert("El modelo del vehículo solo debe contener letras, números y espacios.");
                return false;
            }
            if (!colorVehiculo.match(/^[a-zA-Z\s]+$/)) {
                alert("El color del vehículo solo debe contener letras y espacios.");
                return false;
            }
            if (!telefono.match(/^\d{10}$/)) {
                alert("El teléfono debe contener 10 dígitos numéricos.");
                return false;
            }
            return true;
        }
    </script>
</body>


</html>