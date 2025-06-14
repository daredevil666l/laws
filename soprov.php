<?php
/**
 * Template Name: soprov
 */
get_header();
?>

      <div class="main-image-container">
            <img src="<?php echo get_stylesheet_directory_uri();?>/img/26.jpg" alt="Юридическое сопровождение" class="main-image">
        </div>
       <!-- Заголовок и подзаголовок -->
        <div class="hero-content">
            <div class="container">
                <div class="hero-text">
                    <h1 class="main-title">ЮРИДИЧЕСКОЕ СОПРОВОЖДЕИЕ</h1>
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
            <span class="breadcrumb-current">Юридическое сопровождение</span>
        </div>

        <div class="content-sidebar-wrapper">
            <!-- Основной контент -->
            <div class="content-container">
                <div class="article-content">
                    <!-- Главный заголовок -->
                    <h2 class="content-title">Юридический аутсорсинг. Абонентское обслуживание организаций</h2>

                    <!-- Вводный текст -->
                    <p class="text-paragraph">
                        Предлагаем Вам комплекс юридических услуг, обеспечивающих деятельность как организаций так и
                        индивидуальных предпринимателей за абонентскую плату, при которой юридические услуги оказываются
                        целым штатом высокопрофессиональных юристов.
                    </p>

                    <!-- Сравнение подходов -->
                    <div class="comparison-block">
                        <div class="comparison-content">
                            <h4>Команда профессионалов vs штатный юрист</h4>
                            <p>Современным бизнесменам гораздо выгоднее, практичнее и прагматичнее иметь за плечами
                                целую команду юристов профессионалов, которые оказывают услуги по гражданско–правовому
                                договору, нежели содержать одного штатного юриста, к тому же опытный юрист требует
                                достойную оплату.</p>
                        </div>
                    </div>

                    <!-- Информация о тренде -->
                    <div class="trend-info">
                        <div class="trend-icon">
                            <span class="fas fa-chart-line">📈</span>
                        </div>
                        <div class="trend-text">
                            <p>В современных экономических условиях юридический аутсорсинг (абонентское обслуживание)
                                частое явление в сфере малого и среднего бизнеса.</p>
                        </div>
                    </div>

                    <!-- Предложение компании -->
                    <h3 class="content-subtitle">Наше предложение</h3>

                    <p class="text-paragraph">
                        Компания «Стратегия» предлагает абонентское обслуживание физических лиц и организаций. Наше
                        предложение выгодно, если у Вас в штате нет юриста, но периодически возникают проблемы
                        юридического характера — составление отзывов на претензии, возражения на исковые заявления,
                        представительство интересов в судебных инстанциях, правовая экспертиза договоров.
                    </p>

                    <!-- Выгоды абонентского обслуживания -->
                    <h3 class="content-subtitle accent">Выгоды абонентского обслуживания:</h3>

                    <div class="benefits-grid">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <span>💰</span>
                            </div>
                            <div class="benefit-title">Приемлемые цены</div>
                            <div class="benefit-desc">Экономия на содержании штатного юриста</div>
                        </div>

                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <span>✅</span>
                            </div>
                            <div class="benefit-title">Постоянная доступность</div>
                            <div class="benefit-desc">Юристы не болеют и не ходят в отпуск</div>
                        </div>

                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <span>💻</span>
                            </div>
                            <div class="benefit-title">Экономия места</div>
                            <div class="benefit-desc">Не нужно рабочее место</div>
                        </div>

                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <span>🧮</span>
                            </div>
                            <div class="benefit-title">Без доп. взносов</div>
                            <div class="benefit-desc">Не нужно платить ежемесячные отчисления (ЕСП, НДФЛ)</div>
                        </div>

                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <span>⏰</span>
                            </div>
                            <div class="benefit-title">24/7 готовность</div>
                            <div class="benefit-desc">Готовность решать вопросы в выходные и праздничные дни</div>
                        </div>

                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <span>📊</span>
                            </div>
                            <div class="benefit-title">Налоговые льготы</div>
                            <div class="benefit-desc">Снижение налога (при включении юр. услуг в расходы организации)
                            </div>
                        </div>

                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <span>👨‍💼</span>
                            </div>
                            <div class="benefit-title">Узкие специалисты</div>
                            <div class="benefit-desc">Штат узконаправленных специалистов</div>
                        </div>

                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <span>🛡️</span>
                            </div>
                            <div class="benefit-title">Возврат расходов</div>
                            <div class="benefit-desc">Компенсация расходов на услуги при обращении в суд</div>
                        </div>
                    </div>

                    <!-- Заключительная мысль -->
                    <blockquote class="content-quote">
                        Всегда нужно помнить о том, что грамотное юридическое сопровождение Вашей деятельности — залог
                        успешного бизнеса!
                    </blockquote>

                    <!-- Дополнительная информация о процессе -->
                    <div class="process-info">
                        <h4>Как работает абонентское обслуживание</h4>
                        <div class="process-steps">
                            <div class="process-step">
                                <div class="step-number">1</div>
                                <div class="step-content">
                                    <h5>Анализ потребностей</h5>
                                    <p>Определяем объем и специфику ваших юридических задач</p>
                                </div>
                            </div>

                            <div class="process-step">
                                <div class="step-number">2</div>
                                <div class="step-content">
                                    <h5>Выбор тарифа</h5>
                                    <p>Подбираем оптимальный план обслуживания под ваш бизнес</p>
                                </div>
                            </div>

                            <div class="process-step">
                                <div class="step-number">3</div>
                                <div class="step-content">
                                    <h5>Заключение договора</h5>
                                    <p>Оформляем все документы и начинаем сотрудничество</p>
                                </div>
                            </div>

                            <div class="process-step">
                                <div class="step-number">4</div>
                                <div class="step-content">
                                    <h5>Постоянная поддержка</h5>
                                    <p>Решаем все ваши юридические вопросы в рамках договора</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Блок с призывом к действию -->
                    <div class="cta-block">
                        <h4 class="cta-title">Готовы оптимизировать юридические расходы?</h4>
                        <p>Узнайте, как абонентское обслуживание поможет вашему бизнесу сэкономить деньги и получить
                            профессиональную юридическую поддержку.</p>
                        <div class="cta-buttons">
                            <button class="cta-button">Рассчитать стоимость</button>
                            <a href="tel:+74732954824" class="secondary-button">Консультация по тарифам</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Дополнительные CSS стили -->
            <style>
                /* Стили для блока сравнения */
                .comparison-block {
                    background-color: rgba(198, 163, 89, 0.08);
                    border-left: 4px solid var(--accent-color);
                    padding: 25px;
                    margin: 30px 0;
                    display: flex;
                    align-items: center;
                    border-radius: 5px;
                    position: relative;
                    overflow: hidden;
                }

                .comparison-block::before {
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

                .comparison-block:hover::before {
                    width: 100%;
                    right: auto;
                    left: 0;
                }

                .comparison-icon {
                    width: 50px;
                    height: 50px;
                    background-color: var(--accent-color);
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 24px;
                    color: var(--primary-color);
                    margin-right: 20px;
                    flex-shrink: 0;
                    position: relative;
                    z-index: 1;
                }

                .comparison-content {
                    position: relative;
                    z-index: 1;
                }

                .comparison-content h4 {
                    font-size: 18px;
                    font-weight: 600;
                    margin: 0 0 10px;
                    color: var(--accent-color);
                }

                .comparison-content p {
                    margin: 0;
                    font-size: 15px;
                }

                /* Стили для информации о тренде */
                .trend-info {
                    background-color: rgba(255, 255, 255, 0.03);
                    border: 1px solid rgba(198, 163, 89, 0.2);
                    padding: 20px;
                    margin: 25px 0;
                    display: flex;
                    align-items: center;
                    border-radius: 5px;
                }

                .trend-icon {
                    width: 40px;
                    height: 40px;
                    background-color: rgba(198, 163, 89, 0.15);
                    border-radius: 8px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 18px;
                    color: var(--accent-color);
                    margin-right: 15px;
                    flex-shrink: 0;
                }

                .trend-text p {
                    margin: 0;
                    font-size: 16px;
                    font-style: italic;
                }

                /* Стили для сетки преимуществ */
                .benefits-grid {
                    display: grid;
                    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
                    gap: 20px;
                    margin: 40px 0;
                }

                .benefit-card {
                    background-color: rgba(255, 255, 255, 0.02);
                    border: 1px solid rgba(198, 163, 89, 0.15);
                    padding: 25px 20px;
                    border-radius: 5px;
                    text-align: center;
                    transition: all var(--transition-speed);
                    position: relative;
                    overflow: hidden;
                }

                .benefit-card::before {
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

                .benefit-card:hover {
                    transform: translateY(-5px);
                    border-color: rgba(198, 163, 89, 0.3);
                }

                .benefit-card:hover::before {
                    width: 100%;
                    right: auto;
                    left: 0;
                }

                .benefit-icon {
                    width: 60px;
                    height: 60px;
                    background-color: rgba(198, 163, 89, 0.15);
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    margin: 0 auto 15px;
                    font-size: 24px;
                    color: var(--accent-color);
                    position: relative;
                    z-index: 1;
                }

                .benefit-title {
                    font-size: 16px;
                    font-weight: 600;
                    margin-bottom: 8px;
                    color: var(--accent-color);
                    position: relative;
                    z-index: 1;
                }

                .benefit-desc {
                    font-size: 14px;
                    color: var(--text-secondary);
                    position: relative;
                    z-index: 1;
                }

                /* Стили для информации о процессе */
                .process-info {
                    background-color: rgba(255, 255, 255, 0.02);
                    border: 1px solid rgba(198, 163, 89, 0.2);
                    padding: 30px;
                    margin: 40px 0;
                    border-radius: 5px;
                }

                .process-info h4 {
                    font-size: 20px;
                    font-weight: 600;
                    color: var(--accent-color);
                    margin: 0 0 25px;
                    text-align: center;
                }

                .process-steps {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                    gap: 20px;
                }

                .process-step {
                    display: flex;
                    align-items: flex-start;
                    padding: 15px;
                    background-color: rgba(255, 255, 255, 0.02);
                    border-radius: 5px;
                    transition: all var(--transition-speed);
                }

                .process-step:hover {
                    background-color: rgba(198, 163, 89, 0.05);
                    transform: translateY(-2px);
                }

                .step-number {
                    width: 35px;
                    height: 35px;
                    background-color: var(--accent-color);
                    color: var(--primary-color);
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-weight: 700;
                    margin-right: 15px;
                    flex-shrink: 0;
                }

                .step-content h5 {
                    font-size: 16px;
                    font-weight: 600;
                    margin: 0 0 5px;
                    color: var(--accent-color);
                }

                .step-content p {
                    margin: 0;
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
                    .comparison-block {
                        flex-direction: column;
                        text-align: center;
                    }

                    .comparison-icon {
                        margin-right: 0;
                        margin-bottom: 15px;
                    }

                    .trend-info {
                        flex-direction: column;
                        text-align: center;
                    }

                    .trend-icon {
                        margin-right: 0;
                        margin-bottom: 15px;
                    }

                    .benefits-grid {
                        grid-template-columns: repeat(2, 1fr);
                    }

                    .process-steps {
                        grid-template-columns: 1fr;
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

                    .cta-buttons {
                        flex-direction: column;
                    }
                }

                @media (max-width: 480px) {
                    .benefits-grid {
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
