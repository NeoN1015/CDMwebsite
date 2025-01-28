<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['send'])) {
 
    $name = htmlspecialchars(trim($_POST['Name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Invalid email address. Please go back and enter a valid email.');
    }


    $mail = new PHPMailer(true);

    try {
       
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'gerald152004@gmail.com';
        $mail->Password = 'pauyqysfaoonyehn'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
        $mail->Port = 465;

        
        $mail->setFrom($email, $name); 
        $mail->addAddress('gerald152004@gmail.com', 'Recipient Name');

        
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = "
            <h3>New Message from Your Website</h3>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Subject:</strong> $subject</p>
            <p><strong>Message:</strong><br>$message</p>
        ";

        
        $mail->send();
        echo "Thank you, $name! Your message has been sent successfully.";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid request. Please submit the form correctly.";
}
?>
