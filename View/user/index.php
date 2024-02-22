<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
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
      background-image: url('../assets/images/homebg.jpg');
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
  <!-- <video playsinline autoplay muted loop id="bgVideo"
    style="position: fixed; right: 0; bottom: 0; min-width: 100%; min-height: 100%; z-index: -3;">
    <source src="../assets/videos/backgroundVideo1.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video> -->
  <div class="content ">
    <div class="row">
      <div class="col-12">
        <?php
        include "nav.php";
        ?>
      </div>
      <div class="col-12">
      <div class="card" style="width: 18rem;border-radius: 50px;background-color: #222823;border: none;">

        <img class="card-img-top mx-3" src="../assets/images/card1.jpg" alt="Card image cap" style="width: 90%;border-radius: 10%;">
    </div>
      </div>
      <div class="col-12 mt-3">
        <?php
        include "footer.php";
        ?>
      </div>
    </div>

  </div>
</body>

</html>