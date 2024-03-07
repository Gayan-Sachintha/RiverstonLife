<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        body::after {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            /* background-image: url('../Static Assets/images/background image1.png'); */
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

        .card-img-overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100%;
            width: 100%;
            opacity: 0;
            transition: .5s ease;
            background-color: #222823;
            color: white;
            padding: 20px;
            border-radius: 50px;
        }

        .card:hover .card-img-overlay {
            opacity: 1;
        }
    </style>
    <title>RIVERSTON LIFE</title>
</head>

<body>
    <video playsinline autoplay muted loop id="bgVideo" style="position: fixed; right: 0; bottom: 0; min-width: 100%; min-height: 100%; z-index: -3;">
        <source src="../assets/videos/backgroundVideo3.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="content container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <?php
                    include "./common/nav.php";
                    ?>
                </div>
            </div>
            <div class="col-12 ">
                <div class="row">
                    <div class="col-12 col-md-2"></div>
                    <div class="col-12 col-md-8">
                        <div class="row">
                            <div class="col-12 text-white text-center mt-5 mb-3" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">
                                <h1><i>S E L E C T &nbsp; A &nbsp; V I L L A</i></h1>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 col-md-4 mt-2 mb-4 mx-4 mx-md-0">
                                        <div class="card" style="width: 18rem;height: 100%;border-radius: 50px;background-color: #222823;border: none;">

                                            <img src="../assets/images/villa/villa1.jpg" alt="" style="border-radius: 50px;">
                                            <div class="card-img-overlay">
                                                <h4 class="card-title text-center">Nature Life Eco Resort</h4>
                                                <hr>
                                                <p class="card-text text-center"><br>Nestled in the serene Riverston area, Nature Life Eco Resort is a tranquil escape offering cozy cabanas and exhilarating ATV rides amidst lush, natural beauty for the perfect blend of relaxation and adventure.

                                                </p>
                                                <div class="p-2 text-center">
                                                    <hr>
                                                   <a href="./natureLifeVillaView.php" class="btn mb-3 mt-2 btnreserve"><b>View More</b></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mt-2 mb-4 mx-4 mx-md-0">
                                        <div class="card" style="width: 18rem;height: 100%;border-radius: 50px;background-color: #222823;border: none;">

                                            <img src="../assets/images/villa/villa3.jpg" alt="" style="border-radius: 50px;">
                                            <div class="card-img-overlay">
                                                <h4 class="card-title text-center">Nature Kabana</h4>
                                                <hr>
                                                <p class="card-text text-center">Immerse yourself in luxury amidst nature at Nature Life Eco Resort. Offering breathtaking views, a private pool, and exquisite interiors, this villa is a sanctuary of peace and elegance. Perfect for serene family holidays or intimate escapes.</p>
                                                <div class="p-2 text-center">
                                                    <hr>
                                                    <button class="btn mb-3 mt-2 btnreserve"><b>View More
                                                            </b></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mt-2 mb-4 mx-4 mx-md-0">
                                        <div class="card" style="width: 18rem;height: 100%;border-radius: 50px;background-color: #222823;border: none;">

                                            <img src="../assets/images/villa/villa4.jpg" alt="" style="border-radius: 50px;">
                                            <div class="card-img-overlay">
                                                <h4 class="card-title text-center">Comming Soon !</h4>
                                                <hr>
                                                <p class="card-text text-center">Comming Soon !</p>
                                                <div class="p-2 text-center">
                                                    <hr>
                                                    <button class="btn mb-3 mt-2 btnreserve"><b>Comming Soon!
                                                            </b></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-2"></div>


            </div>
        </div>
        <div class="col-12 mt-2">
            <div class="row">
                <?php
                include "./common/footer.php";
                ?>
            </div>
        </div>
    </div>
    </div>

</body>

</html>
