<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Enviar e-mail
    $to = $email;
    $subject = "Notificação de Doação de Sangue";
    $headers = "From: no-reply@seusite.com\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    
    $emailMessage = "<html><body>";
    $emailMessage .= "<h1>Olá, $name!</h1>";
    $emailMessage .= "<p>$message</p>";
    $emailMessage .= "</body></html>";

    if (mail($to, $subject, $emailMessage, $headers)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Falha ao enviar e-mail.";
    }

    // Enviar mensagem de texto (exemplo fictício, substituir pela sua lógica)
    $apiKey = "SUA_CHAVE_DE_API"; // Substitua com sua chave de API para enviar SMS
    $smsMessage = urlencode($message);
    $smsUrl = "https://api.smsprovider.com/send?apiKey=$apiKey&to=$phone&message=$smsMessage";
    
    $smsResponse = file_get_contents($smsUrl);
    if ($smsResponse) {
        echo "Mensagem de texto enviada com sucesso!";
    } else {
        echo "Falha ao enviar mensagem de texto.";
    }
}
?>
