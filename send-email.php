<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "agammunet0@gmail.com";
    $subject = $_POST['subject'];
    $message = "Name: " . $_POST['name'] . "\n";
    $message .= "Phone: " . $_POST['phone'] . "\n";
    $message .= "Email: " . $_POST['email'] . "\n\n";
    $message .= "Message:\n" . $_POST['message'];

    $headers = "From: no-reply@yourwebsite.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message sending failed!";
    }
}
?>
