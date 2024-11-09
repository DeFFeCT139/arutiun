<?php
    $userName = htmlspecialchars($_POST['userName']);
    $userAge = htmlspecialchars($_POST['userAge']);
    $userCity = htmlspecialchars($_POST['userCity']);
    $userPhone = htmlspecialchars($_POST['userPhone']);
    $contactMethod = htmlspecialchars($_POST['contactMethod']);
    $userProblem = htmlspecialchars($_POST['userProblem']);
    $userConsent = isset($_POST['userConsent']) ? 'Yes' : 'No';

    // Email получателя
    $to = "hodak_1994@bk.ru";  // Замените на ваш Gmail
    $subject = "Заявка на консультацию от $userName";

    // Тело письма
    $message = "
    <html>
    <head>
    <title>Заявка на консультацию</title>
    </head>
    <body>
    <h2>Новая заявка на консультацию</h2>
    <p><strong>Имя:</strong> $userName</p>
    <p><strong>Возраст:</strong> $userAge</p>
    <p><strong>Город:</strong> $userCity</p>
    <p><strong>Телефон:</strong> $userPhone</p>
    <p><strong>Средство связи:</strong> $contactMethod</p>
    <p><strong>Проблема:</strong> $userProblem</p>
    <p><strong>Согласие на обработку данных:</strong> $userConsent</p>
    </body>
    </html>
    ";

    // Заголовки письма
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
    $headers .= "From: no-reply@arutiun.com" . "\r\n";

    // Отправляем письмо
    mail($to, $subject, $message, $headers)
?>
