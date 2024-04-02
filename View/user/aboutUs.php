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
            padding-bottom: 10px; /* Adjusted padding to make the page shorter */
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
            margin-bottom: 2rem;
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
        .transparent-box {
            background-color: rgba(255, 255, 255, 0.3); /* Adjust transparency and color here */
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
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
                                <h1 style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">ABOUT US</h1>
                                <div class="value-text ">WELCOME TO OUR UNIFIED PLATFORM, WHERE THREE DISTINCT DESTINATIONS COME TOGETHER TO OFFER YOU AN EXTRAORDINARY EXPERIENCE AMIDST NATURE'S WONDERS.
                                KNOWING OUR VILLAS BETTER THAN ANYONE ENABLES US TO GUARANTEE OUR GUESTS MAKE INFORMED DECISIONS ABOUT WHICH VILLA TO CHOOSE. </div>
                            </div>

                            <div class="container my-3"> <!-- Adjusted margin -->
                                <div class="row">
                                    <div class="col-md-6 text-white">
                                        <div class="value-subheading"></div>
                                        <p>  

                                        </p>
                                        <p class="value-text">Welcome to Nature Life Eco Resort, a serene cabana retreat nestled in the picturesque Knuckles mountain range. With lush greenery and a tranquil atmosphere, our resort offers the perfect escape for relaxation and adventure. Your ultimate destination for nature's embrace awaits!</p>
                                        <p class = "value-text">Experience adventure at Dust and Dirt Quad Bike Adventure Park near Babarakiri Ella in Matale. For thrill-seekers, our park offers exciting sports and entertainment activities. Combine this with the tranquil beauty of Nature Life Eco Resort and the majestic Riverston Nature Villa for an unforgettable getaway in the heart of nature. Your unforgettable adventure awaits!</p>
                                        <p class = "value-text">At Riverston Nature Villa, you'll discover a haven of natural splendor tucked away in the majestic Knuckles massif. Surrounded by the stunning beauty of Bambarakiriella, our villa offers a perfect blend of adventure and relaxation. Whether you're craving a thrilling outdoor excursion or a peaceful retreat, Riverston Nature Villa promise. </p>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="../assets/images/villa/villa1.jpg" alt="" class="img-fluid" style="width: 90%; height: 80%; border-radius: 30px;">
                                    </div> 
                                </div>
                            </div>

                            <div class="col-md-6 text-white">
                                <div class="transparent-box">
                                    <div class="value-subheading">OUR VISION</div>
                                    <p class="text-left">At our unified platform, we strive to provide a seamless and unforgettable experience that celebrates the beauty and diversity of Sri Lanka's natural landscapes.</p>
                                </div>
                            </div>

                            <div class="col-md-6 text-white">
                                <div class="transparent-box">
                                    <div class="value-subheading">OUR MISSION</div>
                                    <p class="text-left">Our mission is to offer unparalleled hospitality, eco-friendly accommodations, and thrilling adventures, while promoting environmental sustainability and responsible tourism practices.</p>
                                </div>
                            </div>

                            <div class="col-md-12 text-white mb-5"> <!-- Added margin-bottom -->
                                
                                    <div class="value-subheading">JOIN US</div>
                                    <p class="text-left">Embark on a journey of discovery and adventure with us as we invite you to explore the wonders of Nature Life Eco Resort, Riverston Nature Villa, and Dust and Dirt Quad Bike Adventure Park. Whether you seek relaxation, adventure, or a bit of both, our unified platform promises an unforgettable experience amidst the splendor of nature. Welcome to our unified platform, where three distinct destinations come together to offer you an extraordinary experience amidst nature's wonders. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-2"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Footer -->
            <?php include "./common/footer.php"; ?>
        </div>
    </div>

</body>

</html>