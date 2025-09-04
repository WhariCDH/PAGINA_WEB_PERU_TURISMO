<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    

        /* Estilos Generales */
body {
    font-family: Arial, sans-serif;
    background-color: rgb(248, 248, 248);
    margin: 0;
    padding: 0;
}

h1 {
    color: #333;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: 24px;
    text-transform: uppercase;
    margin-bottom: 15px;
}

p {
    color: #555;
    font-size: 16px;
    line-height: 1.5;
}

/* Menú de Navegación */
nav {
    background-color: #4d7486;
    padding: 10px;
    position: sticky;
    top: 0;
    width: 100%;
    z-index: 100;
}

nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
}

nav ul li {
    position: relative;
    margin: 0 15px;
}

nav ul li a {
    color: white;
    font-size: 16px;
    text-decoration: none;
    font-weight: bold;
}

nav ul li a:hover {
    color: #ffff99;
}

/* Submenús */
nav ul ul {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #4d7486;
    padding: 10px;
    border-radius: 5px;
    list-style: none;
}

nav ul li:hover ul {
    display: block;
}

nav ul ul li {
    padding: 8px 0;
}

nav ul ul li a {
    color: white;
    font-size: 14px;
}

nav ul ul li a:hover {
    color: #ffff99;
}

/* Secciones */
section {
    padding: 50px;
    background-color: white;
    margin-bottom: 30px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

section h1 {
    font-size: 28px;
    color: #333;
    text-align: center;
    margin-bottom: 30px;
    text-transform: uppercase;
    border-bottom: 3px solid #4d7486;
    display: inline-block;
    padding-bottom: 10px;
}

/* Pie de página */
footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 20px;
    font-size: 14px;
}

footer a {
    color: #ff6666;
    text-decoration: none;
}

footer a:hover {
    color: #ffff99;
}

/* Estilos de los botones y enlaces */
#resaltar1 {
    color: rgb(228, 228, 228);
    font: size 5px;
         
}

#resaltar2 {
    color: rgb(0, 0, 0);
    font-size: 15pt;
    font-style: italic;
}

/* Logo */
.logo img {
    width: 150px;
    height: auto;
}
.user-icon img {
    width: 30px; /* Ajusta el tamaño de la imagen */
    height: auto; /* Mantiene la proporción de la imagen */
    margin-right: 10px; /* Espacio entre la imagen y el texto */
}

     body {
    font-family: Arial, sans-serif;
    background-color: #ffffff; /* Fondo blanco */
    color: #4d7486; /* Color de texto */
    margin: 0;
    padding: 0;
     }

   .contact-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    text-align: center;
    }

    .contact-info {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    margin-bottom: 20px;
}

.info-box {
    background-color: #4d748622; /* Fondo gris claro para las cajas */
    padding: 20px;
    border-radius: 8px;
    width: 250px;
    margin: 10px;
}

.info-box span {
    font-weight: bold;
}

.form-map-container {
    display: flex;
    justify-content: space-around;
    align-items: flex-start;
    gap: 20px;
}

form {
    background-color: #4d748622; /* Fondo gris claro para el formulario */
    padding: 20px;
    border-radius: 8px;
    width: 45%;
}

form h3 {
    margin-top: 0;
}

form input, form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

