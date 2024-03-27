<?php
include('config.php');

if (isset($_POST['feedbackBTN'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $adminID = 2;
    $feedback = mysqli_real_escape_string($conn, $_POST['feedback']);

    $sql = "INSERT INTO feedback (Admin_id, name, feedback) VALUES (?,?,?)";

    if ($stmt = mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, "iss", $adminID, $name, $feedback);

        if (mysqli_stmt_execute($stmt)) {
            echo "<script>alert('Feedback Sent Successfully')</script>";
            echo "<script>window.history.back()</script>";
        } else {
            echo "<script>alert('Feedback Sent Unsuccessful')</script>";
            echo "<script>window.history.back()</script>";
        }
    } else {
        echo "Error in prepare statement" . mysqli_error($conn);
    }
} else {
    echo "<script>alert('Invalid Data')</script>";
    echo "<script>window.history.back()</script>";
}
