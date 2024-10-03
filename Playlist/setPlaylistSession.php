<?php
session_start();

if (isset($_POST['playlist_id'])) {
    $_SESSION['playlist_id'] = $_POST['playlist_id'];
    header('Location: ajouterMorceauPlaylist.php');
} else {
    die("Pas d'ID de playlist");
}
