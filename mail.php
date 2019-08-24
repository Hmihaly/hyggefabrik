<?php

    $to = 'toth.a.90@gmail.com';
    $firstname = $_POST["firstName"];
    $lastname = $_POST["lastName"];
    $email= $_POST["email"];
    $text= $_POST["howCanWeHelp"];
    $phone= $_POST["phone"];
    $amazonId = $_POST["amazonOrderID"];

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>'.htmlentities($firstname).'  '.htmlentities($lastname).'</td>
        </tr>
        <tr><td>Email: '.htmlentities($email).'</td></tr>
        <tr><td>Phone: '.htmlentities($phone).'</td></tr>
        <tr><td>Message: '.htmlentities($text).'</td></tr>
        <tr><td>Amazon Order Id: '.htmlentities($amazonId).'</td></tr>
        
    </table>';


    if (mail($to, $email, $message, $headers))
    {
        echo 'The message has been sent.';
    }else{
        echo 'failed';
    }

?>
