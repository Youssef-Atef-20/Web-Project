<?php

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $full_name = $conn->real_escape_string($_POST['full_name']);

    $email = $conn->real_escape_string($_POST['email']);

    $phone = $conn->real_escape_string($_POST['phone']);

    $hotel_id = (int) $_POST['hotel_id'];

    $room_id = (int) $_POST['room_id'];

    $guests = (int) $_POST['guests'];

    $check_in = $conn->real_escape_string($_POST['check_in']);

    $check_out = $conn->real_escape_string($_POST['check_out']);

    $sql = "
        INSERT INTO bookings (
            full_name,
            email,
            phone,
            hotel_id,
            room_id,
            guests,
            check_in,
            check_out
        )
        VALUES (
            '$full_name',
            '$email',
            '$phone',
            '$hotel_id',
            '$room_id',
            '$guests',
            '$check_in',
            '$check_out'
        )
    ";

    if ($conn->query($sql) === TRUE) {

        header("Location: contact.php?status=success");

        exit();

    } else {

        echo "Database Error: " . $conn->error;

    }

}

?>