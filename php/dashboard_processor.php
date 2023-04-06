<?php
include('include/favicon.html');
// creating a variables of the columns in the database
$query = $_GET["query"];
$server = "localhost";
$user = "root";
$password = "";
// name given to the database in the php admin page
$database = "s.e";
// creating a connect variable
$connect = new mysqli($server,$user,$password,$database);

$sql = "SELECT * FROM db WHERE Student_ID  OR  Room_number LIKE '%$query%'";
$result = $connect->query($sql);

// display the results in a table
if ($result->num_rows > 0){
    echo "<table border='2px solid' style='width:100%; height:100%;'>";
    echo "<tr><th style='background-color: lightgray; border: 1px solid black;'>First Name</th><th style='background-color: lightgray; border: 1px solid black;'>Last Name</th><th style='background-color: lightgray; border: 1px solid black;'>Student_ID</th><th style='background-color: lightgray; border: 1px solid black;'>Gender</th><th>Phone Number</th><th>Email</th><th>Room Number</th><th>Pictures</th></tr>";
    while($row = $result->fetch_assoc()) {
      echo "<tr><td >".$row["First_Name"]."</td><td>".$row["Last_Name"]."</td><td style='color: red; background-color: black;text-align: center;'>".$row["Student_ID"]."</td><td>".$row["Gender"]."</td><td>".$row["Phone_Number"]."</td><td>".$row["Email"]."</td><td>".$row["Room_Number"]."</td><td>".$row["Pictures"]."</td></tr>";
    }
    echo "</table>";
  } 
  else {
    echo "No results found.";
  }
  
// close the database connection
$connect->close();
?>
