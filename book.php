<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <!-- SEO -->
    <meta
        name="description"
        content="Book your dream vacation with Praveen's Travel Agency and explore exciting travel destinations around the world."
    >

    <title>Book Your Trip | Praveen's Travel Agency</title>

    <!-- Swiper CSS -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    >

    <!-- AOS CSS -->
    <link
        rel="stylesheet"
        href="https://unpkg.com/aos@2.3.4/dist/aos.css"
    >

    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    >

    <!-- Main CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- Header -->
    <header
        class="header"
        data-aos="fade-down"
    >

        <a
            href="index.php"
            class="logo"
            aria-label="Praveen's Travel Agency Home"
        >
            Praveen's Travel Agency
        </a>

        <nav
            class="navbar"
            aria-label="Main Navigation"
        >

            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php" aria-current="page">Book</a>

        </nav>

        <button
            id="menu-btn"
            class="fas fa-bars"
            type="button"
            aria-label="Open navigation menu"
            aria-expanded="false"
        >
        </button>

    </header>

    <!-- Main -->
    <main>

        <!-- Booking -->
        <section
            class="booking"
            aria-labelledby="booking-heading"
        >

            <h1
                id="booking-heading"
                class="heading-title"
                data-aos="fade-up"
            >
                Book Your Trip
            </h1>

            <!-- Booking Form -->
            <form
                action="book_form.php"
                method="post"
                class="book-form"
                data-aos="zoom-in-up"
            >

                <div class="flex">

                    <!-- Name -->
                    <div class="inputBox">

                        <label for="name">
                            Full Name
                        </label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Enter your full name"
                            required
                            autocomplete="name"
                        >

                    </div>

                    <!-- Email -->
                    <div class="inputBox">

                        <label for="email">
                            Email Address
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="Enter your email"
                            required
                            autocomplete="email"
                        >

                    </div>

                    <!-- Phone -->
                    <div class="inputBox">

                        <label for="phone">
                            Phone Number
                        </label>

                        <input
                            type="tel"
                            id="phone"
                            name="phone"
                            placeholder="Enter your phone number"
                            required
                            autocomplete="tel"
                            inputmode="tel"
                        >

                    </div>

                    <!-- Address -->
                    <div class="inputBox">

                        <label for="address">
                            Address
                        </label>

                        <input
                            type="text"
                            id="address"
                            name="address"
                            placeholder="Enter your address"
                            required
                            autocomplete="street-address"
                        >

                    </div>

                    <!-- Package -->
                    <div class="inputBox">

                        <label for="location">
                            Select Your Package
                        </label>

                        <select
                            id="location"
                            name="location"
                            required
                            class="opt"
                        >

                            <option value="">
                                Select a destination
                            </option>

                            <option value="dandeli">
                                Dandeli
                            </option>

                            <option value="honnavara">
                                Honnavara
                            </option>

                            <option value="hampi">
                                Hampi
                            </option>

                            <option value="sky-diving">
                                Sky Diving
                            </option>

                            <option value="scuba-diving">
                                Scuba Diving
                            </option>

                            <option value="goa-beach">
                                Goa Beach
                            </option>

                            <option value="honeymoon-lakshadweep">
                                Honeymoon In Lakshadweep
                            </option>

                            <option value="honeymoon-manali">
                                Honeymoon In Manali
                            </option>

                            <option value="honeymoon-dubai">
                                Honeymoon In Dubai
                            </option>

                            <option value="kashi-yatra">
                                Kashi Yatra
                            </option>

                            <option value="ram-mandir">
                                Ram Mandir
                            </option>

                            <option value="himalaya">
                                Himalaya Mountain
                            </option>

                        </select>

                    </div>

                    <!-- Guests -->
                    <div class="inputBox">

                        <label for="guests">
                            Number Of Guests
                        </label>

                        <input
                            type="number"
                            id="guests"
                            name="guests"
                            placeholder="Enter number of guests"
                            required
                            min="1"
                        >

                    </div>

                    <!-- Arrival -->
                    <div class="inputBox">

                        <label for="arrivals">
                            Arrival Date
                        </label>

                        <input
                            type="date"
                            id="arrivals"
                            name="arrivals"
                            required
                        >

                    </div>

                    <!-- Leaving -->
                    <div class="inputBox">

                        <label for="leaving">
                            Leaving Date
                        </label>

                        <input
                            type="date"
                            id="leaving"
                            name="leaving"
                            required
                        >

                    </div>

                </div>

                <!-- Submit -->
                <button
                    type="submit"
                    class="btn"
                    name="send"
                >
                    Submit Booking
                </button>

            </form>

        </section>

    </main>

    <!-- Footer -->
    <footer
        class="footer"
        data-aos="fade-up"
    >

        <div class="box-container">

            <!-- Quick Links -->
            <section
                class="box"
                aria-labelledby="quick-links-heading"
            >

                <h2 id="quick-links-heading">
                    Quick Links
                </h2>

                <nav aria-label="Footer Navigation">

                    <a href="index.php">
                        <i class="fas fa-angle-right" aria-hidden="true"></i>
                        Home
                    </a>

                    <a href="about.php">
                        <i class="fas fa-angle-right" aria-hidden="true"></i>
                        About
                    </a>

                    <a href="package.php">
                        <i class="fas fa-angle-right" aria-hidden="true"></i>
                        Package
                    </a>

                    <a href="book.php">
                        <i class="fas fa-angle-right" aria-hidden="true"></i>
                        Book
                    </a>

                </nav>

            </section>

            <!-- Extra Links -->
            <section
                class="box"
                aria-labelledby="extra-links-heading"
            >

                <h2 id="extra-links-heading">
                    Extra Links
                </h2>

                <nav aria-label="Extra Links">

                    <a href="#">
                        <i class="fas fa-angle-right" aria-hidden="true"></i>
                        Ask Questions
                    </a>

                    <a href="#">
                        <i class="fas fa-angle-right" aria-hidden="true"></i>
                        About Us
                    </a>

                    <a href="#">
                        <i class="fas fa-angle-right" aria-hidden="true"></i>
                        Privacy Policy
                    </a>

                    <a href="#">
                        <i class="fas fa-angle-right" aria-hidden="true"></i>
                        Terms Of Use
                    </a>

                </nav>

            </section>

            <!-- Contact -->
            <section
                class="box"
                aria-labelledby="contact-heading"
            >

                <h2 id="contact-heading">
                    Contact
                </h2>

                <address>

                    <a href="tel:+918073516447">
                        <i class="fas fa-phone" aria-hidden="true"></i>
                        +91 8073516447
                    </a>

                    <a href="tel:+911234567890">
                        <i class="fas fa-phone" aria-hidden="true"></i>
                        +91 1234567890
                    </a>

                    <a href="mailto:praveenpuni80@gmail.com">
                        <i class="fas fa-envelope" aria-hidden="true"></i>
                        praveenpuni80@gmail.com
                    </a>

                    <p>
                        <i class="fas fa-map" aria-hidden="true"></i>
                        Bengaluru India 400104
                    </p>

                </address>

            </section>

            <!-- Social -->
            <section
                class="box"
                aria-labelledby="social-heading"
            >

                <h2 id="social-heading">
                    Follow Us
                </h2>

                <nav aria-label="Social Media Links">

                    <a href="#" aria-label="Facebook">
                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                        Facebook
                    </a>

                    <a href="#" aria-label="Twitter">
                        <i class="fab fa-twitter" aria-hidden="true"></i>
                        Twitter
                    </a>

                    <a href="#" aria-label="Instagram">
                        <i class="fab fa-instagram" aria-hidden="true"></i>
                        Instagram
                    </a>

                    <a href="#" aria-label="LinkedIn">
                        <i class="fab fa-linkedin" aria-hidden="true"></i>
                        LinkedIn
                    </a>

                </nav>

            </section>

        </div>

    </footer>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <!-- Main JS -->
    <script src="script.js"></script>

    <!-- AOS Init -->
    <script>
        AOS.init({
            duration: 1000,
            once: true,
            offset: 120
        });
    </script>

</body>
</html>