<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST['message']);
    
    // E-mail naar jezelf sturen
    $to = "info@uwverblijfsvergunning.nl";
    $subject = "Nieuwe snelle contact aanvraag";
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    
    $mailContent = "E-mail: " . $email . "\n\n";
    $mailContent .= "Bericht:\n" . $message;
    
    if(mail($to, $subject, $mailContent, $headers)) {
        header("Location: index.php?message=success");
        exit;
    } else {
        header("Location: index.php?message=error");
        exit;
    }
}
?>