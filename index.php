<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>Ocean Pearl Hotel | Luxury Beach Resort & Premium Rooms</title>

    <!-- SEO Meta -->
    <meta name="description"
        content="Experience luxury at Ocean Pearl Hotel with premium rooms, ocean views, elegant suites, and world class hospitality. Book your perfect stay today.">

    <meta name="keywords"
        content="Ocean Pearl Hotel, luxury hotel, beach resort, hotel booking, premium rooms, suites, ocean view hotel, vacation resort, hotel in Egypt">

    <meta name="author" content="Ocean Pearl Hotel">

    <meta name="robots" content="index, follow">

    <!-- Canonical -->
    <link rel="canonical" href="https://allway.kesug.com/">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Ocean Pearl Hotel | Luxury Beach Resort">
    <meta property="og:description"
        content="Luxury rooms, stunning ocean views, and unforgettable hospitality at Ocean Pearl Hotel.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://allway.kesug.com/">
    <meta property="og:image" content="https://allway.kesug.com/images/icon.svg">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Ocean Pearl Hotel">
    <meta name="twitter:description" content="Book luxury rooms and enjoy premium hospitality at Ocean Pearl Hotel.">
    <meta name="twitter:image" content="https://allway.kesug.com/images/icon.svg">

    <!-- Theme -->
    <meta name="theme-color" content="#0A192F">

    <!-- Performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="images/icon.svg">

</head>

<body>
    <!-- Semantic Header & Nav -->
    <header>
        <div class="date-container" id="current-date-display"></div>
        <nav aria-label="Main Navigation">
            <div class="logo">
                <i class="fas fa-water"></i>
                Ocean<span>Pearl</span>
            </div>
            <ul class="nav-links">
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li class="has-dropdown">
                    <a href="rooms.php">Rooms <i class="fas fa-caret-down"></i></a>
                    <!-- CSS Dropdown Menu -->
                    <ul class="dropdown-menu">
                        <li><a href="rooms.php#deluxe">Deluxe Room</a></li>
                        <li><a href="rooms.php#suite">Ocean Suite</a></li>
                        <li><a href="rooms.php#penthouse">Penthouse</a></li>
                    </ul>
                </li>
                <li><a href="facilities.php">Facilities</a></li>
                <li><a href="contact.php">Contact / Book</a></li>
            </ul>
            <!-- Hamburger Button -->
            <button class="hamburger" aria-label="Toggle navigation" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </nav>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="hero" id="home" style="background: url('images/hero-home.webp') center/cover no-repeat;">
            <div class="hero-content">
                <h1 data-aos="zoom-in" data-aos-duration="1500">Experience True Luxury</h1>
                <p data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">Discover the perfect escape at Ocean
                    Pearl Hotel with breathtaking views, world-class amenities, and an unforgettable premium experience.
                </p>
                <div data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
                    <a href="#welcome" class="btn btn-primary" style="margin-right: 15px;">Discover More</a>
                    <a href="contact.php" class="btn btn-outline">Book Now</a>
                </div>
            </div>
        </section>

        <!-- Welcome Section -->
        <section id="welcome" class="container">
            <h2 class="section-title" data-aos="fade-up">Welcome to Paradise</h2>
            <div class="grid-2">
                <div data-aos="fade-right" data-aos-duration="1200">
                    <h3 style="font-size: 2.2rem; color: var(--secondary);">Your Perfect Coastal Getaway</h3>
                    <p>Nestled on the pristine shores, the Ocean Pearl Hotel offers a sanctuary of peace and elegance.
                        From the moment you arrive, you will be captivated by the panoramic ocean views, luxurious
                        accommodations, and impeccable service.</p>
                    <p>Whether you're seeking a romantic retreat, a family vacation, or a serene place to unwind, our
                        hotel provides the ideal setting for unforgettable moments.</p>
                    <a href="about.php" class="btn btn-outline" style="margin-top: 20px;" data-aos="flip-up"
                        data-aos-delay="200">Read Our Story</a>
                </div>
                <div data-aos="fade-left" data-aos-duration="1200">
                    <div style="position: relative; padding: 20px;">
                        <div style="position: absolute; top: 0; right: 0; width: 80%; height: 80%; border: 3px solid var(--secondary); border-radius: 12px; z-index: -1;"
                            data-aos="zoom-in" data-aos-delay="400"></div>
                        <img src="images/hotel-exterior.webp" alt="Ocean Pearl Hotel Exterior"
                            style="box-shadow: 0 20px 40px rgba(0,0,0,0.5);">
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Rooms -->
        <section style="background-color: var(--primary-light); padding: 80px 0;">
            <div class="container" style="padding: 0 5%;">
                <h2 class="section-title" data-aos="fade-up">Featured Accommodations</h2>
                <div class="grid-3">
                    <div class="card" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-img">
                            <img src="images/room-deluxe.webp" alt="Deluxe Room">
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">Deluxe Room</h3>
                            <p>Comfortable and elegant with partial ocean views, modern amenities, and ultimate
                                relaxation.</p>
                            <div style="margin-top: 20px;">
                                <a href="rooms.php#deluxe"
                                    style="color: var(--secondary); font-weight: 500; font-size: 1.1rem;">View Details
                                    <i class="fas fa-arrow-right" style="margin-left: 5px;"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="card" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-img">
                            <img src="images/room-suite.webp" alt="Ocean Suite">
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">Ocean Suite</h3>
                            <p>Spacious living area with panoramic oceanfront views and an exclusive jacuzzi.</p>
                            <div style="margin-top: 20px;">
                                <a href="rooms.php#suite"
                                    style="color: var(--secondary); font-weight: 500; font-size: 1.1rem;">View Details
                                    <i class="fas fa-arrow-right" style="margin-left: 5px;"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="card" data-aos="fade-up" data-aos-delay="500">
                        <div class="card-img">
                            <img src="images/room-penthouse.webp" alt="Penthouse">
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">Penthouse</h3>
                            <p>The ultimate luxury experience with a private terrace, infinity pool, and personal
                                butler.</p>
                            <div style="margin-top: 20px;">
                                <a href="rooms.php#penthouse"
                                    style="color: var(--secondary); font-weight: 500; font-size: 1.1rem;">View Details
                                    <i class="fas fa-arrow-right" style="margin-left: 5px;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Semantic Footer -->
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

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Custom JS -->
    <script src="script.js"></script>
</body>

</html>