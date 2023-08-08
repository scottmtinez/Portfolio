<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.sendgrid.net';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'apikey';                     //SMTP username
    $mail->Password   = 'NotActualPassword';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('owner@scottmartinezportfolio.com', 'Your Portfolio');

    $mail->addAddress('scottmtinez@gmail.com', 'Scott Martinez');     //Add a recipient 


    //Get form infromation
        $name = $_POST['iname'];
        $company = $_POST['icompany'];
        $subject = $_POST['isub'];
        $email = $_POST['iemail'];
        $content = $_POST['icontent'];


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Someone is Trying to Contact you Through your Website Portfolio Contact Form!';
    $mail->Body    = 'Name: ' . $name . '<br>
                      Company: ' . $company . '<br>
                      Subject: ' . $subject . '<br>
                      Email: ' . $email . '<br>
                      Content: ' . $content;

    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    
?>
