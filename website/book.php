<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <!--swiper css link -->
    <link  rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <!--fornt awsome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!--CSS link-->
    <link rel="stylesheet" href="../css/style.css"> 
</head>
<body>
<section class="header">
    <a href="home.php" class="logo">Travel.</a>
    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="package.php">Package</a>
        <a href="book.php">Book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
</section>

<!-- Header section ends -->
<div class="heading" style="background:url(../images/header-bg-3.png) no-repeat">
    <h1>Book</h1>
</div>

<!-- booking section starts -->

<section class="booking">
    <h1 class="heading-title">book your trip!</h1>
    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>name:</span>
                <input type="text" placeholder="enter your name" name="name">
            </div>
            <div class="inputBox">
                <span>email:</span>
                <input type="text" placeholder="enter your email" name="email">
            </div>
            <div class="inputBox">
                <span>phone:</span>
                <input type="text" placeholder="enter your phone munber" name="phone">
            </div>
            <div class="inputBox">
                <span>address:</span>
                <input type="text" placeholder="enter your address" name="address">
            </div>
            <div class="inputBox">
                <span>where to:</span>
                <input type="text" placeholder="place you want to visit" name="location">
            </div>
            <div class="inputBox">
                <span>how many:</span>
                <input type="number" placeholder="number of guests" name="guest" min=0>
            </div>
            <div class="inputBox">
                <span>arrivals:</span>
                <input type="date"  name="arrivals">
            </div>
            <div class="inputBox">
                <span>leaving:</span>
                <input type="date"  name="leaving">
            </div>
        </div>

        <input type="submit" value="submit" class="btn" name="send">

    </form>
</section>
<!-- booking section ends -->






<!-- Footer section starts -->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
            <a href="package.php"><i class="fas fa-angle-right"></i> Package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i> Book</a>
        </div>
        <div class="box">
            <h3>extra links links</h3>
            <a href="#"><i class="fas fa-angle-right"></i> Ask questions</a>
            <a href="#"><i class="fas fa-angle-right"></i> About us</a>
            <a href="#"><i class="fas fa-angle-right"></i> Privacy policy</a>
            <a href="#"><i class="fas fa-angle-right"></i> Terms of use</a>
        </div>
        <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="fas fa-phone"></i>0379165558</a>
            <a href="#"><i class="fas fa-envelope"></i>nguyenngocha@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i>Lien Trung, Dan Phuong, Ha Noi</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
            <a href="#"><i class="fab fa-twitter"></i>twitter</a>
            <a href="#"><i class="fab fa-instagram"></i>instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
        </div>
    </div>

    <div class="credit">
        create by <span>Nguyen Ngoc Ha</span> | all rights reserved!
    </div>
</section>
<!-- Footer section ends -->
<!--swiper js link-->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<!--js file link-->
<script src="../js/script.js" ></script>
</body>
</html> 