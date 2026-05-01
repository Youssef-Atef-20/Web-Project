<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact and book your stay at Ocean Pearl Hotel.">
    <title>Ocean Pearl Hotel | Contact & Book</title>
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
                <li><a href="facilities.php">Facilities</a></li>
                <li><a href="contact.php" class="active">Contact / Book</a></li>
            </ul>
        </nav>
        <div style="text-align: center; padding-bottom: 10px;">
            <div id="current-date-display"></div>
        </div>
    </header>

    <main>
        <section class="hero" style="height: 40vh; background: linear-gradient(rgba(11, 43, 64, 0.8), rgba(11, 43, 64, 0.8)), url('https://images.unsplash.com/photo-1522798514397-e0508e337190?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;">
            <div class="hero-content">
                <h1 style="font-size: 3rem;">Contact & Booking</h1>
                <p>Reserve your slice of paradise</p>
            </div>
        </section>

        <section class="container">
            <div class="grid-2">
                <div data-aos="fade-right">
                    <h2 class="section-title" style="text-align: left;">Get In Touch</h2>
                    <p>We would love to hear from you. Whether you have a question about our rooms, facilities, or want to make a special request for your upcoming stay, our team is ready to assist.</p>
                    
                    <div style="margin-top: 30px;">
                        <p style="margin-bottom: 15px;"><i class="fas fa-map-marker-alt" style="color: var(--secondary-color); font-size: 1.2rem; margin-right: 15px; width: 20px;"></i> 123 Ocean Drive, Paradise City, 90210</p>
                        <p style="margin-bottom: 15px;"><i class="fas fa-phone" style="color: var(--secondary-color); font-size: 1.2rem; margin-right: 15px; width: 20px;"></i> +1 (555) 123-4567</p>
                        <p style="margin-bottom: 15px;"><i class="fas fa-envelope" style="color: var(--secondary-color); font-size: 1.2rem; margin-right: 15px; width: 20px;"></i> info@oceanpearl.com</p>
                    </div>
                </div>

                <div data-aos="fade-left" style="background: var(--white); padding: 40px; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                    <h3 style="margin-bottom: 20px;">Book Your Stay</h3>
                    
                    <?php
                    if(isset($_GET['status']) && $_GET['status'] == 'success') {
                        echo '<div class="alert alert-success">Booking submitted successfully! We will contact you soon.</div>';
                    }
                    ?>

                    <form action="booking_process.php" method="POST">
                        <div class="form-group">
                            <label for="name">Full Name *</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="grid-2" style="gap: 20px;">
                            <div class="form-group">
                                <label for="check_in">Check-in Date *</label>
                                <input type="date" id="check_in" name="check_in" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="check_out">Check-out Date *</label>
                                <input type="date" id="check_out" name="check_out" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="room_type">Room Type *</label>
                            <select id="room_type" name="room_type" class="form-control" required>
                                <option value="">Select a Room</option>
                                <option value="Deluxe Room">Deluxe Room</option>
                                <option value="Ocean Suite">Ocean Suite</option>
                                <option value="Penthouse">Penthouse</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Special Requests / Messages</label>
                            <textarea id="message" name="message" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%; border: none; cursor: pointer;">Submit Booking</button>
                    </form>
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
