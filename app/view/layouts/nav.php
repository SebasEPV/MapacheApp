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