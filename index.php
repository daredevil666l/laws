<?php
/**
 * Template Name: home
 */
get_header();
?>

    <div class="main-image-container">
        <img src="<?php echo get_stylesheet_directory_uri();?>/img/image (2).png" alt="Главная" class="main-image">
    </div>
    <!-- Заголовок и подзаголовок -->
        <div class="hero-content">
            <div class="container">
                <div class="hero-text">
                    <h1 class="main-title">Юридическая фирма "Стратегия"
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
                            <div class="benefit-text">Сопровождаем на всех этапах от выбора до подписания сделки
                            </div>
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
        <!-- Секция юридических услуг -->
        <section class="legal-services-section">
            <div class="container">
                <div class="services-content">
                    <div class="services-text">
                        <!-- <div class="services-badge">
                            <span class="badge-text">Юридические услуги</span>
                        </div> -->
                        <h2 class="services-title">Быстрая юридическая помощь</h2>
                        <p class="services-description">
                            У нас каждая проблема решается коллективом юристов!
                            Юридическая помощь по гражданским, арбитражным,
                            уголовным и другим делам
                        </p>
                        <button class="services-cta-button">
                            <span>Получить консультацию</span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>

                    <div class="services-visual">
                        <div class="visual-container">
                            <div class="visual-image">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/img1.png" alt="Юридические услуги" class="main-visual">
                            </div>
                            <div class="visual-decorations">
                                <div class="decoration-circle decoration-1"></div>
                                <div class="decoration-circle decoration-2"></div>
                                <div class="decoration-line decoration-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Обновленный блок партнеров с тройным дублированием -->
        <section class="partners-section">
            <div class="container">
                <div class="partners-header">
                    <h2 class="partners-title">Оказываем юридическое сопровождение</h2>
                    <p class="partners-subtitle">Наши партнеры доверяют нам решение самых сложных правовых вопросов</p>
                </div>

                <div class="partners-slider">
                    <div class="partners-track">
                        <!-- ЛЕВАЯ копия для прокрутки влево -->
                        <div class="partner-item">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/l1.png" alt="Партнер 1" class="partner-logo">
                        </div>
                        <div class="partner-item">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/l2.png" alt="Партнер 2" class="partner-logo">
                        </div>
                        <div class="partner-item">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/l3.png" alt="Партнер 3" class="partner-logo">
                        </div>
                        <div class="partner-item">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/l4.png" alt="Партнер 4" class="partner-logo">
                        </div>
                        <div class="partner-item">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/l5.png" alt="Партнер 5" class="partner-logo">
                        </div>
                        <div class="partner-item">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/l6.jpg" alt="Партнер 6" class="partner-logo">
                        </div>
                        <div class="partner-item">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/l7.png" alt="Партнер 7" class="partner-logo">
                        </div>
                        <div class="partner-item">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/l8.png" alt="Партнер 8" class="partner-logo">
                        </div>
                        <div class="partner-item">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/l9.png" alt="Партнер 9" class="partner-logo">
                        </div>
                        <div class="partner-item">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/l10.png" alt="Партнер 10" class="partner-logo">
                        </div>

                        <!-- ОСНОВНАЯ копия -->
                        <div class="partner-item">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/l1.png" alt="Партнер 1" class="partner-logo">
                        </div>
                        <div class="partner-item">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/l2.png" alt="Партнер 2" class="partner-logo">
                        </div>
                        <div class="partner-item">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/l3.png" alt="Партнер 3" class="partner-logo">
                        </div>
                        <div class="partner-item">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/l4.png" alt="Партнер 4" class="partner-logo">
                        </div>
                        <div class="partner-item">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/l5.png" alt="Партнер 5" class="partner-logo">
                        </div>
                        <div class="partner-item">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/l6.jpg" alt="Партнер 6" class="partner-logo">
                        </div>
                        <div class="partner-item">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/l7.png" alt="Партнер 7" class="partner-logo">
                        </div>
                        <div class="partner-item">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/l8.png" alt="Партнер 8" class="partner-logo">
                        </div>
                        <div class="partner-item">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/l9.png" alt="Партнер 9" class="partner-logo">
                        </div>
                        <div class="partner-item">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/l10.png" alt="Партнер 10" class="partner-logo">
                        </div>

                        <!-- ПРАВАЯ копия для прокрутки вправо -->
                        <div class="partner-item">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/l1.png" alt="Партнер 1" class="partner-logo">
                        </div>
                        <div class="partner-item">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/l2.png" alt="Партнер 2" class="partner-logo">
                        </div>
                        <div class="partner-item">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/l3.png" alt="Партнер 3" class="partner-logo">
                        </div>
                        <div class="partner-item">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/l4.png" alt="Партнер 4" class="partner-logo">
                        </div>
                        <div class="partner-item">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/l5.png" alt="Партнер 5" class="partner-logo">
                        </div>
                        <div class="partner-item">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/l6.jpg" alt="Партнер 6" class="partner-logo">
                        </div>
                        <div class="partner-item">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/l7.png" alt="Партнер 7" class="partner-logo">
                        </div>
                        <div class="partner-item">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/l8.png" alt="Партнер 8" class="partner-logo">
                        </div>
                        <div class="partner-item">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/l9.png" alt="Партнер 9" class="partner-logo">
                        </div>
                        <div class="partner-item">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/l10.png" alt="Партнер 10" class="partner-logo">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Секция юридических услуг -->
        <section class="services-section">
            <div class="container">
                <!-- Заголовок секции -->
                <div class="section-header">
                    <h2 class="section-title">Юридические услуги</h2>
                    <div class="section-underline"></div>
                </div>

                <!-- Переключатель категорий -->
                <div class="services-tabs">
                    <button class="tab-button active" data-tab="citizens">
                        Услуги для физических лиц
                    </button>
                    <button class="tab-button" data-tab="business">
                        Услуги для юридических лиц
                    </button>
                </div>
                <div class="services-container">
                    <!-- Карточки услуг для граждан -->
                    <div class="services-grid active" data-content="citizens">
                        <div class="service-card">
                            <div class="card-image">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/zemelnye-spory.jpg" alt="Земельные споры">
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">Земельные споры</h3>
                                <p class="card-description">Профессиональная помощь в решении земельных конфликтов</p>
                                <a href="<?php echo get_page_link(8);?>" class="card-link">
                                    <span>Подробнее</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="service-card">
                            <div class="card-image">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/juridicheskaja-konsultacija.jpg" alt="Военный юрист">
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">Военный юрист</h3>
                                <p class="card-description">Защита прав военнослужащих и их семей</p>
                                <a href="<?php echo get_page_link(14);?>" class="card-link">
                                    <span>Подробнее</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="service-card">
                            <div class="card-image">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/strahovye-spory.jpg" alt="Страховой юрист">
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">Страховой юрист</h3>
                                <p class="card-description">Споры со страховыми компаниями, КАСКО, ОСАГО</p>
                                <a href="<?php echo get_page_link(18);?>" class="card-link">
                                    <span>Подробнее</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="service-card">
                            <div class="card-image">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/trudovie-spori.jpg" alt="Трудовой юрист">
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">Трудовой юрист</h3>
                                <p class="card-description">Защита трудовых прав и интересов работников</p>
                                <a href="<?php echo get_page_link(16);?>" class="card-link">
                                    <span>Подробнее</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="service-card">
                            <div class="card-image">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/doma.jpg" alt="Жилищный юрист">
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">Жилищный юрист</h3>
                                <p class="card-description">Решение жилищных вопросов и споров</p>
                                <a href="<?php echo get_page_link(10);?>" class="card-link">
                                    <span>Подробнее</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="service-card">
                            <div class="card-image">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/perevod-v-nezhiloe.jpg" alt="Перевод недвижимости">
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">Перевод недвижимости в нежилой фонд</h3>
                                <p class="card-description">Помощь в переводе жилых помещений</p>
                                <a href="<?php echo get_page_link(22);?>" class="card-link">
                                    <span>Подробнее</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="service-card">
                            <div class="card-image">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/Houses.webp" alt="Юрист по недвижимости">
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">Юрист по недвижимости</h3>
                                <p class="card-description">Сделки с недвижимостью, оформление документов</p>
                                <a href="<?php echo get_page_link(12);?>" class="card-link">
                                    <span>Подробнее</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="service-card">
                            <div class="card-image">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/zachita-prav.jpg" alt="Защита прав потребителей">
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">Юридическая консультация</h3>
                                <p class="card-description">Юридическая помощь в сложных ситуациях</p>
                                <a href="<?php echo get_page_link(51);?>" class="card-link">
                                    <span>Подробнее</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="service-card">
                            <div class="card-image">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/dosudebnoe-uregulirovanie.jpg" alt="Защита прав потребителей">
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">Досудебное урегулирование споров</h3>
                                <a href="<?php echo get_page_link(45);?>" class="card-link">
                                    <span>Подробнее</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="service-card">
                            <div class="card-image">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/sudebnoe-predstavitelstvo.jpg" alt="Защита прав потребителей">
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">Представительство в суде</h3>
                                <p class="card-description">Представление и защита прав и интересов по искам</p>
                                <a href="<?php echo get_page_link(71);?>" class="card-link">
                                    <span>Подробнее</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="service-card">
                            <div class="card-image">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/ispolnitelnoe-proizvodstvo.jpg" alt="Защита прав потребителей">
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">Исполнительное производство</h3>
                                <a href="<?php echo get_page_link(49);?>" class="card-link">
                                    <span>Подробнее</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="service-card">
                            <div class="card-image">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/zachita-prav.jpg" alt="Защита прав потребителей">
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">Защита прав потребителей</h3>
                                <p class="card-description">Возврат товаров, компенсации, споры с продавцами</p>
                                <a href="<?php echo get_page_link(24);?>" class="card-link">
                                    <span>Подробнее</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>


                    <!-- Карточки услуг для бизнеса -->
                    <div class="services-grid" data-content="business">
                        <div class="service-card">
                            <div class="card-image">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/likvidacija-ooo-ip.jpg" alt="Ликвидация организаций">
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">Ликвидация организаций</h3>
                                <p class="card-description">Полное юридическое сопровождение ликвидации</p>
                                <a href="<?php echo get_page_link(63);?>" class="card-link">
                                    <span>Подробнее</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="service-card">
                            <div class="card-image">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/arbitr.jpg" alt="Арбитражные споры">
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">Арбитраж. Арбитражные споры</h3>
                                <p class="card-description">Представительство в арбитражных судах</p>
                                <a href="<?php echo get_page_link(41);?>" class="card-link">
                                    <span>Подробнее</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="service-card">
                            <div class="card-image">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/juridicheskaja-konsultacija.jpg" alt="Персональные данные">
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">Персональные данные</h3>
                                <p class="card-description">Соблюдение требований закона о персональных данных</p>
                                <a href="<?php echo get_page_link(67);?>" class="card-link">
                                    <span>Подробнее</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="service-card">
                            <div class="card-image">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/sudebnoe-predstavitelstvo.jpg" alt="Юридическое сопровождение">
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">Юридическое сопровождение</h3>
                                <p class="card-description">Комплексная правовая поддержка бизнеса</p>
                                <a href="<?php echo get_page_link(69);?>" class="card-link">
                                    <span>Подробнее</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="service-card">
                            <div class="card-image">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/zachita-prav.jpg" alt="Защита прав потребителей">
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">Юридическая консультация</h3>
                                <p class="card-description">Юридическая помощь в сложных ситуациях</p>
                                <a href="<?php echo get_page_link(51);?>" class="card-link">
                                    <span>Подробнее</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="service-card">
                            <div class="card-image">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/dosudebnoe-uregulirovanie.jpg" alt="Защита прав потребителей">
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">Досудебное урегулирование споров</h3>
                                <a href="<?php echo get_page_link(45);?>" class="card-link">
                                    <span>Подробнее</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="service-card">
                            <div class="card-image">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/sudebnoe-predstavitelstvo.jpg" alt="Защита прав потребителей">
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">Представительство в суде</h3>
                                <p class="card-description">Представление и защита прав и интересов по искам</p>
                                <a href="<?php echo get_page_link(71);?>" class="card-link">
                                    <span>Подробнее</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="service-card">
                            <div class="card-image">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/ispolnitelnoe-proizvodstvo.jpg" alt="Защита прав потребителей">
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">Исполнительное производство</h3>
                                <a href="<?php echo get_page_link(49);?>" class="card-link">
                                    <span>Подробнее</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="service-card">
                            <div class="card-image">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/juridicheskaja-konsultacija.jpg" alt="Защита прав потребителей">
                            </div>
                            <div class="card-content">
                                <h3 class="card-title">Регистрация товарных знаков</h3>
                                <a href="<?php echo get_page_link(61);?>" class="card-link">
                                    <span>Подробнее</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Кнопка "Показать больше" -->
                <div class="show-more-container">
                    <button class="show-more-btn">
                        <span>Показать все услуги</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
            </div>
        </section>


        <!-- Секция "Как мы работаем" -->
        <section class="how-we-work-section">
            <div class="container">
                <!-- Заголовок секции -->
                <div class="section-header">
                    <h2 class="section-title">Как мы работаем</h2>
                    <div class="section-underline"></div>
                </div>

                <!-- Основной контент -->
                <div class="work-process">
                    <!-- Центральное изображение -->
                    <div class="center-image">
                        <div class="image-container">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/img1.jpg" alt="Весы правосудия" class="scales-image">
                        </div>
                    </div>

                    <!-- Этапы работы -->
                    <div class="work-steps">
                        <!-- Этап 1 -->
                        <div class="work-step step-1" data-step="01">
                            <div class="step-number">01.</div>
                            <div class="step-content">
                                <h3 class="step-title">Консультация<br>юриста</h3>
                                <div class="step-divider"></div>
                                <p class="step-description">Приезжайте в офис для общения с юристом и рассмотрения
                                    документов</p>
                            </div>
                        </div>

                        <!-- Этап 2 -->
                        <div class="work-step step-2" data-step="02">
                            <div class="step-number">02.</div>
                            <div class="step-content">
                                <h3 class="step-title">Разработка<br>стратегии</h3>
                                <div class="step-divider"></div>
                                <p class="step-description">Документы передаются юристу и адвокату для разработки
                                    стратегии</p>
                            </div>
                        </div>

                        <!-- Этап 3 -->
                        <div class="work-step step-3" data-step="03">
                            <div class="step-number">03.</div>
                            <div class="step-content">
                                <h3 class="step-title">Подготовка<br>документов</h3>
                                <div class="step-divider"></div>
                                <p class="step-description">Ваши документы передаются в технический отдел</p>
                            </div>
                        </div>

                        <!-- Этап 4 -->
                        <div class="work-step step-4" data-step="04">
                            <div class="step-number">04.</div>
                            <div class="step-content">
                                <h3 class="step-title">Судебные<br>действия</h3>
                                <div class="step-divider"></div>
                                <p class="step-description">В суде клиента представляет адвокат и выигрывает дело</p>
                            </div>
                        </div>
                    </div>

                    <!-- Соединительные линии -->
                    <div class="connecting-lines">
                        <div class="line line-1"></div>
                        <div class="line line-2"></div>
                        <div class="line line-3"></div>
                        <div class="line line-4"></div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Секция FAQ -->
        <section class="faq-section">
            <div class="container">
                <div class="faq-content">
                    <!-- Левая часть с изображением -->
                    <div class="faq-visual">
                        <div class="faq-header">
                            <h2 class="faq-title">Часто задаваемые <span class="accent-word">вопросы</span></h2>
                            <div class="title-underline"></div>
                        </div>

                        <div class="faq-image">
                            <div class="image-container">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/hammer.png" alt="Молоток судьи" class="gavel-image">
                            </div>
                            <div class="image-decoration">
                                <div class="decoration-circle"></div>
                                <div class="decoration-line"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Правая часть с вопросами -->
                    <div class="faq-questions">
                        <!-- Вопрос 1 -->
                        <div class="faq-item">
                            <div class="faq-question" data-faq="1">
                                <h3 class="question-text">В каких случаях лицо может быть освобождено от уголовной
                                    ответственности?</h3>
                                <div class="question-icon">
                                    <img class='red-arrow' src="<?php echo get_stylesheet_directory_uri();?>/img/down-right-arrow.png">
                                </div>
                            </div>
                            <div class="faq-answer" data-answer="1">
                                <div class="answer-content">
                                    <p><strong>Лицо, впервые совершившее преступление небольшой или средней тяжести,
                                            может быть освобождено от уголовной ответственности, если:</strong></p>
                                    <ul>
                                        <li>После совершения преступления добровольно явилось с повинной</li>
                                        <li>Способствовало раскрытию преступления</li>
                                        <li>Возместило причиненный ущерб или иным образом загладило вред</li>
                                        <li>Вследствие деятельного раскаяния перестало быть общественно опасным</li>
                                    </ul>

                                    <p><strong>Также освобождение возможно при примирении:</strong></p>
                                    <p>Лицо, впервые совершившее преступление небольшой или средней тяжести, может быть
                                        освобождено, если оно примирилось с потерпевшим и загладило причиненный вред.
                                    </p>

                                    <p><strong>Сроки давности:</strong></p>
                                    <ul>
                                        <li>2 года — для преступлений небольшой тяжести</li>
                                        <li>6 лет — для преступлений средней тяжести</li>
                                        <li>10 лет — для тяжких преступлений</li>
                                        <li>15 лет — для особо тяжких преступлений</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Вопрос 2 -->
                        <div class="faq-item">
                            <div class="faq-question" data-faq="2">
                                <h3 class="question-text">Какие документы необходимо приложить к исковому заявлению?
                                </h3>
                                <div class="question-icon">
                                    <img class='red-arrow' src="<?php echo get_stylesheet_directory_uri();?>/img/down-right-arrow.png">
                                </div>
                            </div>
                            <div class="faq-answer" data-answer="2">
                                <div class="answer-content">
                                    <p><strong>К исковому заявлению прилагаются:</strong></p>
                                    <ul>
                                        <li>Копии заявления в соответствии с количеством ответчиков и третьих лиц</li>
                                        <li>Документ, подтверждающий уплату государственной пошлины</li>
                                        <li>Доверенность или иной документ, удостоверяющие полномочия представителя
                                            истца</li>
                                        <li>Документы, подтверждающие обстоятельства, на которых истец основывает свои
                                            требования</li>
                                        <li>Копии документов для ответчиков и третьих лиц, если копии у них отсутствуют
                                        </li>
                                        <li>Текст опубликованного нормативного правового акта в случае его оспаривания
                                        </li>
                                        <li>Доказательство выполнения обязательного досудебного порядка урегулирования
                                            спора</li>
                                        <li>Расчет взыскиваемой или оспариваемой денежной суммы с копиями для всех
                                            участников</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Вопрос 3 -->
                        <div class="faq-item">
                            <div class="faq-question" data-faq="3">
                                <h3 class="question-text">Что входит в состав наследства?</h3>
                                <div class="question-icon">
                                    <img class='red-arrow' src="<?php echo get_stylesheet_directory_uri();?>/img/down-right-arrow.png">
                                </div>
                            </div>
                            <div class="faq-answer" data-answer="3">
                                <div class="answer-content">
                                    <p><strong>В состав наследства входят:</strong></p>
                                    <ul>
                                        <li>Принадлежавшие наследодателю на день открытия наследства вещи</li>
                                        <li>Иное имущество, в том числе имущественные права и обязанности</li>
                                    </ul>

                                    <p><strong>НЕ входят в состав наследства:</strong></p>
                                    <ul>
                                        <li>Права и обязанности, неразрывно связанные с личностью наследодателя</li>
                                        <li>Право на алименты</li>
                                        <li>Право на возмещение вреда, причиненного жизни или здоровью гражданина</li>
                                        <li>Права и обязанности, переход которых в порядке наследования не допускается
                                            законом</li>
                                        <li>Личные неимущественные права и другие нематериальные блага</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- Блок с отзывами -->
    <section class="reviews-section">
        <div class="container">
            <div class="reviews-wrapper">
                <!-- Левая часть с текстом -->
                <div class="reviews-content">
                    <div class="reviews-text">
                        <h2 class="reviews-title">Отзывы наших клиентов</h2>
                        <!-- <p class="reviews-subtitle">Более 500 довольных клиентов уже оценили качество наших юридических
                            услуг</p> -->

                        <div class="reviews-benefits">
                            <div class="review-benefit">
                                <div class="benefit-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"
                                            fill="currentColor" />
                                    </svg>
                                </div>
                                <span>Высокие оценки на Яндекс.Картах</span>
                            </div>

                            <div class="review-benefit">
                                <div class="benefit-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M9 12L11 14L15 10M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <span>Проверенные отзывы клиентов</span>
                            </div>

                            <div class="review-benefit">
                                <div class="benefit-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M7 8H17M7 12H17M7 16H17M3 5C3 3.89543 3.89543 3 5 3H19C20.1046 3 21 3.89543 21 5V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V5Z"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <span>Реальные истории успеха</span>
                            </div>
                        </div>

                        <p class="reviews-cta">Ознакомьтесь с отзывами наших клиентов на Яндекс.Картах и убедитесь в
                            профессионализме компании "Стратегия"</p>

                        <a href="https://yandex.ru/maps/org/strategiya/140346523559/" target="_blank"
                            class="reviews-button">
                            Смотреть все отзывы
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M6 3L11 8L6 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Правая часть с виджетом -->
                <div class="reviews-widget">
                    <div class="widget-container">
                        <div
                            style="width:560px;height:800px;overflow:hidden;position:relative;border-radius:12px;box-shadow:0 8px 32px rgba(0,0,0,0.1);">
                            <iframe
                                style="width:100%;height:100%;border:1px solid #e6e6e6;border-radius:12px;box-sizing:border-box"
                                src="https://yandex.ru/maps-reviews-widget/140346523559?comments"></iframe>
                            <a href="https://yandex.ru/maps/org/strategiya/140346523559/" target="_blank"
                                style="box-sizing:border-box;text-decoration:none;color:#b3b3b3;font-size:10px;font-family:YS Text,sans-serif;padding:0 20px;position:absolute;bottom:8px;width:100%;text-align:center;left:0;overflow:hidden;text-overflow:ellipsis;display:block;max-height:14px;white-space:nowrap;padding:0 16px;box-sizing:border-box">Стратегия
                                на карте Воронежа — Яндекс Карты</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php wp_footer(); ?>
<?php get_footer(); ?>

</body>
</html>
