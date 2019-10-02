
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet">
    <title>My Green City - Envie</title>
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
        <h2>Envie</h2>
        <ul class="what">
            <li>
                <img src="images/envie_presentation.jpg" alt="Envie rénovation et revente d'électroménager">
            </li>
            <li>
                <p><b>Envie</b> = <b>E</b>ntreprise <b>N</b>ouvelle Vers l’<b>I</b>nsertion par l’<b>E</b>conomique</p>
                <br>
                <p>L’activité débute en 1984 par la <b>récupération</b> et la <b>remise en état d’appareils électroménagers</b> cédés par la communauté et la <b>revente sous garantie</b>.</p>
                <p>L’association "Envie Développement" est créée en 1989. Elle permet à Tours, Saint Étienne, Paris, Le Mans, Angoulême, Grenoble, Bordeaux et à d’autres de voir le jour. Envie Strasbourg est ainsi à l’origine du réseau Envie.</p>
            </li>
        </ul>
    </article>
    <article class="vrac">
        <h3>Halte à la surconsommation et à l'obsolescence programmée !</h3>
        <ul class="what">
            <li>
                <p><b>Comment ça marche ?</b></p>
                <p>Pour les produits sans garantie, achetés ou non chez Envie, un service de dépannage et réparation peut intervenir, à domicile ou en atelier dans les 48h.</p>
                <p>Envie Strasbourg a mis en place un service de collecte à domicile tous les lundis auprès des particuliers de l'Eurométropole ; sont concernés les vieux équipements électrodomestiques (cuisinières, lave-linge, réfrigérateurs…), qu’ils soient fonctionnels ou non !</p>
                <a href="https://strasbourg.envie.org/" onclick="window.open(this.href);return false">Visiter le site de Envie Strasbourg</a>
            </li>
            <li>
                <img src="images/envies_activites.png" alt="Activités de Envie">
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
