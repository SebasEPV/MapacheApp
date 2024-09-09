<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../../../public/assets/css/navbar.css">
    <link rel="stylesheet" href="./../../../public/assets/css/fonts.css">

</head>

<body>
    <header>
        <!-- Start of the nav-bar -->
        <div class="nav-bar">
            <nav>
                <img id="logos" src="./../../../public/assets/imgs/logo.png" alt="Logo">

                <!-- Hamburger menu icon -->
                <div class="hamburger" onclick="toggleMenu()">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <div class="nav-links">
                    <a href="./../client/home.php">Inicio</a>
                    <a href="./../client/aboutUs.php">Nosotros</a>
                    <a href="./../client/projects.php">Proyectos</a>
                    <a href="./../client/services.php" class="dropdown-toggle">Servicios</a>
                    <a href="./../client/contact.php">Contacto</a>
                </div>
            </nav>
            <!-- End of nav-bar -->
        </div>
    </header>

    <script>
        function toggleMenu() {
            const navLinks = document.querySelector('.nav-links');
            navLinks.classList.toggle('show');
        }
    </script>

    <a href="https://wa.me/+529984123305" target="_blank" id="whatsapp-button" title="WhatsApp">
        <img src="./../../../public/assets/imgs/Logo-WhatsApp.png" alt="WhatsApp Logo" style="width: 50px; height: 50px;" />
        <span class="whatsapp-text">Hablanos de tu proyecto!</span>
    </a>
</body>

</html>