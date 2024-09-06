<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="./../../../public/assets/css/contact.css">
    <link rel="stylesheet" href="./../../../public/assets/css/fonts.css">

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <script type="text/javascript">
        (function() {
            emailjs.init({
                publicKey: "6QBELrJu7YohvWNvZ",
            });
        })();
    </script>
</head>

<body>
    <header>
        <?php include('./../layouts/nav.php') ?>
    </header>
    <section>
        <h1>Contáctanos</h1>
        <form action="" id="contact-form">
            <input class="text_inputs" type="text" name="from_name" id="from_name" placeholder="Nombre" required>
            <input class="text_inputs" type="email" name="email" id="email" placeholder="Correo" required>
            <input class="text_inputs" type="phone" name="phone" id="phone" placeholder="Teléfono">

            <div class="check">
                <label class="check-title">Servicio en el que estás interesado:</label>
                <div class="check-item">
                    <input type="checkbox" id="RRSS" class="checkbox" name="service" value="RRSS">
                    <label for="RRSS">RRSS</label>
                </div>
                <div class="check-item">
                    <input type="checkbox" id="branding" class="checkbox" name="service" value="Branding">
                    <label for="branding">Branding</label>
                </div>
                <div class="check-item">
                    <input type="checkbox" id="network" class="checkbox" name="service" value="Network">
                    <label for="network">Network</label>
                </div>
                <div class="check-item">
                    <input type="checkbox" id="addOns" class="checkbox" name="service" value="Add On's">
                    <label for="addOns">Add On's</label>
                </div>
            </div>

            <textarea class="text_inputs msj" name="message" id="message" placeholder="Mensaje" required></textarea>
            <script>
                const textarea = document.getElementById('message');
                textarea.addEventListener('input', () => {
                    textarea.style.height = 'auto'; // Reset to auto height
                    textarea.style.height = `${textarea.scrollHeight}px`; // Set to scroll height
                });
            </script>
            <input class="boton" type="submit" value="Enviar">
        </form>
    </section>
</body>
<script src="./../../../public/assets/js/contact.js"></script>
<?php
include("/xampp_New/htdocs/PROGRA/MapacheApp/app/view/layouts/footer.php")
?>

</html>