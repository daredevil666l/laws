<?php
// Настройка SMTP для REG.RU
add_action('phpmailer_init', 'configure_smtp_regru');

function configure_smtp_regru($phpmailer) {
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.yandex.ru';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Username = '';
    $phpmailer->Password = '';
    $phpmailer->SMTPSecure = 'ssl';
    $phpmailer->Port = 465;
    $phpmailer->CharSet = 'UTF-8';
    $phpmailer->setFrom('', 'Юридическая фирма «Стратегия»');
    
    $phpmailer->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    
    // Отладка (отключите после настройки)
    $phpmailer->SMTPDebug = 2;
    $phpmailer->Debugoutput = 'error_log';
}

function wedding_theme_scripts_styles() {
    wp_enqueue_style('custom', get_stylesheet_directory_uri() . '/css/styles.css');
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true);
    wp_enqueue_script('gradient-background', get_template_directory_uri() . '/js/gradient-background.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'wedding_theme_scripts_styles');
?>
