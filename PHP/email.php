<?php
$name = $_POST['Name'];
$telephone = $_POST['telephone'];
$email = $_POST['InputEmail'];
$message = $_POST['InputMessage']; 

$email_from = 'no-reply@mamasite.ru';
$email_subject = "Тебе оставили сообщение на сайте";

$email_body = "На консультацию записалась $name.\n" .
    "Номер телефона:$telephone, адрес $email. Оставили сообщение:\n $message"; 

$to = "vlad-belichenkov@mail.ru";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: index.html");

?>