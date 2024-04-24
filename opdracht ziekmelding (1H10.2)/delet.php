<?php
// Test of er data gepost is
if
    (isset($_GET['id']))
 {
//connect database  
include
"connect.php"; 
// Maak een query 
$sql =
"
 DELETE FROM docentziek
  WHERE id = :id";
// Prepare query 
$stmt =
$conn->prepare($sql);
// Uitvoeren
   
$stmt->execute([
        
':id'=>$_GET['id']
    ]);


   
if ($stmt->rowCount()
 == 1) {
       
echo
'<script>alert("docent is deleted")</script>';
       
echo
"<script> location.replace('select.php'); </script>";
       
    }
else {
       
echo
"Delete is fout gegaan<br>";
    }
}


?>
