    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio</title>
        <link rel="stylesheet" href="./../../../public/assets/css/main.css">
        <link rel="stylesheet" href="./../../../public/assets/css/fonts.css">
        <script src="./../../../public/assets/js/home.js" defer></script>
        <style>
            h1 {
                text-align: center;
                font-size: 4.6875rem;
                /* 75px */
                margin: 0 0 0.3125rem 0;
                /* 10px 0 5px 0 */
                letter-spacing: 0.15625rem;
                /* 2.5px */
            }

            .carousels {
                margin: 0 auto;
                width: 90%;
            }

            #slider,
            #services {
                position: relative;
                width: 100%;
                overflow: hidden;
                height: 70vh;
            }

            #slider {
                margin-top: 1.25rem;
                margin-bottom: .5rem;
                /* 20px */
            }

            .slides {
                display: flex;
                transition: transform 1s ease-in-out;
                height: 100%;
            }

            .slide,
            .service {
                width: 100%;
                height: 100%;
                flex-shrink: 0;
                display: flex;
                justify-content: space-around;
                align-items: center;
                text-align: left;
                color: #000;
            }

            .slide {
                justify-content: center;
            }

            .service {
                padding: 1.25rem;
                /* 20px */
                box-sizing: border-box;
                text-decoration: none;
            }

            .service-desc>li {
                text-align: left;
                font-size: 1.375rem;
                /* 22px */
                line-height: 2;
                letter-spacing: 0.125rem;
                /* 2px */
            }

            .slide img,
            .service img {
                height: auto;
                object-fit: contain;
                max-width: 40%;
                margin: 0 1.25rem;
                /* 20px */
            }

            hr {
                margin: 0.125rem 0;
                /* 2px */
            }

            .carousel-button {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                background-color: #0007;
                color: #fff;
                width: 1.875rem;
                /* 30px */
                height: 1.875rem;
                /* 30px */
                display: flex;
                justify-content: center;
                align-items: center;
                cursor: pointer;
                z-index: 10;
                user-select: none;
                border-radius: 50%;
                font-size: 0.9375rem;
                /* 15px */
                line-height: 1;
            }

            .carousel-button-prev {
                left: 0.625rem;
                /* 10px */
            }

            .carousel-button-next {
                right: 0.625rem;
                /* 10px */
            }

            .carousel-button:hover {
                background-color: #000A;
            }

            .service-desc {
                font-size: 1rem;
                /* 20px */
                line-height: 1.5;
                letter-spacing: 0.0625rem;
                /* 1px */
                margin: 0;
            }

            .content {
                margin: 0 2rem;
            }

            h3 {
                font-size: 1.875rem;
                /* 30px */
                margin-bottom: 0.625rem;
                /* 10px */
                margin-top: 0;
            }

            .slide img {
                width: auto;
                height: auto;
                max-width: 90%;
                max-height: 100%;
                object-fit: fill;
                margin: 0 auto;
                display: block;
            }

            .service img {
                margin-left: 1.25rem;
                /* 20px */
                object-fit: fill;
                max-width: 35%;
                vertical-align: middle;
            }

            /* Style for the bottom navigation tabs */
            .tabs {
                text-align: center;
                display: flex;
                justify-content: center;
                gap: 15px;
                margin-bottom: 1.5rem;
                padding: 0.5rem;
            }

            /* Style for each tab button */
            .tab {
                height: 12px;
                width: 12px;
                border-radius: 50%;
                background-color: transparent;
                border: 2px solid #666;
                cursor: pointer;
                transition: all 0.3s ease;
                position: relative;
                box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.2);
                font-size: 0;
                /* Hide text initially */
                display: flex;
                justify-content: center;
                align-items: center;
                color: white;
            }

            /* Active tab button with background color and larger border */
            .tab.active {
                background-color: #999;
                border: 2px solid #999;
                transform: scale(1.2);
                box-shadow: 0px 0px 6px rgba(0, 0, 0, 0.3);
            }

            /* Hover effect for the tab buttons */
            .tab:hover {
                background-color: #777;
                border-color: #777;
                transform: scale(1.1);
                box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.25);
            }


            /* Media Queries */
            @media screen and (max-width: 875px) {
                .slide {
                    margin: auto;
                }

                .carousel-button {
                    width: 1.5625rem;
                    /* 25px */
                    height: 1.5625rem;
                    /* 25px */
                    font-size: 0.75rem;
                    /* 12px */
                }

                #slider,
                #services {
                    height: auto;
                }

                .service {
                    flex-direction: column;
                    align-items: center;
                    text-align: center;
                    padding: 1.25rem 0.625rem;
                    /* 20px 10px */
                    width: 100%;
                }

                .service-desc {
                    padding: 1.25rem 0;
                    /* 20px 0 */
                    font-size: 1rem;
                    /* 16px */
                    text-align: center;
                }

                .service img {
                    max-width: 18.75rem;
                    /* 300px */
                    margin-top: 0.9375rem;
                    /* 15px */
                }

                h3 {
                    font-size: 1.5rem;
                    /* 24px */
                    margin-bottom: 0.625rem;
                    /* 10px */
                }

                .tab {
                    height: 10px;
                    width: 10px;
                }

                .tab:hover::after {
                    font-size: 0.625rem;
                }
            }

            @media screen and (min-width: 875px) {

                /* Ensure circles are visible and aligned on larger screens */
                .tabs {
                    margin-top: 50px;
                    display: flex;
                }
            }

            @media screen and (max-width: 600px) {
                .carousel-button {
                    width: 1.25rem;
                    /* 20px */
                    height: 1.25rem;
                    /* 20px */
                    font-size: 0.625rem;
                    /* 10px */
                }

                .service img {
                    max-width: 15.625rem;
                    /* 250px */
                }

                .service-desc li {
                    font-size: 0.875rem;
                    /* 14px */
                }

                h1 {
                    font-size: 1.75rem;
                    /* 28px */
                }

                h3 {
                    font-size: 1.25rem;
                    /* 20px */
                }

                .tab {
                    height: 8px;
                    width: 8px;
                }

                .tab:hover::after {
                    font-size: 0.5rem;
                }
            }
        </style>
    </head>

    <body>
        <header>
            <?php include('./../layouts/nav.php'); ?>
        </header>
        <main>
            <h1>Mapache</h1>
            <div class="carousels">
                <section id="slider">
                    <span class="carousel-button carousel-button-prev" data-carousel="slider">&lt;</span>
                    <div class="slides">
                        <div class="slide"><img src="./../../../public/assets/imgs/logo.png" alt="Logo"></div>
                        <div class="slide"><img src="./../../../public/assets/imgs/logoNombre.jpg" alt="Logo Nombre"></div>
                    </div>
                    <span class="carousel-button carousel-button-next" data-carousel="slider">&gt;</span>
                </section>
                <div class="tabs">
                    <div class="tab active" data-slide="0"></div>
                    <div class="tab" data-slide="1"></div>
                </div>
            </div>
            <hr>
            <div class="carousels">
                <section id="services">
                    <span class="carousel-button carousel-button-prev" data-carousel="services">&lt;</span>
                    <div class="slides slides-services">
                        <a class="service" href="./services.php#rrss" title="Servicio de manejo de redes">
                            <div class="content">
                                <h3>MKT</h3>
                                <ul class="service-desc">
                                    <li>Manejo de redes sociales</li>
                                    <li>Facebook & Instagram Ads</li>
                                    <li>Storytelling y Copywritting</li>
                                </ul>
                            </div>
                            <img src="./../../../public/assets/imgs/logoNombre.jpg" alt="RRSS Service">
                        </a>
                        <a class="service" href="./services.php#branding" title="Servicio de branding">
                            <div class="content">
                                <h3>Branding</h3>
                                <ul class="service-desc">
                                    <li>Naming y Logotipo</li>
                                    <li>Identidad de Marca</li>
                                    <li>Material digital e impreso</li>
                                    <li>Rebrand de Marca</li>
                                </ul>
                            </div>
                            <img src="./../../../public/assets/imgs/logo.png" alt="Branding Service">
                        </a>
                        <a class="service" href="./services.php#network" title="Servicio Web">
                            <div class="content">
                                <h3>Network</h3>
                                <ul class="service-desc">
                                    <li>Landing Page</li>
                                    <li>Shopify</li>
                                    <li>Web a la medida (HTML)</li>
                                </ul>
                            </div>
                            <img src="./../../../public/assets/imgs/logoNombre.jpg" alt="Network Service">
                        </a>
                        <a class="service" href="./services.php#addOn" title="Servicios Adicionales">
                            <div class="content">
                                <h3>Production</h3>
                                <ul class="service-desc">
                                    <li>Video de marca</li>
                                    <li>Video de producto</li>
                                    <li>Fotografía lifestyle de marca</li>
                                    <li>Fotografía de producto</li>
                                </ul>
                            </div>
                            <img src="./../../../public/assets/imgs/logo.png" alt="Add On's Service">
                        </a>
                    </div>
                    <span class="carousel-button carousel-button-next" data-carousel="services">&gt;</span>
                </section>
                <div class="tabs">
                    <div class="tab active" data-slide="MKT" title="MKT"></div>
                    <div class="tab" data-slide="Branding" title="Branding"></div>
                    <div class="tab" data-slide="Network" title="Network"></div>
                    <div class="tab" data-slide="Production" title="Production"></div>
                </div>
            </div>
            <?php
            include("/xampp_New/htdocs/PROGRA/MapacheApp/app/view/layouts/whatsappIcon.php")
            ?>
        </main>
    </body>
    <?php
    include("/xampp_New/htdocs/PROGRA/MapacheApp/app/view/layouts/footer.php")
    ?>

    </html>