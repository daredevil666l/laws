<?php
/**
 * Template Name: voen
 */
get_header();
?>

        <div class="main-image-container">
            <img src="" alt="Военный юрист" class="main-image">
        </div>
        <!-- Заголовок и подзаголовок -->
        <div class="hero-content">
            <div class="container">
                <div class="hero-text">
                    <h1 class="main-title">ВОЕННЫЙ ЮРИСТ</h1>
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
            <span class="breadcrumb-current">Военный юрист</span>
        </div>

        <div class="content-sidebar-wrapper">
            <!-- Основной контент -->
            <div class="content-container">
                <div class="article-content">
                    <!-- Главный заголовок -->
                    <h2 class="content-title">Военный юрист</h2>

                    <!-- Вводный текст -->
                    <p class="text-paragraph">
                        К сожалению и в среде военнослужащих часто возникают правовые споры.
                    </p>

                    <p class="text-paragraph">
                        Разобраться со многими из них Вам помогут юристы компании «Стратегия».
                    </p>

                    <!-- Блок с подходом компании -->
                    <div class="approach-banner">
                        <div class="approach-icon">
                            <span class="fas fa-shield-alt">🛡</span>
                        </div>
                        <div class="approach-text">
                            <p>Мы оказываем юридическую помощь и консультации, помогаем разрешить споры на любой стадии,
                                зачастую без судебного процесса, а если понадобится, будем представлять Ваши интересы в
                                судах.</p>
                        </div>
                    </div>

                    <!-- Услуги -->
                    <h3 class="content-subtitle accent">Услуги, оказываемые для Вас:</h3>

                    <!-- Группа услуг по выплатам -->
                    <div class="services-category">
                        <h4 class="category-title">
                            <i class="fas fa-coins"></i>
                            Страховые и социальные выплаты
                        </h4>
                        <ul class="custom-list">
                            <li>юридическая помощь в получении страховых выплат;</li>
                            <li>юридическая помощь в получении выплат по ранению;</li>
                            <li>консультирование по региональным выплатам;</li>
                            <li>консультирование родственников погибших военнослужащих;</li>
                        </ul>
                    </div>

                    <!-- Группа услуг по реабилитации -->
                    <div class="services-category">
                        <h4 class="category-title">
                            <i class="fas fa-medkit"></i>
                            Реабилитация и правовая поддержка
                        </h4>
                        <ul class="custom-list">
                            <li>юридическая помощь при решении вопросов реабилитации и лечения военнослужащих;</li>
                            <li>юридическое сопровождение при признании умершим, или без вести пропавшим;</li>
                            <li>юридическая помощь призывникам, мобилизованным, участникам СВО;</li>
                        </ul>
                    </div>

                    <!-- Группа услуг по недвижимости -->
                    <div class="services-category">
                        <h4 class="category-title">
                            <i class="fas fa-home"></i>
                            Недвижимость и жилищные вопросы
                        </h4>
                        <ul class="custom-list">
                            <li>сопровождение сделок с недвижимостью по программе Военная ипотека;</li>
                            <li>сопровождение сделок с применением военного сертификата;</li>
                        </ul>
                    </div>

                    <!-- Общие услуги -->
                    <div class="services-category">
                        <h4 class="category-title">
                            <i class="fas fa-gavel"></i>
                            Судебное представительство
                        </h4>
                        <ul class="custom-list">
                            <li>представительство в судах всех инстанций;</li>
                            <li>прочие юридические споры;</li>
                            <li>контроль исполнения судебного решения.</li>
                        </ul>
                    </div>

                    <!-- Дисклеймер -->
                    <div class="disclaimer-box">
                        <div class="disclaimer-icon">
                            <i class="fas fa-info-circle"></i>
                        </div>
                        <div class="disclaimer-text">
                            <p>Приведенный выше перечень услуг по разрешению споров не является исчерпывающим, если у
                                Вас возникают вопросы, ответы на которые Вы не нашли на нашем сайте, оформите заявку,
                                либо позвоните нам.</p>
                        </div>
                    </div>

                    <!-- Блок о команде -->
                    <div class="team-expertise">
                        <div class="team-icon">
                            <span class="fas fa-users-cog">🤝</span>
                        </div>
                        <div class="team-content">
                            <h4>Профессиональная команда</h4>
                            <p>В нашем коллективе работают опытные юристы и адвокаты, которые готовы прийти к Вам на
                                помощь в любой, даже в самой безвыходной ситуации.</p>
                        </div>
                    </div>

                    <!-- Специальная информация для военных -->
                    <div class="military-info">
                        <h4>Особенности военного права</h4>
                        <div class="military-points">
                            <div class="military-point">
                                <div class="point-icon">
                                    <span class="fas fa-clock">🕓</span>
                                </div>
                                <div class="point-text">
                                    <h5>Соблюдение сроков</h5>
                                    <p>Строгие временные рамки для подачи заявлений и обращений</p>
                                </div>
                            </div>

                            <div class="military-point">
                                <div class="point-icon">
                                    <span class="fas fa-file-alt">📃</span>
                                </div>
                                <div class="point-text">
                                    <h5>Специфическая документация</h5>
                                    <p>Знание особенностей военного документооборота</p>
                                </div>
                            </div>

                            <div class="military-point">
                                <div class="point-icon">
                                    <span class="fas fa-balance-scale">📚</span>
                                </div>
                                <div class="point-text">
                                    <h5>Понимание специфики</h5>
                                    <p>Глубокие знания военного законодательства</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Блок с призывом к действию -->
                    <div class="cta-block military-cta">
                        <h4 class="cta-title">Нужна помощь военного юриста?</h4>
                        <p>Мы понимаем специфику военной службы и готовы защитить ваши права. Первая консультация
                            поможет определить стратегию решения вашего вопроса.</p>
                        <div class="cta-buttons">
                            <button class="cta-button">Получить консультацию</button>
                            <a href="tel:+74732954824" class="secondary-button">Позвонить юристу</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Дополнительные CSS стили -->
            <style>
                /* Стили для баннера подхода */
                .approach-banner {
                    background-color: rgba(198, 163, 89, 0.08);
                    display: flex;
                    align-items: center;
                    padding: 25px;
                    margin: 30px 0;
                    border-left: 4px solid var(--accent-color);
                    position: relative;
                    overflow: hidden;
                    border-radius: 5px;
                }

                .approach-banner::before {
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

                .approach-banner:hover::before {
                    width: 100%;
                    right: auto;
                    left: 0;
                }

                .approach-icon {
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

                .approach-text {
                    position: relative;
                    z-index: 1;
                }

                .approach-text p {
                    margin: 0;
                    font-size: 16px;
                    font-weight: 500;
                }

                /* Стили для категорий услуг */
                .services-category {
                    background-color: rgba(255, 255, 255, 0.02);
                    border: 1px solid rgba(198, 163, 89, 0.15);
                    padding: 25px;
                    margin: 25px 0;
                    border-radius: 5px;
                    transition: all var(--transition-speed);
                }

                .services-category:hover {
                    border-color: rgba(198, 163, 89, 0.3);
                    background-color: rgba(255, 255, 255, 0.03);
                }

                .category-title {
                    font-size: 18px;
                    font-weight: 600;
                    color: var(--accent-color);
                    margin: 0 0 15px;
                    display: flex;
                    align-items: center;
                }

                .category-title i {
                    margin-right: 10px;
                    font-size: 20px;
                }

                .services-category .custom-list {
                    margin: 15px 0 0;
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
                    color: rgba(227, 30, 36, 0.7);
                    font-size: 24px;
                    margin-right: 15px;
                    flex-shrink: 0;
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
                    font-size: 28px;
                    color: var(--accent-color);
                    margin-right: 25px;
                    flex-shrink: 0;
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

                /* Стили для военной информации */
                .military-info {
                    background-color: rgba(255, 255, 255, 0.02);
                    border: 1px solid rgba(198, 163, 89, 0.2);
                    padding: 30px;
                    margin: 40px 0;
                    border-radius: 5px;
                }

                .military-info h4 {
                    font-size: 20px;
                    font-weight: 600;
                    color: var(--accent-color);
                    margin: 0 0 25px;
                    text-align: center;
                }

                .military-points {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                    gap: 20px;
                }

                .military-point {
                    display: flex;
                    align-items: flex-start;
                    padding: 15px;
                    background-color: rgba(255, 255, 255, 0.02);
                    border-radius: 5px;
                    transition: all var(--transition-speed);
                }

                .military-point:hover {
                    background-color: rgba(198, 163, 89, 0.05);
                    transform: translateY(-2px);
                }

                .point-icon {
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
                }

                .point-text h5 {
                    font-size: 16px;
                    font-weight: 600;
                    margin: 0 0 5px;
                    color: var(--accent-color);
                }

                .point-text p {
                    margin: 0;
                    font-size: 14px;
                    color: var(--text-secondary);
                }

                /* Стили для военного CTA */
                .military-cta {
                    background: linear-gradient(135deg, rgba(198, 163, 89, 0.1), rgba(198, 163, 89, 0.05));
                    border: 2px solid rgba(198, 163, 89, 0.3);
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
                    .approach-banner {
                        flex-direction: column;
                        text-align: center;
                    }

                    .approach-icon {
                        margin-right: 0;
                        margin-bottom: 15px;
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

                    .military-points {
                        grid-template-columns: 1fr;
                    }

                    .military-point {
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
            </style>
        </div>
    </div>

<?php wp_footer(); ?>
<?php get_footer(); ?>

</body>
</html>
