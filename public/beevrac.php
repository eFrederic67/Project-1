<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet">
    <title>My Green City - BeeVrac</title>
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
        <h2>BeeVrac</h2>
        <ul class="what">
            <li>
                <img src="https://cdn.pixabay.com/photo/2016/04/02/15/13/noodle-1303003_960_720.jpg" alt="Pâtes en vrac dans un bocal">
            </li>
            <li>
                <p>Chez BeeVrac je ramène mes propres contenants ! Bocaux, sacs à vrac, bouteilles, consignes...</p>
                <p>Beaucoup de produits alimentaires sont disponibles : riz, pâtes, légumineuses, farines, sucreries, céréales, café, thé, cacao, graines, noix, herbes, épices, huile, vinaigre, boissons...</p>
                <p>Le magasin propose également des produits de nettoyage pour le linge et la maison et des produits cosmétiques !</p>
            </li>
        </ul>
    </article>
    <article class="vrac">
        <h3>Plus d'emballages jetables !</h3>
        <ul class="what">
            <li>
                <p>Comment ça marche ?</p>
                <p>J'apporte mes contenants, je pèse chaque contenant avec son couvercle et je colle le code barre dessus, je me sers la quatité désirée, et plus qu'à passer en caisse !</p>
                <a href="https://beevrac.fr/" onclick="window.open(this.href);return false">Visiter le site du magasin BeeVrac</a>
            </li>
            <li>
                <img src="https://cdn.pixabay.com/photo/2017/01/27/19/49/beans-2014062_960_720.jpg" alt="Légumineuses en vrac dans des bocaux">
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