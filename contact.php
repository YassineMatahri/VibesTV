<!-- La page Contact -->

<?php
// ######## TRAITEMENT DU PHP ##########
require_once 'inc/init.php';

//  ------------ 3 - Traitement des données reçu dans le formulaire
if (!empty($_POST)) {
    foreach ($_POST as $key => $value) {
        $_POST[$key] = str_replace(' ', '', $value);
    }


    foreach ($_POST as $key => $value) {
        $_POST[$key] = htmlspecialchars($value, ENT_QUOTES);
    }

    //----3.1 - Contrôle des données entrée par l'utilisateur



    if (empty($_POST['nom']) || strlen(trim($_POST['nom'])) > 20) {
        $errorMessage .= "Le nom doit contenir au maximum 20 caractères <br>";
    }

    if (empty($_POST['prenom']) || strlen(trim($_POST['prenom'])) > 20) {
        $errorMessage .= "Le prenom doit contenir au maximum 20 caractères <br>";
    }

    if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errorMessage .= "L'email n'est pas valide <br>";
    }

    if (empty($_POST['telephone']) || strlen($_POST['telephone']) != 10 || !is_numeric($_POST['telephone'])) {
        $errorMessage .= "Le numéro de téléphone n'est pas valide <br>";
    }

    if (empty($_POST['objet']) || strlen(trim($_POST['objet'])) > 20) {
        $errorMessage .= "L'objet doit contenir au maximum 20 caractères <br>";
    }

    if (empty($_POST['description']) || strlen($_POST['description']) < 4) {
        $errorMessage .= "Merci d'indiquer votre message <br>";
    }

    if (empty($errorMessage)) {


        $requete = $bdd->prepare("INSERT INTO contact(nom, prenom, email, telephone, objet, description,date_enregistrement) VALUES ( :nom, :prenom, :email, :telephone, :objet, :description, :date_enregistrement)");
        $result = $requete->execute([
            'nom' => $_POST['nom'],
            'prenom' => $_POST['prenom'],
            'email' => $_POST['email'],
            'telephone' => $_POST['telephone'],
            'objet' => $_POST['objet'],
            'description' => $_POST['description'],

            'date_enregistrement' => date('Y-m-d H:i:s')
        ]);
    }

    if ($result) {
        echo '<div class="alert alert-success col-6 mx-auto text-center">';
        echo "votre message a bien été envoyer !";
        echo '</div>';
        header('location:contact2.php');
    } else {
        $errorMessage .= "Erreur lors de la prise de contact veuillez réessayer <br>";
    }
}



// ######## AFFICHAGE ##########
$title = "Vibes TV - Contact";
require_once 'inc/header.php';
?>

<!-- Lien vers mon fichier CSS -->
<link rel="stylesheet" href="css/contact.css">

<!-- CONTACT EN HTML -->
<main>
    <h1>Nous Contacter</h1>

    <!-- Le formulaire de contact -->
    <div class="row">
        <div class="col-6">
            <?php
            if (!empty($errorMessage)) {
                echo '<div class="alert alert-danger col-6 mx-auto text-center">';
                echo $errorMessage;
                echo '</div>';
            }

            ?>

            <form action="" class="col-6 mx-auto mt-5" method="post">


                <label for="nom" class="form-label">Nom</label>
                <input type="text" name="nom" id="nom" class="form-control" value="<?= $_POST['nom'] ?? '' ?>">

                <label for="prenom" class="form-label">Prenom</label>
                <input type="text" name="prenom" id="prenom" class="form-control" value="<?= $_POST['prenom'] ?? '' ?>">

                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="<?= $_POST['email'] ?? '' ?>" required>

                <label for="telephone" class="form-label">Téléphone</label>
                <input type="tel" name="telephone" id="telephone" class="form-control" value="<?= $_POST['telephone'] ?? '' ?>">

                <label for="objet" class="form-label">Objet</label>
                <input type="text" name="objet" id="objet" class="form-control" value="<?= $_POST['objet'] ?? '' ?>">

                <label for="description" class="form-label">Message</label>
                <textarea type="text" name="description" id="description" class="form-control" value="<?= $_POST['description'] ?? '' ?>" required></textarea>


                <div class="d-flex justify-content-center mt-2 mb-2">
                    <button class="btn btn-danger">ENVOYER</button>
                </div>


            </form>
        </div>

        <div class="col-6 p-5">
            <img src="img/Contact.jpg" alt="Femme sur son tel" width="100%">
        </div>

    </div>



</main>

<?php
require_once 'inc/footer.php';
?>