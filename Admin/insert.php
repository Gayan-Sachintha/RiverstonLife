//insert.php
<?php
include('../Controllers/config.php');
if(isset($_POST["title"]))
{
    $title = $_POST['title'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $sql = "INSERT INTO events(title, start_event, end_event) VALUES ('$title','$start','$end')"; 
    $conn->query($sql); 
}
?>