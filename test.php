<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>

<h1>test title</h1>

<?php 
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "gustallafer@gmail.com";
    $to = "gustavo.tallaferro@avril-assistance.com";
    $subject = "Mail Test script";
    $message = "This is a test to check the PHP Mail functionality";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "E-mail enviado con  éxito";
?>

</body>
</html>