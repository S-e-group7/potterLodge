
<?php
include('conn.php');

    session_start();
    $admin=$_SESSION['adminName'];
    # Query the database to retrieve the first and last name of the admin
$sql = "SELECT fname, lname FROM admin1 WHERE staff_id = '$admin'";
$result = mysqli_query($conn, $sql);

# Get the admin's first and last name from the query result
$row = mysqli_fetch_assoc($result);
$fname = $row['fname'];
$lname = $row['lname'];


      ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-page</title>       
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="shortcut icon" href="images/logo.jpeg" type="image/x-icon">
    
</head>

<body>
    <section>
        <div class="container">

            <div class="side">
                <div class="dash_logo"> <img src="images/logo.jpeg" class="side_logo" alt=""></div>
                <div class="side_buttons">
                    <br><br>
                
                        <form style=" width: fit-content" action="student_db.php" method="GET">
                            <input style="background-color:blue; width:200px;   cursor:pointer;" type="submit" value="Student">
                        </form>
                    <br>
                        <form style=" width: fit-content" action="staff_db.php" method="GET">
                            <input style="background-color:blue; width:200px;   cursor:pointer;" type="submit" value="Staff">
                        </form>
                    <br>
                <!--

                        <form style=" width: fit-content" action="student_db.php" method="GET">
                            <input style="background-color:blue; width:200px;   cursor:pointer;" type="submit" value="Room">
                        </form>

                 -->

                </div>
                <div  style="margin-left:38px ;" class="logout">
                    <form style="width:fit-content;" action="logout.php" method="POST">
                        <input style="background-color:blue; width:200px;   cursor:pointer;" type="submit" value="LOGOUT">
                    </form>
                </div>
            </div>
            <div class="dash">
                <div class="top_bar">
                    <div class="profile">
                        <img src="images/icons8-user-64.png" class="user" alt="">
                        <!--h2 class="username"><?php echo $fname; ?></h2> -->

                    </div>
                    <div search_section>
                        <form  style="background-color:#125DCD" id="form" role="search" method="GET" action="dashboard_processor.php">
                        <input type="text" id="query" placeholder="Search..."> 
                        </form>
                    </div>

                    <!-- <div class="search_bar">
                        <input type="text" placeholder="Search">
                    </div> -->
                </div>
                <hr>
                <div class="date">
                    <h5><?php echo date('D d, M Y'); ?></h5>
                    <h1 class="welcome" style="font-family:fantasy;">Welcome back <?php echo $lname . " " . $fname; ?></h1>
                </div>

                <div class="search_result">


                    <!-- <div class="stu_cards"> -->
                    <div class='loader'>
                        
                    </div>

                   
                 
             


                </div>

            </div>

        </div>

        </div>

    </section>
<script src='jquery.js'></script>
<script src='dash.js'></script>


</body>

</html>