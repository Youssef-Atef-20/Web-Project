<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="style.css">
</head>
<body>
<!--header-->
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
<!--header endds -->

<!--booking section-->

<section class="booking">
    <h1 class="heading-title">book your trip</h1>
    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>name :</span>
                <input type="text" placeholder="enter the name" name="name">
            </div>

            <div class="inputBox">
                <span>email :</span>
                <input type="text" placeholder="enter the email" name="email">
            </div>

            <div class="inputBox">
                <span>phone :</span>
                <input type="number" placeholder="enter the phone number" name="phone">
            </div>

            <div class="inputBox">
                <span>address :</span>
                <input type="text" placeholder="enter the address" name="address">
            </div>

            <div class="inputBox">
                <span>Select the package :</span>
                <select name="location" required class="opt">
                    <option value="">Select a place to visit</option>
                    <option value="dandeli">Dandeli</option>
                    <option value="honnavara">Honnavara</option>
                    <option value="Hampi">Hampi</option>
                    <option value="sky diving">Sky diving</option>
                    <option value="Scuba diving">Scuba diving</option>
                    <option value="goa beach">goa beach</option>
                    <option value="honeymoon in lakshadeep">honeymoon in lakshadeep</option>
                    <option value="honeymoon in manali">honeymoon in manali</option>
                    <option value="honeymoon in dubai">honeymoon in dubai</option>
                    <option value="kashi yatra">Kashi yatra</option>
                    <option value="ram mandir">Ram mandir</option>
                    <option value="himalaya">Himalaya mountain</option>
                    <!-- Add more options as needed -->
                </select>
            </div>

            <div class="inputBox">
                <span>how many :</span>
                <input type="number" placeholder="number of guests" name="guests">
            </div>

            <div class="inputBox">
                <span>arrivals :</span>
                <input type="date" name="arrivals">
            </div>

            <div class="inputBox">
                <span>leaving :</span>
                <input type="date" name="leaving">
            </div>
        </div>
        <input type="submit" value="submit" class="btn" name="send">
    </form>
</section>

<!--booking section ends-->


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
            <a href="#"><i class="fas fa-envelope"></i>praveenpuni80@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i>bengaluru, india - 400104</a>
        </div>

        <div class="box">
            <h3>follow us </h3>
            <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
            <a href="#"><i class="fab fa-twitter"></i> twitter </a>
            <a href="#"><i class="fab fa-instagram"></i> instagram </a>
            <a href="#"><i class="fab fa-linkedin"></i> Linkedin </a>
            
        </div>
    </div>
    <div class="credit">created by <span>PRAVEEN H</span> | REFERENCE : <a href="https://youtu.be/34MBVXsDOtA?si=gyYSLsTe_V7egxks">Mr.Web Designer Youtube Channel</a></div>
</section>
<!--footer ends-->



<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!--safty-->
<h1>safty</h1>
<script src="script.js"></script>
</body>
</html>