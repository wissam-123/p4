<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Statistiekensysteem</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Over Ons</a></li>
            <li><a href="#">Diensten</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    
    <main>
        <section>
        <h1> cookies opslaan</h1>
        <form action="store_visit.php" method="post">
            <div class="form-group">
              
                <label for="land">Land:</label>
                <!-- <input type="text" id="land" name="land" required><br> -->
                <select id="land" name="land">
            <option value="">Alle landen</option>
            <?php
            // Array met landen
            $countries = array(
                "Nederland",
                "België",
                "Duitsland",
                // Voeg hier meer landen toe indien nodig
            );

            // Loop door de array met landen en maak opties voor de dropdown-lijst
            foreach ($countries as $country) {
                echo '<option value="' . $country . '">' . $country . '</option>';
            }
            ?>
        </select><br>

            <div class="form-group">
                <label for="provider">Provider:</label>
                <input type="text" id="provider" name="provider" required>
            </div>

            <div class="form-group">
                <label for="browser">Browser:</label>
                <input type="text" id="browser" name="browser" required>
            </div>

            <div class="form-group">
                <label for="referer">Website waarvandaan de bezoeker is gekomen:</label>
                <input type="text" id="referer" name="referer" required>
            </div>

            <div class="form-group">
                <input type="submit" value="Opslaan">
            </div>
        </form>
        </section>
        <section>
            <h2>ben je admin,je inloggen en dat fliteren</h2>
            <?php
       // Redirect naar beheers pagina
             echo '<a href="filter_visits.php">kijk naar data</a>';
?>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Statistiekensysteem. Alle rechten voorbehouden.</p>
        <ul>
            <li><a href="privacy.html">Privacybeleid</a></li>
            <li><a href="terms.html">Algemene Voorwaarden</a></li>
        </ul>
    </footer>
</body>
</html>



