<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Retirer un morceau</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <div class="header-container">
        <h1>Retirer un morceau</h1>
        <form action="traitementRetirerMorceau.php" method="post">
            <label for="morceau_id">Retirer morceau :</label>
            <select name="morceau_id" required>
                <?php
                include("config.php");
                $dbh = new PDO($dbstr);
                $query = "SELECT mid, nom FROM pl_morceaux";
                $stmt = $dbh->prepare($query);
                $stmt->execute();
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<option value='" . $row['mid'] . "'>" . htmlspecialchars($row['nom']) . "</option>";
                }
                ?>
            </select><br>
            <input type="submit" value="Retirer">
        </form>
    </div>
</header>
</body>
</html>
