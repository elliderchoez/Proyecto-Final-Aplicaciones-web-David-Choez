<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesión Admin</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
<img class="imagen1" src="imagenes/imagen1.png">

  <div class="container">
    <h1>Iniciar Sesión Admin</h1>
    <form action="php/login_admin.php" method="POST">
      <label for="email">Correo Electrónico:</label>
      <input type="email" name="Correo" required>
      
      <label for="password">Contraseña:</label>
      <input type="password" name="Contrasena" required>
      
      <button type="submit" >Iniciar Sesión</button>
    </form>
    
    <a href="index.php">
    <button class="btn" id="btn-inicio">Inicio</button>
    </a>

  </div>

  <script src="script.js"></script>
</body>
</html>
