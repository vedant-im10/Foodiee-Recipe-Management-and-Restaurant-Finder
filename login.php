<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodie / login</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./css/login.css">


</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="./index.php" class="logo"> <i class="fas fa-utensils"></i> Foodiee </a>

        <nav class="navbar">
            <a href="./index.php">home</a>
            <a href="./menu.php">menu</a>
            <a href="./signUp.php">sign up</a>
            <a href="./login.php">login</a>
            <a href="./aboutUs.php">about us</a>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>

            <div id="login-btn" class="fas fa-user"></div>
        </div>

    </header>

    <!-- header section ends  -->

    <!-- login-form  -->

    <div class="login">

        <form action="POST">
            <h3>login form</h3>
            <input type="email" name="psw" placeholder="enter your email" id="" class="" required>
            <input type="password" name="psw" placeholder="enter your password" id="" class=""
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%]).{8,}"
                title="Must contain at least one number, one special charater(!@#$%), one uppercase and lowercase letter, and at least 8 or more characters"
                required>
            <!-- <div class="remember">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me">remember me</label>
            </div> -->
            <a href="./index.php"><input type="submit" value="login now" class="btn"></a>
            <p>don't have an account? <a href="./signUp.php">create one</a></p>
        </form>

    </div>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>
    <!-- <script src="js/password.js"></script> -->

</body>

</html>