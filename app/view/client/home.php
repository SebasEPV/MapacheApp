    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio</title>
        <!-- <link rel="stylesheet" href="./../../../public/assets/css/home.css"> -->
        <link rel="stylesheet" href="./../../../public/assets/css/main.css">
        <link rel="stylesheet" href="./../../../public/assets/css/fonts.css">
        <style>
            .video {
                width: 100%;
                height: calc(100vh - 105px);
                background: #263;
            }

            .presentation {
                display: flex;
                align-items: center;
                justify-content: space-between;
                /* To space them apart */
                flex-wrap: wrap;
                /* Ensures responsiveness if the screen is too small */
            }

            .intro-text {
                width: 60%;
                /* Adjusts to allow space for the image */
                text-align: center;
                font-size: 1.2rem;
                /* Keeps the original font size */
            }

            .img-logo {
                width: 7%;
                height: auto;
                /* Adjusts to fit next to the text */
                display: inline-block;
                margin-right: 7rem;
                /* Adds a small margin between text and image */
            }

            h2 {
                text-align: center;
            }

            .services {
                display: flex;
                flex-direction: row;
                /* Aligns the .service divs in a row */
                flex-wrap: wrap;
                /* Allows the items to wrap onto the next line if they exceed the container width */
                justify-content: space-around;
                /* Evenly spaces the .service elements */
            }

            .service {
                width: 20%;
                height: 350px;
                /* Reduce margin to make them fit better in smaller screens */
                border: 1px solid #000;
                display: flex;
                flex-direction: column;
                /* Adjusts internal content to be stacked inside each .service */
                border-radius: 20px;
            }

            .presentation,
            .services,
            .portfolio-container,
            .clients {
                padding: 30px 75px;
            }

            @media (max-width: 768px) {
                .service {
                    width: 45%;
                    /* Adjusts the width for smaller screens to fit side by side */
                }

                .presentation,
                .services,
                .portfolio-container,
                .clients {
                    padding: 15px 5px;
                }

                .intro-text {
                    width: 100%;
                }

                .img-logo {
                    margin-right: 0;
                    height: 10vh;
                    width: auto;
                }

            }

            @media (max-width: 480px) {
                .service {
                    width: 100%;
                    /* Stacks the .service divs vertically for very small screens */
                }
            }
        </style>
    </head>

    <body>
        <header>
            <?php include('./../layouts/nav.php'); ?>
        </header>
        <main>
            <div class="video">
                VID
            </div>
            <div class="presentation">
                <p class="intro-text">
                    Creemos en la capacidad del diesño de mejorar la visión de una empresa, negocio, ambiente con estrategias de contenido y branding, así como con desarrollo web y producción audiovisual.
                    <br><br>
                    En <strong>Mapache Headquarters</strong> nuestra dedicación a contar historias de marca a través de UGC refleja un compromiso excepcional con la cretividad y narrativa visual.
                </p>
                <img src="./../../../public/assets/imgs/Isotipo.png" alt="Logo de Mapache Headquarters" class="img-logo">
            </div>
            <h2>LO QUE HACEMOS</h2>

            <div class="services">
                <div class="service"></div>
                <div class="service"></div>
                <div class="service"></div>
                <div class="service"></div>
            </div>
            <div class="portfolio-container"></div>
            <div class="clients"></div>
        </main>
    </body>
    <?php
    include("/xampp_New/htdocs/PROGRA/MapacheApp/app/view/layouts/footer.php")
    ?>

    </html>