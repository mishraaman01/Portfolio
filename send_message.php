<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $project = $_POST["project"];
    $message = $_POST["message"];
    
    // Email settings
    $to = "anishaman2001@gmail.com"; 
    $subject = "New message from contact form";
    $emailMessage = "Name: $name\nEmail: $email\nProject: $project\nMessage: $message";
    $headers = "From: $email";
    
    // Send email
    if (mail($to, $subject, $emailMessage, $headers)) {
        // Email sent successfully
        echo "Thank you for your message. We will get back to you soon.";
    } else {
        // Failed to send email
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
} else {
    // Redirect if accessed directly
    header("Location: contact_form.html");
    exit();
}
?>
