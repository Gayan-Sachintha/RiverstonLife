<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
   <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
            background: rgba(30, 40, 31, 0.75);
            overflow-x: hidden;
        }

        body::after {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-size: cover;
            background-position: center;
            z-index: -2;
        }

        .content {
            z-index: 1;
            position: relative;
            background: rgba(30, 40, 31, 0.75);
        }

        .nav-style {
            color: white;
            transition: color 0.5s ease-in-out;
            cursor: pointer;
        }

        .nav-style:hover,
        .nav-style.active {
            color: #F3C13E;
        }

        .sCards {
            background-color: rgba(30, 40, 31);
            color: white;
            ;
        }

        .service-card {
            transition: transform 0.3s, box-shadow 0.3s, background-color 0.3s;
            cursor: pointer;

        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #F3C13E;
            color: rgba(30, 40, 31);
        }

        .villViewhead {
            background-image: url('../assets/images/indeximg/villa view1.jpg');
            background-size: cover;
            background-position: center;
            min-height: 400px;
        }
    </style>
    <title>RIVERSTON LIFE</title>
</head>

<body>
    <video playsinline autoplay muted loop id="bgVideo" style="position: fixed; right: 0; bottom: 0; min-width: 100%; min-height: 100%; z-index: -3;">
        <source src="../assets/videos/backgroundVideo1.mp4">
        Your browser does not support the video tag.
    </video>
    <div class="content">
        <div class="row">
            <div class="col-12">
                <?php include "./common/nav.php"; ?>
            </div>
            <div class="col-12">
            <div class="col-12">
    <div class="row villViewhead">
        <video playsinline autoplay muted loop id="bgVideo" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: -1;">
            <source src="../assets/videos/backgroundVideo1.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h1 style="color: white; text-align: center; margin-top: 100px; z-index: 1;">Welcome to Riverston Life</h1>
    </div>
</div>

                <div class="col-12">
                    <div class="row">

                        <!-- service card view -->
                        <div class="col-12 mt-1">
                            <div class="row">
                                <div class="row">
                                    <!-- <div class="col-1"></div> -->
                                    <div class="col-12">
                                        <div class="row bg-white p-5">
                                            <div class="col-6">
                                                <div class="row">
                                                    <img src="../assets/images/girl-looks-waterfall.jpg" alt="" style="transform: 0.5; border-radius: 25px;">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h2> NATURE LIFE ECO RESORT</h2>
                                                    </div>
                                                    <div class="col-12">
                                                        <p>
                                                            Nature Life Eco Resort, nestled in the serene landscapes of Riverston, offers a tranquil retreat in its beautifully designed cabanas. Guests can bask in breathtaking views, blending seamlessly with the natural surroundings. This haven promises a unique blend of comfort and nature, perfect for those seeking a peaceful getaway.
                                                        </p>
                                                    </div>
                                                    <div class="col-12">
                                                        <h4>Specification</h4>
                                                    </div>
                                                    <div class="col-12">
                                                        <ul>
                                                            <li>Accommodation Type: Cabana</li>
                                                            <li>Number of Rooms: 1</li>
                                                            <li>Occupancy: Suitable for 2 to 6 persons</li>
                                                            <li>Location: Riverston</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-1"></div> -->
                                </div>

                            </div>
                        </div>

                        <!-- specification bar -->
                        <div class="col-12">
                            <div class="row">
                                <div class="col-1"></div>

                                <div class="col-10">
                                    <div class="row mt-4 sCards">
                                        <div class="col-3  p-5 text-center service-card">
                                            <i class="fas fa-concierge-bell" style="color: #ff6f61; font-size: 24px;"></i>
                                            <h5>24-Hour Front Desk</h5>
                                            <p>Always available for your needs</p>
                                        </div>
                                        <div class="col-3 p-5 text-center service-card">
                                            <i class="bi bi-piggy-bank-fill" style="color: #ff6f61; font-size: 24px;"></i>
                                            <h5>BBQ</h5>
                                            <p>Out Door BBQ Facilities</p>
                                        </div>
                                        <div class="col-3 p-5 text-center service-card">
                                            <i class="bi bi-bicycle" style="color: #ff6f61; font-size: 24px;"></i>
                                            <h5>ATV Bike Ride</h5>
                                            <p>Enjoy our premium amenities</p>
                                        </div>
                                        <div class="col-3 p-5 text-center service-card">
                                            <i class="fas fa-utensils" style="color: #ff6f61; font-size: 24px;"></i>
                                            <h5>Food And Bevarages</h5>
                                            <p>Exquisite dining options</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1"></div>
                            </div>
                        </div>

                        <!-- packages -->
                        <div class="col-12">
                            <div class="row">
                                <div class="col-1"></div>
                                <div class="col-10">
                                    <div class="row">

                                        <!-- enher the packges -->
                                        <?php
                                        include 'villapack.php'; 
                                        ?>

                                    </div>
                                </div>
                                <div class="col-1"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12">
                <div class="col-12 mt-3">

                    <?php include "./common/footer.php"; ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
