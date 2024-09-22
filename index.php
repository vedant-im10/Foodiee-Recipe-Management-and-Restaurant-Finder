<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodie / Home</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./css/style.css">

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

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <span>welcome To Foodiee</span>
            <h3>the recipes of your favourite food.</h3>
        </div>

        <div class="image">
            <img src="image/home-img.png" alt="" class="home-img">
            <img src="image/home-parallax-img.png" alt="" class="home-parallax-img">
        </div>

    </section>

    <!-- home section ends  -->

    <!-- menu section starts  -->

    <section class="menu" id="menu">

        <div class="heading">
            <span>our recipes</span>

        </div>

        <div class="box-container">

            <a href="./menu.php" class="box">
                <img src="image/menu_pancake.jpg" alt="">
                <div class="content">
                    <h3>Pancake</h3>
                </div>
            </a>

            <a href="./menu.php" class="box">
                <img src="image/menu_pasta.jpg" alt="">
                <div class="content">
                    <h3>Pasta</h3>
                </div>
            </a>

            <a href="./menu.php" class="box">
                <img src="image/menu_pizza.png" alt="">
                <div class="content">
                    <h3>Pizza</h3>
                </div>
            </a>

            <a href="./menu.php" class="box">
                <img src="image/menu_milkshake.jpg" alt="">
                <div class="content">
                    <h3>Milkshake</h3>
                </div>
            </a>

            <a href="./menu.php" class="box">
                <img src="image/menu_cake.jpg" alt="">
                <div class="content">
                    <h3>Cake</h3>
                </div>
            </a>

            <a href="./menu.php" class="box">
                <img src="image/menu_salad.jpg" alt="">
                <div class="content">
                    <h3>Salad</h3>
                </div>
            </a>

        </div>

    </section>
    <!-- menu section ends -->

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>