<?php

$errorMSG = "thanks.html";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

// MSG Phone Number
if (empty($_POST["phone_no"])) {
    $errorMSG .= "phone number is required ";
} else {
    $phone_no = $_POST["phone_no"];
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];
}


// redirect to success page
if ($success && $errorMSG == "thanks.html"){
   echo "success";
}
else{
    if($errorMSG == "wrong.html"){
        echo "Something went wrong :(";
    } 
    else {
        echo $errorMSG;
    }
}

?>