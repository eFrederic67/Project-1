<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet">
    <title>My Green City - Repair café</title>
</head>

<body>
<header>
    <?php
    // J'intègre ma barre de navigation EN : + les commandes PHP GET associées
    include '../src/navbar.php';
    ?>
</header>

<section class="emballages">
    <article class="vrac">
        <h2>Repair café</h2>
        <ul class="what">
            <li>
                <img src="https://repaircafe.org/fr/wp-content/uploads/sites/3/2018/03/button-fdblanckopie-300x215.png" alt="Repair together">
            </li>
            <li>
                <p>Un Repair Café est un lieu d'échange, de partage et surtout ... de réparation ! Vélo déréglé, bouilloire fatiguée, jean troué ou encore vieil ordinateur peuvent y être réparés !</p>
                <p>Le repair Café est tenu par des bénévoles, l'idée n'est donc pas de créer un atelier "de service après-vente", mais de créer du lien par un échange de savoir, apprendre à réparer soi-même, connaître les petits gestes d'entretien qui retardent la panne.</p>
            </li>
        </ul>
    </article>
    <article class="vrac">
        <h3>Un café pour réparer et créer du lien</h3>
        <ul class="what">
            <li>
                <p>Comment ça marche ?</p>
                <p>Nous ne disposons pas de lieux pour nos manifestations. Nous comptons sur les partenariats avec des structures locales, associations ou centres, pour organiser nos ateliers de réparation.
                    <br>Pour toucher le plus grand public, nos ateliers ont lieu essentiellement les samedis après-midi, de 14h à 17h, et nous sommes en mesure d'en organiser plusieurs par mois, en fonction des disponibilités de nos bénévoles.</p>
                <p>Nous intervenons principalement dans le rayon de <strong>Strasbourg Eurométropole</strong> :</p>
                <p>Achenheim - Breuschwickersheim - Bischheim - Blaesheim - Eckbolsheim - Eckwersheim - Entzheim - Eschau - Fegersheim - Geispolsheim - Hangenbieten - Hoenheim - Holtzheim - Illkirch-Graffenstaden - Kolbsheim - Lampertheim - La Wantzenau - Lipsheim - Lingolsheim - Mittelhausbergen - Mundolsheim - Niederhausbergen - Oberhausbergen - Oberschaeffolsheim - Osthoffen - Ostwald - Plobsheim - Reichstett - Schiltigheim - Souffelweyersheim - Strasbourg - Vendenheim - Wolfisheim</p>
                <p>Nous recherchons toujours des bénévoles, et nous sommes à l'écoute pour toute proposition de lieu où poser nos instruments.</p>
                <a href="http://www.repaircafe-strasbourg.fr" onclick="window.open(this.href);return false">Visiter le site de l'association Repair café</a>
            </li>
            <li>
                <img src="images/repaircafe3.jpg" alt="repair cafe eurometropole">
            </li>
        </ul>
    </article>
</section>
<footer>
    <ul class="liste">
        <li>
            <a href="index.php">Accueil</a>
        </li>
        <li>
            <a href="mentionslegales.php">Mentions légales</a>
        </li>
        <li>
            <a href="plansite.php">Plan du site</a>
        </li>
        <li>
            <a href="index.php#contact">Contact</a>
        </li>
    </ul>
</footer>
</body>
</html>
