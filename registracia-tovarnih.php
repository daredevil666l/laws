<?php
/**
 * Template Name: registracia-tovarnih
 */
get_header();
?>

      <div class="main-image-container">
            <img src="<?php echo get_stylesheet_directory_uri();?>/img/image (2).png" alt="Регистрация товарных знаков" class="main-image">
        </div>
       <!-- Заголовок и подзаголовок -->
        <div class="hero-content">
            <div class="container">
                <div class="hero-text">
                    <h1 class="main-title">РЕГИСТРАЦИЯ ТОВАРНЫХ ЗНАКОВ</h1>
                    <h2 class="subtitle">Юридическая помощь по любым спорам</h2>

                    <!-- Блок с галочками -->
                    <div class="benefits-list">
                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/12.svg" alt="Галочка">
                            </div>
                            <div class="benefit-text">Быстро, надежно, юридически чисто</div>
                        </div>
                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/12.svg" alt="Галочка">
                            </div>
                            <div class="benefit-text">Вся ответственность на нас по договору</div>
                        </div>
                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/12.svg" alt="Галочка">
                            </div>
                            <div class="benefit-text">Сопровождаем на всех этапах от выбора до подписания сделки</div>
                        </div>
                    </div>

                    <button class="cta-button hero-button">Получить консультацию</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-overlay" id="modalOverlay"></div>

    <!-- Основной контент -->
    <div class="page-container">
        <!-- Хлебные крошки -->
        <div class="breadcrumbs">
            <a href="/services" class="breadcrumb-link">Юридические услуги</a>
            <span class="breadcrumb-separator">›</span>
            <span class="breadcrumb-current">Регистрация товарных знаков</span>
        </div>

        <div class="content-sidebar-wrapper">
            <!-- Основной контент -->
            <div class="content-container">
                <div class="article-content">
                    <!-- Главный заголовок с ценой -->
                    <div class="main-offer">
                        <h2 class="content-title">Регистрация товарного знака</h2>
                        <div class="price-banner">
                            <div class="price-highlight">
                                <span class="price-amount">25 000 ₽</span>
                                <span class="price-note">за услуги компании</span>
                            </div>
                            <div class="offer-text">
                                <strong>Закрепление товарного знака за Вами в день обращения.</strong>
                            </div>
                        </div>
                    </div>

                    <!-- Процесс работы -->
                    <h3 class="content-subtitle">Как мы работаем</h3>

                    <p class="text-paragraph">
                        Для регистрации товарного знака Вам необходимо обратиться в компанию «Стратегия».
                    </p>

                    <div class="process-steps">
                        <div class="process-step">
                            <div class="step-number">1</div>
                            <div class="step-content">
                                <h4>Проверка и анализ</h4>
                                <p>Сразу же после обращения мы проверяем возможность регистрации Вашего знака и
                                    определяем товары и услуги с которыми Вы работаете (подбираем классы из МКТУ), если
                                    возникнут трудности мы подскажем как их обойти (изменить товарный знак, при
                                    необходимости привлечем дизайнера).</p>
                            </div>
                        </div>

                        <div class="process-step">
                            <div class="step-number">2</div>
                            <div class="step-content">
                                <h4>Оплата госпошлин</h4>
                                <p>После утверждения оплачиваете госпошлины (все квитанции готовим мы для Вас).</p>
                            </div>
                        </div>

                        <div class="process-step">
                            <div class="step-number">3</div>
                            <div class="step-content">
                                <h4>Регистрация</h4>
                                <p>Регистрируем товарный знак в Роспатенте.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Пошлины первого этапа -->
                    <h3 class="content-subtitle accent">Пошлины первого этапа (формальная экспертиза + экспертиза по
                        существу)</h3>

                    <div class="fees-section">
                        <p class="fees-intro">На первоначальном этапе необходимо оплатить пошлины по пунктам 2.1 и 2.4:
                        </p>

                        <div class="fees-table">
                            <div class="fee-row">
                                <div class="fee-classes">При 1-2 классах МКТУ:</div>
                                <div class="fee-breakdown">
                                    <div class="fee-item">
                                        <span class="fee-code">2.1</span>
                                        <span class="fee-amount">5 000 ₽</span>
                                    </div>
                                    <div class="fee-item">
                                        <span class="fee-code">2.4</span>
                                        <span class="fee-amount">15 500 ₽</span>
                                    </div>
                                    <div class="fee-total">
                                        <span class="total-label">Итого:</span>
                                        <span class="total-amount">20 500 ₽</span>
                                    </div>
                                </div>
                            </div>

                            <div class="fee-row">
                                <div class="fee-classes">При 3 классах МКТУ:</div>
                                <div class="fee-breakdown">
                                    <div class="fee-item">
                                        <span class="fee-code">2.1</span>
                                        <span class="fee-amount">6 000 ₽</span>
                                    </div>
                                    <div class="fee-item">
                                        <span class="fee-code">2.4</span>
                                        <span class="fee-amount">18 000 ₽</span>
                                    </div>
                                    <div class="fee-total">
                                        <span class="total-label">Итого:</span>
                                        <span class="total-amount">24 000 ₽</span>
                                    </div>
                                </div>
                            </div>

                            <div class="fee-row">
                                <div class="fee-classes">При 5 классах МКТУ:</div>
                                <div class="fee-breakdown">
                                    <div class="fee-item">
                                        <span class="fee-code">2.1</span>
                                        <span class="fee-amount">8 000 ₽</span>
                                    </div>
                                    <div class="fee-item">
                                        <span class="fee-code">2.4</span>
                                        <span class="fee-amount">23 000 ₽</span>
                                    </div>
                                    <div class="fee-total">
                                        <span class="total-label">Итого:</span>
                                        <span class="total-amount">31 000 ₽</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Второй этап -->
                    <div class="second-stage">
                        <h4>Второй этап (через 4-6 месяцев)</h4>
                        <div class="stage-content">
                            <p>Оплачивается пошлина за регистрацию товарного знака и выдачу свидетельства в форме
                                электронного документа (по пункту 2.14):</p>
                            <div class="final-fee">
                                <span class="final-amount">18 000 ₽</span>
                                <span class="final-note">(до 5 классов МКТУ, при большем количестве пошлина
                                    возрастает)</span>
                            </div>
                        </div>
                    </div>

                    <!-- Дополнительные услуги -->
                    <div class="info-box">
                        <h4 class="info-title">Комплексные услуги</h4>
                        <p>Мы также оказываем другие услуги, связанные с интеллектуальной собственностью.</p>
                    </div>

                    <!-- Призыв к действию -->
                    <div class="cta-block">
                        <div class="cta-icon">
                            <span class="emoji">📋</span>
                        </div>
                        <div class="cta-content">
                            <h4 class="cta-title">Готовы зарегистрировать товарный знак?</h4>
                            <p>Закрепим ваш товарный знак в день обращения! Полное сопровождение процедуры регистрации
                                от профессионалов.</p>
                            <div class="cta-buttons">
                                <button class="cta-button">Начать регистрацию</button>
                                <a href="tel:+74732954824" class="secondary-button">Получить консультацию</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Дополнительные CSS стили -->
            <style>
                /* Стили для главного предложения */
                .main-offer {
                    margin-bottom: 40px;
                }

                .price-banner {
                    background: linear-gradient(135deg, rgba(198, 163, 89, 0.15), rgba(198, 163, 89, 0.08));
                    border: 2px solid rgba(198, 163, 89, 0.3);
                    padding: 30px;
                    margin: 25px 0;
                    border-radius: 5px;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    flex-wrap: wrap;
                    position: relative;
                    overflow: hidden;
                }

                .price-banner::before {
                    content: '';
                    position: absolute;
                    top: 0;
                    right: 0;
                    width: 0;
                    height: 100%;
                    background-color: rgba(198, 163, 89, 0.05);
                    transition: width var(--transition-speed) ease;
                    z-index: 0;
                }

                .price-banner:hover::before {
                    width: 100%;
                    right: auto;
                    left: 0;
                }

                .price-highlight {
                    display: flex;
                    flex-direction: column;
                    position: relative;
                    z-index: 1;
                }

                .price-amount {
                    font-size: 42px;
                    font-weight: 700;
                    color: var(--accent-color);
                    line-height: 1;
                }

                .price-note {
                    font-size: 14px;
                    color: var(--text-secondary);
                    margin-top: 5px;
                }

                .offer-text {
                    font-size: 18px;
                    color: var(--accent-color);
                    text-align: right;
                    position: relative;
                    z-index: 1;
                }

                /* Стили для процесса работы */
                .process-steps {
                    margin: 40px 0;
                    display: flex;
                    flex-direction: column;
                    gap: 25px;
                }

                .process-step {
                    display: flex;
                    align-items: flex-start;
                    background-color: rgba(255, 255, 255, 0.02);
                    border: 1px solid rgba(198, 163, 89, 0.15);
                    padding: 25px;
                    border-radius: 5px;
                    transition: all var(--transition-speed);
                    position: relative;
                    overflow: hidden;
                }

                .process-step::before {
                    content: '';
                    position: absolute;
                    top: 0;
                    right: 0;
                    width: 0;
                    height: 100%;
                    background-color: rgba(198, 163, 89, 0.05);
                    transition: width var(--transition-speed) ease;
                    z-index: 0;
                }

                .process-step:hover {
                    border-color: rgba(198, 163, 89, 0.3);
                    transform: translateX(5px);
                }

                .process-step:hover::before {
                    width: 100%;
                    right: auto;
                    left: 0;
                }

                .step-number {
                    width: 50px;
                    height: 50px;
                    background-color: var(--accent-color);
                    color: var(--primary-color);
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 20px;
                    font-weight: 700;
                    margin-right: 20px;
                    flex-shrink: 0;
                    position: relative;
                    z-index: 1;
                }

                .step-content {
                    flex: 1;
                    position: relative;
                    z-index: 1;
                }

                .step-content h4 {
                    font-size: 18px;
                    font-weight: 600;
                    color: var(--accent-color);
                    margin: 0 0 10px;
                }

                .step-content p {
                    margin: 0;
                    font-size: 15px;
                    line-height: 1.5;
                }

                /* Стили для секции пошлин */
                .fees-section {
                    margin: 40px 0;
                }

                .fees-intro {
                    font-size: 16px;
                    margin-bottom: 25px;
                    color: var(--text-color);
                }

                .fees-table {
                    display: flex;
                    flex-direction: column;
                    gap: 20px;
                }

                .fee-row {
                    background-color: rgba(255, 255, 255, 0.02);
                    border: 1px solid rgba(198, 163, 89, 0.15);
                    border-radius: 5px;
                    overflow: hidden;
                    transition: all var(--transition-speed);
                }

                .fee-row:hover {
                    border-color: rgba(198, 163, 89, 0.3);
                    transform: translateY(-2px);
                }

                .fee-classes {
                    background-color: rgba(198, 163, 89, 0.1);
                    padding: 15px 20px;
                    font-weight: 600;
                    color: var(--accent-color);
                    border-bottom: 1px solid rgba(198, 163, 89, 0.15);
                }

                .fee-breakdown {
                    padding: 20px;
                }

                .fee-item {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    padding: 8px 0;
                    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
                }

                .fee-item:last-of-type {
                    border-bottom: none;
                    margin-bottom: 10px;
                }

                .fee-code {
                    font-weight: 500;
                    color: var(--text-secondary);
                }

                .fee-amount {
                    font-weight: 600;
                    color: var(--text-color);
                }

                .fee-total {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    padding: 15px 0 0;
                    border-top: 2px solid rgba(198, 163, 89, 0.3);
                    margin-top: 10px;
                }

                .total-label {
                    font-size: 18px;
                    font-weight: 600;
                    color: var(--accent-color);
                }

                .total-amount {
                    font-size: 22px;
                    font-weight: 700;
                    color: var(--accent-color);
                }

                /* Стили для второго этапа */
                .second-stage {
                    background-color: rgba(198, 163, 89, 0.08);
                    border-left: 4px solid var(--accent-color);
                    padding: 25px;
                    margin: 30px 0;
                    border-radius: 5px;
                }

                .second-stage h4 {
                    font-size: 20px;
                    font-weight: 600;
                    color: var(--accent-color);
                    margin: 0 0 15px;
                }

                .stage-content p {
                    margin: 0 0 15px;
                    font-size: 15px;
                }

                .final-fee {
                    display: flex;
                    align-items: center;
                    gap: 15px;
                    flex-wrap: wrap;
                }

                .final-amount {
                    font-size: 28px;
                    font-weight: 700;
                    color: var(--accent-color);
                }

                .final-note {
                    font-size: 14px;
                    color: var(--text-secondary);
                    font-style: italic;
                }

                /* Стили для призыва к действию */
                .cta-block {
                    background: linear-gradient(135deg, rgba(198, 163, 89, 0.1), rgba(198, 163, 89, 0.05));
                    border: 2px solid rgba(198, 163, 89, 0.3);
                    padding: 30px;
                    margin: 40px 0;
                    border-radius: 5px;
                    display: flex;
                    align-items: flex-start;
                }

                .cta-icon {
                    width: 60px;
                    height: 60px;
                    background-color: var(--accent-color);
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    margin-right: 25px;
                    flex-shrink: 0;
                }

                .cta-icon .emoji {
                    font-size: 28px;
                }

                .cta-content {
                    flex: 1;
                }

                .cta-content .cta-title {
                    font-size: 22px;
                    font-weight: 600;
                    margin: 0 0 15px;
                    color: var(--accent-color);
                }

                .cta-content p {
                    margin: 0 0 25px;
                    font-size: 15px;
                }

                .cta-buttons {
                    display: flex;
                    gap: 15px;
                    flex-wrap: wrap;
                }

                .secondary-button {
                    background-color: transparent;
                    color: var(--text-color);
                    border: 1px solid rgba(255, 255, 255, 0.3);
                    padding: 12px 25px;
                    text-decoration: none;
                    font-size: 16px;
                    font-weight: 500;
                    transition: all var(--transition-speed);
                    position: relative;
                    overflow: hidden;
                    display: inline-block;
                }

                .secondary-button::before {
                    content: '';
                    position: absolute;
                    top: 0;
                    right: 0;
                    width: 0;
                    height: 100%;
                    background-color: rgba(255, 255, 255, 0.1);
                    transition: width var(--transition-speed) ease;
                    z-index: -1;
                }

                .secondary-button:hover {
                    border-color: rgba(255, 255, 255, 0.5);
                }

                .secondary-button:hover::before {
                    width: 100%;
                    right: auto;
                    left: 0;
                }

                /* Адаптивные стили */
                @media (max-width: 768px) {
                    .price-banner {
                        flex-direction: column;
                        text-align: center;
                        gap: 20px;
                    }

                    .offer-text {
                        text-align: center;
                    }

                    .process-step {
                        flex-direction: column;
                        align-items: center;
                        text-align: center;
                    }

                    .step-number {
                        margin-right: 0;
                        margin-bottom: 15px;
                    }

                    .final-fee {
                        flex-direction: column;
                        align-items: flex-start;
                        gap: 8px;
                    }

                    .cta-block {
                        flex-direction: column;
                        align-items: center;
                        text-align: center;
                    }

                    .cta-icon {
                        margin-right: 0;
                        margin-bottom: 20px;
                    }

                    .cta-buttons {
                        justify-content: center;
                        flex-direction: column;
                    }
                }

                @media (max-width: 480px) {
                    .price-amount {
                        font-size: 32px;
                    }

                    .offer-text {
                        font-size: 16px;
                    }

                    .process-step {
                        padding: 20px 15px;
                    }

                    .fees-table {
                        gap: 15px;
                    }

                    .fee-breakdown {
                        padding: 15px;
                    }

                    .second-stage {
                        padding: 20px 15px;
                    }

                    .cta-block {
                        padding: 25px 20px;
                    }
                }
            </style>
        </div>
    </div>

<?php wp_footer(); ?>
<?php get_footer(); ?>

</body>
</html>
