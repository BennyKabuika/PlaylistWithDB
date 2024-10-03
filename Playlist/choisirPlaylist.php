<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Choisir une Playlist</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <div class="header-container">
        <h1>Choisir une Playlist</h1>
        <form action="setPlaylistSession.php" method="post">
            <label for="playlist_id">ID de la playlist:</label>
            <input type="number" name="playlist_id" required><br>
            <input type="submit" value="Choisir">
        </form>
    </div>
</header>
</body>
</html>