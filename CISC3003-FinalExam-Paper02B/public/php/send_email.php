<?php
// B.02: 引入類別文件
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = new PHPMailer(true);
    
    try {
        // B.04: 偵錯模式
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'joeychang0307@gmail.com';
        $mail->Password   = 'hidvndjekveghmdj';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // 如果 465 不行，就換回 STARTTLS + 587
        $mail->Port       = 587;
        
        $mail->setFrom($_POST['email'], $_POST['name']);
        $mail->addAddress('Cjoeychang0307@gmail.com');
        
        // 這裡修改了語法，避免 Eclipse 報錯
        $mail->isHTML(true);
        $mail->Subject = $_POST['subject'];
        $mail->Body    = "<h3>Message from: " . htmlspecialchars($_POST['name']) . "</h3>" .
            "<p>" . nl2br(htmlspecialchars($_POST['message'])) . "</p>";
        
        $mail->send();
        
        // B.05: PRG 模式
        header("Location: ../success.php");
        exit();
        
    } catch (Exception $e) {
        echo "發送失敗。Mailer Error: " . $mail->ErrorInfo;
    }
}