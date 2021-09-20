<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "ysaac.arias@wtfcripto.com";
    $to = "support@wtfcripto.com";
    $subject = "Checking PHP mail";
    $message = "PHP mail works just fine";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
?>