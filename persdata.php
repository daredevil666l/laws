<?php
/**
 * Template Name: persdata
 */
get_header();
?>

      <div class="main-image-container">
            <img src="<?php echo get_stylesheet_directory_uri();?>/img/image (2).png" alt="Персональные данные" class="main-image">
        </div>
        <!-- Заголовок и подзаголовок -->
        <div class="hero-content">
            <div class="container">
                <div class="hero-text">
                    <h1 class="main-title">ПЕРСОНАЛЬНЫЕ ДАННЫЕ</h1>
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
            <span class="breadcrumb-current">Персональные данные</span>
        </div>

        <div class="content-sidebar-wrapper">
            <!-- Основной контент -->
            <div class="content-container">
                <div class="article-content">
                    <!-- Главный заголовок -->
                    <h2 class="content-title">Персональные данные и ФЗ №152</h2>

                    <!-- Предупреждение о штрафах -->
                    <div class="warning-banner">
                        <div class="warning-icon">
                            <span class="emoji">⚠️</span>
                        </div>
                        <div class="warning-content">
                            <h4>Внимание! Увеличение штрафов</h4>
                            <p>С 30 мая 2025 года штраф за отсутствие регистрации в реестре Роскомнадзора и
                                предоставления необходимого пакета документов в соответствии с ФЗ №152 увеличивается до
                                300 000 рублей.</p>
                        </div>
                        <div class="fine-amount">
                            <span class="emoji">💰</span>
                            <span class="amount">300 000 ₽</span>
                        </div>
                    </div>

                    <!-- Определение персональных данных -->
                    <div class="definition-box">
                        <div class="definition-icon">
                            <span class="emoji">🔒</span>
                        </div>
                        <div class="definition-content">
                            <h4>Что такое персональные данные?</h4>
                            <p>Персональные данные — любая информация, которая позволяет идентифицировать личность.</p>
                        </div>
                    </div>

                    <!-- Требования для работы с ПД -->
                    <h3 class="content-subtitle accent">Для работы с персональными данными Вам необходимо:</h3>

                    <div class="requirements-list">
                        <div class="requirement-item">
                            <div class="requirement-icon">
                                <span class="emoji">📨</span>
                            </div>
                            <div class="requirement-text">
                                <p>Подготовить и направить Уведомления о намерении осуществлять обработку персональных
                                    данных в Роскомнадзор;</p>
                            </div>
                        </div>

                        <div class="requirement-item">
                            <div class="requirement-icon">
                                <span class="emoji">✍️</span>
                            </div>
                            <div class="requirement-text">
                                <p>Зарегистрироваться на сайте Роскомнадзора;</p>
                            </div>
                        </div>

                        <div class="requirement-item">
                            <div class="requirement-icon">
                                <span class="emoji">📁</span>
                            </div>
                            <div class="requirement-text">
                                <p>Сформировать индивидуальный пакет документов по обработке, хранению и передаче
                                    персональных данных;</p>
                            </div>
                        </div>

                        <div class="requirement-item">
                            <div class="requirement-icon">
                                <span class="emoji">🛡️</span>
                            </div>
                            <div class="requirement-text">
                                <p>Разработать политику безопасности;</p>
                            </div>
                        </div>

                        <div class="requirement-item">
                            <div class="requirement-icon">
                                <span class="emoji">✅</span>
                            </div>
                            <div class="requirement-text">
                                <p>Разработать согласие на обработку персональных данных;</p>
                            </div>
                        </div>

                        <div class="requirement-item">
                            <div class="requirement-icon">
                                <span class="emoji">📋</span>
                            </div>
                            <div class="requirement-text">
                                <p>Разработать локальные документы, необходимые для работы с персональными данными.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Консультации -->
                    <div class="consultation-offer">
                        <div class="consultation-icon">
                            <span class="emoji">💬</span>
                        </div>
                        <div class="consultation-text">
                            <p>Проконсультировать по всем вопросам, связанным с персональными данными и их обработкой,
                                могут наши специалисты, для этого звоните нам, или оставляйте заявку.</p>
                        </div>
                        <div class="consultation-contact">
                            <span class="emoji">📞</span>
                        </div>
                    </div>

                    <!-- Услуги -->
                    <h3 class="content-subtitle">Услуги, оказываемые для Вас по работе с персональными данными:</h3>

                    <div class="services-grid">
                        <div class="service-card">
                            <div class="service-icon">
                                <span class="emoji">✉️</span>
                            </div>
                            <div class="service-title">Ответы на запросы</div>
                            <div class="service-desc">Составление ответов на запросы Роскомнадзора</div>
                        </div>

                        <div class="service-card">
                            <div class="service-icon">
                                <span class="emoji">📝</span>
                            </div>
                            <div class="service-title">Заявления в реестр</div>
                            <div class="service-desc">Составление заявлений для включение в реестр Роскомнадзора</div>
                        </div>

                        <div class="service-card">
                            <div class="service-icon">
                                <span class="emoji">🔐</span>
                            </div>
                            <div class="service-title">Политика конфиденциальности</div>
                            <div class="service-desc">Составление политики конфиденциальности</div>
                        </div>

                        <div class="service-card">
                            <div class="service-icon">
                                <span class="emoji">📑</span>
                            </div>
                            <div class="service-title">Локальные акты</div>
                            <div class="service-desc">Составление локальных актов организации по защите персональных
                                данных</div>
                        </div>

                        <div class="service-card">
                            <div class="service-icon">
                                <span class="emoji">☑️</span>
                            </div>
                            <div class="service-title">Согласия на обработку</div>
                            <div class="service-desc">Составление согласий на обработку персональных данных</div>
                        </div>

                        <div class="service-card">
                            <div class="service-icon">
                                <span class="emoji">⚖️</span>
                            </div>
                            <div class="service-title">Комплексное сопровождение</div>
                            <div class="service-desc">Комплексное юридическое сопровождение организаций и
                                предпринимателей</div>
                        </div>
                    </div>

                    <!-- Дисклеймер -->
                    <div class="disclaimer-box">
                        <div class="disclaimer-icon">
                            <span class="emoji">ℹ️</span>
                        </div>
                        <div class="disclaimer-text">
                            <p>Приведенный выше перечень услуг не является исчерпывающим, если у Вас возникают вопросы,
                                ответы на которые Вы не нашли на нашем сайте, оформите заявку, либо позвоните нам.</p>
                        </div>
                    </div>

                    <!-- Блок о команде -->
                    <div class="team-expertise">
                        <div class="team-icon">
                            <span class="emoji">👥</span>
                        </div>
                        <div class="team-content">
                            <h4>Профессиональная команда</h4>
                            <p>В нашем коллективе работают опытные юристы и адвокаты, которые готовы прийти к Вам на
                                помощь в любой, даже в самой безвыходной ситуации.</p>
                        </div>
                    </div>

                    <!-- Дополнительная информация -->
                    <div class="additional-info">
                        <h4>Важные моменты соблюдения ФЗ №152</h4>
                        <div class="info-points">
                            <div class="info-point">
                                <div class="point-icon">
                                    <span class="emoji">🕐</span>
                                </div>
                                <div class="point-text">
                                    <span class="point-title">Соблюдение сроков</span>
                                    <span class="point-desc">Важно своевременно подавать уведомления и обновлять
                                        документы</span>
                                </div>
                            </div>

                            <div class="info-point">
                                <div class="point-icon">
                                    <span class="emoji">🔍</span>
                                </div>
                                <div class="point-text">
                                    <span class="point-title">Контроль Роскомнадзора</span>
                                    <span class="point-desc">Регулярные проверки соблюдения требований
                                        законодательства</span>
                                </div>
                            </div>

                            <div class="info-point">
                                <div class="point-icon">
                                    <span class="emoji">💡</span>
                                </div>
                                <div class="point-text">
                                    <span class="point-title">Актуализация документов</span>
                                    <span class="point-desc">Регулярное обновление политик и процедур в соответствии с
                                        изменениями</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Блок с призывом к действию -->
                    <div class="cta-block">
                        <h4 class="cta-title">Нужна помощь с соблюдением ФЗ №152?</h4>
                        <p>Не рискуйте получить штраф в 300 000 рублей. Обратитесь к нашим специалистам для комплексного
                            решения вопросов по персональным данным.</p>
                        <div class="cta-buttons">
                            <button class="cta-button">Получить консультацию</button>
                            <a href="tel:+74732954824" class="secondary-button">Заказать услугу</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Дополнительные CSS стили -->
            <style>
                /* Стили для эмодзи */
                .emoji {
                    font-size: 1.2em;
                    line-height: 1;
                }

                /* Стили для предупреждающего баннера */
                .warning-banner {
                    background: linear-gradient(135deg, rgba(227, 30, 36, 0.1), rgba(227, 30, 36, 0.05));
                    border: 2px solid rgba(227, 30, 36, 0.3);
                    padding: 25px;
                    margin: 30px 0;
                    border-radius: 5px;
                    display: flex;
                    align-items: center;
                    position: relative;
                    overflow: hidden;
                }

                .warning-icon {
                    width: 50px;
                    height: 50px;
                    background-color: rgba(227, 30, 36, 0.2);
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    margin-right: 20px;
                    flex-shrink: 0;
                }

                .warning-icon .emoji {
                    font-size: 24px;
                }

                .warning-content {
                    flex: 1;
                }

                .warning-content h4 {
                    font-size: 18px;
                    font-weight: 600;
                    margin: 0 0 10px;
                    color: #e31e24;
                }

                .warning-content p {
                    margin: 0;
                    font-size: 15px;
                }

                .fine-amount {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    margin-left: 20px;
                }

                .fine-amount .emoji {
                    font-size: 32px;
                    margin-bottom: 5px;
                }

                .amount {
                    font-size: 20px;
                    font-weight: 700;
                    color: #e31e24;
                }

                /* Стили для блока определения */
                .definition-box {
                    background-color: rgba(198, 163, 89, 0.08);
                    border-left: 4px solid var(--accent-color);
                    padding: 25px;
                    margin: 30px 0;
                    display: flex;
                    align-items: center;
                    border-radius: 5px;
                }

                .definition-icon {
                    width: 50px;
                    height: 50px;
                    background-color: var(--accent-color);
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    margin-right: 20px;
                    flex-shrink: 0;
                }

                .definition-icon .emoji {
                    font-size: 24px;
                }

                .definition-content h4 {
                    font-size: 18px;
                    font-weight: 600;
                    margin: 0 0 10px;
                    color: var(--accent-color);
                }

                .definition-content p {
                    margin: 0;
                    font-size: 15px;
                }

                /* Стили для списка требований */
                .requirements-list {
                    margin: 40px 0;
                    display: flex;
                    flex-direction: column;
                    gap: 20px;
                }

                .requirement-item {
                    display: flex;
                    align-items: flex-start;
                    background-color: rgba(255, 255, 255, 0.02);
                    border: 1px solid rgba(198, 163, 89, 0.15);
                    padding: 20px;
                    border-radius: 5px;
                    transition: all var(--transition-speed);
                    position: relative;
                    overflow: hidden;
                }

                .requirement-item::before {
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

                .requirement-item:hover {
                    border-color: rgba(198, 163, 89, 0.3);
                    transform: translateX(5px);
                }

                .requirement-item:hover::before {
                    width: 100%;
                    right: auto;
                    left: 0;
                }

                .requirement-icon {
                    width: 40px;
                    height: 40px;
                    background-color: rgba(198, 163, 89, 0.15);
                    border-radius: 8px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    margin-right: 20px;
                    flex-shrink: 0;
                    position: relative;
                    z-index: 1;
                }

                .requirement-icon .emoji {
                    font-size: 20px;
                }

                .requirement-text {
                    position: relative;
                    z-index: 1;
                }

                .requirement-text p {
                    margin: 0;
                    font-size: 15px;
                }

                /* Стили для блока консультаций */
                .consultation-offer {
                    background-color: rgba(255, 255, 255, 0.03);
                    border: 1px solid rgba(198, 163, 89, 0.2);
                    padding: 25px;
                    margin: 30px 0;
                    display: flex;
                    align-items: center;
                    border-radius: 5px;
                }

                .consultation-icon {
                    width: 40px;
                    height: 40px;
                    background-color: rgba(198, 163, 89, 0.15);
                    border-radius: 8px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    margin-right: 20px;
                    flex-shrink: 0;
                }

                .consultation-icon .emoji {
                    font-size: 20px;
                }

                .consultation-text {
                    flex: 1;
                }

                .consultation-text p {
                    margin: 0;
                    font-size: 15px;
                }

                .consultation-contact {
                    width: 40px;
                    height: 40px;
                    background-color: var(--accent-color);
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    margin-left: 20px;
                    flex-shrink: 0;
                }

                .consultation-contact .emoji {
                    font-size: 20px;
                }

                /* Стили для сетки услуг */
                .services-grid {
                    display: grid;
                    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
                    gap: 20px;
                    margin: 40px 0;
                }

                .service-card {
                    background-color: rgba(255, 255, 255, 0.02);
                    border: 1px solid rgba(198, 163, 89, 0.15);
                    padding: 25px 20px;
                    border-radius: 5px;
                    text-align: center;
                    transition: all var(--transition-speed);
                    position: relative;
                    overflow: hidden;
                }

                .service-card::before {
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

                .service-card:hover {
                    transform: translateY(-5px);
                    border-color: rgba(198, 163, 89, 0.3);
                }

                .service-card:hover::before {
                    width: 100%;
                    right: auto;
                    left: 0;
                }

                .service-icon {
                    width: 60px;
                    height: 60px;
                    background-color: rgba(198, 163, 89, 0.15);
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    margin: 0 auto 15px;
                    position: relative;
                    z-index: 1;
                }

                .service-icon .emoji {
                    font-size: 24px;
                }

                .service-title {
                    font-size: 16px;
                    font-weight: 600;
                    margin-bottom: 8px;
                    color: var(--accent-color);
                    position: relative;
                    z-index: 1;
                }

                .service-desc {
                    font-size: 14px;
                    color: var(--text-secondary);
                    position: relative;
                    z-index: 1;
                }

                /* Стили для дисклеймера */
                .disclaimer-box {
                    background-color: rgba(227, 30, 36, 0.05);
                    border-left: 4px solid rgba(227, 30, 36, 0.7);
                    padding: 20px;
                    margin: 30px 0;
                    display: flex;
                    align-items: center;
                    border-radius: 5px;
                }

                .disclaimer-icon {
                    margin-right: 15px;
                    flex-shrink: 0;
                }

                .disclaimer-icon .emoji {
                    font-size: 24px;
                    color: rgba(227, 30, 36, 0.7);
                }

                .disclaimer-text p {
                    margin: 0;
                    font-size: 15px;
                    font-style: italic;
                }

                /* Стили для блока о команде */
                .team-expertise {
                    background-color: rgba(255, 255, 255, 0.03);
                    border: 1px solid rgba(198, 163, 89, 0.2);
                    padding: 30px;
                    margin: 40px 0;
                    display: flex;
                    align-items: flex-start;
                    border-radius: 5px;
                }

                .team-icon {
                    width: 60px;
                    height: 60px;
                    background-color: rgba(198, 163, 89, 0.15);
                    border-radius: 10px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    margin-right: 25px;
                    flex-shrink: 0;
                }

                .team-icon .emoji {
                    font-size: 28px;
                }

                .team-content h4 {
                    font-size: 20px;
                    font-weight: 600;
                    color: var(--accent-color);
                    margin: 0 0 15px;
                }

                .team-content p {
                    margin: 0;
                    color: var(--text-color);
                    font-size: 15px;
                }

                /* Стили для дополнительной информации */
                .additional-info {
                    background-color: rgba(255, 255, 255, 0.02);
                    border: 1px solid rgba(198, 163, 89, 0.2);
                    padding: 30px;
                    margin: 40px 0;
                    border-radius: 5px;
                }

                .additional-info h4 {
                    font-size: 20px;
                    font-weight: 600;
                    color: var(--accent-color);
                    margin: 0 0 25px;
                    text-align: center;
                }

                .info-points {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                    gap: 20px;
                }

                .info-point {
                    display: flex;
                    align-items: flex-start;
                    padding: 15px;
                    background-color: rgba(255, 255, 255, 0.02);
                    border-radius: 5px;
                }

                .point-icon {
                    margin-right: 15px;
                    flex-shrink: 0;
                }

                .point-icon .emoji {
                    font-size: 20px;
                }

                .point-text {
                    display: flex;
                    flex-direction: column;
                }

                .point-title {
                    font-size: 16px;
                    font-weight: 600;
                    color: var(--accent-color);
                    margin-bottom: 5px;
                }

                .point-desc {
                    font-size: 14px;
                    color: var(--text-secondary);
                }

                .cta-buttons {
                    display: flex;
                    justify-content: center;
                    gap: 15px;
                    flex-wrap: wrap;
                    margin-top: 25px;
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
                    .warning-banner {
                        flex-direction: column;
                        text-align: center;
                    }

                    .warning-icon {
                        margin-right: 0;
                        margin-bottom: 15px;
                    }

                    .fine-amount {
                        margin-left: 0;
                        margin-top: 15px;
                    }

                    .definition-box {
                        flex-direction: column;
                        text-align: center;
                    }

                    .definition-icon {
                        margin-right: 0;
                        margin-bottom: 15px;
                    }

                    .requirement-item {
                        flex-direction: column;
                        align-items: center;
                        text-align: center;
                    }

                    .requirement-icon {
                        margin-right: 0;
                        margin-bottom: 15px;
                    }

                    .consultation-offer {
                        flex-direction: column;
                        text-align: center;
                    }

                    .consultation-icon {
                        margin-right: 0;
                        margin-bottom: 15px;
                    }

                    .consultation-contact {
                        margin-left: 0;
                        margin-top: 15px;
                    }

                    .services-grid {
                        grid-template-columns: repeat(2, 1fr);
                    }

                    .team-expertise {
                        flex-direction: column;
                        align-items: center;
                        text-align: center;
                    }

                    .team-icon {
                        margin-right: 0;
                        margin-bottom: 20px;
                    }

                    .info-points {
                        grid-template-columns: 1fr;
                    }

                    .info-point {
                        flex-direction: column;
                        align-items: center;
                        text-align: center;
                    }

                    .point-icon {
                        margin-right: 0;
                        margin-bottom: 15px;
                    }

                    .disclaimer-box {
                        flex-direction: column;
                        align-items: center;
                        text-align: center;
                    }

                    .disclaimer-icon {
                        margin-right: 0;
                        margin-bottom: 15px;
                    }

                    .cta-buttons {
                        flex-direction: column;
                    }
                }

                @media (max-width: 480px) {
                    .services-grid {
                        grid-template-columns: 1fr;
                    }
                }
            </style>
        </div>
    </div>

<?php wp_footer(); ?>
<?php get_footer(); ?>

</body>
</html>
