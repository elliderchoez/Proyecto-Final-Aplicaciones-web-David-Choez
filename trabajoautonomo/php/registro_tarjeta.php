<?php
    session_start();
    include 'conexion.php';


    $numero_placa = $_POST['numero_placa'];
    $nombre_propietario = $_POST['nombre_propietario'];
    $cedula_propietario = $_POST['cedula_propietario'];
    $modelo_vehiculo = $_POST['modelo_vehiculo'];
    $color_vehiculo = $_POST['color_vehiculo'];
    $telefono = $_POST['telefono'];
    

    $query1 = "INSERT INTO vehiculos(numero_placa, nombre_propietario, cedula_propietario, modelo_vehiculo,
                color_vehiculo,telefono)     
                VALUES('$numero_placa','$nombre_propietario','$cedula_propietario','$modelo_vehiculo',
                '$color_vehiculo','$telefono')";

    //Verficar que la placa no se repita en la base de datos
    $verificar_placa = mysqli_query($conexion, "SELECT * FROM vehiculos WHERE numero_placa='$numero_placa'");
    if(mysqli_num_rows($verificar_placa)> 0){
        echo '
            <script>
                alert("Placa ya registrada, intente otra vez");
                window.location = "../generacion_tarjeta.php";
            </script>
        ';
        exit();
    }

    
    $ejecutar1 = mysqli_query($conexion, $query1);

    if($ejecutar1){
        echo '
            <script>
                alert("Generacion de tarjeta exitosa, vehiculo registrado, porfavor verifique datos en el buscador con numero de placa ");
                window.location = "../generacion_tarjeta.php";
            </script>
        ';
    }
    mysqli_close($conexion);

?>