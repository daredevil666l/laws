<?php
/**
 * Template Name: licensia-fsb
 */
get_header();
?>
       <div class="main-image-container">
            <img src="<?php echo get_stylesheet_directory_uri();?>/img/image (2).png" alt="" class="main-image">
        </div>
        <!-- Заголовок и подзаголовок -->
        <div class="hero-content">
            <div class="container">
                <div class="hero-text">
                    <h1 class="main-title">Получение лицензии ФСБ
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
            <span class="breadcrumb-current">Получение лицензии ФСБ</span>
        </div>

        <div class="content-sidebar-wrapper">
            <!-- Основной контент -->
            <div class="content-container">
                <div class="article-content">
                    <!-- Главный заголовок -->
                    <h2 class="content-title">Лицензирование в ФСБ</h2>

                    <!-- Главное предложение -->
                    <div class="main-offer">
                        <h3 class="offer-title">Лицензия «под ключ» от 500 000 рублей за 90 дней!</h3>
                        <p class="offer-description">Оказываем услуги по получению лицензий в ФСБ России для работы с
                            государственной тайной и специальными техническими средствами.</p>
                    </div>

                    <!-- Блок с ценой и сроками -->
                    <div class="service-offer">
                        <div class="offer-details">
                            <div class="offer-item">
                                <div class="offer-label">Стоимость услуг:</div>
                                <div class="offer-value price">от 500 000 ₽</div>
                            </div>
                            <div class="offer-item">
                                <div class="offer-label">Срок получения лицензии:</div>
                                <div class="offer-value timeframe">90 дней</div>
                            </div>
                        </div>
                        <div class="payment-terms">
                            <span class="emoji">💳</span>
                            <span>Оплата услуг происходит поэтапно, в соответствии с договором.</span>
                        </div>
                    </div>

                    <!-- Виды лицензируемой деятельности ФСБ -->
                    <h3 class="content-subtitle accent">Виды деятельности, лицензируемые ФСБ России:</h3>

                    <div class="fsb-activities">
                        <div class="activity-category">
                            <h4>Государственная тайна</h4>
                            <ul class="category-list">
                                <li>Работы, связанные с использованием сведений, составляющих государственную тайну</li>
                                <li>Создание средств защиты информации, содержащей государственную тайну</li>
                                <li>Мероприятия и услуги в области защиты государственной тайны</li>
                            </ul>
                        </div>

                        <div class="activity-category">
                            <h4>Криптографические средства</h4>
                            <ul class="category-list">
                                <li>Разработка и производство шифровальных (криптографических) средств</li>
                                <li>Распространение шифровальных средств</li>
                                <li>Техническое обслуживание криптографических систем</li>
                                <li>Услуги в области шифрования информации</li>
                            </ul>
                        </div>

                        <div class="activity-category">
                            <h4>Специальные технические средства</h4>
                            <ul class="category-list">
                                <li>Разработка и производство СТС для негласного получения информации</li>
                                <li>Реализация и приобретение специальных технических средств</li>
                                <li>Выявление электронных устройств негласного получения информации</li>
                            </ul>
                        </div>

                        <div class="activity-category">
                            <h4>Защита конфиденциальной информации</h4>
                            <ul class="category-list">
                                <li>Разработка средств защиты конфиденциальной информации</li>
                                <li>Производство средств защиты конфиденциальной информации</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Важная информация -->
                    <div class="important-notice">
                        <h4>Важно знать</h4>
                        <div class="notice-grid">
                            <div class="notice-item">
                                <span class="notice-label">Лицензирующий орган:</span>
                                <span class="notice-value">Центр по лицензированию, сертификации и защите
                                    государственной тайны ФСБ России</span>
                            </div>
                            <div class="notice-item">
                                <span class="notice-label">Только для:</span>
                                <span class="notice-value">Юридических лиц (большинство видов деятельности)</span>
                            </div>
                            <div class="notice-item">
                                <span class="notice-label">Особые требования:</span>
                                <span class="notice-value">Проверка службой безопасности руководителей и ответственных
                                    лиц</span>
                            </div>
                        </div>
                    </div>

                    <!-- Документы -->
                    <h3 class="content-subtitle">Документы, которые необходимо предоставить нам для получения лицензии:
                    </h3>

                    <div class="documents-section">
                        <ul class="documents-list">
                            <li>Устав предприятия (если есть) и произведенные изменения в связи с подачей документов на
                                лицензирование;</li>
                            <li>Учредительный договор (при наличии);</li>
                            <li>Свидетельство о регистрации организации ОГРН, свидетельство о присвоении ИНН;</li>
                            <li>Уведомление из Госстата о присвоении кодов статистики;</li>
                            <li>Приказ о назначении действующего генерального директора, решения (протоколы) ко всем
                                изменениям (заверенные самим юр. лицом копии);</li>
                            <li>Выписка из единого государственного реестра юридических лиц — ЕГРЮЛ, с отметкой ИФНС,
                                полученная не ранее 20 дней до подачи документов;</li>
                            <li>Договор аренды по юридическому адресу с правоустанавливающими документами (с актом
                                приема-передачи помещений, свидетельством о праве собственности, договором аренды, если
                                помещение находится в субаренде), или копия свидетельства о праве собственности;</li>
                            <li>Оригинал ходатайства от Заказчика закрытых работ. В нем обязательна пометка о
                                предоставлении допуска юридическому лицу после получения разрешения;</li>
                            <li>Данные на руководителя (для подробной анкеты) паспорт, свидетельства, документы,
                                подтверждающие заключение брака и/или развод, а также военный билет;</li>
                            <li>Дипломы (копии, завизированные подписью руководителя и печатью).</li>
                        </ul>
                    </div>

                    <!-- Дополнительные требования -->
                    <div class="additional-requirements">
                        <h4>Дополнительные требования</h4>
                        <div class="requirements-list">
                            <div class="requirement-item">
                                <h5>Совпадение адресов</h5>
                                <p>Совпадение юридического и фактического адреса — обязательно</p>
                            </div>
                            <div class="requirement-item">
                                <h5>Нотариальное заверение</h5>
                                <p>Все копии документов заверяются у нотариуса, за исключением документов, заверяемых
                                    юридическим лицом</p>
                            </div>
                            <div class="requirement-item">
                                <h5>Проверка безопасности</h5>
                                <p>Обязательная проверка руководителей и ответственных сотрудников органами безопасности
                                </p>
                            </div>
                        </div>
                    </div>


                    <!-- Заключительный текст -->
                    <blockquote class="content-quote">
                        Благодаря профессиональной работе специалистов «Стратегии», процедура лицензирования
                        деятельности, для вас будет абсолютно прозрачной и не доставит никаких проблем!
                    </blockquote>

                    <!-- Призыв к действию -->
                    <div class="cta-block">
                        <div class="cta-content">
                            <h4 class="cta-title">Нужна лицензия ФСБ?</h4>
                            <p>Получите профессиональную помощь в оформлении лицензии ФСБ на работу с государственной
                                тайной и специальными техническими средствами. Полное сопровождение сложной процедуры
                                лицензирования.</p>
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
                    color: #e74c3c;
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

                /* Стили для видов деятельности ФСБ */
                .fsb-activities {
                    margin: 40px 0;
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                    gap: 25px;
                }

                .activity-category {
                    background-color: rgba(255, 255, 255, 0.02);
                    border: 1px solid rgba(198, 163, 89, 0.15);
                    padding: 25px;
                    border-radius: 5px;
                    transition: all var(--transition-speed);
                    position: relative;
                    overflow: hidden;
                }

                .activity-category::before {
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

                .activity-category:hover {
                    border-color: rgba(198, 163, 89, 0.3);
                    transform: translateY(-5px);
                }

                .activity-category:hover::before {
                    width: 100%;
                    right: auto;
                    left: 0;
                }

                .activity-category h4 {
                    font-size: 18px;
                    font-weight: 600;
                    color: var(--accent-color);
                    margin: 0 0 15px;
                    position: relative;
                    z-index: 1;
                }

                .category-list {
                    list-style: none;
                    padding: 0;
                    margin: 0;
                    position: relative;
                    z-index: 1;
                }

                .category-list li {
                    position: relative;
                    padding-left: 20px;
                    margin-bottom: 10px;
                    font-size: 14px;
                    color: var(--text-secondary);
                    line-height: 1.4;
                }

                .category-list li:last-child {
                    margin-bottom: 0;
                }

                .category-list li::before {
                    content: '';
                    position: absolute;
                    left: 0;
                    top: 6px;
                    width: 6px;
                    height: 6px;
                    background-color: var(--accent-color);
                    border-radius: 50%;
                }

                /* Стили для важной информации */
                .important-notice {
                    background-color: rgba(227, 30, 36, 0.05);
                    border: 1px solid rgba(227, 30, 36, 0.3);
                    padding: 25px;
                    margin: 40px 0;
                    border-radius: 5px;
                }

                .important-notice h4 {
                    font-size: 20px;
                    font-weight: 600;
                    color: #e31e24;
                    margin: 0 0 20px;
                    text-align: center;
                }

                .notice-grid {
                    display: flex;
                    flex-direction: column;
                    gap: 15px;
                }

                .notice-item {
                    display: flex;
                    flex-direction: column;
                    padding: 15px;
                    background-color: rgba(255, 255, 255, 0.05);
                    border-radius: 5px;
                }

                .notice-label {
                    font-size: 14px;
                    color: var(--text-secondary);
                    margin-bottom: 5px;
                    font-weight: 600;
                }

                .notice-value {
                    font-size: 15px;
                    color: var(--text-color);
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

                /* Стили для дополнительных требований */
                .additional-requirements {
                    background-color: rgba(255, 255, 255, 0.02);
                    border: 1px solid rgba(198, 163, 89, 0.2);
                    padding: 30px;
                    margin: 40px 0;
                    border-radius: 5px;
                }

                .additional-requirements h4 {
                    font-size: 20px;
                    font-weight: 600;
                    color: var(--accent-color);
                    margin: 0 0 20px;
                }

                .requirements-list {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                    gap: 20px;
                }

                .requirement-item {
                    padding: 20px;
                    background-color: rgba(198, 163, 89, 0.05);
                    border-radius: 5px;
                    transition: all var(--transition-speed);
                }

                .requirement-item:hover {
                    background-color: rgba(198, 163, 89, 0.1);
                    transform: translateY(-3px);
                }

                .requirement-item h5 {
                    font-size: 16px;
                    font-weight: 600;
                    color: var(--accent-color);
                    margin: 0 0 10px;
                }

                .requirement-item p {
                    margin: 0;
                    font-size: 14px;
                    color: var(--text-secondary);
                    line-height: 1.4;
                }

                /* Стили для контактной информации */
                /* .contact-info {
                    background-color: rgba(255, 255, 255, 0.02);
                    border: 1px solid rgba(198, 163, 89, 0.2);
                    padding: 30px;
                    margin: 40px 0;
                    border-radius: 5px;
                }

                .contact-info h4 {
                    font-size: 20px;
                    font-weight: 600;
                    color: var(--accent-color);
                    margin: 0 0 25px;
                    text-align: center;
                }

                .contacts-grid {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                    gap: 20px;
                }

                .contact-block {
                    padding: 20px;
                    background-color: rgba(198, 163, 89, 0.05);
                    border-radius: 5px;
                    text-align: center;
                    transition: all var(--transition-speed);
                }

                .contact-block:hover {
                    background-color: rgba(198, 163, 89, 0.1);
                    transform: translateY(-3px);
                }

                .contact-block h5 {
                    font-size: 14px;
                    font-weight: 600;
                    color: var(--accent-color);
                    margin: 0 0 10px;
                    text-transform: uppercase;
                    letter-spacing: 0.5px;
                }

                .contact-block p {
                    margin: 0;
                    font-size: 14px;
                    color: var(--text-color);
                    line-height: 1.6;
                } */

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

                    .fsb-activities {
                        grid-template-columns: 1fr;
                    }

                    .notice-grid {
                        gap: 10px;
                    }

                    .requirements-list {
                        grid-template-columns: 1fr;
                    }

                    .contacts-grid {
                        grid-template-columns: 1fr;
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

                    .activity-category {
                        padding: 20px 15px;
                    }

                    .important-notice {
                        padding: 20px 15px;
                    }

                    .additional-requirements {
                        padding: 25px 20px;
                    }

                    .contact-info {
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

<?php wp_footer(); ?>
<?php get_footer(); ?>

</body>
</html>
