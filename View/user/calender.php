<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>
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

        .fc { 
    background-color: rgba(30, 40, 31);
    color: white; 
  }

  .fc .fc-daygrid-day { 
    border-color: #202020; 
  }

  .fc .fc-daygrid-day-number { 
    color: white;
  }

  .fc .fc-col-header-cell { 
    background-color: #1e2820;
    color: white;
  }

  .fc .fc-button-primary {  
    background-color: #F3C13E;
    border-color: #F3C13E;
    color: #1e2820; 
  }

  .fc .fc-button-primary:hover { 
    background-color: #e2b837;
    border-color: #e2b837;
  }
    </style>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth'
            });
            calendar.render();
        });
    </script>
    <title>RIVERSTON LIFE</title>
</head>

<body>
    <video playsinline autoplay muted loop id="bgVideo" style="position: fixed; right: 0; bottom: 0; min-width: 100%; min-height: 100%; z-index: -3;">
        <source src="../assets/videos/backgroundVideo1.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="content ">
        <div class="row">
            <div class="col-12">
                <?php
                include "./common/nav.php";
                ?>
            </div>

            <div class="col-12 mt-4">
                <div class="row">
                    <div class="col-1 col-md-1 col-lg-3"></div>
                    <div class="col-10 col-md-10 col-lg-6">
                        <div class="row">

                        <h2 class="text-white text-center mb-4">RESERVATION DATES</h2>

                            <div id='calendar'></div>

                        </div>

                    </div>
                    <div class="col-1 col-md-2 col-lg-3"></div>
                </div>

            </div>
            <div class="col-12 mt-3">
                <?php
                include "./common/footer.php";
                ?>
            </div>
        </div>

    </div>
</body>

</html>