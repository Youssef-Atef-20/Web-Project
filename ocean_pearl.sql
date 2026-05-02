-- ============================================
-- Ocean Pearl Hotel - Database Schema
-- ============================================

CREATE DATABASE IF NOT EXISTS ocean_pearl_db;
USE ocean_pearl_db;

-- ============================================
-- Table 1: rooms
-- Stores all available hotel room types
-- ============================================
CREATE TABLE IF NOT EXISTS rooms (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    room_type   VARCHAR(50)    NOT NULL,
    price_night DECIMAL(10, 2) NOT NULL,
    capacity    INT            NOT NULL DEFAULT 2,
    description TEXT
);

-- Sample Data for rooms
INSERT INTO rooms (room_type, price_night, capacity, description) VALUES
('Deluxe Room',  250.00, 2, 'Comfortable and elegant with partial ocean views and a private balcony.'),
('Ocean Suite',  450.00, 3, 'Spacious suite with floor-to-ceiling windows and panoramic oceanfront views.'),
('Penthouse',   1200.00, 4, 'Entire top floor with a private infinity pool, terrace, and personal butler.');

-- ============================================
-- Table 2: bookings
-- Stores guest booking requests from the form
-- ============================================
CREATE TABLE IF NOT EXISTS bookings (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    name        VARCHAR(100)  NOT NULL,
    email       VARCHAR(100)  NOT NULL,
    room_id     INT,
    check_in    DATE          NOT NULL,
    check_out   DATE          NOT NULL,
    message     TEXT,
    created_at  TIMESTAMP     DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (room_id) REFERENCES rooms(id) ON DELETE SET NULL
);

-- ============================================
-- Table 3: facilities
-- Stores hotel facilities info
-- ============================================
CREATE TABLE IF NOT EXISTS facilities (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    name        VARCHAR(100) NOT NULL,
    description TEXT
);

-- Sample Data for facilities
INSERT INTO facilities (name, description) VALUES
('Serenity Spa',        'Award-winning spa offering massages, facials, and wellness treatments.'),
('The Pearl Restaurant','Michelin-star dining with breathtaking ocean views.'),
('Infinity Pool',       'Signature infinity pool blending seamlessly with the ocean horizon.');
