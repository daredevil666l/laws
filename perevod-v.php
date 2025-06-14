<?php
/**
 * Template Name: perevod-v
 */
get_header();
?>

        <div class="main-image-container">
            <img src="<?php echo get_stylesheet_directory_uri();?>/img/perevod-v-nezhiloe.jpg" alt="Перевод юрист" class="main-image">
        </div>
        <!-- Заголовок и подзаголовок -->
        <div class="hero-content">
            <div class="container">
                <div class="hero-text">
                    <h1 class="main-title">ПЕРЕВОД В НЕЖИЛОЙ ФОНД</h1>
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
            <span class="breadcrumb-current">Перевод в нежилой фонд</span>
        </div>

        <div class="content-sidebar-wrapper">
            <!-- Основной контент -->
            <div class="content-container">
                <div class="article-content">
                    <!-- Главный заголовок -->
                    <h2 class="content-title">Перевод недвижимости в нежилой фонд</h2>

                    <!-- Блок с ценой услуги -->
                    <div class="pricing-box">
                        <div class="price-tag">
                            <span class="price-amount">от 170 000 ₽</span>
                            <span class="price-label">«под ключ»</span>
                        </div>
                        <div class="price-features">
                            <span class="feature-badge">Поэтапная оплата</span>
                            <span class="feature-badge">Полное сопровождение</span>
                        </div>
                    </div>

                    <!-- Инструкция для клиента -->
                    <h3 class="content-subtitle">Чтобы перевести объект (квартиру, дом) в нежилой фонд, Вам необходимо:
                    </h3>

                    <div class="process-steps client-steps">
                        <div class="step">
                            <div class="step-number">01</div>
                            <div class="step-content">
                                <p>Предоставьте данные о объекте.</p>
                            </div>
                        </div>

                        <div class="step">
                            <div class="step-number">02</div>
                            <div class="step-content">
                                <p>По данным о Вашем объекте мы определим возможные сроки и стоимость перевода.</p>
                            </div>
                        </div>

                        <div class="step">
                            <div class="step-number">03</div>
                            <div class="step-content">
                                <p>По договоренности подписываем договор.</p>
                            </div>
                        </div>

                        <div class="step">
                            <div class="step-number">04</div>
                            <div class="step-content">
                                <p>После процедуры перевода, Вы получите соответствующие документы.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Этапы работы компании -->
                    <h3 class="content-subtitle accent">Наша работа заключается в:</h3>

                    <div class="service-stages">
                        <div class="stage">

                            <div class="stage-details">
                                <div class="stage-number">1</div>
                                <div class="stage-text">Проверка документации и помещения жилого фонда перевод которого
                                    планируется.</div>
                            </div>
                        </div>

                        <div class="stage">
                            <div class="stage-details">
                                <div class="stage-number">2</div>
                                <div class="stage-text">Разработка проектов и их согласование.</div>
                            </div>
                        </div>

                        <div class="stage">
                            <div class="stage-details">
                                <div class="stage-number">3</div>
                                <div class="stage-text">Подготовка документов для гос органов, для получения приказа о
                                    переводе.</div>
                            </div>
                        </div>

                        <div class="stage">
                            <div class="stage-details">
                                <div class="stage-number">4</div>
                                <div class="stage-text">Ввод объекта в эксплуатацию.</div>
                            </div>
                        </div>

                        <div class="stage">
                            <div class="stage-details">
                                <div class="stage-number">5</div>
                                <div class="stage-text">Внесение изменений в ЕГРН.</div>
                            </div>
                        </div>

                        <div class="stage">
                            <div class="stage-details">
                                <div class="stage-number">6</div>
                                <div class="stage-text">Получение выписки из ЕГРН на нежилое помещение.</div>
                            </div>
                        </div>
                    </div>

                    <!-- Блок с призывом к действию -->
                    <div class="cta-block">
                        <h4 class="cta-title">Хотите перевести помещение в нежилой фонд?</h4>
                        <p>Оставьте заявку, и наши специалисты проконсультируют вас по возможности перевода вашего
                            объекта недвижимости в нежилой фонд.</p>
                        <button class="cta-button">Оставить заявку</button>
                    </div>
                </div>
            </div>

            <!-- Дополнительные CSS стили -->
            <style>
                /* Стили для блока с ценой */
                .pricing-box {
                    background-color: rgba(198, 163, 89, 0.08);
                    border: 1px solid rgba(198, 163, 89, 0.2);
                    padding: 25px;
                    margin: 30px 0;
                    position: relative;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    flex-wrap: wrap;
                    clip-path: polygon(0 0, 100% 0, 100% 90%, 98% 100%, 0 100%);
                }

                .price-tag {
                    display: flex;
                    flex-direction: column;
                }

                .price-amount {
                    font-size: 36px;
                    font-weight: 700;
                    color: var(--accent-color);
                    line-height: 1;
                }

                .price-label {
                    font-size: 16px;
                    color: var(--text-secondary);
                    margin-top: 5px;
                }

                .price-features {
                    display: flex;
                    flex-wrap: wrap;
                    gap: 10px;
                }

                .feature-badge {
                    background-color: rgba(198, 163, 89, 0.2);
                    color: var(--accent-color);
                    padding: 6px 12px;
                    font-size: 14px;
                    border-radius: 3px;
                    font-weight: 500;
                }

                /* Стили для шагов клиента */
                .process-steps {
                    margin: 40px 0;
                    display: flex;
                    flex-direction: column;
                    gap: 25px;
                }

                .step {
                    display: flex;
                    align-items: flex-start;
                    background-color: rgba(255, 255, 255, 0.03);
                    padding: 20px;
                    border-radius: 5px;
                    transition: all var(--transition-speed);
                    position: relative;
                    overflow: hidden;
                }

                .step::before {
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

                .step:hover::before {
                    width: 100%;
                    right: auto;
                    left: 0;
                }

                .step-number {
                    font-size: 28px;
                    font-weight: 700;
                    color: var(--accent-color);
                    margin-right: 20px;
                    opacity: 0.8;
                    position: relative;
                    z-index: 1;
                }

                .step-content {
                    flex: 1;
                    position: relative;
                    z-index: 1;
                }

                .step-content p {
                    margin: 0;
                    font-size: 16px;
                    color: var(--text-color);
                }

                /* Стили для этапов работы компании */
                .service-stages {
                    margin: 40px 0;
                    display: grid;
                    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
                    gap: 20px;
                }

                .stage {
                    display: flex;
                    align-items: flex-start;
                    background-color: rgba(255, 255, 255, 0.03);
                    padding: 20px;
                    border-radius: 5px;
                    transition: all var(--transition-speed);
                    position: relative;
                    overflow: hidden;
                    height: 100%;
                }

                .stage::before {
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

                .stage:hover::before {
                    width: 100%;
                    right: auto;
                    left: 0;
                }

                .stage-icon {
                    width: 40px;
                    height: 40px;
                    background-color: rgba(198, 163, 89, 0.15);
                    border-radius: 8px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    margin-right: 15px;
                    font-size: 18px;
                    color: var(--accent-color);
                    flex-shrink: 0;
                    position: relative;
                    z-index: 1;
                }

                .stage-details {
                    flex: 1;
                    position: relative;
                    z-index: 1;
                }

                .stage-number {
                    font-size: 14px;
                    font-weight: 700;
                    color: var(--accent-color);
                    margin-bottom: 5px;
                    background-color: rgba(198, 163, 89, 0.1);
                    display: inline-block;
                    width: 22px;
                    height: 22px;
                    border-radius: 50%;
                    text-align: center;
                    line-height: 22px;
                }

                .stage-text {
                    font-size: 15px;
                    color: var(--text-color);
                }

                /* Адаптивные стили */
                @media (max-width: 768px) {
                    .pricing-box {
                        flex-direction: column;
                        align-items: flex-start;
                        gap: 15px;
                    }

                    .service-stages {
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
