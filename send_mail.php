<?php 

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $telefono = $_POST['telefono']
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "soporte@adasoftware.com.ar";
    $txt = "Email enviado desde el sitio web www.rmackintosh.com.ar \n\n Nombre: ".$name.".\n\n"."Teléfono: ".$telefono.".\n\n"."Mail: ".$mailFrom.".\n\n"."Mensaje: ".$message;
    
    mail($mailTo, $subject, $txt);
    header("Location: message_sended.html");
}