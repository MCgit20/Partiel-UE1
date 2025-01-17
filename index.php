<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barre de navigation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="logo">
            <h1>Umbrella Corporation</h1>
        </div>
        <div class="menu-toggle">&#9776;</div>
        <ul class="menu" id="menu">
            <li><a href="./index.php">Accueil</a></li>
            <li><a href="./ToutPourLArgent.php">Notre devise</a></li>
            <li><a href="./NosMedicament.php">Nos médicaments</a></li>
            <li><a href="./servicesZombi.php">Services</a></li>
            <li><button id="toggle-dark-mode">&#9788;</button></li>
        </ul>
    </nav>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.querySelector('.menu-toggle');
            const menu = document.querySelector('#menu');
            const darkModeButton = document.querySelector('#toggle-dark-mode');

            menuToggle.addEventListener('click', function() {
                menu.classList.toggle('active');
            });

            darkModeButton.addEventListener('click', function() {
                document.body.classList.toggle('dark-mode');
                document.querySelector('nav').classList.toggle('dark-mode');
            });
        });
    </script>
</body>
</html>
