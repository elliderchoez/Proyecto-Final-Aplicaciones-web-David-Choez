<?php
session_start();
include 'php/conexion.php';

if (!isset($_SESSION['usuario'])) {
    echo '
            <script>
                alert("Por favor iniciar sesión");
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
                <a href="bienvenido_usuario.php">
                    <button class="botones-usuario">Inicio</button>
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
        .usuarioo {
            padding: 10px 90px;
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
            color: black;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .botones-usuario:hover {
            background-color: #FEBAAD;
        }
        .busqueda_tarjeta {
            padding: 10px 500px;
        }
        .text_center {
            padding: 10px 70px;
            font-size: 27px;
            font-weight: bold;
        }
        .contenedor_busqueda {
            max-width: 300px;
            margin: 25px auto;
            padding: 10px;
            text-align: center;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px #fff(0, 0, 0, 10.1);
            background-color: rgba(255, 255, 255, 0.7);
        }
    </style>

    <form action="" method="get" class="busqueda_tarjeta">
        <label class="text_center">Busqueda vehiculo por placa</label>
        <input type="text" name="busqueda"><br>
        <input type="submit" name="enviar" value="Buscar"><br>
    </form>

    <div class="contenedor_busqueda">
        <?php
        if (isset($_GET['enviar'])) {
            $busqueda = $_GET['busqueda'];
            $consulta1 = $conexion->query("SELECT * FROM vehiculos WHERE numero_placa LIKE '%$busqueda%'");

            while ($row = $consulta1->fetch_assoc()) {
                echo "Numero de placa: ".$row['numero_placa'] . '<br><br>' .
                     "Nombre del propietario: ".$row['nombre_propietario'] . '<br><br>' .
                     "Cedula del propietario: ".$row['cedula_propietario'] . '<br><br>' .
                     "Modelo del vehiculo: ".$row['modelo_vehiculo'] . '<br><br>' .
                     "Color de vehiculo: ".$row['color_vehiculo'] . '<br><br>' .
                     "Telefono: ".$row['telefono'];
            }
        }
        ?>
    </div>

    <div class="container">
        <h1>Registro de Vehículo</h1>
        <form action="php/registro_tarjeta.php" method="POST" id="vehicleForm" onsubmit="return validateForm()">
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
