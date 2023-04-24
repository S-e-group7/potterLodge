
<style>
table {
  border-collapse: collapse;
  width: 100%;
  font-family: Arial, sans-serif;
}

td, th {
  border: 1px solid #ddd;
  padding: 8px;
}

th {
  background-color: #f2f2f2;
  color: #333;
  text-align: left;
}

tr:hover {
  background-color: #f5f5f5;
}

.red {
  color: red;
}

.black {
  background-color: black;
  color: white;
}

.center {
  text-align: center;
}
</style>

<!DOCTYPE html>
<html>
<head>
	<title>Search Results</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">

	<div class="btn">
		<a href="http://localhost/SE_PROJECT/softwareEngineering/php/dashboard.php?">
			<input style="width: 100px; height:50px; background-color:green; color:white; border-radius:2px;" type="button" value="BACK">
		</a>
	</div>
	<br>


<?php
include('include/favicon.html');
// creating a variables of the columns in the database
//$query = $_GET["query"];
$query = isset($_GET['query']) ? $_GET['query'] : '';
$server = "localhost";
$user = "root";
$password = "";
// name given to the database in the php admin page
$database = "s.e";
// creating a connect variable
$connect = new mysqli($server,$user,$password,$database);
// making the search using studen_id and Room_Number in making the search
$sql = "SELECT * FROM db WHERE Student_ID LIKE '%$query%' OR  Room_Number LIKE '%$query%'";
$result = $connect->query($sql);

// display the results in a table
if ($result->num_rows > 0){
    echo "<table border='2px solid' style='width:100%; height:100%;'>";
    echo "<tr><th style='background-color: lightgray; border: 1px solid black;'>First Name</th><th style='background-color: lightgray; border: 1px solid black;'>Last Name</th><th style='background-color: lightgray; border: 1px solid black;'>Student_ID</th><th style='background-color: lightgray; border: 1px solid black;'>Gender</th><th style='background-color: lightgray;'>Phone Number</th><th style='background-color: lightgray;'>Email</th><th style='background-color: lightgray;'>Room Number</th></tr>";
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>".$row["First_Name"]."</td><td>".$row["Last_Name"]."</td><td class='red center black'>".strtoupper($row["Student_ID"])."</td><td>".$row["Gender"]."</td><td>".$row["Phone_Number"]."</td><td>".$row["Email"]."</td><td>".$row["Room_Number"]."</td></tr>";
    }
    echo "</table>";
  } 
  else {
    echo "No results found.";
  }
  
// close the database connection
$connect->close();
?>


</div>
</html>
