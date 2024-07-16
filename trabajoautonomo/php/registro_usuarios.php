<?php

    include 'conexion.php';


    $Nombre_de_Usuario = $_POST['Nombre_de_Usuario'];
    $Correo = $_POST['Correo'];
    $Contrasena = $_POST['Contrasena'];
    $Conf_Contrasena = $_POST['Conf_Contrasena'];
    

    $query = "INSERT INTO usuarios(Nombre_de_Usuario, Correo, Contrasena, Conf_Contrasena)     
                VALUES('$Nombre_de_Usuario','$Correo','$Contrasena','$Conf_Contrasena')";

    //Verficar que el correo no se repita en la base de datos
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Correo='$Correo'");
    if(mysqli_num_rows($verificar_correo)> 0){
        echo '
            <script>
                alert("Correo ya registrado, intente con otro correo");
                window.location = "../registro.php";
            </script>
        ';
        exit();
    }

    //Verficar que el usuario no se repita en la base de datos
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Nombre_de_Usuario='$Nombre_de_Usuario'");
    if(mysqli_num_rows($verificar_usuario)> 0){
        echo '
            <script>
                alert("Este usuario ya esta registrado, intente con otro usuario");
                window.location = "../registro.php";
            </script>
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                
                window.location = "../inicio-sesion.php";
            </script>
        ';
    }
    mysqli_close($conexion);

    



?>