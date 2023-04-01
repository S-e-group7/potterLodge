<?php
    // the backend or the processor valdating the user input and storing it in the database
    // creating variables
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $hname = $_POST["hname"];
    $staff_id = $_POST["staff_id"];
    $passw = "'" . $_POST["passw"] . "'";

    // creating a connecting 
    $connect = mysqli_connect("localhost","root","","s.e");
    // verifivation if all input are filled
    if(!($connect)){
        die("enter all information".mysqli_connect_error());
    }
    if(strlen($staff_id) >= 15){
        die("the staff_id must be below 16".mysqli_connect_error());
    }
    // inserting the data into the database in mysqli server
    $query = "INSERT INTO  admin1(fname,lname,hname,staff_id,passw) VALUES ('$fname','$lname','$hname','$staff_id',$passw)";
    //connecting the $connect to the query of the database
    if(mysqli_query($connect,$query)){
        print("succefull");
        //header()
    }
    mysqli_close($connect);
?>
 

