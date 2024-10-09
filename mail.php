<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['contact-name'];
    $phone = $_POST['contact-phone'];
    $email = $_POST['contact-email'];
    $subject = $_POST['subject'];
    $message = $_POST['contact-message'];

    $to = "your-email@example.com"; // Replace with your email
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    $body = "Name: $name\nPhone: $phone\nEmail: $email\nSubject: $subject\n\nMessage:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully.";
    } else {
        echo "Message sending failed.";
    }
}
?>
