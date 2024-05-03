<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "sumaiyaaktar3029@gmail.com";
    $subject = "New Contact Form Submission";

    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message";

    // Use a library like PHPMailer for more advanced email handling
    mail($to, $subject, $body);

    // Redirect the user to a thank you page
    // header("Location: thank_you.html");
    exit;
}
?>
