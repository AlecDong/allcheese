<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $country = $_POST['country'];
    $message = $_POST['message'];

    $mailto = "monsternobodyplayz@protonmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from ".$name." (".$country.").\n\n".$message;

    mail($mailto, $subject, $txt, $headers);
    header("Location: thankyou.html");
}

?>