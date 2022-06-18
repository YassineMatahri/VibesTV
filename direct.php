<!-- La page Direct -->

<?php
// ######## TRAITEMENT DU PHP ##########
require_once 'inc/init.php';


// ######## AFFICHAGE ##########
$title = "Vibes TV - Direct";
require_once 'inc/header.php';
?>

<!-- Lien vers mon fichier CSS -->
<link rel="stylesheet" href="css/direct.css">

<!-- DIRECT EN HTML -->
<main>
    <h1>Le Direct</h1>
    <div class="row mt-4">
        <div class="col-9 direct">
            <img src="img/direct.jpg" alt="Clap Cinema en rouge" width="100%">
        </div>
        <div class="col">
            Publicité
        </div>

</main>

<?php
require_once 'inc/footer.php';
?>