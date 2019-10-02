<?php
// Je vérifie si l'utilisateur a cliqué sur le bouton ajouter un nouveau membre
if($_POST){
    // Je construis ma requete sql
    $sql = "INSERT INTO acteur (nom,adresse,tel) VALUES ('".$_POST['nom']."', '".$_POST['adresse']."', '".$_POST['tel']."')";

    // Je vérifie si ma requete a bien été executé
    if ($pdo->exec($sql)) {
        echo 'Votre insertion a été un succès'; // J'affiche un message de succes
        // Ssi ma requete a bien été executé
    } else {
        echo 'Votre insertion a été un echec'; // J'affiche un message d'echec
    }
}
?>
<!-- Mon formulaire -->
<form method="post">
    <input type="text" name="nom" style="border: 1px solid #000000" />
    <input type="text" name="adresse" style="border: 1px solid #000000" />
    <input type="text" name="tel" style="border: 1px solid #000000" />
    <input type="submit" name="ADD" value="ADD" />
</form>
