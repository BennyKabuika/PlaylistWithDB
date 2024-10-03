<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Playlist</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <div class="header-container">
        <?php
        session_start();
        include("config.php");
        $dbh = new PDO($dbstr);

        // Recup toutes les playlists
        $queryPlaylists = "SELECT * FROM pl_playlist";
        $stmtPlaylists = $dbh->prepare($queryPlaylists);
        if (!$stmtPlaylists->execute()) {
            die("Erreur dans la recup des playlists: " . implode(", ", $dbh->errorInfo()));
        }

        echo "<h1>Liste des Playlists</h1>";

        while ($playlist = $stmtPlaylists->fetch(PDO::FETCH_ASSOC)) {
            echo "<h2>" . htmlspecialchars($playlist['nom']) . "</h2>";

            // Recup les morceaux
            $queryMorceaux = "SELECT m.* FROM pl_morceaux m JOIN pl_listmorc lm ON m.mid = lm.mid WHERE lm.pid = ?";
            $stmtMorceaux = $dbh->prepare($queryMorceaux);
            if (!$stmtMorceaux->execute([$playlist['pid']])) {
                die("Erreur dans la recup des morceaux: " . implode(", ", $dbh->errorInfo()));
            }

            echo "<ul>";
            $hasMorceaux = false;
            while ($morceau = $stmtMorceaux->fetch(PDO::FETCH_ASSOC)) {
                $hasMorceaux = true;
                echo "<li>" . htmlspecialchars($morceau['nom']) . " - " . htmlspecialchars($morceau['fich']) . " (Note: " . htmlspecialchars($morceau['note']) . ")</li>";
            }
            if (!$hasMorceaux) {
                echo "<li>Il n'y a pas encore de morceau dans cette playlist</li>";
            }
            echo "</ul>";
        }?>
    </div>
</header>
</body>
</html>


