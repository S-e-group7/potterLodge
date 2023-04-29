<!DOCTYPE html>
<html>
<head>
	<title>staff members</title>
	<style>
		
.container {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 50px;
}

.btn {
  margin-bottom: 20px;
}

.logo {
  display: flex;
  justify-content: flex-start;
  margin-bottom: 50px;
}

.side_logo {
  height: 150px;
  width: 150px;
}

table {
  border-collapse: collapse;
  width: 80%;
  max-width: 800px;
}

th, td {
  text-align: left;
  padding: 8px;
}

th {
  background-color: #F5F5F5;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #ddd;
}

input[type=button] {
  border: none;
  border-radius: 3px;
  color: white;
  font-size: 16px;
  padding: 10px 20px;
  cursor: pointer;
}

input[type=button]:hover {
  background-color: #2E8B57;
}



	</style>
</head>
<body>
<div class="btn">
			<a href="http://localhost/SE_PROJECT/softwareEngineering/php/dashboard.php?">
				<input style="width: 100px; height:50px; background-color:green; color:white; border-radius:2px;" type="button" value="BACK">
			</a>
		</div>
    <br>
	<div class="container">
		<div class="logo">
			<div class="dash_logo">
				<img src="images/logo.jpeg" class="side_logo" alt="">
			</div>
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
		$sql = "SELECT fname, lname, staff_id FROM admin1 WHERE fname LIKE '%$query%' OR lname LIKE '%$query%' OR staff_id LIKE '%$query%'";

		$result = $connect->query($sql);

		// display the results in a table
		if ($result->num_rows > 0){
			echo "<table border='2px solid' style='width:100%; height:100%;'>";
			echo "<tr><th style='background-color: lightgray; border: 1px solid black;'>First Name</th><th style='background-color: lightgray; border: 1px solid black;'>Last Name</th><th style='background-color: lightgray; border: 1px solid black;'>Staff ID</th></tr>";
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td style='color: white; background-color: black;text-align: center;'>".strtoupper($row["staff_id"])."</td></tr>";
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
</body>
</html>
