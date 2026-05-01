<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="style.css">
</head>
<body>
<!--header -->
    <section class="header">
        <a href="home.php" class="logo">praveen's travel agency</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
<!--end of header -->
<!-- home sectiomn-->
<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background:url(images2/homeslide2.webp) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>travel around the world</h3>
                    <a href="package.php"class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images2/homeslide6.webp) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>discover the new places</h3>
                    <a href="package.php"class="btn">discover more</a>
                </div>
            </div>


            <div class="swiper-slide slide" style="background:url(images2/homeslide5.webp) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>make your tour worthwhile</h3>
                    <a href="package.php"class="btn">discover more</a>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>

<!-- home section end-->

<!--services -->
<section class="services">
    <h1 class="heading-title">Our services</h1>
    <div class="box-container">
        <div class="box">
            <img src="images2/adventure.webp" alt="adventure">
            <h3>Adventure</h3>
        </div>

        <div class="box">
            <img src="images2/tour guide.webp" alt="tour guide">
            <h3>Tour Guide</h3>
        </div>

        <div class="box">
            <img src="images2/treeking.webp" alt="treeking">
            <h3>Trekking</h3>
        </div>

        <div class="box">
            <img src="images2/campfire.webp" alt="campfire">
            <h3>campfire</h3>
        </div>

        <div class="box">
            <img src="images2/offload.webp" alt="offload">
            <h3>off road</h3>
        </div>

        <div class="box">
            <img src="images2/camping.webp" alt="camping">
            <h3>Camping</h3>
        </div>
    </div>
    
</section>
<!--services end -->

<!-- home about-->
<section class="home-about">
    <div class="image">
        <img src="images2/about-img.webp"  alt="about-img">
    </div>

    <div class="content">
        <h3>about us</h3>
        <p>Lorem dicta rem a placeat, perferendis, nobis eligendi officia. Quos architecto officiis nulla, repellat, atque cumque hic magnam, repellendus porro repudiandae quisquam ad rerum ipsam eius?</p>
        <a href="about.php" class="btn">read more</a>
    </div>
</section>

<!-- home about ends-->
<!-- home packages -->

<section class="home-packages">
    <h1 class="heading-title">our packages</h1>

    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="images2/img-1.webp"  alt="img-1">
            </div>
            <div class="content">
                <h3>adventure</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, minus.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images2/img-2.webp"  alt="img-2">
            </div>
            <div class="content">
                <h3>nature</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, minus.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images2/img-3.webp"  alt="img">
            </div>
            <div class="content">
                <h3>historical</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, minus.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>
    </div>
    <div class="load-more"><a href="package.php" class="btn">load more</a></div>
</section>
<!-- home packages ends-->

<!-- home offer -->
<section class="home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde, nostrum! Dolorum quos provident molestias ea quis sapiente, explicabo hic veniam quod vitae quam illo distinctio.</p>
        <a href="package.php" class="btn">claim offer</a>
    </div>
</section>
<!-- home offer end-->

<!--footer -->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
            <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
        </div>
        
        

        <div class="box">
            <h3>extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
            <a href="#"><i class="fas fa-angle-right"></i>about us</a>
            <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
            <a href="#"><i class="fas fa-angle-right"></i>terms of use </a>
        </div>

        <div class="box">
            <h3>contact</h3>
            <a href="#"><i class="fas fa-phone"></i>+91 8073516447</a>
            <a href="#"><i class="fas fa-phone"></i>+91 1234567890</a>
            <a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSBptLCggsMnbnbksWnWkTCNdHmlqSBBkgChvKhdFjbrNHflKlQBvVdvgqwSCCWMgGCmjZsx"><i class="fas fa-envelope"></i>praveenpuni80@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i>bengaluru, india - 400104</a>
        </div>

        <div class="box">
            <h3>follow us </h3>
            <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
            <a href="https://www.instagram.com/__praveen_0018?igsh=dnB6dWpkbGtmMDR2"><i class="fab fa-instagram"></i> instagram </a>
            <a href="https://github.com/praveenh001"><i class="fab fa-github"></i> github </a>
            <a href="https://www.linkedin.com/in/praveen-h-5b5ba125b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fab fa-linkedin"></i> Linkedin </a>
            
        </div>
    </div>
    <div class="credit">created by <span>PRAVEEN H</span> | REFERENCE : <a href="https://youtu.be/34MBVXsDOtA?si=gyYSLsTe_V7egxks">Mr.Web Designer Youtube Channel</a></div>
</section>
<!--end footer -->


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<script src="script.js"></script>
</body>
</html>