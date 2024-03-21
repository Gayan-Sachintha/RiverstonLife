<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
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
                    $mail->Username = 'dderuwan1000@gmail.com';
                    $mail->Password = 'hhyfylwwusevfizl';
                    $mail->SMTPSecure = 'ssl';
                    $mail->Port = 465;
                    $mail->setFrom('wpqpzp@gmail.com', 'Smartvaathi');
                    $mail->addReplyTo('wpqpzp@gmail.com', 'Smartvaathi');
                    $mail->addAddress($email);
                    $mail->isHTML(true);
                    $mail->Subject = 'Welcome to Smartvaathi ';
                    $bodyContent = "
                    <html>
                      
                        <body>
                            <p>Dear $tname,</p>
                            <table>
                            <tr>
                            <h3 style='color:red;'>Your verification Code : '  $code '</h3>
                            </tr>
                            <tr>
                                    <td>
                                    We hope this message finds you well.
                                    Thank you for taking the time to apply for access to our Teacher Portal. 
                                    We understand the anticipation and effort that goes into such applications and appreciate your interest in joining our educational community. 
                                    After a careful review of your application, we regret to inform you that we are unable to approve your registration at this time.
                                    Our decision is based on [specific reason for rejection, e.g., 'incomplete application details,' 'eligibility criteria not met,' 'verification of credentials pending,' etc.]. 
                                    We aim to maintain a high standard of collaboration and resource sharing among educators, and as such, we adhere strictly to our registration guidelines.
                                    </td>
                                     </tr>
                
                                <tr>
                                    <td>
                                    Please do not be disheartened, as this is not a reflection of your qualifications or your passion for education. We encourage you to review the following steps, 
                                    which may improve the chances of your application being successful in the future:
                                    <ul>
                                    <li>1.	Review Eligibility: Ensure that you meet all the necessary eligibility criteria outlined on our registration page.</li>
                                    <li>2.	Complete Application: Verify that all fields in the application form are filled out accurately and that no required information is missing.</li>
                                    <li>3.	Documentation: If applicable, please provide all necessary and verifiable documentation that supports your credentials as an educator.</li>
                                    <li>4.	Reapply: Once you have addressed the reasons for your application's rejection, we welcome you to reapply for access to the Teacher Portal.</li>
                                    </ul>
                                    <p>We understand that this news may be disappointing, and we are here to provide you with any assistance or clarification you may need regarding this process. 
                                    For further inquiries or support,</p>
                                    <p>please feel free to contact our support team at support@smartvaati.com or +94112345688.
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