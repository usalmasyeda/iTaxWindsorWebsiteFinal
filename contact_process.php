<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Construct email message
    $to = "sana@itaxwindsor.com";
    $headers = "From: $name <$email>";
    $body = "Subject: $subject\n\nName: $name\nEmail: $email\n\nMessage:\n$message";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Your message has been sent successfully!";
    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }
} else {
    // If not a POST request, redirect to the contact page
    header("Location: contact.html");
    exit;
}
