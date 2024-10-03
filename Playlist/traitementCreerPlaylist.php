<?php
session_start();
include("config.php");
$dbh = new PDO($dbstr);

$nom_playlist = $_POST['nom_playlist'];

// Validation du nom de la playlist avec regex
if (!preg_match('/^[a-zA-Zéèàêâôûùïöüç\-_\s]*$/', $nom_playlist)) {
    echo "Le nom de la playlist est invalide. Utilisez uniquement des lettres, des espaces, des tirets ou des underscores.";
    exit;
}

// Vérification si le nom de la playlist existe déjà
$queryCheck = "SELECT * FROM pl_playlist WHERE nom = ?";
$stmtCheck = $dbh->prepare($queryCheck);
$stmtCheck->execute([$nom_playlist]);

if ($stmtCheck->fetch()) {
    echo "Le nom de la playlist est déjà utilisé. Veuillez choisir un autre nom.";
    exit;
}

// Insertion de la nouvelle playlist si le nom est valide et non utilisé
$query = "INSERT INTO pl_playlist (nom) VALUES (?)";
$stmt = $dbh->prepare($query);
$stmt->execute([$nom_playlist]);

header('Location: index.php');
