<?php 

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $telefono = $_POST['telefono']
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    if (empty($name)) || empty($mailFrom) || empty($message) {
        header("Location: index.php?contact=empty");
    } else {
        $mailTo = "soporte@adasoftware.com.ar";
        $txt = "Email enviado desde el sitio web www.rmackintosh.com.ar \n\n Nombre: ".$name.".\n\n"."Teléfono: ".$telefono.".\n\n"."Mail: ".$mailFrom.".\n\n"."Mensaje: ".$message;
        mail($mailTo, $subject, $txt);
        header("Location: contact.php?contact=success");
    }
} else {
    header("Location: index.php");
    exit();
}