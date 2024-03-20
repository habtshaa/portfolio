<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "Habtsha2021@gmail.com"; // Change this to the recipient's email address
    $subject = "New message: $subject";
    $message_body = "Name: $name\n\nEmail: $email\n\nMessage: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $message_body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email. Please try again later.";
    }
}
?>
