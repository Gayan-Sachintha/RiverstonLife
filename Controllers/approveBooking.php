<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
session_start();
include ('config.php');

if (isset ($_GET['id'])) {
    $BookingId = $_GET['id'];

    $sql = "UPDATE villareservations SET status = 'Approved' WHERE id = ?";
    $sqlemail = "SELECT * FROM villareservations WHERE `id`='" . $BookingId . "'";
    $resultemail = mysqli_query($conn, $sqlemail);


    if ($stmt = mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, "i", $BookingId);

        if (mysqli_stmt_execute($stmt)) {
            if (mysqli_num_rows($resultemail) > 0) {
                while ($row = mysqli_fetch_array($resultemail)) {

                    $email = $row["email"];
                    $tname = $row["	first_name"];


                    $code = uniqid();
                    $mail = new PHPMailer;
                    $mail->IsSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'walallawitad@gmail.com';
                    $mail->Password = 'jbmpnprdokcwuudp';
                    $mail->SMTPSecure = 'ssl';
                    $mail->Port = 465;
                    $mail->setFrom('wpqpzp@gmail.com', 'NatureVilla');
                    $mail->addReplyTo('wpqpzp@gmail.com', 'NatureVilla');
                    $mail->addAddress($email);
                    $mail->isHTML(true);
                    $mail->Subject = 'Welcome to Nature Villa ';
                    $bodyContent = "
                    <html>
                      
                        <body>
                            <p>Dear $tname,</p>
                            <table>
                            <tr>
                            </tr>
                            <tr>
                                    <td>
                                    We hope this message finds you well.
                                    Thank you for join with our adventuer site. Your booking is approved. Let's meet up as soon as posible.
                                    </td>
                                     </tr>
                
                                <tr>
                                    <td>
                                    <p>please feel free to contact our support team at support@naturevila.com or +94112345688.
                                    </p>
                                    </td>
                                </tr>
                
                            </table>
                        </body>
                    </html>
                    ";
                    $mail->Body = $bodyContent;

                    if (!$mail->send()) {
                        echo 'varification code sending fail';
                    } else {
                        echo 'Success';

                    }
                    header("Location:../Admin/allBookings.php");
                }
            }



        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
?>