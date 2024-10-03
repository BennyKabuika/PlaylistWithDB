<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Options de Retrait</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <div class="header-container">
        <h1>Options de Retrait</h1>
        <form action="choisirActionRetrait.php" method="post">
            <input type="radio" id="retirerMorceauPlaylist" name="action" value="retirerMorceauPlaylist" checked>
            <label for="retirerMorceauPlaylist">Retirer un morceau d'une playlist</label><br>

            <input type="radio" id="retirerMorceau" name="action" value="retirerMorceau">
            <label for="retirerMorceau">Retirer un morceau</label><br>

            <input type="radio" id="retirerPlaylist" name="action" value="retirerPlaylist">
            <label for="retirerPlaylist">Retirer une playlist</label><br>

            <input type="submit" value="Choisir">
        </form>
    </div>
</header>
</body>
</html>
