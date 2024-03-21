<?php
include("config.php");

if (isset($_POST["regNext"])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $packageName = mysqli_real_escape_string($conn, $_POST["packageName"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);
    $price = mysqli_real_escape_string($conn, $_POST["price"]);

    // $target_dir = "../View/assets/uploads/";
    // $target_file = $target_dir.basename($_FILES['imageFile']["name"]);

    // if (move_uploaded_file($_FILES['imageFile']["tmp_name"], $target_file)) {
    //     $image = $target_file;
    // } 
    
    // else {
    //     die("Sorry, there was an error uploading your file.");
    // }

    $sql = "UPDATE `packages` SET `packageName`= ? ,`description`= ? ,`price`= ?  WHERE `id` = ?";
    
    if ($stmt = mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, "sssi" ,  $packageName, $description, $price, $id);

        if (mysqli_stmt_execute($stmt)) {
            echo "Package Updated Successfully";
            header("Location: ../Admin/allPackages.php"); 
        } else {
            echo "Error: " . mysqli_error($conn);
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}

else {
    echo "Invalid access method.";
}