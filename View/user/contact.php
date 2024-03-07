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
                        <form action="#" method="post">
                            <p class="form-label text-white" style="text-align: center;">For reservations and inquiries reach out to one of our customer representatives via email, direct phone line, WhatsApp, or via submitting the contact form below.</p>
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
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-12 col-md-6 text-center">
                        <!-- Contact information -->
                        <h2 class="text-white">Contact Information</h2>
                        <p class="text-white">Address: Riverston, Rattota, Matale - Sri Lanka</p>
                        <p class="text-white">Hotline: +94 76 361 6537</p>
                        <p class="text-white">Email: info@riverstonLife@gmail.com</p>
                    </div>
                </div>
                <!-- Google Map -->
                <div class="row justify-content-center mt-5">
                    <div class="col-12 col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.669918137095!2d80.69349547500211!3d7.501644992510781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae35b5a82f4c82d%3A0x4c91f8ac490204a7!2sRiverston%20Nature%20Villa!5e0!3m2!1sen!2slk!4v1709783096962!5m2!1sen!2slk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
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
