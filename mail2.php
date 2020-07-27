<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "gustavo.tallaferro@avril-assistance.com";
    $to = "gustalalfer@gmail.com";
    $subject = "Php mail Test";
    $message = "PHP mail funciona sin problemas";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "E-mail enviado con  éxito";
  );
?>