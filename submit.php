<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Recipient email address
    $recipient_email = "your@email.com"; // Change this to your email address

    // Email subject
    $subject = "New Contact Form Submission from $fname $lname";

    // Email message
    $email_message = "First Name: $fname\n";
    $email_message .= "Last Name: $lname\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Phone: $phone\n";
    $email_message .= "Message:\n$message";

    // Headers
    $headers = "From: $email";

    // Send the email
    if (mail($recipient_email, $subject, $email_message, $headers)) {
        // Email sent successfully
        echo "Thank you for your message! We will get back to you soon.";
    } else {
        // Email delivery failed
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    // If the form wasn't submitted, show an error message
    echo "Form submission error. Please try again.";
}
?>
