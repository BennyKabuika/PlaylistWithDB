<?php
session_start();
include("config.php");
$dbh = new PDO($dbstr);

$playlist_id = $_POST['playlist_id'];
$morceau_id = $_POST['morceau_id'];

// Verif si le morceau est deja dans la playlist
$queryCheck = "SELECT * FROM pl_listmorc WHERE pid = ? AND mid = ?";
$stmtCheck = $dbh->prepare($queryCheck);
$stmtCheck->execute([$playlist_id, $morceau_id]);
if ($stmtCheck->fetch()) {
    die("Le morceau est deja dans la playlist !");
}

// Ajt le morceau a la playlist
$query = "INSERT INTO pl_listmorc (pid, mid) VALUES (?, ?)";
$stmt = $dbh->prepare($query);
$stmt->execute([$playlist_id, $morceau_id]);

header('Location: index.php');
