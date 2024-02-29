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
      /* background-image: url('../assets/images/homebg.jpg'); */
      background-size: cover;
      background-position: center;
      z-index: -2;
    }

    .content {
      z-index: 1;
      position: relative;
      background: rgba(30, 40, 31, 0.75);
    }



    .landhomepagesec1 {
      /* background-image: url('../assets/images/homebg.jpg'); */
      content: '';
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-size: cover;
      background-position: center;
      z-index: -1;
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
        include "./common/nav.php";
        ?>
      </div>

      <div class="col-12">
        <div class="row">
          <div class="col-12 bg-danger p-5">
            <div class="row">
              <div class="col-12 text-center mt-4" style="z-index: -1;">
                <h2 class="text-white">EXPLORE RIVERSTON</h2>
              </div>
              <div class="col-12 text-center mt-5">
                <div class="row">
                  <div class="col-2"></div>
                  <div class="col-8 bg-white rounded">
                    <div class="row">
                      <div class="col-2">Villa Name</div>
                      <div class="col-2">Check In</div>
                      <div class="col-2">Check Out</div>
                      <div class="col-2">Adult</div>
                      <div class="col-1">Children</div>
                      <div class="col-1">Room</div>
                      <div class="col-2 btn btn-success "><a>Check Now</a></div>
                    </div>
                  </div>
                  <div class="col-2"></div>

                </div>
              </div>
            </div>
          </div>
          <div class="col-12 mt-3">
            <div class="row">
              <!-- carusal -->
              <div class="col-4 "><img src="../assets/images/homebg.jpg" alt="" style="width: 103%;height: 100%;">
              </div>
              <div class="col-4 "><img src="../assets/images/homebg.jpg" alt="" style="width: 103%;height: 100%;">
              </div>
              <div class="col-4 "><img src="../assets/images/homebg.jpg" alt="" style="width: 103%;height: 100%;">
              </div>
            </div>
          </div>
          <div class="col-12 mt-5 text-white mt-4">
            <div class="row">
              <div class="col-12 col-md-5">
                <div class="row">
                  <div class="col-7 mx-3">
                    <div class="row">
                      <div class="col-12">
                        <span>THE CAPPA LUXURY HOTEL</span>
                        <H3>Enjoy a Luxury Experience</H3>
                      </div>
                      <div class="col-12 text-center">
                        <p>Welcome to the best five-star deluxe hotel in New York. Hotel elementum sesue the
                          aucan vestibulum aliquam justo in sapien rutrum volutpat. Donec in quis the
                          pellentesque velit. Donec id velit ac arcu posuere blane.</p>
                        <p>Hotel ut nisl quam nestibulum ac quam nec odio elementum sceisue the aucan ligula.
                          Orci varius natoque penatibus et magnis dis parturient monte nascete ridiculus mus
                          nellentesque habitant morbine.</p>
                      </div>
                      <div class="col-12">
                        <p>Reservation</p>
                        <p>778125454</p>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="col-12 col-md-7">
                <div class="row">
                  <div class="col-6 " style="margin-top: 10%;height: 300px;">
                    <img src="../assets/images/indeximg/indeximg (4).jpg" alt="" style="width: 100%;height: 100%;">
                  </div>
                  <div class="col-6" style="height: 400px;">
                    <img src="../assets/images/indeximg/indeximg (1).jpg" alt="" style="width: 100%;height: 100%;">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 mt-4">
            <div class="row">
              <div class="col-12 col-md-5 mx-3">
                <img src="../assets/images/indeximg/indeximg (2).jpg" alt="" style="width: 100%;height: 100%;">
              </div>
              <div class="col-12 col-md-4">
                <div class="row">
                  <div class="col-8">
                    <div class="row text-white">
                      <div class="col-12">
                        <h3>NATURE LIFE ECO RESORT</h3>
                      </div>
                      <div class="col-12 mt-2">Spa center inilla duiman at elit finibus viverra nec a lacus themo the
                        nesudea
                        seneoice misuscipit non sagie the fermen ziverra tristiue duru the ivite dianne
                        onen nivami acsestion augue artine.</div>
                      <div class="col-12 mt-4">Spa center inilla duiman at elit finibus viverra nec a lacus themo the
                        nesudea
                        seneoice misuscipit non sagie the fermen ziverra tristiue duru the ivite dianne
                        onen nivami acsestion augue artine.</div>
                      <div class="col-12 mt-4">
                        <button class="btn btn-danger">Learn More</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 mt-4">
            <div class="row">
              <div class="col-12 col-md-5 ">
                <div class="row">
                  <div class="col-8 mx-4">
                    <div class="row text-white">
                      <div class="col-12">
                        <h3>Quad Bike Ride</h3>
                      </div>
                      <div class="col-12 mt-2">Spa center inilla duiman at elit finibus viverra nec a lacus themo the
                        nesudea
                        seneoice misuscipit non sagie the fermen ziverra tristiue duru the ivite dianne
                        onen nivami acsestion augue artine.</div>
                      <div class="col-12 mt-4">Spa center inilla duiman at elit finibus viverra nec a lacus themo the
                        nesudea
                        seneoice misuscipit non sagie the fermen ziverra tristiue duru the ivite dianne
                        onen nivami acsestion augue artine.</div>
                      <div class="col-12 mt-4">
                        <button class="btn btn-danger">Learn More</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-7">
                <div class="row">
                  <img src="../assets/images/indeximg/indeximg (5).jpg" alt="" style="width: 100%;height: 100%;">
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 mt-4">
            <div class="row">
              <div class="col-12 col-md-5 mx-3">

              </div>
              <div class="col-12 col-md-4">
                <div class="row">

                </div>
              </div>
            </div>
          </div>
          <div class="col-12 mt-4">
            <div class="row">
              <div class="col-12 col-md-5 mx-3">
                <img src="../assets/images/indeximg/indeximg (3).jpg" alt="" style="width: 100%;height: 100%;">
              </div>
              <div class="col-12 col-md-4">
                <div class="row">
                  <div class="col-8">
                    <div class="row text-white">
                      <div class="col-12">
                        <h3>Quad Bike Ride</h3>
                      </div>
                      <div class="col-12 mt-2">Spa center inilla duiman at elit finibus viverra nec a lacus themo the
                        nesudea
                        seneoice misuscipit non sagie the fermen ziverra tristiue duru the ivite dianne
                        onen nivami acsestion augue artine.</div>
                      <div class="col-12 mt-4">Spa center inilla duiman at elit finibus viverra nec a lacus themo the
                        nesudea
                        seneoice misuscipit non sagie the fermen ziverra tristiue duru the ivite dianne
                        onen nivami acsestion augue artine.</div>
                      <div class="col-12 mt-4">
                        <button class="btn btn-danger">Learn More</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 mt-3 bg-success">
            <div class="row">
              <div class="col-4">

              </div>
              <div class="col-4">
                <div class="row">
                  <div class="col-4">
                    <img src="../assets/images/footer/footer1.jpg" alt=""
                      style="width: 100%;height: 90%;margin-top: 5%;margin-bottom: 5%;">
                  </div>
                  <div class="col-4">
                    <img src="../assets/images/footer/footer2.jpg" alt=""
                      style="width: 100%;height: 90%;margin-top: 5%;margin-bottom: 5%;">
                  </div>
                  <div class="col-4">
                    <img src="../assets/images/footer/footer3.jpg" alt=""
                      style="width: 100%;height: 90%;margin-top: 5%;margin-bottom: 5%;">
                  </div>
                </div>
              </div>
              <div class="col-4">

              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="col-12 mt-3 bg-success">
        <?php
        include "./common/footer.php";
        ?>
      </div>
    </div>

  </div>
</body>

</html>