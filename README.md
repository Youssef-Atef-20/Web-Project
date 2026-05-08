# 🌊 Ocean Pearl Hotel - Luxury Beach Resort

Ocean Pearl Hotel is a premium, fully responsive web application designed for a luxury seaside resort. It features a modern **Glassmorphism UI**, smooth scroll animations, and a robust PHP/MySQL backend for managing bookings and inquiries.

🔗 **Live Production Link:** [http://allway.kesug.com/](http://allway.kesug.com/)

---

## ✨ Features

- **💎 Premium Design:** Stunning Glassmorphism aesthetics with a curated dark-theme palette.
- **📱 Fully Responsive:** Optimized for all devices, from mobile phones to high-resolution desktops.
- **🎭 Smooth Animations:** Implemented using AOS (Animate On Scroll) for a dynamic user experience.
- **🛎️ Booking System:** Integrated booking process with database storage.
- **🗺️ SEO Optimized:** Includes semantic HTML, meta descriptions, Open Graph tags, `sitemap.xml`, and `robots.txt`.
- **🛠️ Interactive UI:** Custom hamburger menu, dropdowns, and dynamic date displays.

---

## 🚀 Technologies Used

### Frontend
- **HTML5:** Semantic structure for better accessibility and SEO.
- **CSS3:** Custom styles with Flexbox, Grid, and Glassmorphism effects.
- **JavaScript:** Vanilla JS for interactive elements and DOM manipulation.
- **AOS Library:** For scroll-triggered animations.
- **FontAwesome:** For high-quality vector icons.

### Backend & Database
- **PHP:** Server-side logic for page rendering and form processing.
- **MySQL:** Relational database for storing hotel, room, and booking data.

---

## 📂 Project Structure

```text
├── about.php           # About Us page
├── booking_process.php # Backend logic for handling bookings
├── contact.php         # Contact and Booking form page
├── db.php              # Database connection configuration
├── facilities.php      # Hotel facilities and amenities page
├── index.php           # Landing page (Hero, Welcome, Featured)
├── rooms.php           # Detailed accommodations page
├── style.css           # Core design system and styling
├── script.js           # Client-side interactivity
├── ocean_pearl.sql     # Database schema and sample data
├── images/             # Optimized webp images and assets
├── sitemap.xml         # Search engine sitemap
└── robots.txt          # Crawler instructions
```

---

## 🛠️ Installation & Setup

To run this project locally, follow these steps:

1. **Prerequisites:**
   - Install a local server environment like **XAMPP**, **WAMP**, or **MAMP**.

2. **Clone/Download the Project:**
   - Place the project folder inside your server's root directory (e.g., `htdocs` for XAMPP).

3. **Database Setup:**
   - Open **phpMyAdmin**.
   - Create a new database (e.g., `ocean_pearl_hotel`).
   - Import the `ocean_pearl.sql` file provided in the repository.

4. **Configuration:**
   - Open `db.php` and update the database credentials to match your local setup:
     ```php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "ocean_pearl_hotel";
     ```

5. **Run the App:**
   - Navigate to `http://localhost/your-folder-name/index.php` in your browser.

---

## 📈 SEO & Performance

The website is built with a focus on speed and discoverability:
- **WebP Images:** All images are in `.webp` format for faster loading times.
- **Preconnect:** Optimized for external resources like Google Fonts.
- **Meta Tags:** Comprehensive SEO tags for Social Media (OG Tags) and Search Engines.

---

## 📄 License

This project is for demonstration purposes. &copy; 2026 Ocean Pearl Hotel.
