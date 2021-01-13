<?php

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone_no = $_POST["phone_no"];
    $message = $_POST["message"];

    $mailTo = "bquiroz125@gmail.com";
    $headers = "From: ".$email;
    $txt = "You have received an email from ".$name.\n\n.$message;

    mail( $mailTo, $phone_no, $txt, $headers);
    header("Location: Thanks.html");
}


?>