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
    
    mail($to, $subject, $mailBody, $headers);
}
?>
