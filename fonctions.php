<?php
// Fonction pour envoyer l'e-mail de confirmation
function send_confirmation_email($email) {
    $subject = "Demande de notification de réouverture";
    $message = "Merci de nous avoir contacté. Vous serez informé dès que le site sera à nouveau en ligne.";
    $headers = "From: no-reply@monsite.com\r\n";
    $headers .= "CC: greta48.dwwm@gmail.com\r\n";

    mail($email, $subject, $message, $headers);
}

// Sécurisation du formulaire et validation de l'email
function is_valid_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}
?>
