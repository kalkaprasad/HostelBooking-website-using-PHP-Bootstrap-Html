<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if(isset($_POST['submit']))
{
    $subject=$_POST['subject'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $Phone_number=$_POST['phone'];
    $message=$_POST['message'];
    $headers="from:$name ($subject)";
    $massages="<b> name:</b> $name </br>
               <b> Email: </b> $email </br>
                <b> phone nuber:</b> $Phone_number </br>
                <b> Message:</b> $message ";
    
// Load Composer's autoloader
require 'vendor/autoload.php';
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
   // $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'hxxhack890@gmail.com';                     // SMTP username
    $mail->Password   = 'prasad786786';                               // SMTP password
    $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('hxxhack890@gmail.com', 'Kptech');
    $mail->addAddress('kalkaprasad59@gmail.com', 'Clients');     // Add a recipient
    //$mail->addAddress('sachinprajapati599@gmail.com');
   // $mail->addAddress('vk8096796@gmail.com');// Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
   // $mail->addCC('cc@example.com');
   // $mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Notifications';
    
    $mail->Body    = $massages;
    //$mail->AltBody = 'This is the body in text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
?>