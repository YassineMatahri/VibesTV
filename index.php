<!-- VOICI MON INDEX -->

<?php
// ######## TRAITEMENT DU PHP ##########
require_once 'inc/init.php';


// ######## AFFICHAGE ##########
$title = "Vibes TV";
require_once 'inc/header.php';
?>

<!-- Lien vers mon fichier CSS -->
<link rel="stylesheet" href="css/style.css">



<!-- INDEX EN HTML -->
<main>
    <h1>Bienvenue chez Vibes TV</h1>
    <div class="slider">
        <img src="img/image-slider1.jpg" alt="image avec un micro carré" class="img__slider active">
        <img src="img/image-slider2.jpg" alt="image avec un instrument de musique-batterie" class="img__slider">
        <img src="img/image-slider3.jpg" alt="image haut-parleur de musique" class="img__slider">
        <img src="img/image-slider4.jpg" alt="image avec un micro" class="img__slider">
        <div class="suivant">
            <i class="fa-solid fa-circle-arrow-right"></i>
        </div>
        <div class="precedent">
            <i class="fa-solid fa-circle-arrow-left"></i>
        </div>
    </div>
    <!-- Text Principal -->
    <div class="textPrincipal mt-5 ">
        <p>Lorem ipsum dolor sit amet. Alias nihil est quidem dolore hic assumenda galisum cum nostrum nesciunt!
            In repellat inventore non suscipit fugit vel impedit iusto ab nulla aliquid eos minus totam ut ipsum
            earum. Ad ipsum dolor At quis suscipit sed dolores perferendis aut perferendis ipsa et ducimus
            quaerat et itaque ipsa?
            Qui explicabo fugit est aliquid obcaecati qui soluta quam qui esse alias. Et molestias dolores ut
            corporis voluptates ad asperiores consequuntur ut error quia et tempore voluptas sed deleniti iure!
            Sit harum delectus vel voluptatibus iste ut maiores voluptas sit ratione sequi hic error dolorum sit
            quas sunt! Qui sint provident aut recusandae maiores rem nisi laudantium quo quasi provident sit iusto
            magni.
            Et laborum iure eos natus eveniet rem quod ratione eum reprehenderit dolore 33 consequatur voluptas?
            At quia voluptas est quasi numquam a exercitationem cupiditate et dolor provident et dolor magnam.
            Qui tenetur quos hic molestiae quibusdam et explicabo fuga eos dolor deserunt.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam sit distinctio rerum? Eaque, natus
            dolore voluptatibus nihil voluptas tenetur ducimus quas, expedita reprehenderit, at eos eius asperiores
            voluptates neque odio!</p>
    </div>
</main>

<?php
require_once 'inc/footer.php';
?>