<?php
    $connection = mysqli_connect('localhost', 'root', '', 'book_db');

    // Check connection
    if (!$connection) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    if (isset($_POST['send'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $location = $_POST['location'];
        $guests = $_POST['guests'];
        $arrivals = $_POST['arrivals'];
        $leaving = $_POST['leaving'];

        // Prepare the SQL query
        $request = "INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving) VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";

        // Execute the query
        $result = mysqli_query($connection, $request);

        if ($result) {
            header('Location: book.php');
            exit; // Stop further execution after redirect
        } else {
            echo "Error: " . $request . "<br>" . mysqli_error($connection);
        }
    } else {
        echo 'Something went wrong, try again';
    }

    // Close connection
    mysqli_close($connection);
?>
