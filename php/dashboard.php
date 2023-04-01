<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/logo.jpeg" type="image/x-icon">
    
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

.staff_id {

    background-color: rgb(236, 236, 236);
    height: 60px;
    width: 80%;
    text-align: center;
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

/* div {
    margin-top: 5rem;
    margin-left: 12rem;
}
 */

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

.side_buttons {
    width: 200px;
    margin: auto;

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
    margin-right: 20px;
}

.search_bar {
    all: unset;
    font: 16px system-ui;
    color: #1a1a1a;
    height: 100%;
    width: 100%;
    padding: 6px 10px;
}

::placeholder {
    color: #686868;
    opacity: 0.7;
}

.search_icon {
    width: 20px;
    height: 20px;
    margin-right: 10px;
}

.search_section .form {
    display: flex;
    align-items: center;
    margin-top: 10px
}

.search_result {
    background-color: rgb(237, 237, 237);
    height: 70%;
    width: 90%;
    margin: auto;
    border-radius: 20px;
    margin-top: 50px;
    display: grid;
    grid-template-columns: auto auto;
    padding: 10px;
}

.stu_card {
    background-color: rgba(255, 255, 255, 0.8);
    border: 1px solid rgba(255, 255, 255, 0.8);
    padding: 15px;
    font-size: 30px;
    display: flex;
    margin: 10px;
    border-radius: 10px;

}

.stu_img {
    width: 130px;
    height: 130px;
    margin: auto;
}

.stu_ID {
    margin-top: 5px;
}

.stu_phone {
    margin-top: 5px;

}

.stu_name {
    margin-top: 5px;
}

.details {
    margin: auto;

}


    </style>
</head>

<body>
    <section>
        <div class="container">

            <div class="side">
                <div class="dash_logo"> <img src="images/logo.jpeg" class="side_logo" alt=""></div>
                <div class="side_buttons">
                    <button class="side_button">Students</button>
                    <button class="side_button">Staff</button>
                    <button class="side_button">Rooms</button>

                </div>
                <div class="logout">
                    <a href="/login.html"><button class="side_button">LOG OUT</button></a>
                </div>
            </div>
            <div class="dash">
                <div class="top_bar">
                    <div class="profile">
                        <img src="images/icons8-user-64.png" class="user" alt="">
                        <h3 class="username">Micheal Oduro</h3>

                    </div>
                    <div search_section>s
                        <form id="form" role="search">
                            <input type="search" id="query" class="search_bar" name="q"
                                placeholder="Enter student id..." aria-label="Search through site content">
                            <img src="images/search.png" class="search_icon" alt="">
                        </form>
                    </div>

                    <!-- <div class="search_bar">
                        <input type="text" placeholder="Search">
                    </div> -->
                </div>
                <hr>
                <div class="date">
                    <h5>Mon 27, Feb 2023</h5>
                    <h1 class="welcome">Welcome back Micheal</h1>
                </div>
                <div class="search_result">
                    <!-- <div class="stu_cards"> -->
                    <div class="stu_card">
                        <img src="images/icons8-user-64.png" class="stu_img" alt="">
                        <div class="details">
                            <h6 class="stu_name">Godfred Tieku</h6>
                            <h6 class="stu_ID">PS/ITC/20/0048</h6>
                            <h6 class="stu_phone">+233549916191</h6>
                        </div>
                    </div>
                    <div class="stu_card">
                        <img src="images/icons8-user-64.png" class="stu_img" alt="">
                        <div class="details">
                            <h6 class="stu_name">Godfred Tieku</h6>
                            <h6 class="stu_ID">PS/ITC/20/0048</h6>
                            <h6 class="stu_phone">+233549916191</h6>
                        </div>
                    </div>
                    <div class="stu_card">
                        <img src="images/icons8-user-64.png" class="stu_img" alt="">
                        <div class="details">
                            <h6 class="stu_name">Godfred Tieku</h6>
                            <h6 class="stu_ID">PS/ITC/20/0048</h6>
                            <h6 class="stu_phone">+233549916191</h6>
                        </div>
                    </div>
                    <div class="stu_card">
                        <img src="images/icons8-user-64.png" class="stu_img" alt="">
                        <div class="details">
                            <h6 class="stu_name">Godfred Tieku</h6>
                            <h6 class="stu_ID">PS/ITC/20/0048</h6>
                            <h6 class="stu_phone">+233549916191</h6>
                        </div>
                    </div>


                </div>

            </div>

        </div>

        </div>

    </section>

</body>

</html>