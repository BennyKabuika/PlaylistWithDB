<?php
session_start();
include("config.php");
$dbh=new PDO($dbstr);

$nom = $_POST['nom'];
$fich = $_POST['fich'];
$note = $_POST['note'];
// Validation du nom du morceau
if (!preg_match('/^[a-zA-Z0-9\séèàêâôûùïöüç\-_]+$/', $nom)) {
    echo "Nom de morceau incorrect. Utilise uniquement des lettres, des chiffres et des espaces.";
    exit;
}

// Validation de la note
if (!preg_match('/^[1-5]$/', $note)) {
    echo "Note incorrect. La note doit être un nombre entre 1 et 5.";
    exit;
}
// Validation du nom de fichier

if (strpos($fich, '../') !== false || !preg_match('/\.(mp3|ogg)$/i', $fich)) {
    echo "Nom de fichier invalide";
} else {
    $query = "INSERT INTO pl_morceaux (nom, fich, note) VALUES (?, ?, ?)";
    $stmt = $dbh->prepare($query);
    $stmt->execute([$nom, $fich, $note]);

    header('Location: index.php');
}

