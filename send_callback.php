<?php
// Подключаем WordPress
require_once('../../../wp-load.php');

// Включаем отладку
if (!defined('WP_DEBUG')) {
    define('WP_DEBUG', true);
}
if (!defined('WP_DEBUG_LOG')) {
    define('WP_DEBUG_LOG', true);
}

// Добавьте в самое начало файла
error_log("=== CALLBACK REQUEST ===");
error_log("REQUEST_URI: " . $_SERVER['REQUEST_URI']);
error_log("POST data: " . print_r($_POST, true));

// Функция для кодирования заголовков
function encode_mail_header($text, $charset = 'UTF-8') {
    if (mb_check_encoding($text, 'ASCII')) {
        return $text;
    }
    return '=?' . $charset . '?B?' . base64_encode($text) . '?=';
}

// Получаем данные из формы
$name = htmlspecialchars($_POST['name'] ?? '');
$phone = htmlspecialchars($_POST['phone'] ?? '');
$email = htmlspecialchars($_POST['email'] ?? '');
$message = htmlspecialchars($_POST['message'] ?? '');
$privacy = $_POST['privacy'] ?? '';

// Инициализируем массив результата
$result = array();

// ДОБАВЛЯЕМ ДЕТАЛЬНУЮ ОТЛАДКУ ВХОДЯЩИХ ДАННЫХ
error_log("=== ОТЛАДКА CALLBACK ФОРМЫ ===");
error_log("Name: " . $name);
error_log("Phone: " . $phone);
error_log("Email: " . $email);
error_log("Message: " . $message);
error_log("Privacy: " . $privacy);

// Проверка обязательных полей
if(!($name && $phone)) {
    $result['error'] = "ОШИБКА: Заполните все обязательные поля.";
    echo json_encode($result, JSON_UNESCAPED_UNICODE);
    exit;
}

// Проверка согласия на обработку данных
if(!$privacy) {
    $result['error'] = "ОШИБКА: Необходимо согласие на обработку персональных данных.";
    echo json_encode($result, JSON_UNESCAPED_UNICODE);
    exit;
}

// Проверка телефона
$phonePattern = '/^\+?\d{1,4}?[-.\s]?\(?\d{1,3}?\)?[-.\s]?\d{1,4}[-.\s]?\d{1,4}[-.\s]?\d{1,9}$/';
if (!preg_match($phonePattern, $phone)) {
    $result['error'] = "ОШИБКА: Введите корректный номер телефона.";
    echo json_encode($result, JSON_UNESCAPED_UNICODE);
    exit;
}

// Проверка email (если указан)
if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $result['error'] = "ОШИБКА: Введите корректный email адрес.";
    echo json_encode($result, JSON_UNESCAPED_UNICODE);
    exit;
}

// Получаем email администратора из WordPress
$to = get_option('admin_email');

// Проверяем, что email получен
if (empty($to)) {
    error_log("ОШИБКА: Email администратора не найден");
    $to = 'pety4-vasichkin@yandex.ru'; // Резервный email
}

// ПРАВИЛЬНОЕ кодирование темы
$subject = encode_mail_header('Заявка на обратный звонок с сайта');

