<?php
 
 
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  echo "Er is gepost<br>";
//   print_r($_POST);

  //- connect database
include "connect.php";

// maak een query
$sql = " INSERT into docentziek ( docent_naam, datum )
      VALUES( :docent_naam, :datum );";
 
//prepare query
$query = $conn-> prepare($sql);

//uitvoeren 
$status = $query -> execute(
  [
  ':docent_naam'=> $_POST['docent_naam'],
  ':datum'=> $_POST['datum'],

  ]
);

// test of insert gelukt is 
if($status== true){
  echo" toevoegen is gelukt .  <a href='select.php'>Terug naar homepage</a>";
exit(); // Zorg ervoor dat er geen code meer wordt uitgevoerd na de redirect
} else{
  echo"toevoegen is niet gelukt";

}
  
}

?>
 
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Formulier</title>
</head>
<body>
 
<h1>docent ziekmelding </h1>
 
<form action="" method="post" enctype="multipart/form-data">
  <label for="docent_naam">docent_naam:</label>
  <input type="text" id="docent_naam" name="docent_naam" required><br>
 
  <label for="datum">datum:</label>
  <input type="text" id="datum" name="datum" required><br>
 
  <input type="submit" value="Voeg Toe">
</form>
 
</body>
</html>


<?php
// //- connect database
include "connect.php";

// maak een query
$sql = " SELECT * FROM docentziek ";
 
//prepare query
$stmt = $conn-> prepare($sql);

//uitvoeren 
$stmt->execute();
//ophalen alle data 
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

// print_r($result);

// print de data rij voor rij 

echo"<br>";
 echo"<table border=1px>";
 echo "<br>";
echo "<table border=1px>";
echo "<tr>";
echo "<th>id</th>";
echo "<th>docent_naam</th>";
echo "<th>datum</th>";
echo "</tr>";
foreach($result as $row){
    echo"<tr>";
    echo "<td>". $row['id'] . "</td>";
    echo "<td>".$row['docent_naam'] . "</td>";
    echo"<td>". $row['datum'] . "</td>";
    // echo"<td><a href='edit.php?id=" . $row['id'] . "'>" ."</a></td>";
    echo"<td><a href='delet.php?id=" . $row['id'] . "'>" ."delete</a></td>";


    echo"<tr>";
}

echo"</table>";
 ?>

 