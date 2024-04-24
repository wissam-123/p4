<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>website voor ziekmeldig docenten</h1>
    <a href="insert.php"> admin</a> <br>
    <a href="select.php"> leerling</a>
    
</body>
</html>


<?php
//- connect database
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
    // echo"<td><a href='edit.php?id=" . $row['id'] . "'>" ."wijzig</a></td>";
    // echo"<td><a href='delet.php?id=" . $row['id'] . "'>" ."delete</a></td>";


    echo"<tr>";
}

echo"</table>";
 ?>
