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
    </style>
    <title>RIVERSTON LIFE</title>
</head>

<body>
    <video playsinline autoplay muted loop id="bgVideo" style="position: fixed; right: 0; bottom: 0; min-width: 100%; min-height: 100%; z-index: -3;">
        <source src="../assets/videos/backgroundVideo 2.mp4" type="video/mp4">
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
                                <h1><i>M A K E &nbsp; R E S E R V A T I O N</i></h1>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                        <?php
                                        require "dustAndDurtcard.php";
                                        ?>
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