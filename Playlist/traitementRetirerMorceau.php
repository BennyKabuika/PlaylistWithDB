<?php
session_start();
include("config.php");
$dbh = new PDO($dbstr);

$morceau_id = $_POST['morceau_id'];

// Supp le morceau de toutes les playlists
$queryRemoveFromPlaylists = "DELETE FROM pl_listmorc WHERE mid = ?";
$stmtRemoveFromPlaylists = $dbh->prepare($queryRemoveFromPlaylists);
$stmtRemoveFromPlaylists->execute([$morceau_id]);

// Supp le morceau
$queryRemoveMorceau = "DELETE FROM pl_morceaux WHERE mid = ?";
$stmtRemoveMorceau = $dbh->prepare($queryRemoveMorceau);
$stmtRemoveMorceau->execute([$morceau_id]);

header('Location: index.php');

