<?php
session_start();
include("config.php");
$dbh = new PDO($dbstr);

$playlist_id = $_POST['playlist_id'];
$morceau_id = $_POST['morceau_id'];

$query = "DELETE FROM pl_listmorc WHERE pid = ? AND mid = ?";
$stmt = $dbh->prepare($query);
$stmt->execute([$playlist_id, $morceau_id]);

header('Location: index.php');