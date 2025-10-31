// Función para validar el formulario de login
function validarFormulario() {
    // Obtener los valores de los campos de correo y contraseña
    const correo = document.getElementById('txcorreo').value.trim();
    const password = document.getElementById('txtpassword').value.trim();

    // Validar que los campos no estén vacíos
    if (correo === "") {
        alert("Por favor, ingrese su correo electrónico.");
        return false;  // Detiene el envío del formulario
    }
    if (password === "") {
        alert("Por favor, ingrese su contraseña.");
        return false;  // Detiene el envío del formulario
    }

    // Si los campos son válidos, puedes enviar el formulario o hacer la lógica necesaria
    alert("Formulario enviado con éxito");
    
    // Aquí se podría hacer una redirección si fuera necesario
    window.location.href = '/inicio.html';

    return false;  // Permite el envío del formulario
}
