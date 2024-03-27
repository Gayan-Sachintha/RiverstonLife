<?php
include('config.php');

if (isset($_POST['contact'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $sql = "INSERT INTO contact (name, email, message) VALUES (?,?,?)";

    if ($stmt = mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, "sss", $name, $email, $message);

        if (mysqli_stmt_execute($stmt)) {
            echo "<script>alert('Message Sent Successfully')</script>";
            echo "<script>window.history.back()</script>";
        } else {
            echo "<script>alert('Message Sent Unsuccessful')</script>";
            echo "<script>window.history.back()</script>";
        }
    } else {
        echo "Error in prepare statement" . mysqli_error($conn);
    }
} else {
    echo "<script>alert('Invalid Data')</script>";
    echo "<script>window.history.back()</script>";
}
