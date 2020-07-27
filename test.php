<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>

<h1>test title</h1>

<?PHP
$sender = 'gustavo.tallaferro@avril-assistance.com';
$recipient = 'gustallafer@gmail.com';

$subject = "php mail test";
$message = "php test message";
$headers = 'From:' . $sender;

if (mail($recipient, $subject, $message, $headers))
{
    echo "Mensaje enviado";
}
else
{
    echo "Error: mensaje no enviado";
}
?>

</body>
</html>