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

    <source src="../assets/videos/backgroundVideo1.mp4">
    Your browser does not support the video tag.
  </video>
  <div class="content">
    <div class="row">
      <div class="col-12">
        <?php
        include "./common/nav.php";
        ?>
      </div>
      <div class="col-12">
        <div class="col-12 mt-4">
          <div class="row">
            <div class="col-1 col-md-1 col-lg-3"></div>
            <div class="col-10 col-md-10 col-lg-6">
              <div class="row">
                <div class="col-12 text-white text-center" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">
                  <h1><i>M A K E &nbsp; R E S E R V A T I O N</i></h1>
                </div>
                <div class="col-12 mt-4 text-white" style="background-color: rgba(48, 79, 52, 0.65); border-radius: 18px;">
                  <form action="../../Controllers/submit_package.php" method="post">
                    <div class="row mt-2">
                      <div class="col-12 col-md-6">
                        <h4>Booking</h4>
                        <div class="form-group mb-2">
                          <label for="package" class="text-white font-weight-bold">Package</label>
                          <select class="form-control" id="package" name="package" required>
                            <option value="" disabled selected>Select your package</option>
                            <option value="basic">30-Minute Discovery Ride</option>
                            <option value="standard">1-Hour Adventure Trail</option>
                            <option value="premium">2-Hour Explorer's Journey</option>
                            <option value="vip">3-Hour Epic Adventure</option>
                          </select>
                        </div>
                        <div class="form-group mb-2">
                          <label for="time" class="text-white text-bold">Time</label>
                          <input type="time" class="form-control" id="time" name="time" required>
                        </div>
                        <div class="form-group mb-2">
                          <label for="adults" class="text-white text-bold">Adults</label>
                          <input type="number" class="form-control" id="adults" name="adults" min="1" required>
                        </div>
                        <div class="form-group mb-2">
                          <label for="kids" class="text-white text-bold">Kids</label>
                          <input type="number" class="form-control" id="kids" name="kids" min="0">
                        </div>
                        <div class="form-group mb-2">
                          <label for="otherMessage" class="text-white text-bold">Other Message</label>
                          <input type="text" class="form-control" id="otherMessage" name="otherMessage">
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <h4>User Details</h4>
                        <div class="form-group mb-2">
                          <label for="firstName" class="text-white text-bold">First Name</label>
                          <input type="text" class="form-control" id="firstName" name="firstName" required>
                        </div>
                        <div class="form-group mb-2">
                          <label for="lastName" class="text-white text-bold">Last Name</label>
                          <input type="text" class="form-control" id="lastName" name="lastName">
                        </div>
                        <div class="form-group mb-2">
                          <label for="email" class="text-white text-bold">Email</label>
                          <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group mb-2">
                          <label for="nic" class="text-white text-bold">NIC  Number</label>
                          <input type="text" class="form-control" id="nic" name="nic">
                        </div>
                        <div class="form-group mb-2">
                          <label for="contactNo" class="text-white text-bold">Contact No</label>
                          <input type="text" class="form-control" id="contactNo" name="contactNo" required>
                        </div>
                        <div class="col-12 text-center mb-3">
                          <button type="button" class="btn btn-success"><a href="calendar.php" style="text-decoration: none; color: white;">CHECK AVAILABILITY</a></button>
                          <button type="submit" class="btn btn-success">BOOK PACKAGE</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>


              </div>
              <div class="col-1 col-md-2 col-lg-3"></div>
            </div>

          </div>
        </div>
        <div class="col-12">
          <div class="col-12 mt-3">
            <?php
            include "./common/footer.php";
            ?>
          </div>
        </div>
      </div>


    </div>
</body>

</html>