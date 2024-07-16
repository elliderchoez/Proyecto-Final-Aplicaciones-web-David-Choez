<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>
  <link rel="stylesheet" href="estilos.css">

</head>

<body>
  <img class="imagen1" src="imagenes/imagen1.png">

  <div class="container">
    <h1>Registro</h1>
    <form action="php/registro_usuarios.php" method="POST" class="formulario" id="form">
      <div class="formulario_grupo" id="grupo_usuario">
        <label for="nom_usuario" class="formulario_label" >Nombre de usuario: </label>
        <div class="formulario_grupo_input">
          <input type="text" class="formulario_input" name="Nombre_de_Usuario" id="n_usuario"
            placeholder="Nombre de Usuario" required>
          </div>
      </div>

          <div class="formulario_grupo" id="grupo_correo">
            <label for="correo" class="formulario_label">Correo: </label>
            <div class="formulario_grupo_input">
              <input type="email" class="formulario_input" name="Correo" id="correoo" placeholder="Correo" required>
            </div>
          </div>

              <div class="formulario_grupo" id="grupo_contrasena">
                <label for="contrasena" class="formulario_label">Contraseña: </label>
                <div class="formulario_grupo_input">
                  <input type="password" class="formulario_input" name="Contrasena" id="contrasenaa"
                    placeholder="Contraseña" required>
                </div>
              </div>

                  <div class="formulario_grupo" id="grupo_conf_contrasena">
                    <label for="conf_contrasena" class="formulario_label">Confirmar Contraseña: </label>
                    <div class="formulario_grupo_input">
                      <input type="password" class="formulario_input" name="Conf_Contrasena" id="conf_contrasenaa"
                        placeholder="Confirmar Contraseña" required>
                     </div>
                  </div>

                      <div class="button_validar1">
                        <input type="submit" onclick="return verficarform();" value="Validar" />
                      </div>

                      <div id="error"></div>
                      <div class="button">
                        <button>Registrase</button>
                      </div>
                      <p id="errormessage" class="error"></p>

                      <div>
                     <a href="index.php">
                    <input type="button" class="boton1" value="Inicio">
      
                      </a>
  </div>

                    
    </form>
  
    <style>
      .formulario_input:focus {
        border: 5px solid #b7e4c7;
        outline: none;
        box-shadow: 3px 0px 30px rgba(163, 163, 163, 0.4);
      }

      .formulario_input_error {
        font-size: 12px;
        margin-bottom: 0;
        display: none;
      }

      .formulario_input_error_activo {
        display: block;
      }

      .formulario_mensaje {
        height: 45px;
        line-height: 45px;
        background: #F66060;
        padding: 0 15px;
        border-radius: 3px;
        display: none;
      }

      .formulario_mensaej_activo {
        display: block;
      }

      .p {
        font-size: 14px;
        margin: 15px 0;
        display: inline-block;
        color: black;
        padding: 5px 20px;
      }

      .button_validar1 {
        padding: 9px 331px;
        margin: 0 0px;
        font-size: 16px;
        cursor: pointer;
        border: none;
        border-radius: 1px;
        color: black;
      }
      .boton1{
            
            padding: 10px 1;
            font-size: 16px;
            color: black;
            background-color: #b7e4c7; /* Color de fondo del botón */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s ease;
      }
    </style>


    <script>
      var n_usuario = document.getElementById('n_usuario');
      var correoo = document.getElementById('correoo');
      var contrasenaa = document.getElementById('contrasenaa');
      var conf_contrasenaa = document.getElementById('conf_contrasenaa');
      var error = document.getElementById('error');
      error.style.color = 'red';


      function verficarform() {

        var mesajesError = [];
        var usernamePattern = /^[a-zA-Z0-9_-]{4,16}$/;
        var emailPattern =/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        
        if (n_usuario.value === null || n_usuario.value === '') {
          mesajesError.push('Ingresa el nombre de usuario');
        }else if (!usernamePattern.test(n_usuario.value)) {
          mesajesError.push('El nombre de usuario debe tener entre 4 y 16 caracteres y solo puede contener letras, números, guiones y guiones bajos');
        }

        if (correoo.value === null || correoo.value === '') {
          mesajesError.push('Ingresa el correo');
        }else if (!emailPattern.test(correoo.value)) {
          mesajesError.push('Ingresa un correo válido');
        }

        if (contrasenaa.value === null || contrasenaa.value === '') {
          mesajesError.push('Ingresa la contraseña');

        }
        if (conf_contrasenaa.value === null || conf_contrasenaa.value === '') {
          mesajesError.push('Confirme contraseña');
        }else if (contrasenaa.value !== conf_contrasenaa.value) {
          mesajesError.push('Las contraseñas no coinciden');
        }

        error.innerHTML = mesajesError.join('<br>');

        return false;
      }



    </script>
</body>


</html>