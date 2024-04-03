<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
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
            border: none;
        }

        .btnreserve:hover {
            color: #F3C13E;
            background-color: #304F34;
            border-radius: 50px;
            border: none;
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

        /* Additional CSS for hover effect */
        .contact-box {
            background-color: rgba(0, 0, 0, 0);
            border-radius: 10px;
            padding: 10px;
            transition: background-color 0.5s ease-in-out;
            cursor: pointer;
            border: 4px solid #F3C13E; /* Increased border width */
            margin-bottom: 20px;
            position: relative;
        }

        .contact-box:hover {
            background-color: rgba(243, 193, 62, 0.3);
        }

        .contact-box:hover p,
        .contact-box:hover label {
            color: #fff;
        }

        /* Custom class for increasing font size of topics */
        .topic {
            font-size: 20px;
            /* Removed font-weight: bold; */
        }

        /* Adjusting columns for alignment in one row */
        @media (max-width: 576px) {
            .contact-box {
                margin-bottom: 10px;
            }
        }

        .collapse-icon {
            transition: transform 0.3s ease;
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .collapsed .collapse-icon {
            transform: rotate(-90deg);
        }

        .collapsing .collapse-icon {
            transform: rotate(0deg);
        }
      .btn.btn-primary {
        background-color: #F3C13E; /* Yellow color */
        border-color: #F3C13E; /* Border color */
        }

        .btn.btn-primary:hover {
        background-color: #ffbf00; /* Darker yellow color on hover */
        border-color: #ffbf00; /* Darker border color on hover */
        }
    </style>
    <title>RIVERSTON LIFE - Contact Us</title>
</head>

<body>
    <video playsinline autoplay muted loop id="bgVideo" style="position: fixed; right: 0; bottom: 0; min-width: 100%; min-height: 100%; z-index: -3;">
        <source src="../assets/videos/villaviewhead1.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="content container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <!-- Navigation bar -->
                    <?php include "./common/nav.php"; ?>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-12 text-white text-center mt-5 mb-3" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">
                        <h1>Contact Us</h1>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6">
                        <!-- Contact form -->
                        <form action="../../Controllers/contact.php" method="post">
                            <p class="form-label text-white" style="text-align: center;">For reservations and inquiries, please fill out the form below or contact us directly.</p>
                            <div class="mb-3">
                                <label for="name" class="form-label text-white">Your Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label text-white">Your Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label text-white">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            </div>
                           
                            <button type="submit" name="contact" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
                
                <div class="row justify-content-left mt-5">
                <div class="col-12 col-md-5 text-left">
                        <!-- Contact information -->
                        <h2 class="text-white">Contact Information</h2>
                    <div class="col-md-12">
                        
                        <div class="mb-3 contact-box" data-bs-toggle="collapse" data-bs-target="#natureLife" aria-expanded="false">
                            <label class="form-label text-white topic"></i> Nature Life Eco Resort <i class="fas fa-chevron-down collapse-icon"></i></label>
                            <div class="collapse" id="natureLife">
                                <p class="text-white"><i class="fas fa-mobile-alt"></i> Address : Riveston Rd, Bambaragala, Rattota, Matale, Sri Lanka, 21400</p>
                                <p class="text-white"><i class="fas fa-phone-alt"></i> Mobile : 070 149 2017</p>
                                <p class="text-white"><i class="fas fa-envelope"></i> Email : naturelifeecoresort@gmail.com</p>
                            </div>
                        </div>
                        <div class="mb-3 contact-box" data-bs-toggle="collapse" data-bs-target="#dustDirt" aria-expanded="false">
                            <label class="form-label text-white topic"></i> Dust and Dirt Quad Bike Adventure Park <i class="fas fa-chevron-down collapse-icon"></i></label>
                            <div class="collapse" id="dustDirt">
                                <p class="text-white"><i class="fas fa-mobile-alt"></i> Address : Babarakiri ella, Rattota, Sri Lanka</p>
                                <p class="text-white"><i class="fas fa-phone-alt"></i> Mobile : 070 149 2017</p>
                                <p class="text-white"><i class="fas fa-envelope"></i> Email : dustanddirtatv@gmail.com</p>
                            </div>
                        </div>
                        <div class="mb-3 contact-box" data-bs-toggle="collapse" data-bs-target="#riverstonVilla" aria-expanded="false">
                            <label class="form-label text-white topic"></i> Riverston Nature Villa <i class="fas fa-chevron-down collapse-icon"></i></label>
                            <div class="collapse" id="riverstonVilla">
                                <p class="text-white"><i class="fas fa-mobile-alt"></i> Address : Matale - Rattota - Pallegama Rd, Rattota, Sri Lanka, 21400</p>
                                <p class="text-white"><i class="fas fa-phone-alt"></i> Mobile : 075 935 1499</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Google Map -->
                <div class="col-12 col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.669918137095!2d80.69349547500211!3d7.501644992510781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae35b5a82f4c82d%3A0x4c91f8ac490204a7!2sRiverston%20Nature%20Villa!5e0!3m2!1sen!2slk!4v1709783096962!5m2!1sen!2slk" width="115%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
