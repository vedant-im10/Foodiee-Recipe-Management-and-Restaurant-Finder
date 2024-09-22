<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodie / signUp</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./css/signUp.css">

    <!-- custom js file link  -->
    <script src="js/script.js"></script>


</head>



<body>

    <script>
    var check = function() {
        if (document.getElementById('pswd1').value ==
            document.getElementById('pswd2').value) {
            document.getElementById('message').style.color = 'green';
            document.getElementById('message').innerHTML = 'matching';
        } else {
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = 'not matching';
        }
    }
    text.innerHTML = pswd1
    text.innerHTML = pswd2
    </script>

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

        <script>
        var check = function() {
            if (document.getElementById('password').value ==
                document.getElementById('confirm_password').value) {
                document.getElementById('message').style.color = 'green';
                document.getElementById('message').innerHTML = 'matching';
            } else {
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').innerHTML = 'not matching';
            }
        }
        </script>

    </header>

    <!-- header section ends  -->

    <!-- login-form  -->

    <div class="login">

        <form action="POST">
            <h3>Sign Up</h3>
            <input type="email" name="" placeholder="enter your email" id="" class="box" required>
            <input type="password" name="password" placeholder="enter your password" id="password" class="box"
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%]).{8,}"
                title="Must contain at least one number, one special charater(!@#$%), one uppercase and lowercase letter, and at least 8 or more characters"
                onkeyup='check();' required>
            <input type="password" name="confirm_password" placeholder="Re-enter your password" id="confirm_password"
                class="box" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%]).{8,}"
                title="Must contain at least one number, one special charater(!@#$%), one uppercase and lowercase letter, and at least 8 or more characters"
                onkeyup='check();' required>
            <span id='message'></span>
            <input type="submit" value="Sign Up" class="btn">
        </form>

    </div>

</body>


</html>