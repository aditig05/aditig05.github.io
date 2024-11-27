<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "aditig0501@gmail.com";  // Your email address
    $subject = "New Contact Form Submission";
    $message = "Name: " . $_POST['name'] . "\n";
    $message .= "Email: " . $_POST['email'] . "\n";
    $message .= "Phone: " . $_POST['phone'] . "\n";
    $message .= "Message: " . $_POST['message'] . "\n";

    $headers = "From: " . $_POST['email'];

    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
else {
        // Handle error or redirect
        echo "Error: Method Not Allowed!";
    }
}
?>
