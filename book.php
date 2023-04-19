<!doctype html>
<html lang ="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-UA-compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scaled=1.0">
        <title>about</title>

        <!--swiper css link-->
        <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundles.min.CSs">

        <!--font awesome cdn link-->
        <link rel="stylesheet" href="https://cdnJs.cloudflare.com/ajax/libs/font-awesome/5.15.4/CSs/all.main.CSs">

        <!--custom css file link-->
        <link rel="stylesheet" href="CSs/style.css">

</head>
<body>

<!--header section starts-->

<section class="header">

<a href="home.php" class="logo">BOOKINGS</a>

<nav class="navbar">
    <a href="home.php">home</a>
    <a href="about.php">about</a>
    <a href="package.php">package</a>
    <a href="book.php">book</a>
</nav>

<div id="menu-btn" class="fas fa bars"></div>

</section>

<!--header section ends-->

    <h1>book now</h1>

<!--booking section starts-->

<section class="booking">

    <h1 class="heading-title">BOOK YOUR SERVICES HERE!</h1>

    <form action="book-form.php" method="post" class="book-form">

<div class="flex">
    <div class="inputbox">
        <span>name :</span>
        <input type="text" placeholder="enter your name" name="name">
    </div>
    <div class="inputbox">
        <span>email :</span>
        <input type="email" placeholder="enter your email" name="email">
    </div>
    <div class="inputbox">
        <span>phone :</span>
        <input type="number" placeholder="enter your number" name="phone">
    </div>
    <div class="inputbox">
        <span>address :</span>
        <input type="text" placeholder="enter your address" name="address">
    </div>
    <div class="inputbox">
        <span>service :</span>
        <input type="text" placeholder="type of srevice you want" name="service">
    </div>
    <div class="inputbox">
        <span>vehicle :</span>
        <input type="text" placeholder="type of vehicle" name="vehicle">
    </div>
    <div class="inputbox">
        <span>arrivals :</span>
        <input type="date" name="arrivals">
    </div>
    <div class="inputbox">
        <span>leaving :</span>
        <input type="date" name="leaving">
    </div>
</div>

<input type="submit" value="submit" class="btn" name="send">

    </form>

</section>







<!--booking section ends--->














<!--footer section stars-->

<section class="footer">

<div class="box-container">

<div class="box">
    <h3>quick links</h3>
    <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
    <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
    <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
    <a href="book.php"><i class="fas fa-angle-right"></i>book</a>  
</div>

<div class="box">
    <h3>extra links</h3>
    <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
    <a href="#"><i class="fas fa-angle-right"></i>about us</a>
    <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
    <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
</div>

<div class="box">
    <h3>contact info</h3>
    <a href="#"><i class="fas fa-angle-phone"></i>+254727054885</a>
    <a href="#"><i class="fas fa-angle-phone"></i>+254795647313</a>
    <a href="#"><i class="fas fa-angle-envelope"></i>total@gmail.com</a>
    <a href="#"><i class="fas fa-angle-map"></i>Kisumu, Kenya-40100></a>
</div>

<div class="box">
    <h3>follow us</h3>
    <a href="#"><i class="fas fa-facebook-f"></i>facebook</a>
    <a href="#"><i class="fas fa-twitter"></i>twitter</a>
    <a href="#"><i class="fas fa-instagram"></i>instagram</a>
    <a href="#"><i class="fas fa-linkedin"></i>linkedin</a>
</div>

</div>

</section>

<!--footer section ends-->









<!--swipper JS link-->
<script src="https://unpkg.com/swiper-bundle.min.JS"></script>

<!--custom JS file link-->
<script src="JS/script.js"></script>

</body>
</html> 
