<?php
include('config.php');

if (isset($_GET['id'])) {
    $BookingId = $_GET['id'];

    $sql = "UPDATE villareservations SET status = 'Cancelled' WHERE id = ?";

    if ($stmt = mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, "i", $BookingId);

        if (mysqli_stmt_execute($stmt)) {
            echo "<script>alert('Booking Cancel Successfully');</script>";
            header("location:../Admin/pendingBooking.php");
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
