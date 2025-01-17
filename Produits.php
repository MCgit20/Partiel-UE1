<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Médicaments</title>
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
            <li><a href="./produits.php">Produits</a></li>
            <li><button id="toggle-dark-mode">&#9788;</button></li>
        </ul>
    </nav>

    <h2>Liste des produits</h2>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Description</th>
                <th>Date d'approbation</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

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

            function fetchMeds() {
                fetch('https://www.ZombieMedoc.fr/api/medicaments')
                    .then(response => response.json())
                    .then(data => {
                        const tableBody = document.querySelector('table tbody');
                        data.forEach(med => {
                            const row = document.createElement('tr');
                            row.innerHTML = `
                                <td>${med.nom}</td>
                                <td>${med.description}</td>
                                <td>${med.date_approbation}</td>
                            `;
                            tableBody.appendChild(row);
                        });
                    })
                    .catch(error => console.error('Erreur lors de la récupération des médicaments:', error));
            }

            fetchMeds();
        });
    </script>
</body>
</html>


