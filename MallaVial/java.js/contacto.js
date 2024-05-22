document.getElementById('rutaForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Evita que la página se recargue

    var nombre = document.getElementById('nombre').value;
    var mensaje = document.getElementById('mensaje').value;

    // Aquí deberías enviar los datos a tu servidor y base de datos
    // Por ejemplo, usando fetch() o XMLHttpRequest

    // A continuación, actualizamos la página con el nuevo comentario
    var listaComentarios = document.getElementById('listaComentarios');
    var nuevoComentario = document.createElement('div');
    nuevoComentario.innerHTML = `<strong>${nombre}</strong>: ${mensaje}`;
    listaComentarios.appendChild(nuevoComentario);

    // Limpiar el formulario
    document.getElementById('nombre').value = '';
    document.getElementById('mensaje').value = '';
});
