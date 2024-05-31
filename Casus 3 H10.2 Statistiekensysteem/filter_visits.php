<?php
include 'config.php';

// Controleren of de maand en het land zijn verzonden via het formulier
if(isset($_POST['month']) && isset($_POST['land'])) {
    $month = $_POST['month'];
    $land = $_POST['land'];

    // Query uitvoeren om gegevens te filteren op maand en land
    $sql = "SELECT * FROM bezoekers WHERE MONTH(datum_tijd) = '$month' AND land = '$land'";
    $result = $conn->query($sql);

    // Controleren of er resultaten zijn
    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Land</th><th>IP-adres</th><th>Provider</th><th>Browser</th><th>Datum/Tijd</th><th>Referer</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["land"]. "</td><td>" . $row["ip_adres"]. "</td><td>" . $row["provider"]. "</td><td>" . $row["browser"]. "</td><td>" . $row["datum_tijd"]. "</td><td>" . $row["referer"]. "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "Geen resultaten gevonden";
    }
}

$conn->close();
?>




<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Bezoekersgegevens Filteren</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="filter_visits.php" method="post">
        <label for="month">Maand </label>
        <input type="number" id="month" name="month" min="1" max="12" required><br>

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

        <input type="submit" value="Filteren">
    </form>
</body>
</html>





