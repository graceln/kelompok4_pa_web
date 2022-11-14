<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ahay Coffee</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="./image/ahay.ico">

</head>
<body>
    
    <header class="header"> 
    
        <a href="#" class="logo">Ahay Coffee</a>

        <nav class="navbar" id="myNavbar">
            <div id="close-navbar" class="fas fa-times"></div>
            <a href="#">home</a>
            <a href="#about">about</a>
            <a href="#menu">menu</a>
            <a href="#review">review</a>
            <div class="dropdown">
                <button class="dropbtn">Login
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="login_admin.php">Admin</a>
                    <a href="login_user.php">User</a>
                </div>
            </div>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        </nav>
        <input type="checkbox" id="checkbox" class="checkbox"> 

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>

    </header>
        <!--  header -->

        <!-- Home -->

    <section class="home" id="home">

        <div class="content">
            <h3>fresh coffee in the morning</h3>
            <p>Better Beans, Better Coffee.</p><br>
            <center><a href="#" class="btn">Order Now</a></center>
        </div>

    </section>

        <!-- home -->

        <!-- About us -->    
    <section class="about" id="about">
        <h1 class="heading">about us</h1>

        <div class="row">

            <div class="image">
                <img src="image/about.jpg" alt="about">
            </div>

            <div class="content">
                <h3>What makes our coffee special?</h3>
                <div class="line"></div>
                <p>Ahay coffee is a small independent coffee shop that serves different types of coffee. We believe in combining the best coffee with the best service and it is our goal to be at the heart of every community we open.</p>
            </div>

        </div>

    </section>

<!-- end -->

    <!-- Menu -->

    <section class="menu" id="menu">

        <h1 class="heading"> our top menu</h1>

        <div class="box-container">

            <div class="box">
                <img src="image/menu-1.png" alt="">
                <h3>Black Coffee</h3>
                <div class="price">15K</div>
            </div>

            <div class="box">
                <img src="image/menu-1.png" alt="">
                <h3>V60</h3>
                <div class="price">15K</div>
            </div>

            <div class="box">
                <img src="image/menu-1.png" alt="">
                <h3>Americano</h3>
                <div class="price">10K</div>
            </div>

            <div class="box">
                <img src="image/menu-1.png" alt="">
                <h3>Vietnam Drip</h3>
                <div class="price">15K</div>
            </div>

            <div class="box">
                <img src="image/menu-1.png" alt="">
                <h3>Latte</h3>
                <div class="price">10K</div>
            </div>

            <div class="box">
                <img src="image/menu-1.png" alt="">
                <h3>Cappuchino</h3>
                <div class="price">10K</div>
            </div>

        </div>

    </section>
<!-- end -->

<!-- Customer's Review -->
<section class="review" id="review">

    <h1 class="heading">  <span> customer's review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/quote-img.png" alt="" class="quote">
            <p>Americano is good, the taste is typical of coffee but on the other hand this is in accordance with the americano standard, this black coffee is not heavy.</p>
            <img src="image/pic-1.png" class="user" alt="">
            <h3>David Joe</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="image/quote-img.png" alt="" class="quote">
            <p>I really like Vietnam drip coffee because the name of the coffee is like where I was born and the coffee is also very good.</p>
            <img src="image/pic-2.png" class="user" alt="">
            <h3>Selena Joidie</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        
        <div class="box">
            <img src="image/quote-img.png" alt="" class="quote">
            <p>
Latte coffee tastes very tasty and delicious, very good to drink when it's raining besides being cool it can make the mind happy.</p>
            <img src="image/pic-3.png" class="user" alt="">
            <h3>Hans Smith</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

    </div>

</section>
    <!-- End -->

    <!-- Footer -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <img src="image/footer-1.png" alt="">
                <h3>Address</h3>
                <p> Siradj Salman, Air Hitam, Samarinda Ulu, Samarinda City, East Kalimantan 75124 </p>
    
            </div>
    
            <div class="box">
                <img src="image/footer-2.png" alt="">
                <h3>E-mail</h3>
                <a href="#" class="link">ahaycoffee@gmail.com</a>
            </div>
    
            <div class="box">
                <img src="image/footer-3.png" alt="">
                <h3>Call us</h3>
                <p>+62 1234 2541</p>
            </div>
    
            <div class="box">
                <img src="image/footer-4.png" alt="">
                <h3>Opening hours</h3>
                <p>Monday - Friday: 8:00 - 24:00
                   <br> Saturday: 8:00 - 23:00</p>
            </div>

        </div>

        <div class="credit">Ahay <span>Coffee</span> | all rights reserved! </div>

    </section>

    <!-- Custom JS Link -->
    <script src="js/script.js"></script>
</body>
</html>
