<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect data from the form
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // Set recipient email address
    $to = "antoinedsr50@gmail.com"; // Change this to your email address

    // Set email subject
    $email_subject = "New Contact Form Submission: $subject";

    // Create email body
    $email_body = "Vous avez reçu un nouveau message du formulaire de contact de votre site Web.\n\n";
    $email_body .= "Here are the details:\n";
    $email_body .= "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Subject: $subject\n";
    $email_body .= "Message:\n$message\n";

    // Set email headers
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email";

    // Send the email
    if (mail($to, $email_subject, $email_body, $headers)) {
        // Redirect to a thank you page or display a success message
        echo "Message envoyé avec succès!";
    } else {
        // Display an error message if the email was not sent
        echo "Impossible denvoyer le message. Veuillez réessayer plus tard.";
    }
}
?>