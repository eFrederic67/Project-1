

<?php
if($_GET['page']=='liste'){ // Si l'utilisateur demande la page liste
    include '../src/liste.php'; // j'intègre ma page de liste
}elseif($_GET['page']=='add'){ // Si l'utilisateur demande la page add
    include '../src/add.php'; // j'intègre ma page add
}elseif($_GET['page']=='del'){ // Si l'utilisateur demande la page delete
    include '../src/del.php';  // j'intègre ma page delete
}
?>
