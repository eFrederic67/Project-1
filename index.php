<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./styles.css">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet">
    <title>My green city</title>
</head>

<body>
<header>
    <div class="logonav">
    <div class="logo"><a href="#home"><img class="logo" src="images/logo.png" alt="logo"></a></div>
    <nav class="bar">

        <ol>
            <li class="navbar"><a href="#Actions">ACTIONS</a></li>
            <li class="navbar"><a href="#Associations">ASSOCIATIONS</a></li>
            <li class="navbar"><a href="#Dechets">DECHETS</a></li>
        </ol>
    </nav>
    </div>
    <div id="slider">
        <figure>
            <img src="images/slider_envie_1.jpg" alt="logo Envie">
            <img src="images/crous1.jpeg" alt="crous">
            <img src="images/BeeVrac1.jpg" alt="BeeVrac">
            <img src="images/repaircafe2.jpg" alt="logo repair cafe">
            <img src="https://cdn.pixabay.com/photo/2019/09/10/16/15/sea-4466575_1280.jpg" alt="la mer">
        </figure>
    </div>
</header>

<section id="Actions">
    <h2>Actions Eurométropole</h2>
    <ul class="list-style-none padding">
        <!-- action 1 -->
        <li>
            <h3>Compostage</h3>
            <a href="https://www.strasbourg.eu/composter-dechets-compostage-dechets-verts" target="_blank" title="Strasbourg-compostage"><img src="images/compostage.jpeg" alt="Strasbourg-compostage"/></a>
            <p><br>Actions de compostage accompagnées par Eurométropole</p>
        </li>
        <!-- action 2 -->
        <li>
            <h3>Eco quartier Danube</h3>
            <a href="https://www.strasbourg.eu/eco-quartier-danube" target="_blank" title="Eco-quartier Danube"><img src="images/Danube.jpeg" alt="Eco-quartier Danube"/></a>
            <p><br>Le projet de l'éco-quartier Danube au Neudorf accompagné par Eurométropole</p>
        </li>
        <!-- action 3 -->
        <li>
            <h3>Economie Circulaire / Recyclage</h3>
            <a href="https://www.economiecirculaire.org/company/h/eurometropole-de-strasbourg.html" target="_blank" title="Strasbourg-eco-circulaire"><img class="image-droite" src="images/eco-circulaire.jpeg" alt="Strasbourg-eco-circulaire"/></a>
            <p>Actions autour de l'économie circulaire et du recyclage accompagnées par Eurométropole</p>
        </li>
    </ul>
</section>
<section id="Associations">
    <h2>Associations</h2>
    <div class="container">
        <article id="Envie">
            <div class="overlay">
                <h4>Envie</h4>
                <p>créée à Strasbourg, cette association a maintenant plein de magasins</p>
                <a class="button-assoc" href="envie.php">Plus d'infos</a>
            </div>
        </article>
        <article id="Crous">
            <div class="overlay">
                <h4>Crous</h4>
                <p>créée à Strasbourg, cette association a maintenant plein de magasins</p>
                <a class="button-assoc" href="crous.php">Plus d'infos</a>
            </div>
        </article>
        <article id="BeeVrac">
            <div class="overlay">
                <h4>BeeVrac</h4>
                <p>créée à Strasbourg, cette association a maintenant plein de magasins</p>
                <a class="button-assoc" href="beevrac.php">Plus d'infos</a>
            </div>
        </article>
        <article id="RepairCafe">
            <div class="overlay">
                <h4>Repair Café</h4>
                <p>créée à Strasbourg, cette association a maintenant plein de magasins</p>
                <a class="button-assoc" href="repaircafe.php">Plus d'infos</a>
            </div>
        </article>
    </div>
</section>







<h2 id="Dechets">Gestion des déchets</h2>

<section class="dechets">

    <h5>Conseils</h5>

    <article class="informations gestion">
        <img alt="logo recyclage" src="https://cdn.pixabay.com/photo/2018/04/05/23/59/nature-3294632_960_720.jpg">
        <div class="conseils">
            <ul class="point">
                <li>Le recyclage commence déjà par un tri sélectif de nos ordures ménagères et de nos déchets : piles, cartouche d'encre, papier, verre, plastique en tenant compte de différentes consignes.</li>
                <li>Je peux aussi déposer mes déchets et mes encombrants à la déchetterie proche de chez moi, comme : les restes de peinture, de solvants usagés ou d'huiles usagées.</li>
                <li>Je proscris les dépôts sauvages pour préserver mon environnement.</li>
                <li>Je rapporte à mon pharmacien les médicaments non utilisés ou périmés ainsi que leurs emballages.</li>
                <li>Rapporter mes objets dont je n'ai plus l'utilité ou arrivant en fin de vie permet de recycler les matières qui les composent.</li>
            </ul>
         </div>
    </article>
    <h5>Points de collecte</h5>

    <article class="descriptions gestion">
        <img alt="Poubelle" src="https://cdn.pixabay.com/photo/2013/11/09/20/19/trash-207996_960_720.jpg">
        <p>La collecte des déchets est assurée quotidiennement sur l'ensemble du territoire. Collecte en porte à porte, en apport volontaire, en déchèterie, du bac bleu, du bac jaune, du verre, des encombrants... La collecte est un service de proximité par excellence.</p>
        <p>Pour savoir comment procéder dans votre commune ou votre quartier pour vos déchats ménagers, les encombrants, et les déchets spécifiques ou dangereux, vous pouvez trouver tous les renseignements nécessaires ou télécharger les calendriers en pdf sur <a href="https://www.strasbourg.eu/collecte-des-dechets" onclick="window.open(this.href);return false">le site de Strasbourg Eurométropole</a>.</p>
    </article>

</section>




<form>
    <div id="contact">
        <h2>
            Nous contacter
        </h2>
        <label for="name">Votre nom :</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="mail">Votre e-mail :</label>
        <input type="email" id="mail" name="user_mail">
    </div>
    <div>
        <label for="msg">Votre message :</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer</button>
        <div style="clear:both"></div>
    </div>
</form>
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
            <a href="#contact">Contact</a>
        </li>
    </ul>
</footer>
</body>
</html>
