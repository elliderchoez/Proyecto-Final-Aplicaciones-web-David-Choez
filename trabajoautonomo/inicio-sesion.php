<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesión</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
<img class="imagen1" src="imagenes/imagen1.png">

  <div class="container">
    <h1>Iniciar Sesión</h1>
    <form action="php/login_usuario.php" method="POST">
      <label for="email">Correo Electrónico:</label>
      <input type="email" name="Correo" required>
      
      <label for="password">Contraseña:</label>
      <input type="password" name="Contrasena" required>
      
      <button type="submit" >Iniciar Sesión</button>
    </form>
    
    <a href="index.php">
    <button class="boton1" >Inicio</button>
    </a>

  </div>

  <footer>
    <a href="admin_iniciosesion.php">
    <button class="btn">Inicio sesion admin</button>
    </a>

  </footer>

  <style>
    .boton1{
      margin: 10px 10px;

            padding: 10px 380px;
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
  <script src="script.js"></script>
</body>
</html>
