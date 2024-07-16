<?php

    include 'conexion.php';


    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $descripcion = $_POST['descripcion'];
   
    $query2 = "INSERT INTO registros(nombre, correo, descripcion)     
                VALUES('$nombre','$correo','$descripcion')";

   
    $ejecutar3 = mysqli_query($conexion, $query2);

    if($ejecutar3){
        echo '
            <script>
                alert("Reporte enviado existodamente");
                window.location = "../generar_reporte.php";
            </script>
        ';
    }
    mysqli_close($conexion);

?>