<!DOCTYPE html>
<html lang="en">

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
    <script src="test.js"></script>
    <title>RIVERSTON LIFE</title>

    <style>

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
</head>

<body>

    <div class="card" style="width: 18rem;height: 100%;border-radius: 50px;background-color: #222823;border: none;">

        <img src="../assets/images/villa/villa1.jpg" alt="" style="border-radius: 50px;">
        <div class="card-img-overlay">
            <h4 class="card-title text-center">Nature Kabana</h4> <hr>
            <p class="card-text text-center">Immerse yourself in luxury amidst nature at Nature Life Eco Resort. Offering breathtaking views, a private pool, and exquisite interiors, this villa is a sanctuary of peace and elegance. Perfect for serene family holidays or intimate escapes.</p>
            <div class="p-2 text-center"> <hr>
                <button class="btn mb-3 mt-2 btnreserve"><b>Reserve
                        Now</b></button>
            </div>
        </div>
    </div>


</body>

</html>