<?php
session_start();
include('config.php');

if (isset($_GET['id'])) {
    $packageID = $_GET['id'];

    $sql = "DELETE FROM packages WHERE id = ?";

    if ($stmt = mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, "i", $packageID);

        if (mysqli_stmt_execute($stmt)) {
            echo "<script>alert('Package Deleted Successfully');</script>";
            header("location:../Admin/allPackages.php");
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
