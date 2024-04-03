<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="./static/style.css">
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

    .transparent-box {
      background-color: rgba(255, 255, 255, 0.5);
      /* Adjust transparency and color here */
      padding: 30px;
      border-radius: 10px;
      margin-bottom: 20px;
    }

    .btn.btn-danger,
    .btn.btn-success,
    .btn.btn-primary {
      background-color: #ffbf00 !important;
      /* Adjust button color here */
      border-color: #ffbf00 !important;
      /* Adjust button border color here */
    }
  </style>
  <title>RIVERSTON LIFE</title>
</head>

<body>
  <video playsinline autoplay muted loop id="bgVideo" style="position: fixed; right: 0; bottom: 0; min-width: 100%; min-height: 100%; z-index: -3;">
    <source src="../assets/videos/backgroundVideoindex.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>

  <div class="content">
    <div class="row">
      <div class="col-12">
        <?php include "./common/nav.php"; ?>
      </div>

      <div class="chatbottt" style="display:flex; position:absolute;">
        <div class="container">
          <div class="chatbox">
            <div class="chatbox__support">
              <div class="chatbox__header">
                <div class="chatbox__image--header">
                  <img src="https://img.icons8.com/color/48/000000/circled-user-female-skin-type-5--v1.png" alt="image">
                </div>
                <div class="chatbox__content--header">
                  <h4 class="chatbox__heading--header">NATURE LIFE</h4>
                  <p class="chatbox__description--header">Hi.How can I help you?</p>
                </div>
              </div>
              <div class="chatbox__messages">
                <div></div>
              </div>
              <div class="chatbox__footer">
                <input type="text" placeholder="Write a message...">
                <button class="chatbox__send--footer send__button">
                  <i class="bi bi-send"></i> Send
                </button>
              </div>
            </div>
            <div class="chatbox__button">
              <i class="bi bi-chat-fill custom-icon"></i>

            </div>
          </div>
        </div>

        <script type="text/javascript" src="./static/app.js"></script>
        <script>
          document.addEventListener("DOMContentLoaded", function() {
            const messages = [
              "Hello, how can we assist you today?",
              "Are you looking for information on our Villas?",
              "Ask Anything you want to know about our Villas."
            ];

            const chatboxMessages = document.querySelector('.chatbox__messages');

            function addMessage(index) {
              if (index < messages.length) {
                const messageDiv = document.createElement('div');
                messageDiv.classList.add('messages__item', 'messages__item--visitor');
                messageDiv.textContent = messages[index];
                chatboxMessages.appendChild(messageDiv);

                chatboxMessages.scrollTop = chatboxMessages.scrollHeight;

                setTimeout(() => addMessage(index + 1), 1000);
              }
            }

            addMessage(0);
          });
        </script>
      </div>

      <div class="col-12">
        <div class="row">

          <!-- <div class="col-12 bg-danger p-8 " style="background-image: url('../assets/images/morskie-oko-tatry.jpg'); background-size: cover; background-position: center;">
            <div class="col-12 text-center mt-4" style="z-index: -1;">
              <h2 class="text-white" style="margin-top:80px ;margin-bottom:80px ; font-family: 'Rubik Scribble', Rubik Scribble; font-size: 50px; text-shadow: 0 0 5px rgba(255,255,255,0.5); background-image: linear-gradient(to right, rgba(255,255,255,0.3) 0%, rgba(255,255,255,0.3) 100%); -webkit-background-clip: text;  ">
                Embark on an Unforgettable Journey of Luxury and Serenity with Riverston Life!
              </h2>
            </div>


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
          </div> -->

          <div class="col-12">
            <div id="carouselExampleCaptions" class="carousel slide" style="height: 80vh;">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="../assets/images/morskie-oko-tatry.jpg" class="d-block w-100" alt="..." style="height: 80vh;">
                  <div class="carousel-caption d-none d-md-block">
                    <h5 style="font-size: 62px;">First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="../assets/images/closeup-exotic-forest-animal.jpg" style="height: 80vh;" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5 style="font-size: 62px;">Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="../assets/images/girl-looks-waterfall.jpg" class="d-block w-100" alt="..." style="height: 80vh;">
                  <div class="carousel-caption d-none d-md-block">
                    <h5 style="font-size: 62px;">Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <!-- <div class="col-12" style="height:500px; margin-top: 80px;">
            <div class="row">
              <div class="col-4"><img src="../assets/images/morskie-oko-tatry.jpg" alt="" style="width: 100%;height: 130%; border-radius: 25px;">
              </div>
              <div class="col-4"><img src="../assets/images/ecvilla2.jpg" alt="" style="width: 100%;height: 130%; border-radius: 25px;">
              </div>
              <div class="col-4"><img src="../assets/images/homebg.jpg" alt="" style="width: 100%;height: 130%; border-radius: 25px;">
              </div>

            </div>
          </div> -->

          <!--Set01-->
          <div class="row container-fluid d-flex mt-5 mb-5">
            <div class="col-12 col-md-8 mx-auto">
              <div class="transparent-box">
                <div class="col-12 text-center text-black">
                  <h3>EXPLORE NATURE'S BEAUTY WITH RIVERSTON LIFE - WHERE TRANQUILITY MEETS ADVENTURE</h3>
                </div>
                <div class="col-12">
                  <p>Discover the essence of luxury living amidst nature's embrace at Riverston Life.
                    Our unified platform brings together three distinct destinations - Nature Life Eco Resort, Dust and Dirt Quad Bike Adventure Park, and Riverston Nature Villa - to offer an unparalleled experience in the heart of Sri Lanka's natural landscapes.
                    Whether you're seeking relaxation, adventure, or a blend of both, Riverston Life invites you to embark on a journey of discovery and indulgence.
                    From tranquil cabana retreats to thrilling outdoor excursions, each aspect of Riverston Life is meticulously crafted to ensure an unforgettable escape into the beauty and diversity of nature.
                    Join us and immerse yourself in a world where luxury meets wilderness, and every moment is a celebration of life's wonders.</p>
                </div>
              </div>
            </div>
          </div>


          <!--Set02-->
          <div class="row container-fluid d-flex mt-5 mb-5">
            <div class="col-12 col-md-7" style="padding-left:15rem">
              <div class="col-12">
                <img src="../assets/images/indeximg/indeximg (2).jpg" alt="" style="width: 80%;height: 80%;">
              </div>
            </div>

            <div class="col-12 col-md-5 text-white" style="padding-right:8rem">
              <div class="col-12">
                <h3>NATURE LIFE ECO RESORT</h3>
              </div>
              <div class="col-12">
                <p style="display: flex; text-align: justify;">
                  Discover Nature Life Eco Resort, a hidden gem nestled amidst the lush landscapes of the Knuckles mountain range.
                  Our serene cabana retreat offers a tranquil escape from the hustle and bustle of city life, inviting guests to immerse themselves in the beauty of nature.
                  With eco-friendly accommodations harmoniously integrated into the surrounding environment, each stay promises not only relaxation but also a deeper connection to the natural world.
                  Whether you seek peaceful moments surrounded by verdant greenery or thrilling adventures in the great outdoors, Nature Life Eco Resort caters to every traveler's desire, ensuring an unforgettable experience in the heart of Sri Lanka's breathtaking wilderness.
                </p>

              </div>

              <div class="col-12 mt-4"></div>
              <div class="col-12 mt-4">
                <button class="btn btn-danger">Learn More</button>
              </div>
            </div>
          </div>

          <!--Set03-->
          <div class="row  container-fluid d-flex mt-5 mb-5">
            <div class="col-12 col-md-6  text-white " style="padding-left:15rem">
              <div class="col-12">
                <h3>DUST AND DIRT QUAD BIKE ADVENTURE PARK</h3>
              </div>
              <div class="col-12 mt-2" style="display: flex; text-align: justify;">Embark on an adrenaline-fueled journey at Dust and Dirt Quad Bike Adventure Park, situated near Babarakiri Ella in Matale.
                Our park offers exhilarating sports and entertainment activities for thrill-seekers of all ages.
                Whether you're navigating rugged terrain on a quad bike or ziplining through the forest canopy, every moment promises an unforgettable adventure.
                With a range of outdoor experiences and breathtaking scenery, Dust and Dirt Quad Bike Adventure Park invites you to unleash your inner explorer and create lasting memories in the heart of nature.</div>
              <div class="col-12 mt-4">
                <button class="btn btn-danger">Learn More</button>
              </div>
            </div>
            <div class="col-12 col-md-6" style="padding-left:6rem">
              <div class="row">
                <div class="row">
                  <img src="../assets/images/indeximg/indeximg5.jpg" alt="" style="width: 80%;height: 90%;">
                </div>
              </div>
            </div>
          </div>


          <!--Set04-->
          <div class="row  container-fluid d-flex  mb-5">
            <div class="col-12 col-md-7" style="padding-left:15rem">

              <div class="col-12 col-md-12 ">
                <img src="../assets/images/indeximg/indeximg3.jpg" alt="" style="width: 80%;height: 90%;">
              </div>

            </div>

            <div class="col-12 col-md-5 text-white" style="padding-right:10rem">
              <div class="col-12">
                <h3>RIVERSTON NATURE VILLA</h3>
              </div>
              <div class="col-12 mt-2" style="display: flex; text-align: justify;">Experience the epitome of natural splendor at Riverston Nature Villa, nestled within the majestic Knuckles massif.
                Surrounded by the breathtaking beauty of Bambarakiriella, our villa offers a serene sanctuary for those seeking both adventure and relaxation.
                Immerse yourself in the tranquil ambiance of the mountains, where each day begins with panoramic views of lush greenery and ends with the soothing melody of nature.
                Whether you're embarking on outdoor excursions or simply unwinding amidst the serene surroundings, Riverston Nature Villa promises a rejuvenating retreat amidst Sri Lanka's captivating wilderness.</div>
              <div class="col-12 mt-4">
                <button class="btn btn-danger">Learn More</button>
              </div>
            </div>

          </div>
        </div>
      </div>



      <div class="col-12 mt-3" style="background-color: #22282390;">
        <div class="row">
          <div class="col-4">

          </div>
          <div class="col-4">
            <div class="row">
              <div class="col-4">
                <img src="../assets/images/footer/footer1.jpg" alt="" style="width: 100%;height: 90%;margin-top: 5%;margin-bottom: 5%;">
              </div>
              <div class="col-4">
                <img src="../assets/images/footer/footer2.jpg" alt="" style="width: 100%;height: 90%;margin-top: 5%;margin-bottom: 5%;">
              </div>
              <div class="col-4">
                <img src="../assets/images/footer/footer3.jpg" alt="" style="width: 100%;height: 90%;margin-top: 5%;margin-bottom: 5%;">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="col-12 bg-success">
    <?php
    include "./common/footer.php";
    ?>
  </div>
  </div>

  </div>
</body>

</html>