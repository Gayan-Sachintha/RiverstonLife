<!DOCTYPE html>
<html>

<head>
    <title>Calendar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <link href="assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function back(){
            window.history.back();
        }
    </script>
    <?php
    include('../../Controllers/config.php');
    $query = $conn->query("SELECT * FROM events ORDER BY id"); ?>
    <script>
        $(document).ready(function() {
            var calendar = $('#calendar').fullCalendar({
                editable: true,
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                events: [<?php while ($row = $query->fetch_object()) { ?> {
                        id: '<?php echo $row->id; ?>',
                        title: '<?php echo $row->title; ?>',
                        start: '<?php echo $row->start_event; ?>',
                        end: '<?php echo $row->end_event; ?>',
                    }, <?php } ?>],
                selectable: true,
                selectHelper: true,
                select: function(start, end, allDay) {
                    var title = prompt("Enter Event Title");
                    if (title) {
                        var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                        var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
                        $.ajax({
                            url: "insert.php",
                            type: "POST",
                            data: {
                                title: title,
                                start: start,
                                end: end
                            },
                            success: function(data) {
                                calendar.fullCalendar('refetchEvents');
                                alert("Added Successfully");
                                window.location.replace("calendar.php");
                            }
                        })
                    }
                },

                editable: true,
                eventResize: function(event) {
                    var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                    var title = event.title;
                    var id = event.id;
                    $.ajax({
                        url: "update.php",
                        type: "POST",
                        data: {
                            title: title,
                            start: start,
                            end: end,
                            id: id
                        },
                        success: function() {
                            calendar.fullCalendar('refetchEvents');
                            alert('Event Update');
                        }
                    })
                },

                eventDrop: function(event) {
                    var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                    var title = event.title;
                    var id = event.id;
                    $.ajax({
                        url: "update.php",
                        type: "POST",
                        data: {
                            title: title,
                            start: start,
                            end: end,
                            id: id
                        },
                        success: function() {
                            calendar.fullCalendar('refetchEvents');
                            alert("Event Updated");
                        }
                    });
                },

                eventClick: function(event) {
                    if (confirm("Are you sure you want to remove it?")) {
                        var id = event.id;
                        $.ajax({
                            url: "delete.php",
                            type: "POST",
                            data: {
                                id: id
                            },
                            success: function() {
                                calendar.fullCalendar('refetchEvents');
                                alert("Event Removed");
                            }
                        })
                    }
                },

            });
        });
    </script>

    <style>
        /* Change text color */
        body, .fc-event, .fc-day-grid-event .fc-content {
            color: #333;
        }

        /* Change background color */
        .fc-widget-header {
            background-color: #555;
        }

        /* Change button color */
        .btn {
            background-color: #444;
            color: white;
        }

        /* Change footer color */
        .sticky-footer {
            background-color: #555;
            color: white;
        }

        /* Change event background color */
        .fc-event {
            background-color: #007bff; /* Blue */
            border-color: #007bff; /* Blue */
        }

        /* Change today's background color */
        .fc-today {
            background-color: #28a745; /* Green */
        }

        /* Change selected day background color */
        .fc-state-highlight {
            background-color: #dc3545; /* Red */
        }

        /* Change event title color */
        .fc-title {
            color: #fff; /* White */
        }
    </style>
</head>

<body style="background-image: url('../assets/images/from-green-plants.jpg'); background-size: cover;">

    <div style="display:flex; justify-content: center; align-items: center; background-color: #222823; padding: 25px;">
        <div style="display:flex; justify-content: center; align-items: center; flex:1;">
            <button class="btn" style="background-color: aliceblue; width: 20%; font-size: 18px; color:black;" onclick="back()">Back</button>
        </div>
        <div style="display:flex; justify-content: center; align-items: center; flex:1;">
            <h1 style="color: white; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Update Calendar</h1>
        </div>
        <div style="display:flex; justify-content: ceter; align-items: center; flex:1;">

        </div>

    </div>
    <div class="container" style="margin-top: 45px; background-color: white;">
        <div id="calendar"></div>
    </div>

    <footer class="sticky-footer" style="background-color: #F6FBFF10;">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Ultimate Five 2024</span>
            </div>
        </div>
    </footer>
</body>

</html>
