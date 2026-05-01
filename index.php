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
        content="Discover amazing travel destinations adventure tours and premium holiday packages with Praveen's Travel Agency."
    >

    <title>Home | Praveen's Travel Agency</title>

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
            href="home.php"
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
            <a href="packages.php">Package</a>
            <a href="book.php">Book</a>
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

        <!-- Home -->
        <section
            id="home"
            class="home"
            aria-label="Travel Highlights"
        >

            <div class="swiper home-slider">

                <div class="swiper-wrapper">

                    <!-- Slide -->
                    <article
                        class="swiper-slide slide"
                        style="background:url(images2/homeslide2.webp) no-repeat"
                    >

                        <div
                            class="content"
                            data-aos="zoom-in"
                        >

                            <span>
                                Explore Discover Travel
                            </span>

                            <h1>
                                Travel Around The World
                            </h1>

                            <a
                                href="package.php"
                                class="btn"
                            >
                                Discover More
                            </a>

                        </div>

                    </article>

                    <!-- Slide -->
                    <article
                        class="swiper-slide slide"
                        style="background:url(images2/homeslide6.webp) no-repeat"
                    >

                        <div
                            class="content"
                            data-aos="zoom-in"
                        >

                            <span>
                                Explore Discover Travel
                            </span>

                            <h2>
                                Discover New Places
                            </h2>

                            <a
                                href="package.php"
                                class="btn"
                            >
                                Discover More
                            </a>

                        </div>

                    </article>

                    <!-- Slide -->
                    <article
                        class="swiper-slide slide"
                        style="background:url(images2/homeslide5.webp) no-repeat"
                    >

                        <div
                            class="content"
                            data-aos="zoom-in"
                        >

                            <span>
                                Explore Discover Travel
                            </span>

                            <h2>
                                Make Your Tour Worthwhile
                            </h2>

                            <a
                                href="package.php"
                                class="btn"
                            >
                                Discover More
                            </a>

                        </div>

                    </article>

                </div>

                <div
                    class="swiper-button-next"
                    aria-label="Next Slide"
                ></div>

                <div
                    class="swiper-button-prev"
                    aria-label="Previous Slide"
                ></div>

            </div>

        </section>

        <!-- Services -->
        <section
            class="services"
            aria-labelledby="services-heading"
        >

            <h2
                id="services-heading"
                class="heading-title"
                data-aos="fade-up"
            >
                Our Services
            </h2>

            <div class="box-container">

                <article
                    class="box"
                    data-aos="flip-left"
                >

                    <img
                        src="images2/adventure.webp"
                        alt="Adventure activities"
                    >

                    <h3>Adventure</h3>

                </article>

                <article
                    class="box"
                    data-aos="flip-left"
                    data-aos-delay="100"
                >

                    <img
                        src="images2/tour guide.webp"
                        alt="Professional tour guide"
                    >

                    <h3>Tour Guide</h3>

                </article>

                <article
                    class="box"
                    data-aos="flip-left"
                    data-aos-delay="200"
                >

                    <img
                        src="images2/treeking.webp"
                        alt="Mountain trekking"
                    >

                    <h3>Trekking</h3>

                </article>

                <article
                    class="box"
                    data-aos="flip-left"
                    data-aos-delay="300"
                >

                    <img
                        src="images2/campfire.webp"
                        alt="Campfire activities"
                    >

                    <h3>Campfire</h3>

                </article>

                <article
                    class="box"
                    data-aos="flip-left"
                    data-aos-delay="400"
                >

                    <img
                        src="images2/offload.webp"
                        alt="Off road adventure"
                    >

                    <h3>Off Road</h3>

                </article>

                <article
                    class="box"
                    data-aos="flip-left"
                    data-aos-delay="500"
                >

                    <img
                        src="images2/camping.webp"
                        alt="Camping activities"
                    >

                    <h3>Camping</h3>

                </article>

            </div>

        </section>

        <!-- About -->
        <section
            id="about"
            class="home-about"
            aria-labelledby="about-heading"
        >

            <div
                class="image"
                data-aos="fade-right"
            >

                <img
                    src="images2/about-img.webp"
                    alt="Travel team planning a trip"
                >

            </div>

            <div
                class="content"
                data-aos="fade-left"
            >

                <h2 id="about-heading">
                    About Us
                </h2>

                <p>
                    We create unforgettable travel experiences with carefully designed tours exciting adventures and comfortable holiday packages for travelers around the world.
                </p>

                <a
                    href="about.php"
                    class="btn"
                >
                    Read More
                </a>

            </div>

        </section>

        <!-- Packages -->
        <section
            id="packages"
            class="home-packages"
            aria-labelledby="packages-heading"
        >

            <h2
                id="packages-heading"
                class="heading-title"
                data-aos="fade-up"
            >
                Our Packages
            </h2>

            <div class="box-container">

                <!-- Package -->
                <article
                    class="box"
                    data-aos="zoom-in-up"
                >

                    <div class="image">

                        <img
                            src="images2/img-1.webp"
                            alt="Adventure travel package"
                        >

                    </div>

                    <div class="content">

                        <h3>Adventure</h3>

                        <p>
                            Experience exciting outdoor activities and thrilling journeys across breathtaking destinations.
                        </p>

                        <a
                            href="book.php"
                            class="btn"
                        >
                            Book Now
                        </a>

                    </div>

                </article>

                <!-- Package -->
                <article
                    class="box"
                    data-aos="zoom-in-up"
                    data-aos-delay="150"
                >

                    <div class="image">

                        <img
                            src="images2/img-2.webp"
                            alt="Nature holiday package"
                        >

                    </div>

                    <div class="content">

                        <h3>Nature</h3>

                        <p>
                            Discover peaceful destinations filled with mountains forests waterfalls and natural beauty.
                        </p>

                        <a
                            href="book.php"
                            class="btn"
                        >
                            Book Now
                        </a>

                    </div>

                </article>

                <!-- Package -->
                <article
                    class="box"
                    data-aos="zoom-in-up"
                    data-aos-delay="300"
                >

                    <div class="image">

                        <img
                            src="images2/img-3.webp"
                            alt="Historical travel package"
                        >

                    </div>

                    <div class="content">

                        <h3>Historical</h3>

                        <p>
                            Explore ancient landmarks cultural attractions and famous heritage locations around the globe.
                        </p>

                        <a
                            href="book.php"
                            class="btn"
                        >
                            Book Now
                        </a>

                    </div>

                </article>

            </div>

            <div
                class="load-more"
                data-aos="fade-up"
            >

                <a
                    href="package.php"
                    class="btn"
                >
                    Load More
                </a>

            </div>

        </section>

        <!-- Offer -->
        <section
            class="home-offer"
            aria-labelledby="offer-heading"
        >

            <div
                class="content"
                data-aos="zoom-in"
            >

                <h2 id="offer-heading">
                    Up To 50% Off
                </h2>

                <p>
                    Enjoy exclusive travel discounts on selected holiday packages and create unforgettable memories at amazing prices.
                </p>

                <a
                    href="package.php"
                    class="btn"
                >
                    Claim Offer
                </a>

            </div>

        </section>

    </main>

    <!-- Footer -->
    <footer
        id="contact"
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

                    <a href="#home">
                        <i class="fas fa-angle-right" aria-hidden="true"></i>
                        Home
                    </a>

                    <a href="#about">
                        <i class="fas fa-angle-right" aria-hidden="true"></i>
                        About
                    </a>

                    <a href="#packages">
                        <i class="fas fa-angle-right" aria-hidden="true"></i>
                        Package
                    </a>

                    <a href="#contact">
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

                    <a
                        href="#"
                        aria-label="Facebook"
                    >
                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                        Facebook
                    </a>

                    <a
                        href="https://www.instagram.com/__praveen_0018?igsh=dnB6dWpkbGtmMDR2"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Instagram"
                    >
                        <i class="fab fa-instagram" aria-hidden="true"></i>
                        Instagram
                    </a>

                    <a
                        href="https://github.com/praveenh001"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="GitHub"
                    >
                        <i class="fab fa-github" aria-hidden="true"></i>
                        GitHub
                    </a>

                    <a
                        href="https://www.linkedin.com/in/praveen-h-5b5ba125b"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="LinkedIn"
                    >
                        <i class="fab fa-linkedin" aria-hidden="true"></i>
                        LinkedIn
                    </a>

                </nav>

            </section>

        </div>

        <!-- Credit -->
        <div class="credit">

            <p>
                Created by <span>PRAVEEN H</span> |
                Reference:
                <a
                    href="https://youtu.be/34MBVXsDOtA?si=gyYSLsTe_V7egxks"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    Mr Web Designer YouTube Channel
                </a>
            </p>

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

    <!-- Smooth Scroll -->
    <script>
        document.querySelectorAll('nav a[href^="#"]').forEach(anchor => {

            anchor.addEventListener('click', function (e) {

                const targetId = this.getAttribute('href');
                const targetSection = document.querySelector(targetId);

                if (!targetSection) return;

                e.preventDefault();

                targetSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });

            });

        });
    </script>

</body>
</html>