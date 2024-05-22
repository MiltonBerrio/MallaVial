<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malla Vial de Cartagena</title>
    <link rel="stylesheet" href="css/contacto.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="mapa.php">Trazar Ruta</a></li>
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="registro.php">Registro</a></li>
            </ul>
        </nav>
        <h1>Malla Vial de Cartagena</h1>
    </header>
    
    <div id="menuDesplegable">
        <button id="botonMenu">☰ Menú</button>
        <div id="contenidoMenu" class="oculto">
            <form id="rutaForm">
                <h2>Trazar Ruta</h2>
                <div class="form-group">
                    <label for="origen">Origen:</label>
                    <input type="text" id="origen" name="origen" required>
                </div>
                <div class="form-group">
                    <label for="destino">Destino:</label>
                    <input type="text" id="destino" name="destino" required>
                </div>
                <button type="submit">Trazar Ruta</button>
            </form>
            <a href="contacto.php">Contacto</a>
            <a href="registro.php">Registro</a>
            <a href="index.php">Iniciar sesion</a>
        </div>
    </div>
    
    <section id="contacto">
        <section class="contact-box">
            <h2>Contacto via WhatsApp</h2>
            <a href="https://wa.me/573028667325" class="invisible-link">
              <img src="imagenes/logo wpp.png" alt="WhatsApp logo" class="logo">
            </a>
          </section>
            </div>
            <div class="contact-box">
                <h2>Síguenos en Instagram</h2>
                    <a href="https://www.instagram.com/7axel.amg?igsh=MTBvZ3hhdXlvYjFsaw%3D%3D" class="invisible-link">
                      <img src="imagenes/logo ig.jpg" alt="Instagram logo" class="logo">
                    </a>
                  </section>
                </a>
            </div>
    </section>
    
    <footer>
        <p>© 2024 Malla Vial de Cartagena by MR - MB - AD</p>
    </footer>
    <script>
        document.getElementById('botonMenu').addEventListener('click', function() {
            var contenido = document.getElementById('contenidoMenu');
            if (contenido.classList.contains('oculto')) {
                contenido.classList.remove('oculto');
            } else {
                contenido.classList.add('oculto');
            }
        });
    </script>
</body>
</html>
