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

  $query = "UPDATE state SET stateAb = '$stateAb' WHERE stateName = '$stateName'";  //SQL Query to update the stateAb
 
  if ($conn->query($query)) { //Output when updated successfully
    echo "Updated the abbreviation for $stateName as $stateAb successfully.";
  } 
  else { //Output when facing error
    echo "ERROR: ". $query ,"".$conn->error;

    }
  }
?>