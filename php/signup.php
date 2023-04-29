<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potters Lodge</title>
    <link rel="shortcut icon" href="images/logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="style.c">
    <script type="text/javascript">
		function validateForm() {
			var fname = document.forms["myForm"]["fname"].value;
			var lname = document.forms["myForm"]["lname"].value;
			var hname = document.forms["myForm"]["hname"].value;
			var staff_id = document.forms["myForm"]["staff_id"].value;
			var passw = document.forms["myForm"]["passw"].value;

			if (fname == "" || lname == "" || hname == "" || staff_id == "" || passw == "") {
				alert("All fields must be filled out");
				return false;
			}

			if (staff_id.length >= 15) {
				alert("The staff ID must be below 16 characters");
				return false;
			}

			return true;
		}
	</script>

    <style>
        * {
    margin: 0;
    padding: 0;
    outline: none;
    box-sizing: border-box;
    text-decoration: none;
    list-style: none;
    font-family: 'Courier New', Courier, monospace
}

img {
    width: 50vw;
    height: 100vh;
    object-fit: cover;
}

section {
    display: grid;
    grid-template-columns: 1fr 1fr;
}

.logo {
    width: 150px;
    height: 150px;
    margin: auto;
    border-radius: 400px;
}


input {
    background-color: rgb(214, 214, 214);
    width: 300px;
    margin: 7px 0px 7px 0px;
    height: 40px;
    outline: none;
    
    padding: 0px 10px 0 10px;
    border-radius: 8px;
}

.text_one {
    margin-left: 200px;
    display: flex;
    margin-top: 50px;

}

.text_two {
    display: flex;
    margin: 0.5rem;
    margin-left: 16rem;
    margin-top: 30px;

}

.dont {
    color: gray;
}

.sign {
    color: rgb(2, 2, 59);
}

.sign_button {
    width: 300px;
    height: 40px;
    border: none;
    color: white;
    border-radius: 8px;
    margin-top: 2rem;
    background-color: rgb(2, 2, 59);
}

.icon {
    text-align: center;
}

.form {
    text-align: center;
    margin-top: 10px;
}
form {
    background-color: #e9e9e9;
    width: 300px;
    height: 44px;
    border-radius: 5px;
    display: flex;
    flex-direction: row;
    align-items: center;
    margin-top: 10px;
    margin-right: 20px;
}

    </style>
</head>

<body>
    <section>
        <img src="images/Oguaa.jpg" alt="">




        <div class="right">
            <div class="icon"><img src="images/logo.jpeg" class="logo" alt=""></div>

            <div class="text_one">
                <h5 class="dont">Already have an account? </h5>
                <a href="login.php">
                    <h5 class="sign">Login</h5>
                </a>
            </div>
            <br><br><br><br><br><br><br><br><br>
            <form name='myForm' action="adminforms.php" method="POST" style="margin-left:200px;" onsubmit="return validateForm()">
                <div class="form">   
                    <input type="text" name="fname" placeholder="First Name"><br>
                    <input type="text" name="lname" placeholder="Last Name"><br>
                    <input type="text" name="hname"placeholder="Enter Hall"><br>
                    <input type="text" name="staff_id" placeholder="Staff Id"><br>
                    <input type="text" name="passw" placeholder="Password"><br>
                 <input style='background-color:rgb(2, 2, 59);color:white' type="submit" value="SIGN UP">
                 </div>
            </form>
            
        </div>
    </section>
    
</body>

</html>