form button {
    width: 100%;
    padding: 10px;
    background-color: #0066cc;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}

form button:hover {
    background-color: #005bb5;
}

.map {
    width: 45%;
}
/* Footer General */
.footer {
            background-color: #333;
            color: #fff;
            padding: 40px 20px;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            font-family: Arial, sans-serif;
        }

        .footer-section {
            flex: 1;
            min-width: 200px;
            margin: 20px;
        }

        .footer h3 {
            font-size: 18px;
            color: #ffcc00;
            margin-bottom: 15px;
        }

        .footer p, .footer a, .footer li {
            color: #fff;
            font-size: 14px;
            line-height: 1.6;
            text-decoration: none;
        }

        .footer a:hover {
            color: #ffcc00;
        }

        /* Contacto */
        .contact-info p {
            margin: 0;
        }

        /* Horarios */
        .footer .horario {
            margin: 10px 0;
        }

       
        /* Estilos Adicionales */
        .payment-methods img {
            width: 50px;
            margin-right: 10px;
        }

        html, body {
    height: 100%; 
    margin: 0; 
    }

     .footer-bottom {
    position: relative; 
    width: 100%;
    text-align: center;
    padding: 20px 0; 
    background-color:#333;
    bottom: 0; 
}

    body {
    display: flex;
    flex-direction: column;
    min-height: 100vh; 
   }

   .main-content {
    flex: 1; 

 /* Adaptabilidad */
        @media (max-width: 768px) {
            .footer {
                flex-direction: column;
                align-items: center;
            }
        }
        
    
} 
</style>
 <!-- Menú de navegación -->
 <nav>

        <ul>
        <li><a href="http://localhost/pag/excursiones.html" id="resaltar1">Tours en Lima</a></li>
            <li><a href="excursiones.html" id="resaltar1">Tours en Lima <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                <ul>
                    <li><a href="http://localhost/pag/tours en lima/callao.html" id="resaltar2">Excursiones en Callao</a></li>
                    <li><a href="/tours en lima/lunahuana.html" id="resaltar2">Tours en Lunahuana</a></li>
                    <li><a href="/tours en lima/pachacamac.html" id="resaltar2">Tours en Pachacamac</a></li>
                    <li><a href="/tours en lima/miraflores.html" id="resaltar2">Tours en Miraflores</a></li>
                </ul>
            </li>
            <li><a href="excursiones.html" id="resaltar1">Tours en Cusco <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                <ul>
                    <li><a href="/tours en cusco/tourcusco.html" id="resaltar2">Tour de un dia Cusco</a></li>
                    <li><a href="/tours en cusco/excursiones.html" id="resaltar2">Excursiones Varios Días</a></li>
                    <li><a href="/tours en cusco/Desde.html" id="resaltar2">Tours a Machu Picchu desde Cusco</a></li>
                    <li><a href="DesdeCusco.html" id="resaltar2">Tours al Camino Inca</a></li>
                </ul>
                <li><a href="http://localhost/pag/contacto.php" id="resaltar1">Contacto</a></li>
                <li><a href="/quejas.html" id="resaltar1">Quejas y Reclamos</a></li>
                <li><a href="/login.html" class="user-icon">
                <img src="user-icon.png" alt="Usuario">
                </a></li>
        </ul>
    </nav>

    
<div class="contact-container">
        <h2>¡CONTÁCTANOS AHORA!</h2>
        <div class="contact-info">
            <div class="info-box">
                <span>Email:</span>
                <p>incatrilogytours@gmail.com<br>incatrilogytours@hotmail.com</p>
            </div>
            <div class="info-box">
                <span>Teléfonos:</span>
                <p>+51 920 843 180<br>+51 936 638 846<br>+51 989 277 732</p>
            </div>
            <div class="info-box">
                <span>Dirección:</span>
                <p>Jirón Lampa 231 Lima Center | Av. Larco Miraflores 1150, Lima 02002</p>
            </div>
            <div class="info-box">
                <span>Horarios:</span>
                <p>Lunes a Sábado: 9:00AM - 1:00PM | 4:00PM - 8:00PM<br>Domingos: 9:00AM - 6:00PM</p>
            </div>
        </div>
        
        <div class="form-map-container">
            <form action="http://localhost/pag/contacto.php" method="POST">
                <h3>Completa tus datos</h3>
                <input type="text" name="nombre" placeholder="Escribe tu nombre" required>
                <input type="text" name="telefono" placeholder="Escribe tu teléfono" required>
                <input type="email" name="email" placeholder="Escribe tu email" required>
                <textarea name="mensaje" placeholder= "Mensaje" required></textarea>
                <div class="recaptcha">
                    <!-- Aquí iría el código para Google reCAPTCHA si se necesita -->
                </div>
                <button type="submit">Enviar Mensaje</button>
            </form>

            <div class="map">
                <!-- Agrega el iframe de Google Maps -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.937776144487!2d-77.032348!3d-12.0463737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8b8c7f9288b%3A0x3998c305c0e62239!2sJir%C3%B3n%20Lampa%20231%2C%20Lima%2015001%2C%20Per%C3%BA!5e0!3m2!1ses-419!2sus!4v1699620123456!5m2!1ses-419!2sus" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>

    <script>
    document.querySelector('form').addEventListener('submit', function (event) {
        const nombre = document.querySelector('input[name="nombre"]');
        const telefono = document.querySelector('input[name="telefono"]');
        const email = document.querySelector('input[name="email"]');
        const mensaje = document.querySelector('textarea[name="mensaje"]');

        // Validar campos vacíos
        if (!nombre.value || !telefono.value || !email.value || !mensaje.value) {
            alert('Por favor, completa todos los campos.');
            event.preventDefault(); // Evita que el formulario se envíe
            return;
        }

        // Validar email
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email.value)) {
            alert('Por favor, introduce un email válido.');
            event.preventDefault();
            return;
        }

        // Confirmación antes de enviar
        if (!confirm('¿Deseas enviar este mensaje?')) {
            event.preventDefault();
        }
    });
