<?php
/**
 * Template Name: deyatelnost-s-othodami
 */
get_header();?>

        <div class="main-image-container">
            <img src="<?php echo get_stylesheet_directory_uri();?>/img/image (2).png" alt="" class="main-image">
        </div>
        <!-- Заголовок и подзаголовок -->
        <div class="hero-content">
            <div class="container">
                <div class="hero-text">
                    <h1 class="main-title">Получение лицензии на деятельность с отходами
                    </h1>
                    <h2 class="subtitle">Юридическая помощь по любым вопросам</h2>

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
            <span class="breadcrumb-current">Получение лицензии на деятельность с отходами</span>
        </div>

        <div class="content-sidebar-wrapper">
            <!-- Основной контент -->
            <div class="content-container">
                <div class="article-content">
                    <!-- Главный заголовок -->
                    <h2 class="content-title">Лицензирование деятельности на обращение с отходами</h2>

                    <!-- Главное предложение -->
                    <div class="main-offer">
                        <h3 class="offer-title">Лицензия «под ключ» от 100 000 рублей за 10 рабочих дней!</h3>
                        <p class="offer-description">Оказываем услуги по получению лицензии на размещение, перемещение
                            (транспортирование), сбор, уничтожение, обработку отходов I-IV классов опасности.</p>
                    </div>

                    <!-- Блок с ценой и сроками -->
                    <div class="service-offer">
                        <div class="offer-details">
                            <div class="offer-item">
                                <div class="offer-label">Стоимость услуг:</div>
                                <div class="offer-value price">от 100 000 ₽</div>
                            </div>
                            <div class="offer-item">
                                <div class="offer-label">Срок получения лицензии:</div>
                                <div class="offer-value timeframe">10 рабочих дней</div>
                            </div>
                        </div>
                        <div class="payment-terms">
                            <span class="emoji">💳</span>
                            <span>Оплата услуг происходит поэтапно, в соответствии с договором.</span>
                        </div>
                    </div>

                    <!-- Географический охват -->
                    <div class="coverage-section">
                        <h3 class="content-subtitle">Географический охват услуг</h3>
                        <p>Для организаций Центрально-Черноземного района:</p>
                        <div class="regions-grid">
                            <div class="region-item">Белгородская область</div>
                            <div class="region-item">Воронежская область</div>
                            <div class="region-item">Курская область</div>
                            <div class="region-item">Липецкая область</div>
                            <div class="region-item">Орловская область</div>
                            <div class="region-item">Тамбовская область</div>
                        </div>
                    </div>

                    <!-- Виды деятельности -->
                    <div class="activities-section">
                        <h3 class="content-subtitle accent">Виды лицензируемой деятельности с отходами I-IV классов
                            опасности:</h3>
                        <div class="activities-grid">
                            <div class="activity-item">
                                <h4>Сбор отходов</h4>
                                <p>Приемка отходов от организаций для дальнейшей переработки</p>
                            </div>
                            <div class="activity-item">
                                <h4>Транспортирование</h4>
                                <p>Перевозка отходов специализированным транспортом</p>
                            </div>
                            <div class="activity-item">
                                <h4>Обработка</h4>
                                <p>Предварительная подготовка отходов к утилизации</p>
                            </div>
                            <div class="activity-item">
                                <h4>Утилизация</h4>
                                <p>Извлечение полезных компонентов для повторного использования</p>
                            </div>
                            <div class="activity-item">
                                <h4>Обезвреживание</h4>
                                <p>Уменьшение опасности отходов для окружающей среды</p>
                            </div>
                            <div class="activity-item">
                                <h4>Размещение</h4>
                                <p>Хранение и захоронение отходов на специальных объектах</p>
                            </div>
                        </div>
                    </div>

                    <!-- Документы -->
                    <h3 class="content-subtitle">Документы, которые необходимо предоставить нам для получения лицензии
                        на работу с отходами:</h3>

                    <div class="documents-section">
                        <ul class="documents-list">
                            <li>Учредительные документы на ООО или ИП;</li>
                            <li>Свидетельства о постановке на учет;</li>
                            <li>Лист записи Единого государственного реестра юридических лиц;</li>
                            <li>Устав;</li>
                            <li>Выписка из ЕГРЮЛ;</li>
                            <li>Решение о назначении директора;</li>
                            <li>Правоустанавливающие документы (выписка из ЕГРН) на помещение (гараж, стоянка);</li>
                            <li>Документы на транспортное средство;</li>
                            <li>Документы на лицо, фактически осуществляющее управление транспортным средством
                                (водитель).</li>
                        </ul>
                    </div>

                    <!-- Дополнительные услуги -->
                    <div class="additional-services">
                        <h4>Дополнительные услуги</h4>
                        <div class="services-list">
                            <div class="service-block">
                                <h5>Аренда оборудования</h5>
                                <p>При необходимости предоставляем специализированное оборудование в аренду</p>
                            </div>
                            <div class="service-block">
                                <h5>Вступление в СРО</h5>
                                <p>Организуем вступление в саморегулируемые организации</p>
                            </div>
                            <div class="service-block">
                                <h5>Обучение сотрудников</h5>
                                <p>Проводим обучение персонала работе с отходами по специальным программам</p>
                            </div>
                        </div>
                    </div>

                    <!-- Важная информация -->
                    <div class="info-box">
                        <h4 class="info-title">Важно знать</h4>
                        <div class="info-grid">
                            <div class="info-item">
                                <span class="info-label">Лицензирующий орган:</span>
                                <span class="info-value">Росприроднадзор</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Госпошлина:</span>
                                <span class="info-value">7 500 ₽</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Срок действия:</span>
                                <span class="info-value">Бессрочно</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Подтверждение соответствия:</span>
                                <span class="info-value">Каждые 3 года</span>
                            </div>
                        </div>
                    </div>

                    <!-- Заключительный текст -->
                    <blockquote class="content-quote">
                        Благодаря профессиональной работе специалистов «Стратегии», процедура лицензирования
                        деятельности на обращение с отходами, для Вас будет абсолютно прозрачной и не доставит никаких
                        проблем!
                    </blockquote>

                    <!-- Призыв к действию -->
                    <div class="cta-block">
                        <div class="cta-content">
                            <h4 class="cta-title">Нужна лицензия на обращение с отходами?</h4>
                            <p>Получите профессиональную помощь в оформлении лицензии на работу с отходами I-IV классов
                                опасности. Полное сопровождение «под ключ»!</p>
                            <div class="cta-buttons">
                                <button class="cta-button">Заказать лицензирование</button>
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
                    background: linear-gradient(135deg, rgba(198, 163, 89, 0.15), rgba(198, 163, 89, 0.08));
                    border: 2px solid rgba(198, 163, 89, 0.3);
                    padding: 30px;
                    margin: 30px 0;
                    border-radius: 5px;
                    text-align: center;
                    position: relative;
                    overflow: hidden;
                }

                .main-offer::before {
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

                .main-offer:hover::before {
                    width: 100%;
                    right: auto;
                    left: 0;
                }

                .offer-title {
                    font-size: 26px;
                    font-weight: 700;
                    color: var(--accent-color);
                    margin: 0 0 15px;
                    position: relative;
                    z-index: 1;
                }

                .offer-description {
                    font-size: 16px;
                    color: var(--text-color);
                    margin: 0;
                    position: relative;
                    z-index: 1;
                }

                /* Стили для блока предложения услуг */
                .service-offer {
                    background: linear-gradient(135deg, rgba(198, 163, 89, 0.1), rgba(198, 163, 89, 0.05));
                    border: 1px solid rgba(198, 163, 89, 0.3);
                    padding: 25px;
                    margin: 30px 0;
                    border-radius: 5px;
                    position: relative;
                    overflow: hidden;
                }

                .service-offer::before {
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

                .service-offer:hover::before {
                    width: 100%;
                    right: auto;
                    left: 0;
                }

                .offer-details {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                    gap: 25px;
                    margin-bottom: 20px;
                    position: relative;
                    z-index: 1;
                }

                .offer-item {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    text-align: center;
                }

                .offer-label {
                    font-size: 14px;
                    color: var(--text-secondary);
                    margin-bottom: 8px;
                    text-transform: uppercase;
                    letter-spacing: 0.5px;
                }

                .offer-value {
                    font-size: 24px;
                    font-weight: 700;
                }

                .offer-value.price {
                    color: var(--accent-color);
                }

                .offer-value.timeframe {
                    color: #2ecc71;
                }

                .payment-terms {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    gap: 10px;
                    padding: 15px;
                    background-color: rgba(255, 255, 255, 0.05);
                    border-radius: 5px;
                    font-size: 15px;
                    font-weight: 500;
                    position: relative;
                    z-index: 1;
                }

                .payment-terms .emoji {
                    font-size: 20px;
                }

                /* Стили для секции охвата */
                .coverage-section {
                    margin: 40px 0;
                }

                .regions-grid {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                    gap: 15px;
                    margin-top: 20px;
                }

                .region-item {
                    background-color: rgba(255, 255, 255, 0.02);
                    border: 1px solid rgba(198, 163, 89, 0.15);
                    padding: 12px 16px;
                    border-radius: 5px;
                    text-align: center;
                    font-size: 14px;
                    font-weight: 500;
                    color: var(--text-color);
                    transition: all var(--transition-speed);
                    position: relative;
                    overflow: hidden;
                }

                .region-item::before {
                    content: '';
                    position: absolute;
                    top: 0;
                    right: 0;
                    width: 0;
                    height: 100%;
                    background-color: rgba(198, 163, 89, 0.1);
                    transition: width var(--transition-speed) ease;
                    z-index: 0;
                }

                .region-item:hover {
                    border-color: rgba(198, 163, 89, 0.3);
                    color: var(--accent-color);
                    transform: translateY(-2px);
                }

                .region-item:hover::before {
                    width: 100%;
                    right: auto;
                    left: 0;
                }

                /* Стили для видов деятельности */
                .activities-section {
                    margin: 40px 0;
                }

                .activities-grid {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                    gap: 20px;
                    margin-top: 25px;
                }

                .activity-item {
                    background-color: rgba(255, 255, 255, 0.02);
                    border: 1px solid rgba(198, 163, 89, 0.15);
                    padding: 20px;
                    border-radius: 5px;
                    transition: all var(--transition-speed);
                    position: relative;
                    overflow: hidden;
                }

                .activity-item::before {
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

                .activity-item:hover {
                    border-color: rgba(198, 163, 89, 0.3);
                    transform: translateY(-3px);
                }

                .activity-item:hover::before {
                    width: 100%;
                    right: auto;
                    left: 0;
                }

                .activity-item h4 {
                    font-size: 16px;
                    font-weight: 600;
                    color: var(--accent-color);
                    margin: 0 0 8px;
                    position: relative;
                    z-index: 1;
                }

                .activity-item p {
                    margin: 0;
                    font-size: 14px;
                    color: var(--text-secondary);
                    line-height: 1.4;
                    position: relative;
                    z-index: 1;
                }

                /* Стили для секции документов */
                .documents-section {
                    margin: 40px 0;
                }

                .documents-list {
                    background-color: rgba(255, 255, 255, 0.02);
                    border: 1px solid rgba(198, 163, 89, 0.15);
                    padding: 30px;
                    border-radius: 5px;
                    list-style: none;
                    margin: 0;
                    padding-left: 30px;
                    position: relative;
                }

                .documents-list::before {
                    content: '';
                    position: absolute;
                    left: 0;
                    top: 0;
                    width: 4px;
                    height: 100%;
                    background-color: var(--accent-color);
                }

                .documents-list li {
                    position: relative;
                    padding-left: 25px;
                    margin-bottom: 15px;
                    font-size: 15px;
                    color: var(--text-color);
                    line-height: 1.5;
                }

                .documents-list li:last-child {
                    margin-bottom: 0;
                }

                .documents-list li::before {
                    content: '';
                    position: absolute;
                    left: 0;
                    top: 8px;
                    width: 8px;
                    height: 8px;
                    background-color: var(--accent-color);
                    border-radius: 50%;
                }

                /* Стили для дополнительных услуг */
                .additional-services {
                    background-color: rgba(255, 255, 255, 0.02);
                    border: 1px solid rgba(198, 163, 89, 0.2);
                    padding: 30px;
                    margin: 40px 0;
                    border-radius: 5px;
                }

                .additional-services h4 {
                    font-size: 20px;
                    font-weight: 600;
                    color: var(--accent-color);
                    margin: 0 0 20px;
                    text-align: center;
                }

                .services-list {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                    gap: 20px;
                }

                .service-block {
                    padding: 20px;
                    background-color: rgba(198, 163, 89, 0.05);
                    border-radius: 5px;
                    text-align: center;
                    transition: all var(--transition-speed);
                }

                .service-block:hover {
                    background-color: rgba(198, 163, 89, 0.1);
                    transform: translateY(-3px);
                }

                .service-block h5 {
                    font-size: 16px;
                    font-weight: 600;
                    color: var(--accent-color);
                    margin: 0 0 10px;
                }

                .service-block p {
                    margin: 0;
                    font-size: 14px;
                    color: var(--text-secondary);
                    line-height: 1.4;
                }

                /* Стили для важной информации */
                .info-box {
                    background-color: rgba(198, 163, 89, 0.08);
                    border-left: 4px solid var(--accent-color);
                    padding: 25px;
                    margin: 30px 0;
                    border-radius: 5px;
                }

                .info-box .info-title {
                    font-size: 18px;
                    font-weight: 600;
                    color: var(--accent-color);
                    margin: 0 0 20px;
                }

                .info-grid {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                    gap: 15px;
                }

                .info-item {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    text-align: center;
                    padding: 15px;
                    background-color: rgba(255, 255, 255, 0.05);
                    border-radius: 5px;
                }

                .info-label {
                    font-size: 13px;
                    color: var(--text-secondary);
                    margin-bottom: 5px;
                }

                .info-value {
                    font-size: 16px;
                    font-weight: 600;
                    color: var(--accent-color);
                }

                /* Стили для призыва к действию */
                .cta-block {
                    background: linear-gradient(135deg, rgba(198, 163, 89, 0.1), rgba(198, 163, 89, 0.05));
                    border: 2px solid rgba(198, 163, 89, 0.3);
                    padding: 30px;
                    margin: 40px 0;
                    border-radius: 5px;
                    text-align: center;
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
                    justify-content: center;
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
                    .offer-title {
                        font-size: 22px;
                    }

                    .offer-details {
                        grid-template-columns: 1fr;
                        gap: 20px;
                    }

                    .payment-terms {
                        flex-direction: column;
                        text-align: center;
                        gap: 8px;
                    }

                    .regions-grid {
                        grid-template-columns: repeat(2, 1fr);
                    }

                    .activities-grid {
                        grid-template-columns: 1fr;
                    }

                    .services-list {
                        grid-template-columns: 1fr;
                    }

                    .info-grid {
                        grid-template-columns: repeat(2, 1fr);
                    }

                    .documents-list {
                        padding: 25px 20px 25px 30px;
                    }

                    .cta-buttons {
                        flex-direction: column;
                    }
                }

                @media (max-width: 480px) {
                    .main-offer {
                        padding: 25px 20px;
                    }

                    .service-offer {
                        padding: 20px 15px;
                    }

                    .regions-grid {
                        grid-template-columns: 1fr;
                    }

                    .info-grid {
                        grid-template-columns: 1fr;
                    }

                    .additional-services {
                        padding: 25px 20px;
                    }

                    .documents-list {
                        padding: 20px 15px 20px 25px;
                    }

                    .documents-list li {
                        font-size: 14px;
                    }

                    .cta-block {
                        padding: 25px 20px;
                    }
                }
            </style>
        </div>
    </div>

    <?php wp_footer();?>
    <?php get_footer();?>

</body>
</html>