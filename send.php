<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST["send"])) {
    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'gerald152004@gmail.com'; // Your Gmail address
        $mail->Password = 'pauyqysfaoonyehn'; // Use your Gmail App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Use ENCRYPTION_STARTTLS if Port is 587
        $mail->Port = 465; // Use 587 for ENCRYPTION_STARTTLS

        // Sender Information
        $userEmail = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
        if (!$userEmail) {
            echo "<script>alert('Invalid email address');</script>";
            exit;
        }

        $userMessage = htmlspecialchars($_POST["message"]);

        // Set "From" as the user's email address (optional)
        $mail->setFrom($userEmail, 'Website User');

        // Recipient (You)
        $mail->addAddress('gerald152004@gmail.com', 'Your Name'); // Your email address

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = 'Message from Website User';
        $mail->Body = "
            <h3>New Message from Website User</h3>
            <p><strong>Email:</strong> {$userEmail}</p>
            <p><strong>Message:</strong></p>
            <p>{$userMessage}</p>
        ";

        // Send Email
        $mail->send();
        echo "
        <script>
        alert('Message sent successfully!');
        document.location.href = 'index.php';
        </script>
        ";
    } catch (Exception $e) {
        echo "
        <script>
        alert('Message could not be sent. Error: {$mail->ErrorInfo}');
        </script>
        ";
    }
}
?>
