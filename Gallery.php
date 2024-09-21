<!doctype html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="zdjeciainne/favicon.png" type="image/png">
        <title>Grygiel Auto Serwis - Galeria</title>
        <style>
            body {
                margin: 0;
                font-family: Arial, sans-serif;
            }

            button {
                position: fixed;
                bottom: 20px;
                right: 20px;
                padding: 10px;
                font-size: 16px;
                cursor: pointer;
                border-radius: 50%;
                background-color: #333;
                color: white;
                border: none;
            }

            header {
                background-color: #333;
                padding: 10px;
                text-align: center;
                color: white;
            }

            nav {
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
                background-color: #555;
                padding: 10px;
            }

            nav a {
                color: white;
                text-decoration: none;
                padding: 10px 20px;
                margin: 5px;
                display: inline-block;
                border: 1px solid #fff;
                border-radius: 5px;
                transition: background-color 0.3s;
            }

            nav a:hover {
                background-color: #777;
            }

            .gallery {
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 20px;
            }

            .gallery img {
                width: 100%;
                max-width: 800px;
                height: auto;
                margin-bottom: 20px;
                box-sizing: border-box;
            }

            footer {
                background-color: #333;
                color: white;
                text-align: center;
                padding: 20px 10px;
                width: 100%;
                position: relative;
            }
            
            footer a {
                color: white;
            }
        </style>
    </head>

    <body>
        <header>
            <h1>Grygiel Auto Serwis</h1>
            <a class="image-button" href="Index.html">
                <img src="zdjeciainne/krzysztof-grygiel-logo.jpg" alt="Logo" width="150" height="79">
            </a>
        </header>

        <nav>
            <a href="Index.html">Start</a>
            <a href="Services.html">Oferta</a>
            <a href="Gallery.php">Galeria</a>
            <a href="Reviews.html">Opinie</a>
            <a href="Contact.html">Kontakt</a>
        </nav>

        <div class="gallery">
            <?php
            $dir = 'zdjecia/';
            $images = glob($dir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
            rsort($images);
            foreach ($images as $image) {
                echo '<img src="' . $image . '" alt="Gallery Image">';
            }
            ?>
        </div>

        <button onclick="goToTop()">⬆️</button>

        <script>
            function goToTop() {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                });
            }
        </script>

        <footer>
            <p>&copy; 2024 Grygiel Auto Serwis</p>
            <p>Adres: ul. Starołęcka 85, 61-341 Poznań</p>
            <p>Kontakt: <a href="tel:+48123456789">+48 123 456 789</a></p>
            <p>Email: <a href="mailto:biuro@grygiel-autoserwis.pl">biuro@grygiel-autoserwis.pl</a></p>
        </footer>
    </body>
</html>
