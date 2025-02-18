<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../assets/class/database.class.php';
require '../assets/class/function.class.php';

require '../assets/packages/PHPMailer/src/Exception.php';
require '../assets/packages/PHPMailer/src/PHPMailer.php';
require '../assets/packages/PHPMailer/src/SMTP.php';

if ($_POST) {
    $post = $_POST;

    if (!empty($post['email_id'])) {
        $email_id = $db->real_escape_string($post['email_id']);
        
        // Check if email exists
        $result = $db->query("SELECT id, full_name FROM users WHERE email_id='$email_id'");
        $user = $result->fetch_assoc();

        if ($user) {
            $otp = rand(100000, 999999);
            $mail = new PHPMailer(true);

            try {
                // Server settings
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'beestside@gmail.com'; // Use environment variable in production
                $mail->Password   = 'xwfd wart xvpn olmj'; // Use environment variable in production
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                $mail->Port       = 465;

                // Recipients
                $mail->setFrom('verify@gmail.com', 'ResumeCraft');
                $mail->addAddress($email_id);

                // Content
                $mail->isHTML(true);
                $mail->Subject = 'Forgot Password?';
                $mail->Body    = "Your 6-digit verification code: <b>$otp</b>";

                $mail->send();
                
                $fn->setSession('otp', $otp);
                $fn->setSession('email', $email_id);
                $fn->redirect('../verification.php');


            } catch (Exception $e) {
                $fn->setError('Mailer Error: ' . $mail->ErrorInfo);
                $fn->redirect('../forgot-password.php');
            }

        } else {
            $fn->setError('This email is not registered!');
            $fn->redirect('../forgot-password.php');
        }

    } else {
        $fn->setError('Please enter your email address!');
        $fn->redirect('../forgot-password.php');
    }
} else {
    $fn->redirect('../forgot-password.php');
}
?>
