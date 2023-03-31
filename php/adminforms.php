<!-- STARTING THE PHP HERE-->
<?php
    // the backend or the processor valdating the user input and storing it in the database
    // creating variables
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $hname = $_POST["hname"];
    $staff_id = $_POST["staff-id"];

    // creating a connecting 
    $connect = mysqli_connect("localhost","root","","php_project");
    // verifivation if all input are filled
    if(!($connect)){
        die("enter all information".mysqli_connect_error());
    }
    if(strlen($phonenumber) > 20){
        die("the phone must be below 20".mysqli_connect_error());
    }
    // inserting the data into the database in mysqli server
    $query = "INSERT INTO  php_project_table (fname,lname,email,phonenumber) VALUES ('$fname','$lname','$hname','$staff_id')";
    //connecting the $connect to the query of the database
    if(mysqli_query($connect,$query)){
        print("succefull");
    }
    mysqli_close($connect);
?>
   // the backend or the processor valdating the user input and storing it in the database

