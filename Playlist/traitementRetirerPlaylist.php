<?php
session_start();
include("config.php");
$dbh = new PDO($dbstr);

$playlist_id = $_POST['playlist_id'];

// Supp les morceaux de la playlist
$queryDeleteMorceaux = "DELETE FROM pl_listmorc WHERE pid = ?";
$stmtDeleteMorceaux = $dbh->prepare($queryDeleteMorceaux);
$stmtDeleteMorceaux->execute([$playlist_id]);

// Supp la playlist
$queryDeletePlaylist = "DELETE FROM pl_playlist WHERE pid = ?";
$stmtDeletePlaylist = $dbh->prepare($queryDeletePlaylist);
$stmtDeletePlaylist->execute([$playlist_id]);

header('Location: index.php');

