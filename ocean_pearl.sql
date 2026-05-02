-- ============================================
-- Ocean Pearl Hotel - Database Schema
-- InfinityFree Compatible Version
-- ============================================

-- Hotels Table
CREATE TABLE IF NOT EXISTS hotels (

    id INT AUTO_INCREMENT PRIMARY KEY,

    hotel_name VARCHAR(255) NOT NULL,

    location VARCHAR(255) NOT NULL,

    description TEXT NOT NULL,

    price DECIMAL(10,2) NOT NULL,

    image VARCHAR(255) NOT NULL,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);

-- Rooms Table
CREATE TABLE IF NOT EXISTS rooms (

    id INT AUTO_INCREMENT PRIMARY KEY,

    hotel_id INT NOT NULL,

    room_type VARCHAR(100) NOT NULL,

    price DECIMAL(10,2) NOT NULL,

    guests INT NOT NULL,

    image VARCHAR(255) NOT NULL,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (hotel_id) REFERENCES hotels(id)
    ON DELETE CASCADE

);

-- Bookings Table
CREATE TABLE IF NOT EXISTS bookings (

    id INT AUTO_INCREMENT PRIMARY KEY,

    full_name VARCHAR(255) NOT NULL,

    email VARCHAR(255) NOT NULL,

    phone VARCHAR(50) NOT NULL,

    hotel_id INT NOT NULL,

    room_id INT NOT NULL,

    guests INT NOT NULL,

    check_in DATE NOT NULL,

    check_out DATE NOT NULL,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (hotel_id) REFERENCES hotels(id)
    ON DELETE CASCADE,

    FOREIGN KEY (room_id) REFERENCES rooms(id)
    ON DELETE CASCADE

);

-- Sample Hotels Data
INSERT INTO hotels (
    hotel_name,
    location,
    description,
    price,
    image
) VALUES

(
    'Ocean Pearl Hotel',
    'Alexandria Egypt',
    'Luxury seaside hotel with premium rooms and stunning Mediterranean views.',
    120.00,
    'hotel1.webp'
),

(
    'Royal Palm Resort',
    'Dubai UAE',
    'Modern resort offering luxury suites swimming pools and world class service.',
    250.00,
    'hotel2.webp'
),

(
    'Sunset Paradise Hotel',
    'Goa India',
    'Relaxing beachfront hotel perfect for family vacations and honeymoon trips.',
    180.00,
    'hotel3.webp'
);

-- Sample Rooms Data
INSERT INTO rooms (
    hotel_id,
    room_type,
    price,
    guests,
    image
) VALUES

(
    1,
    'Deluxe Room',
    120.00,
    2,
    'room1.webp'
),

(
    1,
    'Family Suite',
    200.00,
    4,
    'room2.webp'
),

(
    2,
    'Luxury Suite',
    350.00,
    2,
    'room3.webp'
),

(
    3,
    'Beach View Room',
    220.00,
    3,
    'room4.webp'
);