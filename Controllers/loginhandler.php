<?php 
    include("../Controllers/config.php");

    if(isset($_POST["login"])){
        $email = $_POST["exampleInputEmail1"];
        $password = $_POST["exampleInputPassword11"];

        $sql = "Select * From `admin` Where `email` = '".$email."' and `password` = '".$password."'";

        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){
            $query = "SELECT id, name, email FROM `admin` WHERE `email` = '$email' AND `password` = '$password'";
            $result2 = $conn->query($query);

            if(mysqli_num_rows($result2) > 0){

                $row = mysqli_fetch_assoc($result2);

                $_SESSION["id"] = 1;

                header("Location: ../Admin/index.php");
                exit();
            }

            else{
                echo "No result found";
            }
        }
        else{
            header("Location: ../View/user/index.php");
        }
        
    }
?>