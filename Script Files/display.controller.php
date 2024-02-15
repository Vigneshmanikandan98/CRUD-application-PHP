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
  $stateAb = filter_input(INPUT_POST, "stateAb");
  
  if($query = "SELECT cID, name, street, city, stateAb, zipcode FROM customer WHERE stateAb = :stateAb")  // To get the Customer Records
  {
      $stmt = $conn->prepare($query);
      $stmt->execute(array(":stateAb" => $stateAb));
      $rows = $stmt->fetchALL(PDO::FETCH_ASSOC);

    if(count($rows)<=0){ 
      echo "No Customer Records available in the State $stateAb.";
      die();
    }
    
  }
}
?>

<html>
<head>
  <title>Customer Records</title>
  <style type = "text/css">
    table{
      border-collapse: collapse;
      width: 75%;
      font-family: monospace;
      font-size: 20px;
      text-align: left;
    }
    tr:nth-child(even){background-color: #f2f2f2}
  </style>
</head>
<body>
  <table>
    <thead>
      <tr>
        <th>Customer ID</th>
        <th>Customer Name</th>
        <th>Street</th>
        <th>City</th>
        <th>State Abbreviation</th>
        <th>Zipcode</th>
      </tr>
    </thead>
    <?php
        foreach ($rows as $row) {
          echo "<tr><td>".$row["cID"]."</td><td>".$row["name"]."</td><td>".$row["street"]."</td><td>".$row["city"]."</td><td>".$row["stateAb"]."</td><td>".$row["zipcode"]."</td></tr>";
        }
        echo "</table>";
    ?>
    </table>
  </body>
</html>
