<?php
/*
 * 5331 - 005 - Database Systems
 * Vignesh Manikandan - 1002012757
 * Ruban Eswaravelu - 1002018133
*/
$host = "localhost:3306";
$dbusername = "root";
$dbpassword = "";
$dbname = "art gallery";
// To establish connection
$conn = new PDO('mysql:host='.$host.';dbname='.$dbname, $dbusername, $dbpassword);
// To check the connection
if(!$conn) {
  die("Connection failed");
} 
else
{
  $stateAb = filter_input(INPUT_POST, 'stateAb');
  $stateName = filter_input(INPUT_POST, 'stateName');

  $query = "INSERT INTO state (stateAb, stateName) values('$stateAb','$stateName')";  //SQL Query to Insert the state
  if ($conn->query($query)) { //Output when Inserted successfully
    echo "Inserted $stateName Successfully.";
  } 
  else { //Output when facing error
    echo "ERROR: ". $query ,"".$conn->error;
    }
  }
?>
