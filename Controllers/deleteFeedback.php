<?php
include('config.php');

if (isset($_GET['id'])) {
    $feedbackID = $_GET['id'];

    $sql = "DELETE FROM feedback WHERE id = ?";

    if ($stmt = mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, "i", $feedbackID);

        if (mysqli_stmt_execute($stmt)) {
            echo "<script>alert('Feedback Deleted Successfully');</script>";
            echo "<script>window.history.back()</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
