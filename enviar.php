<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portafolio</title>
    <link rel="stylesheet" href="styleEnviar.css">
</head>
<body>
<header>
    <h1>Mi Portafolio</h1>
    <nav>
        <ul class="main-nav">
            <li><a href="index.html">Inicio</a></li>
        </ul>
    </nav>
    <div class="redesNavBar">
        <a href="https://www.facebook.com/estuardo.poroj.37" target="_blank"><img src="images/logo-black/facebook-logo.webp" alt="facebook logo" width="30px" height="30px"></a>
        <a href="https://www.instagram.com/eswin_poroj1/" target="_blank"><img src="images/logo-black/instagram-logo.png" alt="logoInstagram" width="30px" height="30px"></a>
        <a href="https://github.com/Eswin-Poroj" target="_blank"><img src="images/githun-logo.png" alt="github logo" width="30px" height="30px"></a>
        <a href="https://www.linkedin.com/in/eswin-stuard-poroj-castro/" target="_blank"><img src="images//logo-black/linkedin-logo.jpg" alt="logo linkedin" width="30px" height="30px"></a>
    </div>
    <input type="checkbox" name="toggle" id="toggle">
    <label for="toggle" class="navbar-toggle">
        <span></span>
        <span></span>
        <span></span>
    </label>
    <script src="script.js"></script>
</header>

    <div class="container">
        <?php
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $mensaje = $_POST['mensaje'];

        if (empty($nombre) || empty($correo) || empty($mensaje)) {
            echo "<p class='texto'>Lo sentimos, no se guardaron correctamente tus datos! Intenta de nuevo</p>";
            echo "<button class='btn'><a href='index.html'>Reintentar</a></button>";

        } else {
            echo "<p class='texto'>Muchas Gracias!! Pronto nos estaremos comunicando con usted.</p>";
            echo "<br>";
            echo "<img src='images/gif-celebracion.gif' alt='gif de celebracion' width='150px' height='150px'>";
            exit();
        }
        ?>
    </div>
</body>
</html>