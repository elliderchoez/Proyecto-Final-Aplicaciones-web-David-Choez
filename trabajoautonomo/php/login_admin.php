<?php
    session_start();
    include 'conexion.php';

    $Correo =$_POST['Correo'];
    $Contrasena =$_POST['Contrasena'];

    $validar_login =mysqli_query($conexion, "SELECT * FROM usuarios WHERE Correo='$Correo' and Contrasena ='$Contrasena'");
    
    if(mysqli_num_rows($validar_login) >0){
        $_SESSION['usuario'] = $Correo;
        header("location: ../administrador.php");
        exit;
    }else{
        echo '
        <script>
            alert("Usuario no existe, porfavor verifique los datos");
            window.location =("../admin_iniciosesion.php");
        </script>
        ';
        exit;
    }
?>
