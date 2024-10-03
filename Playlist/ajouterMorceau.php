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
        <h1>Ajouter un morceau</h1>
        <form action="traitementMorceau.php" method="post">
            <label for="nom">Nom du morceau:</label><input type="text" name="nom">
            <label for="fich">Fichier:</label><input type="text" name="fich"><br>
            <label for="note">Note: </label><input type="number" name="note" min="1" max="5"><br>
            <input type="submit" value="Ajouter">
        </form>
    </div>
</header>
</body>
</html>