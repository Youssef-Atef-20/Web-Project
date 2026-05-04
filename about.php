<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="About Ocean Pearl Hotel - Our story and values.">
    <title>Ocean Pearl Hotel | About Us</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/svg+xml" href="images/icon.svg">
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
                <li><a href="about.php" class="active">About Us</a></li>
                <li class="has-dropdown">
                    <a href="rooms.php">Rooms <i class="fas fa-caret-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="rooms.php#deluxe">Deluxe Room</a></li>
                        <li><a href="rooms.php#suite">Ocean Suite</a></li>
                        <li><a href="rooms.php#penthouse">Penthouse</a></li>
                    </ul>
                </li>
                <li><a href="facilities.php">Facilities</a></li>
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
        <!-- Hero Title Banner -->
        <section class="hero inner-hero" style="background: url('images/hero-about.webp') center/cover no-repeat;">
            <div class="hero-content">
                <h1 data-aos="zoom-in" data-aos-duration="1200">About Us</h1>
                <p data-aos="fade-up" data-aos-delay="300">Our story of luxury, passion, and unparalleled hospitality
                </p>
            </div>
        </section>

        <section class="container">
            <div class="grid-2">
                <div data-aos="fade-right" data-aos-duration="1200">
                    <img src="images/hotel-interior.webp" alt="Hotel Interior"
                        style="box-shadow: 0 20px 40px #00000080;">
                </div>
                <div data-aos="fade-left" data-aos-duration="1200">
                    <h2 class="section-title" style="text-align: left; margin-bottom: 30px;">Our Heritage</h2>
                    <p data-aos="fade-up" data-aos-delay="200">Founded in 1998, Ocean Pearl Hotel has been a beacon of
                        luxury and relaxation for over two decades. What started as a small boutique hotel has blossomed
                        into a world-class luxury resort, attracting guests from all over the globe.</p>
                    <p data-aos="fade-up" data-aos-delay="300">We pride ourselves on providing an experience that goes
                        beyond simply a place to stay. We offer a haven where guests can disconnect from the world,
                        immerse themselves in luxury, and reconnect with nature.</p>

                    <h3 style="margin-top: 40px; color: var(--secondary);" data-aos="fade-up" data-aos-delay="400">Our
                        Core Values</h3>
                    <ul style="list-style-type: none; padding: 0;">
                        <li data-aos="fade-up" data-aos-delay="500"
                            style="margin-bottom: 15px; font-size: 1.1rem; display: flex; align-items: center; gap: 15px;">
                            <i class="fas fa-gem" style="color: var(--secondary); font-size: 1.3rem;"></i>
                            Uncompromising Quality</li>
                        <li data-aos="fade-up" data-aos-delay="600"
                            style="margin-bottom: 15px; font-size: 1.1rem; display: flex; align-items: center; gap: 15px;">
                            <i class="fas fa-leaf" style="color: var(--secondary); font-size: 1.3rem;"></i> Sustainable
                            Practices</li>
                        <li data-aos="fade-up" data-aos-delay="700"
                            style="margin-bottom: 15px; font-size: 1.1rem; display: flex; align-items: center; gap: 15px;">
                            <i class="fas fa-heart" style="color: var(--secondary); font-size: 1.3rem;"></i> Exceptional
                            Guest Service</li>
                    </ul>
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
                <p>Experience the perfect blend of luxury and comfort at our beachfront hotel. Your unforgettable
                    journey into serenity and elegance starts right here.</p>
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