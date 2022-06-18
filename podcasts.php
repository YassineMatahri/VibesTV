<!-- La page Podcasts -->

<?php
// ######## TRAITEMENT DU PHP ##########
require_once 'inc/init.php';


// ######## AFFICHAGE ##########
$title = "Vibes TV - Podcasts";
require_once 'inc/header.php';
?>

<!-- Lien vers mon fichier CSS -->
<link rel="stylesheet" href="css/podcasts.css">

<!-- PODCASTS EN HTML -->
<main>

    <h1>Les podcasts</h1>

    <div class="contenu">
        <div class="post">
            <img src="img/podcast.jpg" alt="image podcast avec un casque">
            <div class="info">
                <h1>Heading</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias nisi nesciunt, debitis.</p>
                <a href="#" class="lien">Read More</a>
            </div>
        </div>

        <div class="post">
            <img src="img/podcast.jpg" alt="image podcast avec un casque">
            <div class="info">
                <h1>Heading</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias nisi nesciunt, debitis.</p>
                <a href="#" class="lien">Read More</a>
            </div>
        </div>

        <div class="post">
            <img src="img/podcast.jpg" alt="image podcast avec un casque">
            <div class="info">
                <h1>Heading</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias nisi nesciunt, debitis.</p>
                <a href="#" class="lien">Read More</a>
            </div>
        </div>
    </div>
</main>


<?php
require_once 'inc/footer.php';
?>