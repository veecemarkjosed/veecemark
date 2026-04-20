<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $rating  = htmlspecialchars($_POST['rating']);

    // ?? Put your Gmail address here
    $to      = "yourgmail@gmail.com";  

    $subject = "New Feedback from $name";
    $body    = "Name: $name\nEmail: $email\nRating: $rating\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message delivery failed.";
    }
}
?>