// СТИЛИЗОВАННОЕ HTML ПИСЬМО
$message_html = '
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заявка на обратный звонок</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        .email-header {
            background: linear-gradient(135deg, #e31e24, #ff3a40);
            color: white;
            padding: 30px;
            text-align: center;
            position: relative;
        }
        .email-header::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.1\"%3E%3Ccircle cx=\"30\" cy=\"30\" r=\"4\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E") repeat;
            opacity: 0.3;
        }
        .logo-section {
            position: relative;
            z-index: 2;
        }
        .company-name {
            font-size: 28px;
            font-weight: 700;
            margin: 0 0 5px 0;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        .company-tagline {
            font-size: 14px;
            margin: 0;
            opacity: 0.9;
            font-weight: 300;
        }
        .email-title {
            font-size: 24px;
            font-weight: 600;
            margin: 20px 0 0 0;
            position: relative;
            z-index: 2;
        }
        .email-body {
            padding: 40px 30px;
        }
        .info-section {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 25px;
            margin-bottom: 30px;
            border-left: 4px solid #e31e24;
        }
        .info-title {
            font-size: 18px;
            font-weight: 600;
            color: #e31e24;
            margin: 0 0 15px 0;
            display: flex;
            align-items: center;
        }
        .info-title::before {
            content: "📞";
            margin-right: 10px;
            font-size: 20px;
        }
        .info-row {
            display: flex;
            margin-bottom: 12px;
            align-items: flex-start;
        }
        .info-row:last-child {
            margin-bottom: 0;
        }
        .info-label {
            font-weight: 600;
            color: #666;
            min-width: 100px;
            font-size: 14px;
        }
        .info-value {
            color: #333;
            font-weight: 500;
            font-size: 14px;
            flex: 1;
        }
        .message-section {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            border-radius: 8px;
            padding: 25px;
            margin-bottom: 20px;
            border: 1px solid #dee2e6;
        }
        .message-title {
            font-size: 18px;
            font-weight: 600;
            color: #e31e24;
            margin: 0 0 15px 0;
            display: flex;
            align-items: center;
        }
        .message-title::before {
            content: "💬";
            margin-right: 10px;
            font-size: 20px;
        }
        .message-content {
            background: white;
            border-radius: 6px;
            padding: 15px;
            border-left: 3px solid #e31e24;
            font-style: italic;
            color: #555;
            line-height: 1.6;
        }
        .timestamp {
            background: #e9ecef;
            border-radius: 6px;
            padding: 15px;
            text-align: center;
            font-size: 13px;
            color: #666;
            margin-top: 20px;
        }
        .email-footer {
            background: #343a40;
            color: white;
            padding: 25px 30px;
            text-align: center;
        }
        .footer-text {
            margin: 0;
            font-size: 13px;
            opacity: 0.8;
        }
        .contact-info {
            margin-top: 15px;
            font-size: 12px;
            opacity: 0.7;
        }
        .highlight {
            background: linear-gradient(120deg, #e31e24 0%, #ff3a40 100%);
            color: white;
            padding: 2px 6px;
            border-radius: 3px;
            font-weight: 600;
        }
        .urgent-badge {
            background: #dc3545;
            color: white;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            display: inline-block;
            margin-bottom: 10px;
        }
        @media only screen and (max-width: 600px) {
            .email-container {
                margin: 10px;
                border-radius: 8px;
            }
            .email-header, .email-body, .email-footer {
                padding: 20px;
            }
            .company-name {
                font-size: 24px;
            }
            .email-title {
                font-size: 20px;
            }
            .info-row {
                flex-direction: column;
                align-items: flex-start;
            }
            .info-label {
                min-width: auto;
                margin-bottom: 3px;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Заголовок письма -->
        <div class="email-header">
            <div class="logo-section">
                <h1 class="company-name">"Стратегия"</h1>
                <p class="company-tagline">юридические услуги</p>
            </div>
            <h2 class="email-title">Заявка на обратный звонок</h2>
        </div>

        <!-- Основное содержимое -->
        <div class="email-body">
            <div class="urgent-badge">Требует внимания</div>
            
            <!-- Информация о клиенте -->
            <div class="info-section">
                <h3 class="info-title">Информация о клиенте</h3>
                <div class="info-row">
                    <span class="info-label">Имя:</span>
                    <span class="info-value highlight">' . $name . '</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Телефон:</span>
                    <span class="info-value"><strong>' . $phone . '</strong></span>
                </div>';

if (!empty($email)) {
    $message_html .= '
                <div class="info-row">
                    <span class="info-label">Email:</span>
                    <span class="info-value">' . $email . '</span>
                </div>';
}

$message_html .= '
            </div>';

// Добавляем сообщение, если оно есть
if (!empty($message)) {
    $message_html .= '
            <!-- Сообщение клиента -->
            <div class="message-section">
                <h3 class="message-title">Сообщение от клиента</h3>
                <div class="message-content">
                    "' . nl2br($message) . '"
                </div>
            </div>';
}

$message_html .= '
            <!-- Время заявки -->
            <div class="timestamp">
                <strong>Время подачи заявки:</strong> ' . date('d.m.Y в H:i:s') . '
            </div>
        </div>

        <!-- Подвал письма -->
        <div class="email-footer">
            <p class="footer-text">
                Это автоматическое уведомление с сайта <strong>стратегия-юк.рф</strong>
            </p>
            <div class="contact-info">
                Воронеж, Пушкинская 5, 5 этаж, офис 17<br>
                Тел: 8(473)295-48-24, 8(952)553-44-88
            </div>
        </div>
    </div>
</body>
</html>';

// ПРАВИЛЬНЫЕ ЗАГОЛОВКИ
$from_name = encode_mail_header('Стратегия-юк.рф');
$from_email = 'info@xn----7sbjhqn0bhjc0lk.xn--p1ai';

$headers = implode("\r\n", [
    "MIME-Version: 1.0",
    "Content-Type: text/html; charset=UTF-8",
    "Content-Transfer-Encoding: 8bit",
    "From: {$from_name} <{$from_email}>",
    "Reply-To: {$from_email}",
    "Return-Path: {$from_email}",
    "Date: " . date('r'),
    "Message-ID: <" . time() . "." . uniqid() . "@xn----7sbjhqn0bhjc0lk.xn--p1ai>"
]);

// Отладка
error_log("=== ОТПРАВКА CALLBACK ===");
error_log("To: " . $to);
error_log("Subject: " . $subject);


$mail_sent = wp_mail($to, 'Заявка на обратный звонок с сайта', $message_html, $headers);

if ($mail_sent) {
    error_log("✅ Callback письмо успешно отправлено");
    $result['error'] = "";
    $result['success'] = "Заявка отправлена! Мы перезвоним Вам!";
} else {
    error_log("❌ Ошибка отправки callback письма");
    $result['error'] = "ОШИБКА: Заявка не отправлена. Попробуйте еще раз.";
    $result['success'] = "";
}

echo json_encode($result, JSON_UNESCAPED_UNICODE);
?>
