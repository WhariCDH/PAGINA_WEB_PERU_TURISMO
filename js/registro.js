// Función para validar el formulario de login
function validarFormulario() {
    // Obtener los valores de los campos
    const correo = document.getElementById('txcorreo').value.trim();
    const usuario = document.getElementById('txtusuario').value.trim();
    const password = document.getElementById('txtpassword').value.trim();

    // Validar que todos los campos estén completos
    if (correo === "" || usuario === "" || password === "") {
        alert("Por favor, complete todos los campos.");
        return false;  // Evita que el formulario se envíe si hay campos vacíos
    }

    // Si todo está correcto, mostrar un mensaje de éxito (o hacer redirección si fuera necesario)
    alert("¡Inicio de sesión exitoso!");
    // Redirigir al usuario a la página de inicio (esto lo puedes modificar según tus necesidades)
    window.location.href = '/inicio.html';
    return false;  // Impide que el formulario se envíe de forma tradicional
}
