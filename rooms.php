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
    <header data-aos="fade-down" data-aos-duration="1000">
        <div class="date-container" id="current-date-display"></div>
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
    </header>

    <main>
        <section class="hero inner-hero" style="background: url('https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;">
            <div class="hero-content">
                <h1 data-aos="zoom-in" data-aos-duration="1200">Rooms & Suites</h1>
                <p data-aos="fade-up" data-aos-delay="300">Discover our luxurious, beautifully designed accommodations</p>
            </div>
        </section>

        <section class="container">
            <div style="text-align: center; margin-bottom: 60px;" data-aos="fade-up">
                <p>Jump to: 
                    <a href="#deluxe" style="color: var(--secondary); font-weight: bold; margin: 0 10px;">Deluxe Room</a> | 
                    <a href="#suite" style="color: var(--secondary); font-weight: bold; margin: 0 10px;">Ocean Suite</a> | 
                    <a href="#penthouse" style="color: var(--secondary); font-weight: bold; margin: 0 10px;">Penthouse</a>
                </p>
            </div>

            <a name="deluxe"></a>
            <div id="deluxe" class="grid-2 room-row" data-aos="fade-up" data-aos-duration="1000">
                <div data-aos="fade-right" data-aos-delay="200">
                    <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Deluxe Room">
                </div>
                <div data-aos="fade-left" data-aos-delay="400">
                    <h2 style="font-size: 2.5rem; color: var(--white);">Deluxe Room</h2>
                    <div class="price-tag">$250 / Night</div>
                    <p>Our Deluxe Rooms offer a perfect blend of comfort and style. Featuring a king-size bed dressed in premium linens, a modern en-suite bathroom with a rainfall shower, and a private balcony offering breathtaking partial ocean views.</p>
                    <ul class="room-features">
                        <li data-aos="fade-up" data-aos-delay="500"><i class="fas fa-wifi"></i> High-Speed Free Wi-Fi</li>
                        <li data-aos="fade-up" data-aos-delay="600"><i class="fas fa-tv"></i> 55" 4K Smart TV</li>
                        <li data-aos="fade-up" data-aos-delay="700"><i class="fas fa-coffee"></i> Premium Coffee Maker</li>
                    </ul>
                    <a href="contact.php" class="btn btn-primary" data-aos="zoom-in" data-aos-delay="800">Book This Room</a>
                </div>
            </div>

            <a name="suite"></a>
            <div id="suite" class="grid-2 room-row" data-aos="fade-up" data-aos-duration="1000" style="direction: rtl;">
                <div data-aos="fade-left" data-aos-delay="200" style="direction: ltr;">
                    <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Ocean Suite">
                </div>
                <div data-aos="fade-right" data-aos-delay="400" style="direction: ltr;">
                    <h2 style="font-size: 2.5rem; color: var(--white);">Ocean Suite</h2>
                    <div class="price-tag">$450 / Night</div>
                    <p>Experience the beauty of the ocean right from your living room. The Ocean Suite features a separate living area, a spacious master bedroom, and floor-to-ceiling windows facing the sea.</p>
                    <ul class="room-features">
                        <li data-aos="fade-up" data-aos-delay="500"><i class="fas fa-wine-glass-alt"></i> Fully Stocked Mini Bar</li>
                        <li data-aos="fade-up" data-aos-delay="600"><i class="fas fa-hot-tub"></i> Private Jacuzzi</li>
                        <li data-aos="fade-up" data-aos-delay="700"><i class="fas fa-concierge-bell"></i> 24/7 Room Service</li>
                    </ul>
                    <a href="contact.php" class="btn btn-primary" data-aos="zoom-in" data-aos-delay="800">Book This Room</a>
                </div>
            </div>

            <a name="penthouse"></a>
            <div id="penthouse" class="grid-2 room-row" data-aos="fade-up" data-aos-duration="1000">
                <div data-aos="fade-right" data-aos-delay="200">
                    <img src="https://images.unsplash.com/photo-1578683010236-d716f9a3f461?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Penthouse">
                </div>
                <div data-aos="fade-left" data-aos-delay="400">
                    <h2 style="font-size: 2.5rem; color: var(--white);">The Penthouse</h2>
                    <div class="price-tag">$1200 / Night</div>
                    <p>The crown jewel of Ocean Pearl Hotel. The Penthouse spans the entire top floor, featuring a private infinity pool, a massive terrace, two grand bedrooms, and a fully equipped chef's kitchen.</p>
                    <ul class="room-features">
                        <li data-aos="fade-up" data-aos-delay="500"><i class="fas fa-swimming-pool"></i> Private Rooftop Pool</li>
                        <li data-aos="fade-up" data-aos-delay="600"><i class="fas fa-user-tie"></i> Dedicated Personal Butler</li>
                        <li data-aos="fade-up" data-aos-delay="700"><i class="fas fa-car"></i> Complimentary Airport Transfer</li>
                    </ul>
                    <a href="contact.php" class="btn btn-primary" data-aos="zoom-in" data-aos-delay="800">Book This Room</a>
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
