<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potters Lodge</title>
    <link rel="shortcut icon" href="images/logo.jpeg" type="image/x-icon">
    <script type="text/javascript">
		function validateForm() {
			var staff_id = document.forms["myForm"]["staff_id"].value;
			var passw = document.forms["myForm"]["passw"].value;

			if (staff_id == "" || passw == "") {
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
    <!-- block css styling -->
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Courier New', Courier, monospace;
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

.staff_id {
    background-color: rgb(236, 236, 236);
    height: 60px;
    width: 80%;
    margin: auto;
    text-align: center;
}

input {
    background-color: rgb(214, 214, 214);
    width: 300px;
    margin: 7px 0px;
    height: 40px;
    outline: none;
    border: none;
    padding: 0px 10px;
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

.right {
    margin-top: 2rem;
}

.container {
    width: 100vw;
    height: 100vh;
    display: flex;
}

.side {
    background-color: rgb(2, 2, 59);
    width: 20%;
    height: 100vh;
}

.dash {
    width: 80%;
    height: 100vh;
}

.side_logo {
    width: 100px;
    height: 100px;
    border-radius: 100%;
    text-align: center;
}

.dash_logo {
    text-align: center;
    margin-top: 70px;
}

.side_button {
    width: 200px;
    height: 40px;
    border: none;
    color: white;
    border-radius: 8px;
    margin-top: 2rem;
    background-color: #125DCD;
}

.logout {
    margin-top: 60%;
    text-align: center;
}

.user {
    width: 50px;
    height: 50px;
}

.top_bar {
    height: 70px;
    width: 100%;
    display: flex;
    justify-content: space-between;
}

.profile {
    display: flex;
    width: 100%;
    margin-left: 40px;
    align-items: center;
}

.date {
    margin-left: 50px;
    margin-top: 30px;
    color: rgb(153, 153, 153);
}

.welcome {
    margin-top: 10px;
    color: rgb(2, 2, 59);
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
    
}
    </style>
</head>

<body>
    
<section>
    <img src="images/Oguaa.jpg" style="object-fit: cover;" alt="">
    <div class="right">
        <div class="icon">
            <img src="images/logo.jpeg" class="logo" alt="">
        </div>
        <div class="text_one">
            <h5 class="dont">Don't have an account? </h5>
            <a href="http://localhost/SE_PROJECT/softwareEngineering/php/signup.php">
                <h5 class="sign">Sign up</h5>
            </a>
        </div>
        <br><br><br><br>
        <form name='myForm' action="login_processor.php" method="POST" style="margin-left:185px;" onsubmit=" return validateForm()">
            <div class="form">
                <input type="text" name='staff_id' placeholder="Staff Id"><br>
                <input type="text" name="passw" placeholder="password"><br>
                <input style='background-color:rgb(2, 2, 59);color:white' type="submit" value="LOG-IN">
            </div>
        </form>
        <br><br>
        <div class="text_two">
            <h5 class="dont">Forgot password? </h5>
            <h5 class="sign">Reset here</h5>
        </div>
    </div>
</section>

    
</body>

</html>