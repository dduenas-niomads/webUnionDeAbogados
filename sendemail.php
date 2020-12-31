<?php

    // $to = "info@niomads.com";
    // $subject = "Contacto de union de abogados y asesores financieros";
    // $message = '<html><body>';
    // $message = $message . '<table rules="all" style="border-color: #666;" cellpadding="10">';
    // $message = $message . "<tr style='background: #eee;'><td><strong>Nombres completos: </strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
    // $message = $message . "<tr><td><strong>Email: </strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
    // $message = $message . "<tr><td><strong>Teléfono: </strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
    // $message = $message . "<tr style='background: #eee;'><td><strong>Mensaje: </strong> </td><td>" . strip_tags($_POST['message']) . "</td></tr>";
    // $message = $message . "</table>";
    // $message = $message . "</body></html>";
    // // It is mandatory to set the content-type when sending HTML email
    // $headers = "MIME-Version: 1.0" . "\r\n";
    // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // // More headers. From is required, rest other headers are optional
    // $headers .= 'From: info@niomads.com' . "\r\n";

    $para      = 'info@niomads.com';
    $subject    = 'El título';
    $message   = 'Hola';
    $headers = 'From: webmaster@example.com' . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    $mail = mail($to, $subject, $message, $headers);
    if ($mail){
        var_dump("Mail enviado");
    } else {
        var_dump("error: " . error_get_last());
    }
    var_dump($mail);
    exit();
?>