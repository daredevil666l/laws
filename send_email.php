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

// Получаем данные из формы
$name = htmlspecialchars($_POST['name'] ?? '');
$phone = htmlspecialchars($_POST['phone'] ?? '');
$quiz_data = $_POST['quiz_data'] ?? '';
$messenger = htmlspecialchars($_POST['messenger'] ?? '');

// Инициализируем массив результата
$result = array();

// ДОБАВЛЯЕМ ДЕТАЛЬНУЮ ОТЛАДКУ ВХОДЯЩИХ ДАННЫХ
error_log("=== ОТЛАДКА ВХОДЯЩИХ ДАННЫХ ===");
error_log("Name: " . $name);
error_log("Phone: " . $phone);
error_log("Messenger: " . $messenger);
error_log("Quiz data RAW: " . $quiz_data);
error_log("Quiz data type: " . gettype($quiz_data));
error_log("Quiz data length: " . strlen($quiz_data));

// Проверка обязательных полей
if(!($name && $phone)) {
    $result['error'] = "ОШИБКА: Заполните все обязательные поля.";
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

// ИСПРАВЛЕННАЯ ОБРАБОТКА ДАННЫХ КВИЗА
$quiz_answers = null;

if (!empty($quiz_data)) {
    if (is_string($quiz_data)) {
        error_log("Декодируем JSON строку: " . $quiz_data);
        $quiz_answers = json_decode($quiz_data, true);
        
        if (json_last_error() !== JSON_ERROR_NONE) {
            error_log("Ошибка JSON декодирования: " . json_last_error_msg());
            error_log("JSON код ошибки: " . json_last_error());
            
            $quiz_data_fixed = stripslashes($quiz_data);
            $quiz_answers = json_decode($quiz_data_fixed, true);
            
            if (json_last_error() !== JSON_ERROR_NONE) {
                error_log("Повторная ошибка JSON после stripslashes: " . json_last_error_msg());
            }
        }
    }
    
    error_log("Результат декодирования: " . print_r($quiz_answers, true));
} else {
    error_log("Quiz data пустой или отсутствует");
}

// Формируем текст письма
$to = get_option('admin_email');
$subject = 'Новая заявка с квиза - расчет стоимости услуги';

// СТИЛИЗОВАННОЕ HTML ПИСЬМО
$message = '
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новая заявка с квиза</title>
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
            content: "👤";
            margin-right: 10px;
            font-size: 20px;
        }
        .info-row {
            display: flex;
            margin-bottom: 12px;
            align-items: center;
        }
        .info-row:last-child {
            margin-bottom: 0;
        }
        .info-label {
            font-weight: 600;
            color: #666;
            min-width: 140px;
            font-size: 14px;
        }
        .info-value {
            color: #333;
            font-weight: 500;
            font-size: 14px;
        }
        .quiz-section {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            border-radius: 8px;
            padding: 25px;
            margin-bottom: 20px;
            border: 1px solid #dee2e6;
        }
        .quiz-title {
            font-size: 18px;
            font-weight: 600;
            color: #e31e24;
            margin: 0 0 20px 0;
            display: flex;
            align-items: center;
        }
        .quiz-title::before {
            content: "📋";
            margin-right: 10px;
            font-size: 20px;
        }
        .quiz-item {
            background: white;
            border-radius: 6px;
            padding: 15px;
            margin-bottom: 12px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            border-left: 3px solid #e31e24;
        }
        .quiz-item:last-child {
            margin-bottom: 0;
        }
        .quiz-question {
            font-weight: 600;
            color: #495057;
            font-size: 13px;
            margin-bottom: 5px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .quiz-answer {
            color: #333;
            font-weight: 500;
            font-size: 15px;
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
            <h2 class="email-title">Новая заявка с квиза</h2>
        </div>

        <!-- Основное содержимое -->
        <div class="email-body">
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
                </div>
                <div class="info-row">
                    <span class="info-label">Способ связи:</span>
                    <span class="info-value">' . $messenger . '</span>
                </div>
            </div>';

// УЛУЧШЕННАЯ ОБРАБОТКА ОТВЕТОВ КВИЗА
if ($quiz_answers && is_array($quiz_answers) && count($quiz_answers) > 0) {
    $message .= '
            <!-- Ответы квиза -->
            <div class="quiz-section">
                <h3 class="quiz-title">Результаты квиза</h3>';
    
    $question_labels = [
        'question1' => 'Тип юридической помощи',
        'question2' => 'Тип помощи', 
        'question3' => 'Срочность решения'
    ];
    
    $answer_labels = [
        'business' => 'Для бизнеса',
        'citizens' => 'Для граждан',
        'licensing' => 'Лицензирование',
        'intellectual-property' => 'Интеллектуальная собственность',
        'consultation' => 'Требуется консультация',
        'documents' => 'Необходимо составить документы',
        'full-solution' => 'Комплексное решение "под ключ"',
        '24h' => 'В течение 24 часов',
        'week' => 'В течение недели',
        'month' => 'В течение месяца',
        'no-matter' => 'Срок не имеет значения',
        'whatsapp' => 'WhatsApp',
        'telegram' => 'Telegram',
        'phone' => 'Телефон'
    ];
    
    foreach ($quiz_answers as $question => $answer) {
        // Пропускаем служебные поля
        if (in_array($question, ['name', 'phone', 'messenger'])) {
            continue;
        }
        
        $question_text = $question_labels[$question] ?? $question;
        $answer_text = $answer_labels[$answer] ?? $answer;
        
        $message .= '
                <div class="quiz-item">
                    <div class="quiz-question">' . $question_text . '</div>
                    <div class="quiz-answer">' . $answer_text . '</div>
                </div>';
    }
    
    $message .= '
            </div>';
    
    error_log("Добавлены ответы квиза в письмо");
} else {
    $message .= '
            <div class="quiz-section">
                <h3 class="quiz-title">Ответы квиза</h3>
                <div style="text-align: center; color: #666; font-style: italic; padding: 20px;">
                    Данные квиза не получены или повреждены
                </div>
            </div>';
    error_log("ВНИМАНИЕ: Данные квиза отсутствуют или повреждены");
}

$message .= '
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

// ИСПРАВЛЕННЫЕ ЗАГОЛОВКИ
$headers = "From: =?UTF-8?B?" . base64_encode("Стратегия-юк.рф") . "?= <info@xn----7sbjhqn0bhjc0lk.xn--p1ai>\r\n";
$headers .= "Reply-To: info@xn----7sbjhqn0bhjc0lk.xn--p1ai\r\n";
$headers .= "Return-Path: info@xn----7sbjhqn0bhjc0lk.xn--p1ai\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "Content-Transfer-Encoding: 8bit\r\n";
$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$headers .= "Message-ID: <" . time() . "." . uniqid() . "@xn----7sbjhqn0bhjc0lk.xn--p1ai>\r\n";
$headers .= "Date: " . date('r') . "\r\n";

// Добавляем детальную отладку
error_log("Попытка отправки письма на: " . $to);
error_log("Тема: " . $subject);
error_log("Заголовки: " . $headers);

// Отправляем письмо
$mail_sent = mail($to, $subject, $message, $headers);

if ($mail_sent) {
    error_log("Письмо успешно отправлено через mail()");
    $result['error'] = "";
    $result['success'] = "Заявка успешно отправлена! Мы свяжемся с вами в течение 45 минут.";
} else {
    error_log("Ошибка отправки письма через mail()");
    $result['error'] = "ОШИБКА: Письмо не отправлено.";
    $result['success'] = "";
}

echo json_encode($result, JSON_UNESCAPED_UNICODE);
?>
