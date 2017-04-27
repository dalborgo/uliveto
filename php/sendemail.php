<?php

// Define some constants
define( "RECIPIENT_NAME", "Sito Residence Uliveto" );
define( "RECIPIENT_EMAIL", "dalborgo.m@asten.it" );

// Read the form values
$success = false;
$senderName = isset( $_POST['name'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['name'] ) : "";
$senderEmail = isset( $_POST['email'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email'] ) : "";
$phone = isset( $_POST['phone'] ) ? preg_replace( "/[^\.\-\' 0-9]/", "", $_POST['phone'] ) : "";
$body = isset( $_POST['message'] ) ? preg_replace( "/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message'] ) : "";
$subject = 'Mail dal Sito Residence uliveto';
// If all values exist, send the email
$headers = "From: " . $senderName . " <" . $senderEmail . "> To: " . RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
$message = $body;

if(mail(RECIPIENT_EMAIL, $subject, $message, $headers)){
       echo "<p style='color: #a2d002;'><br><strong>Il tuo messaggio è stato spedito con successo!</strong></p>";

} else {
    echo "<p style='color: orangered;'><br><strong>L'email non è stata spedita</strong></p>";
}

?>