<?php
session_start();
include 'config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $no_of_rooms = $conn->real_escape_string($_POST['noofroom']);
    $check_in_date = $conn->real_escape_string($_POST['checkindate']);
    $check_out_date = $conn->real_escape_string($_POST['checkoutdate']);
    $adults = $conn->real_escape_string($_POST['adult']);
    $kids = $conn->real_escape_string($_POST['kids']);
    $first_name = $conn->real_escape_string($_POST['fname']);
    $last_name = $conn->real_escape_string($_POST['lname']);
    $email = $conn->real_escape_string($_POST['email']);
    $nic = $conn->real_escape_string($_POST['nic']);
    $contact_no = $conn->real_escape_string($_POST['contactno']);
    $status = "Pending";

    $sql = "INSERT INTO villareservations (status, no_of_rooms, check_in_date, check_out_date, adults, kids, first_name, last_name, email, nic, contact_no) VALUES ('$status', '$no_of_rooms', '$check_in_date', '$check_out_date', '$adults', '$kids', '$first_name', '$last_name', '$email', '$nic', '$contact_no')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert(New Record Added Successfully)</script>';
        echo '<script>window.history.back()</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid Request";
}
