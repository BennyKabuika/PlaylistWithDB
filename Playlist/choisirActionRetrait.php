<?php
session_start();

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'retirerMorceauPlaylist':
            header('Location: retirerMorceauPlaylist.php');
            break;
        case 'retirerMorceau':
            header('Location: retirerMorceau.php');
            break;
        case 'retirerPlaylist':
            header('Location: retirerPlaylist.php');
            break;
        default:
            echo "Action non reconnue.";
            break;
    }
} else {
    die("Aucune action sélectionnée.");
}