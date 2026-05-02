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
                <li><a href="about.php">About Us</a></li>
                <li class="has-dropdown">
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
            <button class="hamburger" aria-label="Toggle navigation" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </nav>
    </header>

    <main>
        <section class="hero inner-hero" style="background: url('images/hero-contact.webp') center/cover no-repeat;">
            <div class="hero-content">
                <h1 data-aos="zoom-in" data-aos-duration="1200">Contact & Booking</h1>
                <p data-aos="fade-up" data-aos-delay="300">Reserve your slice of paradise today</p>
            </div>
        </section>

        <section class="container">
            <div class="grid-2">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <h2 class="section-title" style="text-align: left; margin-bottom: 30px;">Get In Touch</h2>
                    <p>We would love to hear from you. Whether you have a question about our luxurious rooms, world-class facilities, or want to make a special request for your upcoming stay, our concierge team is ready to assist you 24/7.</p>
                    
                    <div style="margin-top: 40px;">
                        <p data-aos="fade-up" data-aos-delay="200" style="margin-bottom: 20px; display: flex; align-items: center;"><i class="fas fa-map-marker-alt" style="color: var(--secondary); font-size: 1.5rem; margin-right: 20px; width: 30px; text-align: center;"></i> 123 Ocean Drive, Paradise City, 90210</p>
                        <p data-aos="fade-up" data-aos-delay="300" style="margin-bottom: 20px; display: flex; align-items: center;"><i class="fas fa-phone" style="color: var(--secondary); font-size: 1.5rem; margin-right: 20px; width: 30px; text-align: center;"></i> +1 (555) 123-4567</p>
                        <p data-aos="fade-up" data-aos-delay="400" style="margin-bottom: 20px; display: flex; align-items: center;"><i class="fas fa-envelope" style="color: var(--secondary); font-size: 1.5rem; margin-right: 20px; width: 30px; text-align: center;"></i> info@oceanpearl.com</p>
                    </div>
                </div>

                <div class="contact-form-container" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <h3 style="margin-bottom: 25px; font-size: 2rem; color: var(--secondary);">Book Your Stay</h3>
                    
                    <?php
                    if(isset($_GET['status']) && $_GET['status'] == 'success') {
                        echo '<div class="alert alert-success" data-aos="zoom-in">Booking submitted successfully! We will contact you soon to confirm your reservation.</div>';
                    }
                    ?>

                    <form action="booking_process.php" method="POST">

    <!-- Full Name -->
    <div class="form-group" data-aos="fade-up" data-aos-delay="300">

        <label for="full_name">
            Full Name *
        </label>

        <input
            type="text"
            id="full_name"
            name="full_name"
            class="form-control"
            placeholder="Enter your full name"
            required
        >

    </div>

    <!-- Email -->
    <div class="form-group" data-aos="fade-up" data-aos-delay="400">

        <label for="email">
            Email Address *
        </label>

        <input
            type="email"
            id="email"
            name="email"
            class="form-control"
            placeholder="Enter your email address"
            required
        >

    </div>

    <!-- Phone -->
    <div class="form-group" data-aos="fade-up" data-aos-delay="500">

        <label for="phone">
            Phone Number *
        </label>

        <input
            type="tel"
            id="phone"
            name="phone"
            class="form-control"
            placeholder="Enter your phone number"
            required
        >

    </div>

    <!-- Dates -->
    <div class="grid-2" style="gap: 20px;">

        <!-- Check In -->
        <div class="form-group" data-aos="fade-up" data-aos-delay="600">

            <label for="check_in">
                Check In Date *
            </label>

            <input
                type="date"
                id="check_in"
                name="check_in"
                class="form-control"
                required
            >

        </div>

        <!-- Check Out -->
        <div class="form-group" data-aos="fade-up" data-aos-delay="700">

            <label for="check_out">
                Check Out Date *
            </label>

            <input
                type="date"
                id="check_out"
                name="check_out"
                class="form-control"
                required
            >

        </div>

    </div>

    <!-- Hotel -->
    <div class="form-group" data-aos="fade-up" data-aos-delay="800">

        <label for="hotel_id">
            Select Hotel *
        </label>

        <select
            id="hotel_id"
            name="hotel_id"
            class="form-control"
            required
        >

            <option value="" style="color: black;">
                Select Hotel
            </option>

            <option value="1" style="color: black;">
                Ocean Pearl Hotel
            </option>

            <option value="2" style="color: black;">
                Royal Palm Resort
            </option>

            <option value="3" style="color: black;">
                Sunset Paradise Hotel
            </option>

        </select>

    </div>

    <!-- Room -->
    <div class="form-group" data-aos="fade-up" data-aos-delay="900">

        <label for="room_id">
            Select Room *
        </label>

        <select
            id="room_id"
            name="room_id"
            class="form-control"
            required
        >

            <option value="" style="color: black;">
                Select Room
            </option>

            <option value="1" style="color: black;">
                Deluxe Room
            </option>

            <option value="2" style="color: black;">
                Family Suite
            </option>

            <option value="3" style="color: black;">
                Luxury Suite
            </option>

            <option value="4" style="color: black;">
                Beach View Room
            </option>

        </select>

    </div>

    <!-- Guests -->
    <div class="form-group" data-aos="fade-up" data-aos-delay="1000">

        <label for="guests">
            Number Of Guests *
        </label>

        <input
            type="number"
            id="guests"
            name="guests"
            class="form-control"
            placeholder="Number of guests"
            min="1"
            required
        >

    </div>

    <!-- Submit -->
    <div data-aos="fade-up" data-aos-delay="1100">

        <button
            type="submit"
            class="btn btn-primary"
            style="width: 100%; border: none;"
        >
            Submit Booking Request
        </button>

    </div>

</form>
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
