<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "oureyelet@gmail.com"; // Replace with your email address
    $subject = "New Form Submission";
    $headers = "From: $email";
    
    $mailBody = "Name: $name\n";
    $mailBody .= "Email: $email\n";
    $mailBody .= "Message:\n$message";
    
    if (mail($to, $subject, $mailBody, $headers)) {
        echo "Thank you for your message. We'll get back to you shortly.";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
}
?>

