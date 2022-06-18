<?php
//  --------------  Connexion a la BDD  --------------

try {
    $bdd = new PDO('mysql:host=localhost;dbname=vibes-tv', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING]);
} catch (Exception $e) {
    die('ERREUR CATCH : ' . $e->getMessage());
}

// J'ai ici ajouté le fichier function.php

require_once 'function.php';

// Message Variable pour les messages error et success

$errorMessage = '';
$successMessage = '';

session_start();

$base_url = substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT']));
$base_url = str_replace('inc', '', $base_url);
