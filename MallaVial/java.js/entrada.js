document.getElementById('botonMenu').addEventListener('click', function() {
  var contenido = document.getElementById('contenidoMenu');
  if (contenido.classList.contains('oculto')) {
      contenido.classList.remove('oculto');
  } else {
      contenido.classList.add('oculto');
  }
});
