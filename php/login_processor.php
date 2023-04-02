<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: dashboard.php");
    exit;
}

// Check if the login form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve the username/email and password from the form data
    $staff_id = $_POST["staff_id"];
    $password = $_POST["password"];

    // Create a database connection
    $conn = mysqli_connect("localhost", "username", "password", "s.e");

    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Create a SQL query to check if the username/email and password match a record in the database
    $sql = "SELECT staff_id FROM admin1 WHERE (staff_id = ? ) AND passw = ?";

    // Prepare the query for execution
    $stmt = mysqli_prepare($conn, $sql);

    // Bind the parameters to the query
    mysqli_stmt_bind_param($stmt, "sss", $staff_id,$passw);

    // Execute the query
    mysqli_stmt_execute($stmt);

    // Get the result of the query
    $result = mysqli_stmt_get_result($stmt);

    // Check if the query returned a matching record
    if (mysqli_num_rows($result) == 1) {

        // Fetch the user data from the query result
        $row = mysqli_fetch_assoc($result);

        // Set session variables to indicate that the user is logged in
        $_SESSION["loggedin"] = true;
        $_SESSION["staff_id"] = $row["staff_id"];
        $_SESSION["passw"] = $row["passw"];

        // Redirect the user to the home page or dashboard
        header("location: dashboard.php");
        exit;
    } else {
        // Display an error message if the login details are incorrect
        $login_error = "Invalid staff_id or password.";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
