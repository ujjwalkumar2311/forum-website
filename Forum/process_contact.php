<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Logic for processing the contact form (e.g., sending an email or storing data in a database)
    echo "<h2>Thank you, $name!</h2>";
    echo "<p>Your message has been sent successfully. We will get back to you soon.</p>";
}
?>
