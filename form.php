<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $mensaje = "Nombre: " . $name . "\nCorreo: " . $email . "\nMensaje: " . $message;

    $para = "depau@depaudental.com";
    $asunto = "Mensaje desde landing page";

    //para el envío en formato HTML 
    $headers = "MIME-Version: 1.0\r\n"; 
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

    //dirección del remitente 
    $headers .= "From: Web Depau <web@depaudental.com>\r\n"; 

    mail($para, $asunto, $mensaje, $headers);
    
    header("Location:mensaje.html");
?>