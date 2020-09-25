<?php
$to = "danielgrillz@gmail.com, info@udayaf.com";
$subject = "Contacto de union de abogados y asesores financieros";

$message = "
<html>
<head>
<title>Este es un correo de contacto</title>
</head>
<body>
<p>Test email. Please ignore.</p>
</body>
</html>
";

// It is mandatory to set the content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers. From is required, rest other headers are optional
$headers .= 'From: <info@example.com>' . "\r\n";

mail($to,$subject,$message,$headers);
?>