<?php
 
 include 'config.php'; 

$stmt = $conn->prepare("INSERT INTO package_bookings (package, time, adults, kids, otherMessage, firstName, lastName, email, nic, contactNo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssiiisssss", $package, $time, $adults, $kids, $otherMessage, $firstName, $lastName, $email, $nic, $contactNo);

// Set parameters and execute
$package = $_POST['package'];
$time = $_POST['time'];
$adults = $_POST['adults'];
$kids = isset($_POST['kids']) ? $_POST['kids'] : 0;
$otherMessage = $_POST['otherMessage'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$nic = $_POST['nic'];
$contactNo = $_POST['contactNo'];

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
