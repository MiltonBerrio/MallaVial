// registration.js

// Función para alternar la visibilidad de la contraseña
function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password");
    passwordInput.type = passwordInput.type === "password" ? "text" : "password";
}

// Función para alternar la visibilidad de la contraseña de administrador
function toggleAdminPasswordVisibility() {
    var adminPasswordInput = document.getElementById("adminPassword");
    adminPasswordInput.type = adminPasswordInput.type === "password" ? "text" : "password";
}

// Función para mostrar mensajes al usuario
function showMessage(message) {
    var messageElement = document.getElementById("message");
    messageElement.textContent = message;
}

// Función para manejar el cambio de tipo de usuario
function handleUserTypeChange() {
    var userType = document.getElementById("userType").value;
    var adminPasswordContainer = document.getElementById("adminPasswordContainer");
    adminPasswordContainer.style.display = userType === "admin" ? "block" : "none";
}

// Función para validar la contraseña de administrador
function validateAdminPassword() {
    var userType = document.getElementById("userType").value;
    var adminPassword = document.getElementById("adminPassword").value;
    var adminSpecificPassword = "admin12345";

    if (userType === "admin" && adminPassword !== adminSpecificPassword) {
        showMessage("Error de registro. Contraseña de administrador incorrecta.");
        return false;
    }
    return true;
}

// Función para inicializar los eventos del formulario
function initFormEvents() {
    document.getElementById("userType").addEventListener("change", handleUserTypeChange);

    document.getElementById("registrationForm").addEventListener("submit", function(event) {
        event.preventDefault();
        if (validateAdminPassword()) {
            showMessage("Registro exitoso.");
            // Aquí iría la lógica para enviar los datos del formulario
        }
    });
}

// Inicializar eventos al cargar la página
window.onload = initFormEvents;
