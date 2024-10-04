<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Portfolio</title>
    <link rel="stylesheet" href="styles.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .portfolio-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            /* Tres columnas */
            grid-gap: 10px;
            justify-content: center;
            align-items: center;
        }

        .portfolio-item {
            overflow: hidden;
        }

        .portfolio-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .portfolio-item img:hover {
            transform: scale(1.05);
        }

        /* Diferentes tamaños para las imágenes */
        .tall {
            grid-row: span 2;
            /* Ocupará dos filas */
        }

        .wide {
            grid-column: span 2;
            /* Ocupará dos columnas */
        }

        .full {
            grid-column: span 3;
            /* Ocupará las tres columnas completas */
        }

        /* Responsividad */
        @media (max-width: 768px) {
            .portfolio-container {
                grid-template-columns: repeat(2, 1fr);
                /* Dos columnas en pantallas más pequeñas */
            }
        }

        @media (max-width: 480px) {
            .portfolio-container {
                grid-template-columns: 1fr;
                /* Una columna en pantallas móviles */
            }
        }
    </style>
</head>

<body>
    <div class="portfolio-container">
        <div class="portfolio-item tall">
            <img src="photo1.jpg" alt="Photo 1">
        </div>
        <div class="portfolio-item tall">
            <img src="photo2.jpg" alt="Photo 2">
        </div>
        <div class="portfolio-item wide">
            <img src="photo3.jpg" alt="Photo 3">
        </div>
        <div class="portfolio-item full">
            <img src="photo4.jpg" alt="Photo 4">
        </div>
        <div class="portfolio-item">
            <img src="photo5.jpg" alt="Photo 5">
        </div>
        <div class="portfolio-item">
            <img src="photo6.jpg" alt="Photo 6">
        </div>
        <div class="portfolio-item">
            <img src="photo7.jpg" alt="Photo 7">
        </div>
    </div>
</body>

</html>