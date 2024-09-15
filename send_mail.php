<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST['message'];

    // Укажите вашу почту
    $to = "saidchertila@yandex.ru";
    $subject = "Новое сообщение с сайта";
    
    // Заголовки
    $headers = "From: noreply@example.com\r
";
    $headers .= "Reply-To: noreply@example.com\r
";

    // Отправка сообщения
    if (mail($to, $subject, $message, $headers)) {
        echo "Ваше сообщение было отправлено!";
    } else {
        echo "Ошибка при отправке сообщения.";
    }
} else {
    echo "Некорректный запрос.";
}
?>
