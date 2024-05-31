<?php
include 'config.php';

$land = $_POST['land'];
$ip_adres = $_SERVER['REMOTE_ADDR'];
$provider = $_POST['provider'];
$browser = $_POST['browser'];
$datum_tijd = date('Y-m-d H:i:s');
$referer = $_POST['referer'];

$sql = "INSERT INTO bezoekers (land, ip_adres, provider, browser, datum_tijd, referer) 
        VALUES ('$land', '$ip_adres', '$provider', '$browser', '$datum_tijd', '$referer')";

if ($conn->query($sql) === TRUE) {
    echo "Nieuw record succesvol toegevoegd";
} else {
    echo "Fout: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<?php
// Redirect naar de homepage
echo '<a href="index.php">Ga terug naar de homepage</a>';
?>
