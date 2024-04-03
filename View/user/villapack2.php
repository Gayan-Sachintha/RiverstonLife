<?php
include('../../Controllers/config.php');
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <style>
        .montserrat-price {
            font-family: "Montserrat", sans-serif;
            font-optical-sizing: auto;
            font-weight: 500;
            font-style: normal;
        }

        .btnreserve {
            color: #222823;
            background-color: #F3C13E;
            border-radius: 50px;
            border: none
        }

        .btnreserve:hover {
            color: #F3C13E;
            background-color: #304F34;
            border-radius: 50px;
            border: none
        }
    </style>
</head>

<body>
<?php

$sql = "SELECT * FROM packages WHERE adminID = 2";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
?>
        <div class="col-12 col-md-4 mt-2 mb-4 mx-4 mx-md-0">
            <div class="card" style="width: 18rem;border-radius: 50px;background-color: #222823;border: none;">
                <div class="text-white text-center mb-2 mt-3">
                    <h5><?php echo $row['packageName'] ?></h5>
                </div>
                <img class="card-img-top mx-3" src="<?php echo $row['imagePath'] ?>" alt="Card image cap" style="width: 90%;height: 20%; border-radius: 10%;">
                <div class="card-body mb-2">
                    <p class="card-text text-center text-white">
                        <?php echo $row['description'] ?>
                    </p>
                </div>
                <div class="p-2 text-center mb-2" style="background-color: #F3C13E;margin-top: -10px;">
                    <h2 class="montserrat-price" style="color: #222823;">LKR <?php echo $row['price'] ?></h2>
                </div>
                <div class="p-2 text-center">
                    <button class="btn mb-3 mt-2 btnreserve"><a style="text-decoration:none; color:black; font-weight:650;" href="./bookingFormVilla.php">Reserve
                            Now</a></button>
                </div>
            </div>
        </div>
<?php
    }
}
?>

    <div class="col-12 col-md-4 mt-2 mb-4 mx-4 mx-md-0">
        <div class="card" style="width: 18rem;border-radius: 50px;background-color: #222823;border: none;">
            <div class="text-white text-center mb-2 mt-3">
                <h5>The Explorer's Retreat</h5>
            </div>
            <img class="card-img-top mx-3" src="../assets/images/ecvilla6.jpg" alt="Card image cap" style="width: 90%;border-radius: 10%;">
            <div class="card-body mb-2">
                <p class="card-text text-center text-white">
                    A full-fledged adventure with meals, a cabana stay, an ATV ride, and an evening BBQ under the stars.
                </p>
            </div>
            <div class="p-2 text-center mb-2" style="background-color: #F3C13E;margin-top: -10px;">
                <h2 class="montserrat-price" style="color: #222823;">LKR 8500.00</h2>
            </div>
            <div class="p-2 text-center">
               <button class="btn mb-3 mt-2 btnreserve"><a style="text-decoration:none; color:black; font-weight:650;" href="./bookingFormVilla.php">Reserve
                        Now</a></button>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-4 mt-2 mb-4 mx-4 mx-md-0">
        <div class="card" style="width: 18rem;border-radius: 50px;background-color: #222823;border: none;">
            <div class="text-white text-center mb-2 mt-3">
                <h5>The Serenity Package</h5>
            </div>
            <img class="card-img-top mx-3" src="../assets/images/ecvilla4.jpg" alt="Card image cap" style="width: 90%;border-radius: 10%;">
            <div class="card-body mb-2">
                <p class="card-text text-center text-white">
                    A harmonious blend of meals, a restful cabana stay, and an evening BBQ in tranquil surroundings. </p>
            </div>
            <div class="p-2 text-center mb-2" style="background-color: #F3C13E;margin-top: -10px;">
                <h2 class="montserrat-price" style="color: #222823;">LKR 5800.00</h2>
            </div>
            <div class="p-2 text-center">
               <button class="btn mb-3 mt-2 btnreserve"><a style="text-decoration:none; color:black; font-weight:650;" href="./bookingFormVilla.php">Reserve
                        Now</a></button>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-4 mt-2 mb-4 mx-4 mx-md-0">
        <div class="card" style="width: 18rem;border-radius: 50px;background-color: #222823;border: none;">
            <div class="text-white text-center mb-2 mt-3">
                <h5>The Cozy Cabana Stay</h5>
            </div>
            <img class="card-img-top mx-3" src="../assets/images/ecvilla5.jpg" alt="Card image cap" style="width: 90%;border-radius: 10%;">
            <div class="card-body mb-2">
                <p class="card-text text-center text-white">
                    A simple, intimate cabana experience, perfect for unwinding and enjoying the natural ambiance. </p>
            </div>
            <div class="p-2 text-center mb-2" style="background-color: #F3C13E;margin-top: -10px;">
                <h2 class="montserrat-price" style="color: #222823;">LKR 2500.00</h2>
            </div>
            <div class="p-2 text-center">
                <button class="btn mb-3 mt-2 btnreserve"><a style="text-decoration:none; color:black; font-weight:650;" href="./bookingFormVilla.php">Reserve
                        Now</a></button>
            </div>
        </div>
    </div>

    <div class="row  d-flex ">
        <div class="container col-12 p-5" style="background-color: #222823; border-radius: 50px;">
            <div class="row justify-content-center">
                <form action="../../Controllers/feedback2.php" method="post">
                    <h4 class="text-center mb-5" style="color: white;">Add Your Comment</h4>
                    <input class="mb-4" type="text" name="name" id="" placeholder="Enter Your Name" style="background-color: #ffffff;border-radius: 15px; width: 90%; height: 40px;">
                    <input type="mb-4 text-area" name="feedback" id="" placeholder="Comment Here" style="background-color: #ffffff;border-radius: 15px; width: 90%; height: 70px;">
                    <button class="mt-4 btn btnreserve" name="feedbackBTN" type="submit" style=" width: 150px; font-weight: bold; ">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>


</body>

</html>
