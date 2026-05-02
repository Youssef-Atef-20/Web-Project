<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Facilities at Ocean Pearl Hotel - Pool, Spa, Dining.">
    <title>Ocean Pearl Hotel | Facilities</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="date-container" id="current-date-display"></div>
        <nav aria-label="Main Navigation">
            <div class="logo">
                <i class="fas fa-water"></i>
                Ocean<span>Pearl</span>
            </div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li class="has-dropdown">
                    <a href="rooms.php">Rooms <i class="fas fa-caret-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="rooms.php#deluxe">Deluxe Room</a></li>
                        <li><a href="rooms.php#suite">Ocean Suite</a></li>
                        <li><a href="rooms.php#penthouse">Penthouse</a></li>
                    </ul>
                </li>
                <li><a href="facilities.php" class="active">Facilities</a></li>
                <li><a href="contact.php">Contact / Book</a></li>
            </ul>
            <button class="hamburger" aria-label="Toggle navigation" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </nav>
    </header>

    <main>
        <section class="hero inner-hero" style="background: url('images/hero-facilities.jpg') center/cover no-repeat;">
            <div class="hero-content">
                <h1 data-aos="zoom-in" data-aos-duration="1200">Our Facilities</h1>
                <p data-aos="fade-up" data-aos-delay="300">Indulge in world-class amenities designed for your ultimate relaxation</p>
            </div>
        </section>

        <section class="container">
            <div class="grid-3">
                <div class="card" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="100">
                    <div class="card-img">
                        <img src="images/facility-spa.webp" alt="Spa and Wellness">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Serenity Spa</h3>
                        <p>Relax and rejuvenate in our award-winning spa. We offer a wide range of massages, facials, and holistic wellness treatments designed to melt away stress and restore balance.</p>
                    </div>
                </div>

                <div class="card" data-aos="flip-up" data-aos-duration="1000" data-aos-delay="300">
                    <div class="card-img">
                        <img src="images/facility-restaurant.webp" alt="Restaurant">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">The Pearl Restaurant</h3>
                        <p>Enjoy exquisite dining with breathtaking ocean views. Our Michelin-star chefs prepare culinary masterpieces using the freshest local and international ingredients.</p>
                    </div>
                </div>

                <div class="card" data-aos="flip-right" data-aos-duration="1000" data-aos-delay="500">
                    <div class="card-img">
                        <img src="images/facility-pool.webp" alt="Infinity Pool">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Infinity Pool</h3>
                        <p>Take a dip in our signature infinity pool that blends seamlessly with the ocean horizon. Private cabanas and exclusive poolside cocktail service available all day.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <div data-aos="fade-right">
                <div class="footer-logo">
                    <i class="fas fa-water"></i> Ocean<span>Pearl</span>
                </div>
                <p>Experience the perfect blend of luxury and comfort at our beachfront hotel. Your unforgettable journey into serenity and elegance starts right here.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200">
                <h4 style="font-size: 1.5rem;">Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="rooms.php">Rooms</a></li>
                    <li><a href="facilities.php">Facilities</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div data-aos="fade-left" data-aos-delay="400">
                <h4 style="font-size: 1.5rem;">Contact Info</h4>
                <ul class="footer-contact">
                    <li><i class="fas fa-map-marker-alt"></i> 123 Ocean Drive, Paradise City, 90210</li>
                    <li><i class="fas fa-phone"></i> +1 (555) 123-4567</li>
                    <li><i class="fas fa-envelope"></i> info@oceanpearl.com</li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom" data-aos="zoom-in" data-aos-offset="0">
            <p>&copy; 2026 Ocean Pearl Hotel. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="script.js"></script>
</body>
</html>
