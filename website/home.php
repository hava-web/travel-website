<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!--swiper css link -->
    <link  rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
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
<!-- header section end -->
<!-- home section starts -->
<section class="home">
  <div class="swiper home-slider">
    <div class="swiper-wrapper">

      <div class="swiper-slide slide" style="background:url(../images/home-slide-1.jpg) no-repeat">
        <div class="content">
          <span>explore, discover, travel</span>
          <h3>Travel arround the world</h3>
          <a href="package.php" class="btn">discover more</a>
        </div>
      </div>

      <div class="swiper-slide slide" style="background:url(../images/home-slide-2.jpg) no-repeat">
        <div class="content">
          <span>explore, discover, travel</span>
          <h3>Discover the new place</h3>
          <a href="package.php" class="btn">discover more</a>
        </div>
      </div>

      <div class="swiper-slide slide" style="background:url(../images/home-slide-3.jpg) no-repeat">
        <div class="content">
          <span>explore, discover, travel</span>
          <h3>Make your tour worthwhile</h3>
          <a href="package.php" class="btn">discover more</a>
        </div>
      </div>

    </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

  </div>
</section>
<!-- home section ends -->

<!-- service section start --> 
<section class="service">
    <h1 class="heading-title">our service</h1>
    <div class="box-container">
            <div class="box">
              <img src="../images/icon-1.png" alt="">
              <h3>Adventure</h3>
            </div>

            <div class="box">
              <img src="../images/icon-2.png" alt="">
              <h3>Tour guide</h3>
            </div>

            <div class="box">
              <img src="../images/icon-3.png" alt="">
              <h3>Strekking</h3>
            </div>

            <div class="box">
              <img src="../images/icon-4.png" alt="">
              <h3>Camp fire</h3>
            </div>

            <div class="box">
              <img src="../images/icon-5.png" alt="">
              <h3>Off road</h3>
            </div>

            <div class="box">
              <img src="../images/icon-6.png" alt="">
              <h3>Camping</h3>
            </div>
        </div>
</section>
<!-- service section ends -->

<!-- home about section starts -->

<section class="home-about">
  <div class="image">
    <img src="../images/about-img.jpg" alt="">
  </div>
  <div class="content">
    <h3>about us</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum ex, voluptatem dolore aspernatur ea rerum odio excepturi ratione dignissimos natus ut, ab unde vitae libero recusandae amet? Temporibus, eum saepe.</p>
    <a href="about.php" class="btn">read more</a>
  </div>
</section>

<!-- home about section endss -->
<!-- home package section starts -->
<section class="home-package">
  <h1 class="heading-title">our package</h1>
  <div class="box-container">
    <div class="box">
      <div class="image">
        <img src="../images/img-1.jpg" alt="">
      </div>
      <div class="content">
        <h3>adventure & tour</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium dignissimos cupiditate blanditiis fugiat ab quia doloremque rerum, culpa dolore nihil? Sint accusamus, quis iusto provident incidunt non repudiandae ipsum dignissimos.</p>
        <a href="book.php" class="btn">book now</a>
      </div>
    </div>

    <div class="box">
      <div class="image">
        <img src="../images/img-2.jpg" alt="">
      </div>
      <div class="content">
        <h3>adventure & tour</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium dignissimos cupiditate blanditiis fugiat ab quia doloremque rerum, culpa dolore nihil? Sint accusamus, quis iusto provident incidunt non repudiandae ipsum dignissimos.</p>
        <a href="book.php" class="btn">book now</a>
      </div>
    </div>

    <div class="box">
      <div class="image">
        <img src="../images/img-3.jpg" alt="">
      </div>
      <div class="content">
        <h3>adventure & tour</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium dignissimos cupiditate blanditiis fugiat ab quia doloremque rerum, culpa dolore nihil? Sint accusamus, quis iusto provident incidunt non repudiandae ipsum dignissimos.</p>
        <a href="book.php" class="btn">book now</a>
      </div>
    </div>
  </div>


  <div class="load-more">
     <a href="package.php" class="btn">load more</a>
  </div>
</section>
<!-- home package section ends -->
<!-- home offer section starts -->
<section class="home-offer">
  <div class="content">
    <h3>upto 50% off</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo officiis esse eos deserunt voluptate fugit enim aperiam quasi ipsam in?</p>
    <a href="book.php" class="btn">book now</a>
  </div>
</section>
<!-- home offer section ends -->




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
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!--js file link-->
<script src="../js/script.js" ></script>

</body>
</html>