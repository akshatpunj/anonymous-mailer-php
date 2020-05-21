<?php

// P.S This script needs to be uploaded on a server in order to work.

    $emailTo = ""; //Insert Recipent's email here

    $subject = ""; //Insert subject here

    $body = ""; //Insert the text message here

    $headers = ""; //Insert the Sender's mail here

    if (mail($emailTo, $subject, $body, $headers)) {
        
        echo "The email was sent successfully";
        
    } else {
        
        echo "The email could not be sent.";
        
    }


?>
