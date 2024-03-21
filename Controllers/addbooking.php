<?php
include 'config.php'; 

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $no_of_rooms = $conn->real_escape_string($_POST['no_of_rooms']);
    $check_in_date = $conn->real_escape_string($_POST['checkIn']);
    $check_out_date = $conn->real_escape_string($_POST['checkOut']);
    $adults = $conn->real_escape_string($_POST['adults']);
    $kids = $conn->real_escape_string($_POST['kids']);
    $first_name = $conn->real_escape_string($_POST['first_name']);
    $last_name = $conn->real_escape_string($_POST['last_name']);
    $email = $conn->real_escape_string($_POST['email']);
    $nic = $conn->real_escape_string($_POST['nic']);
    $contact_no = $conn->real_escape_string($_POST['contact_no']);
    $status = "Pending";

    $sql = "INSERT INTO villareservations (status, no_of_rooms, check_in_date, check_out_date, adults, kids, first_name, last_name, email, nic, contact_no) VALUES ('$status', '$no_of_rooms', '$check_in_date', '$check_out_date', '$adults', '$kids', '$first_name', '$last_name', '$email', '$nic', '$contact_no')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../Admin/addAdmin.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid Request";
}
?>
