<?php
    include("../Model/database.php");

    session_start();
    if(isset($_POST["btnsubmit"])){
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM customers WHERE email = `".$email."` AND password = `".$password."`";

        $result = mysqli_query($connect, $sql);

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);

            $_SESSION["name"] = $row["name"];
            $_SESSION["email"] = $row["email"];

            header("location: home.html");
        }

        else{
            header("location: register.php");
        }
    }
?>