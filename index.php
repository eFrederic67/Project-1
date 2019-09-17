<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>My green city</title>
</head>

<body>

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
            <a href="index.php">Accueil</a
        </li>
        <li>
            <a href="mentionslegales.php">Mentions légales</a
        </li>
        <li>
            <a href="plansite.php">Plan du site</a
        </li>
        <li>
            <a href="#contact">Contact</a>
        </li>
    </ul>
</footer>

</body>

</html>
