<?php
include("config.php");

if (isset($_POST["regNext"])) {
    $packageName = mysqli_real_escape_string($conn, $_POST["packageName"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);
    $price = mysqli_real_escape_string($conn, $_POST["price"]);
    $status = "Active";

    $target_dir = "../View/assets/uploads/";
    $target_file = $target_dir.basename($_FILES['imageFile']["name"]);

    if (move_uploaded_file($_FILES['imageFile']["tmp_name"], $target_file)) {
        $image = $target_file;
    } 
    
    else {
        die("Sorry, there was an error uploading your file.");
    }

    $sql = "INSERT INTO packages (id, status, packageName, description, price, imagePath) VALUES (null, ?, ?, ?, ?, ?)";
    $status = "Approved";
    
    if ($stmt = mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, "sssss" , $status, $packageName, $description, $price, $image);

        if (mysqli_stmt_execute($stmt)) {
            echo "New record created successfully";
            header("Location: ../Admin/index.php"); 
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