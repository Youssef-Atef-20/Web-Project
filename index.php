<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ocean Pearl Hotel - Luxury accommodations and breathtaking ocean views.">
    <title>Ocean Pearl Hotel | Home</title>
    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Semantic Header & Nav -->
    <header>
        <nav aria-label="Main Navigation">
            <div class="logo">
                <i class="fas fa-water"></i>
                Ocean<span>Pearl</span>
            </div>
            <ul class="nav-links">
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li>
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
        </nav>
        <!-- Date inserted by JavaScript -->
        <div style="text-align: center; padding-bottom: 10px;">
            <div id="current-date-display"></div>
        </div>
    </header>

    <main>
        <!-- Hero Section with CSS Animations inside style.css -->
        <section class="hero" id="home">
            <div class="hero-content">
                <h1>Experience True Luxury</h1>
                <p>Discover the perfect escape at Ocean Pearl Hotel with breathtaking views and world-class amenities.</p>
                <a href="#welcome" class="btn">Discover More</a>
                <a href="contact.php" class="btn btn-primary" style="margin-left: 10px;">Book Now</a>
            </div>
        </section>

        <!-- Welcome Section -->
        <section id="welcome" class="container">
            <h2 class="section-title" data-aos="fade-up">Welcome to Ocean Pearl</h2>
            <div class="grid-2">
                <div data-aos="fade-right">
                    <h3>Your Perfect Coastal Getaway</h3>
                    <p>Nestled on the pristine shores, the Ocean Pearl Hotel offers a sanctuary of peace and elegance. From the moment you arrive, you will be captivated by the panoramic ocean views, luxurious accommodations, and impeccable service.</p>
                    <p>Whether you're seeking a romantic retreat, a family vacation, or a serene place to unwind, our hotel provides the ideal setting for unforgettable moments.</p>
                    <a href="about.php" class="btn btn-primary" style="margin-top: 15px;">Read Our Story</a>
                </div>
                <div data-aos="fade-left">
                    <img src="https://images.unsplash.com/photo-1542314831-c6a4d14db8ac?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Ocean Pearl Hotel Exterior" style="border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                </div>
            </div>
        </section>

        <!-- Featured Rooms -->
        <section style="background-color: #fff;">
            <div class="container">
                <h2 class="section-title" data-aos="fade-up">Featured Accommodations</h2>
                <div class="grid-3">
                    <div class="card" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-img">
                            <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Deluxe Room">
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">Deluxe Room</h3>
                            <p>Comfortable and elegant with partial ocean views.</p>
                            <a href="rooms.php#deluxe" style="color: var(--secondary-color); font-weight: 500;">View Details <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <div class="card" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-img">
                            <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Ocean Suite">
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">Ocean Suite</h3>
                            <p>Spacious living area with panoramic oceanfront views.</p>
                            <a href="rooms.php#suite" style="color: var(--secondary-color); font-weight: 500;">View Details <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="card" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-img">
                            <img src="https://images.unsplash.com/photo-1578683010236-d716f9a3f461?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Penthouse">
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">Penthouse</h3>
                            <p>The ultimate luxury experience with private terrace and pool.</p>
                            <a href="rooms.php#penthouse" style="color: var(--secondary-color); font-weight: 500;">View Details <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Semantic Footer -->
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

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Custom JS -->
    <script src="script.js"></script>
</body>
</html>