</script>



<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    if (!empty($nombre) && !empty($telefono) && !empty($email) && !empty($mensaje)) {
        $to = "incatrilogytours@gmail.com";
        $subject = "Nuevo mensaje de contacto";
        $body = "Nombre: $nombre\nTeléfono: $telefono\nEmail: $email\n\nMensaje:\n$mensaje";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            echo "<script>alert('Mensaje enviado correctamente. Nos pondremos en contacto contigo pronto.');</script>";
        } else {
            echo "<script>alert('Hubo un problema al enviar el mensaje. Intenta de nuevo.');</script>";
        }
    } else {
        echo "<script>alert('Por favor, completa todos los campos antes de enviar.');</script>";
    }
}

 if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($nombre)) { ?>
    <p style="color: green; text-align: center;">¡Gracias, <?= htmlspecialchars($nombre) ?>! Hemos recibido tu mensaje.</p>
 <?php } 
?>

<!-- Footer -->
<div class="footer">
    <!-- Sección Contacto -->
    <div class="footer-section contact-info">
        <h3>CONTÁCTANOS</h3>
        <p>+51 920 245 758</p>
        <p>+51 957 587 720</p>
        <p>+51 986 221 958</p>
        <p><a href="mailto:info@incatrilogytours.com">info@incatrilogytours.com</a></p>
        <p><a href="mailto:reservas@incatrilogytours.com">reservas@incatrilogytours.com</a></p>
        <p>Jirón Lampa 231, Cercado de Lima</p>
        <p>Av, Larco Miraflores 1150 - Local #17, Primer piso</p>
    </div>

    <!-- Sección Métodos de Pago -->
    <div class="footer-section payment-methods">
        <h3>MÉTODOS DE PAGO</h3>
        <img src="https://upload.wikimedia.org/wikipedia/commons/4/41/Visa_Logo.png" alt="Visa">
        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" alt="PayPal">
    </div>

    <!-- Sección Horario -->
    <div class="footer-section">
        <h3>HORARIO DE OFICINA</h3>
        <p class="horario">Lunes a Sábado: 9:00AM - 1:00PM | 4:00PM - 8:00PM</p>
        <p class="horario">Domingos: 10:00AM - 7:00PM</p>
        <h3>HORARIO DE EQUIPO DE VENTAS</h3>
        <p class="horario">Lunes a Sábado: 9:00AM - 1:00PM | 4:00PM - 8:00PM</p>
        <p class="horario">Domingos: 2:00PM - 6:00PM</p>
    </div>

    <!-- Sección Menú de Navegación -->
    <div class="footer-section">
        <h3>MENÚ DE NAVEGACIÓN</h3>
        <ul>
            <li><a href="#inicio" id="resaltar1">Inicio</a></li>
            <li><a href="excursiones.html" id="resaltar1">Tours en Lima <i class="fa fa-angle-down" aria-hidden="true"></i></a>
            <li><a href="excursiones.html" id="resaltar1">Tours en Cusco <i class="fa fa-angle-down" aria-hidden="true"></i></a>
            <li><a href="#contacto" id="resaltar1">Contacto</a></li>
            <li><a href="#inicio" id="resaltar1">Quejas y Reclamos</a></li>
        </ul>
    </div>


</div>
<!-- Footer Bottom -->

<div class="footer-bottom">
    <p>&copy; Inca Trilogy Tours 2024. Todos los derechos reservados.</p>
    <a href="#politica-privacidad">Política de Privacidad</a> | <a href="#terminos-condiciones">Términos y Condiciones</a>
</div>
</body>
</html>