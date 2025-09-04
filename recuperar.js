// Función para validar el formulario de recuperación de contraseña
function validarRecuperacion() {
    // Obtener el valor del correo electrónico
    const correo = document.getElementById('txcorreo').value.trim();

    // Validar que el campo de correo no esté vacío
    if (correo === "") {
        alert("Por favor, ingrese su correo electrónico.");
        return false;  // Evita que el formulario se envíe si el correo está vacío
    }

    // Si el correo está correcto, simular el envío de un mensaje de recuperación
    alert("Te hemos enviado un correo con las instrucciones para recuperar tu contraseña.");
    
}
