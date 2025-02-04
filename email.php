<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "tshivhulas.p3@gmail.com"; 
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-type: text/html\r\n";

    $fullMessage = "<html><body>";
    $fullMessage .= "<h2>Contact Form Submission</h2>";
    $fullMessage .= "<p><strong>Name:</strong> " . $name . "</p>";
    $fullMessage .= "<p><strong>Email:</strong> " . $email . "</p>";
    $fullMessage .= "<p><strong>Subject:</strong> " . $subject . "</p>";
    $fullMessage .= "<p><strong>Message:</strong> " . nl2br($message) . "</p>";
    $fullMessage .= "</body></html>";

    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
} else {
    echo "Invalid request method.";
}
?>
