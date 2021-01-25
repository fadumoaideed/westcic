<?php
    $fname= $_POST['firstname'];
    $lname= $_POST['lastname'];
    $mailFrom= $_POST['email'];
    $country= $_POST['country'];
    $message= $_POST['subject'];

    $email_from = $mailFrom ;
    $email_subject = "Enquirey from: $fname";
    $email_body= "Name: $fname , $lname .\n".
                 "Email: $mailFrom .\n".
                 "Country: $country .\n".
                 "Message: $message .\n";

    $to = "info@westcic.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email_from \r\n";


    mail($to,$email_subject,$email_body,$headers);


    header("location: index.html");


?>