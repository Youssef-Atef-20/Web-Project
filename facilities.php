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
        <nav aria-label="Main Navigation">
            <div class="logo">
                <i class="fas fa-water"></i>
                Ocean<span>Pearl</span>
            </div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li>
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
        </nav>
        <div style="text-align: center; padding-bottom: 10px;">
            <div id="current-date-display"></div>
        </div>
    </header>

    <main>
        <section class="hero" style="height: 40vh; background: linear-gradient(rgba(11, 43, 64, 0.8), rgba(11, 43, 64, 0.8)), url('https://images.unsplash.com/photo-1571896349842-33c89424de2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;">
            <div class="hero-content">
                <h1 style="font-size: 3rem;">Our Facilities</h1>
                <p>Everything you need for a perfect stay</p>
            </div>
        </section>

        <section class="container">
            <div class="grid-3">
                <div class="card" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card-img">
                        <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Spa and Wellness">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Serenity Spa</h3>
                        <p>Relax and rejuvenate in our award-winning spa. We offer a wide range of massages, facials, and wellness treatments designed to melt away stress.</p>
                    </div>
                </div>

                <div class="card" data-aos="zoom-in" data-aos-delay="200">
                    <div class="card-img">
                        <img src="https://images.unsplash.com/photo-1514933651103-005eec06c04b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Restaurant">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">The Pearl Restaurant</h3>
                        <p>Enjoy exquisite dining with breathtaking ocean views. Our Michelin-star chefs prepare culinary masterpieces using the freshest local ingredients.</p>
                    </div>
                </div>

                <div class="card" data-aos="zoom-in" data-aos-delay="300">
                    <div class="card-img">
                        <img src="https://images.unsplash.com/photo-1576013551627-0cc20b96c2a7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Infinity Pool">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Infinity Pool</h3>
                        <p>Take a dip in our signature infinity pool that blends seamlessly with the ocean horizon. Private cabanas and poolside service available.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <div>
                <div class="footer-logo">
                    <i class="fas fa-water"></i> Ocean<span>Pearl</span>
                </div>
                <p>Experience the perfect blend of luxury and comfort at our beachfront hotel. Your unforgettable journey starts here.</p>
            </div>
            <div>
                <h4 style="color: white;">Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="rooms.php">Rooms</a></li>
                    <li><a href="facilities.php">Facilities</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div>
                <h4 style="color: white;">Contact Info</h4>
                <ul class="footer-links">
                    <li><i class="fas fa-map-marker-alt"></i> 123 Ocean Drive, Paradise City</li>
                    <li><i class="fas fa-phone"></i> +1 (555) 123-4567</li>
                    <li><i class="fas fa-envelope"></i> info@oceanpearl.com</li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 Ocean Pearl Hotel. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="script.js"></script>
</body>
</html>
