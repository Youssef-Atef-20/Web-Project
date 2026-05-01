<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Rooms and Suites at Ocean Pearl Hotel.">
    <title>Ocean Pearl Hotel | Rooms</title>
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
                    <a href="rooms.php" class="active">Rooms <i class="fas fa-caret-down"></i></a>
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
        <div style="text-align: center; padding-bottom: 10px;">
            <div id="current-date-display"></div>
        </div>
    </header>

    <main>
        <section class="hero" style="height: 40vh; background: linear-gradient(rgba(11, 43, 64, 0.8), rgba(11, 43, 64, 0.8)), url('https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;">
            <div class="hero-content">
                <h1 style="font-size: 3rem;">Rooms & Suites</h1>
                <p>Discover our luxurious accommodations</p>
            </div>
        </section>

        <section class="container">
            <div style="text-align: center; margin-bottom: 40px;" data-aos="fade-up">
                <p>Jump to: <a href="#deluxe" style="color: var(--secondary-color); font-weight: bold;">Deluxe Room</a> | <a href="#suite" style="color: var(--secondary-color); font-weight: bold;">Ocean Suite</a> | <a href="#penthouse" style="color: var(--secondary-color); font-weight: bold;">Penthouse</a></p>
            </div>

            <!-- Anchor required by assignment -->
            <a name="deluxe"></a>
            <div id="deluxe" class="grid-2" style="margin-bottom: 80px;" data-aos="fade-up">
                <div>
                    <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Deluxe Room" style="border-radius: 10px; width: 100%;">
                </div>
                <div>
                    <h2 style="font-size: 2rem;">Deluxe Room</h2>
                    <p class="price" style="font-size: 1.2rem; color: var(--secondary-color); font-weight: bold; margin-bottom: 15px;">$250 / Night</p>
                    <p>Our Deluxe Rooms offer a perfect blend of comfort and style. Featuring a king-size bed, a modern en-suite bathroom, and a private balcony with partial ocean views.</p>
                    <ul style="list-style: none; padding-left: 0; margin-bottom: 20px;">
                        <li><i class="fas fa-wifi"></i> Free Wi-Fi</li>
                        <li><i class="fas fa-tv"></i> Flat-screen TV</li>
                        <li><i class="fas fa-coffee"></i> Coffee Maker</li>
                    </ul>
                    <a href="contact.php" class="btn btn-primary">Book This Room</a>
                </div>
            </div>

            <!-- Anchor -->
            <a name="suite"></a>
            <div id="suite" class="grid-2" style="margin-bottom: 80px; direction: rtl;" data-aos="fade-up">
                <div style="direction: ltr;">
                    <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Ocean Suite" style="border-radius: 10px; width: 100%;">
                </div>
                <div style="direction: ltr;">
                    <h2 style="font-size: 2rem;">Ocean Suite</h2>
                    <p class="price" style="font-size: 1.2rem; color: var(--secondary-color); font-weight: bold; margin-bottom: 15px;">$450 / Night</p>
                    <p>Experience the beauty of the ocean right from your living room. The Ocean Suite features a separate living area, a spacious bedroom, and floor-to-ceiling windows facing the sea.</p>
                    <ul style="list-style: none; padding-left: 0; margin-bottom: 20px;">
                        <li><i class="fas fa-wine-glass-alt"></i> Mini Bar</li>
                        <li><i class="fas fa-hot-tub"></i> Jacuzzi</li>
                        <li><i class="fas fa-concierge-bell"></i> Room Service</li>
                    </ul>
                    <a href="contact.php" class="btn btn-primary">Book This Room</a>
                </div>
            </div>

            <!-- Anchor -->
            <a name="penthouse"></a>
            <div id="penthouse" class="grid-2" data-aos="fade-up">
                <div>
                    <img src="https://images.unsplash.com/photo-1578683010236-d716f9a3f461?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Penthouse" style="border-radius: 10px; width: 100%;">
                </div>
                <div>
                    <h2 style="font-size: 2rem;">The Penthouse</h2>
                    <p class="price" style="font-size: 1.2rem; color: var(--secondary-color); font-weight: bold; margin-bottom: 15px;">$1200 / Night</p>
                    <p>The crown jewel of Ocean Pearl Hotel. The Penthouse spans the entire top floor, featuring a private infinity pool, a large terrace, two bedrooms, and a fully equipped kitchen.</p>
                    <ul style="list-style: none; padding-left: 0; margin-bottom: 20px;">
                        <li><i class="fas fa-swimming-pool"></i> Private Pool</li>
                        <li><i class="fas fa-user-tie"></i> Personal Butler</li>
                        <li><i class="fas fa-car"></i> Airport Transfer</li>
                    </ul>
                    <a href="contact.php" class="btn btn-primary">Book This Room</a>
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
