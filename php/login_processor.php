
<?php
    include ('include/favicon.html');
    // creating variables for staff_id and passw
    $staff_id = $_POST["staff_id"];
    $passw = $_POST["passw"];

    // creating a connecting 
    $connect = mysqli_connect("localhost","root","","s.e");

    // verifying if all input are filled
    if(!($connect)){
        die("enter all information".mysqli_connect_error());
    }

    // selecting the data from the database that match the staff_id entered
    // the admin1 table is the one containing the staff members details
    $query = "SELECT * FROM admin1 WHERE staff_id = '$staff_id'";
    $result = mysqli_query($connect,$query);
    $num_rows = mysqli_num_rows($result);

    // checking if the staff_id exists in the database
    if ($num_rows == 0) {
        echo "Invalid staff ID.";
    } else {
        // fetching the row that contains the staff_id entered
        $row = mysqli_fetch_assoc($result);
        // verifying if the password entered matches the hashed password in the database
        if (password_verify($passw, $row["passw"])) {
            // password is correct, do something
            echo "<h2 style='text-align: center; color: green;'>Login successful.</h2>";
            session_start();
            header("refresh:1; url=dashboard.php");
            $_SESSION['adminName']=$staff_id;
        } else {
            // password is incorrect
            echo "Incorrect password.";
        }
    }

    mysqli_close($connect);
?>