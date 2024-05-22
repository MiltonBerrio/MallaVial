
<!DOCTYPE html>
<html lang="es">

<head>
  <!-- Incluye la hoja de estilos de Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
  
  <!-- Incluye la hoja de estilos personalizada -->
  <link rel="stylesheet" href="css/index.css">
  <title>Malla vial Cartagena</title>
</head>

<body>
  <!-- Encabezado con clase showcase -->
  <header class="showcase">
    <div class="showcase-content">
      <!-- Contenido de la vitrina -->
      <div class="showcase-top">
        <h1>Bienvenido</h1>
      </div>

      <!-- Formulario de inicio de sesión -->
      <div class="formm">
        <form id="loginForm" action="login.php" method="post">
          <h2>Iniciar Sesion</h2>
          <div class="info">

            <!-- Campos de entrada para usuario y contraseña -->
            <input class="email" type="email" placeholder="Correo" id="email" name="email" required><br>
            <input class="email" type="password" placeholder="Contraseña" id="password" name="password" required>
          </div>
          <div class="btn">

            <!-- Botón para enviar el formulario -->
            <button class="btn-primary" type="submit">Iniciar Sesion</button>
          </div>
          <div class="help">
            <div>

              <!-- Opción para recordar el usuario -->
              <input value="true" type="checkbox" id="remember"><label for="remember">Recuerdame</label>
            </div>
          </div>
          <div class="signup">
            <p>¿Eres nuevo aquí?</p>
          </div>
        </form>
        <a href="registro.php">Regístrate ahora</a>
        <div id="message"></div>
      </div>
    </div>
  </header>

  <!-- Script JavaScript -->
  <script src="index.js"></script>
  
</body>

</html>