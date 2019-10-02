<!-- Je construis mon tableau de données a afficher -->
<table class="table">
    <!-- Mes titres sur une ligne -->
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nom</th>
        <th scope="col">Adresse</th>
        <th scope="col">Téléphone</th>
        <th scope="col">Option</th>
    </tr>
    </thead>
    <tbody>
    <?php
    // Je construis ma requete sql
    $sql = "SELECT * FROM acteur";
    // J'execute ma requete via PDO
    $resultat = $pdo->query($sql);
    // Je récupère les données de ma requete via PDO sous format tableau
    $resultats = $resultat->fetchAll();
    // je boucle via Foreach pour afficher chaque enregistrement de ma table sous format ligne
    foreach ($resultats as $key => $value){
        echo'<tr>';
        echo'<td>'.$value['id'].'</td>';
        echo'<td>'.$value['nom'].'</td>';
        echo'<td>'.$value['adresse'].'</td>';
        echo'<td>'.$value['tel'].'</td>';
        echo'<td><a href="?page=del&id='.$value['id'].'"><img src="https://addons.thunderbird.net/user-media/addon_icons/255/255237-64.png?modified=1309182585"></a></td>';
        echo'</tr>';
    }
    ?>
    </tbody>
</table>
