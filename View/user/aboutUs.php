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


        .value-heading {
            font-size: 2rem;
            text-transform: uppercase;
            margin-bottom: 1rem;
        }

        .value-subheading {
            font-size: 1.5rem;
            font-weight: bold;
            color: white;
        }

        .value-text {
            color: white;
            margin-bottom: 2rem;
        }
    </style>
    <title>About Us - RIVERSTON LIFE</title>
</head>

<body>
    <video playsinline autoplay muted loop id="bgVideo" style="position: fixed; right: 0; bottom: 0; min-width: 100%; min-height: 100%; z-index: -3;">
        <source src="../assets/videos/villaviewhead1.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="content container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Navigation bar -->
                <?php
                include "./common/nav.php";
                ?>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-md-2"></div>
                    <div class="col-12 col-md-8">
                        <div class="row">
                            <div class="col-12 text-white text-center mt-5 mb-3">
                                <h1 style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;"><i>ABOUT US</i></h1>
                            </div>

                            <div class="container">
                                <div class="row">


                                    <div class="col-md-6">
                                        <div class="value-subheading">KNOWING OUR VILLAS BETTER THAN ANYONE ENABLES US TO GUARANTEE OUR GUESTS MAKE INFORMED DECISIONS ABOUT WHICH VILLA TO CHOOSE.</div>
                                        <p>

                                        </p>

                                        <p class="value-text">Since 1999 we have been managing villas & this remains a huge part of what we do which explains why we know our villas so well. From our head office near Galle on Sri Lanka’s palm-fringed southern coastline Sri Lanka is our sole focus. Recognition came in 2021 when the readers of Condé Nast Traveller voted Eden Villas one of the best villa companies in the world.</p>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="../assets/images/villa/villa1.jpg" alt="" class="img-fluid" style="width: 90%; height: 60%; border-radius: 40px;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-2"></div>
                            <div class="col-12">
                                <p class="text-white text-center">Welcome to Riverston Life, where we blend luxury with nature to provide you with an unforgettable experience. Our mission is to offer unique, eco-friendly accommodations that allow our guests to relax, unwind, and reconnect with nature.</p>
                                <p class="text-white text-center">Founded in [Year], Riverston Life has become a sanctuary for those seeking peace and adventure in the serene Riverston area. Our resort features beautifully designed villas, each offering its unique charm and connection to the natural surroundings.</p>
                                <p class="text-white text-center">We are committed to sustainability and preserving the beauty of our environment. Join us at Riverston Life for a journey of relaxation, adventure, and connection to the natural world.</p>
                                <!-- Add more content about your team, history, values, etc. -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-2"></div>
                </div>
            </div>
        </div>
        <div class="col-12 mt-2">
            <!-- Footer -->
            <?php include "./common/footer.php"; ?>
        </div>
    </div>

</body>

</html>