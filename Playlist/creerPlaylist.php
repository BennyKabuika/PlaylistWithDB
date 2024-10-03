<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Créer une Playlist</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <div class="header-container">
        <h1>Créer une Playlist</h1>
        <form action="traitementCreerPlaylist.php" method="post">
            <label for="nom_playlist">Nom de la playlist:</label>
            <input type="text" name="nom_playlist" required><br>
            <input type="submit" value="Créer">
        </form>
    </div>
</header>
</body>
</html>
