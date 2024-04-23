<!-- b) Write a PHP program to send email. -->
<?php
$to_email = "sudarshansharma867@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi, This is test email send by PHP Script";
$headers = "From: abc company";

// SMTP configuration
$smtp_username = "sudarshansharma867@gmail.com";
$smtp_password = "strength*567";
$smtp_server = "smtp.gmail.com";
$smtp_port = 587; // Gmail SMTP port for TLS

// Enable TLS encryption
$smtp_config = [
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    ],
    'tls' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    ]
];

// Set SMTP options
ini_set('SMTP', $smtp_server);
ini_set('smtp_port', $smtp_port);
ini_set('sendmail_from', $smtp_username);

// Set additional SMTP parameters
stream_context_set_option(stream_context_get_default(), $smtp_config);

// Send email
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email.";
} else {
    echo "Email sending failed";
}
?>