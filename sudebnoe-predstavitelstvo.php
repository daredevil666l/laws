<?php
/**
 * Template Name: sudebnoe-predstavitelstvo
 */
get_header();
?>

      <div class="main-image-container">
            <img src="<?php echo get_stylesheet_directory_uri();?>/img/sudebnoe-predstavitelstvo.jpg" alt="представительство" class="main-image">
        </div>
       <!-- Заголовок и подзаголовок -->
        <div class="hero-content">
            <div class="container">
                <div class="hero-text">
                    <h1 class="main-title">Представительство в суде
                    </h1>
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
        <!-- Хлебные крошки -->
        <div class="breadcrumbs">
            <a href="<?php echo home_url('/'); ?>" class="breadcrumb-link">Юридические услуги</a>
            <span class="breadcrumb-separator">›</span>
            <span class="breadcrumb-current">Представительство в суде</span>
        </div>


        <div class="content-sidebar-wrapper">
            <!-- Основной контент -->
            <div class="content-container">
                <div class="article-content">
                    <!-- Главный заголовок -->
                    <h2 class="content-title">Представительство и защита в суде</h2>

                    <!-- Вводный блок о качестве услуг -->
                    <div class="quality-promise">
                        <h4>Только качественная юридическая помощь</h4>
                        <p>Мы оказываем только качественную юридическую помощь. При обращении в нашу компанию, в ходе
                            первой встречи Вас проконсультирует опытный юрист, который даст оценку перспективам Вашей
                            ситуации и предупредит о возможных рисках.</p>
                    </div>

                    <!-- О специалистах -->
                    <p class="text-paragraph">
                        В компании «Стратегия» работают только опытные адвокаты и юристы Воронежа. Представительство и
                        защита Ваших интересов в любом суде будет обеспечена опытным юристом, который уже сталкивался с
                        подобными делами.
                    </p>

                    <!-- Призыв к действию -->
                    <!-- Обновленный contact-banner с уникальным классом -->
                    <div class="contact-banner">
                        <div class="contact-icon">
                            <span class="emoji"><i class="fi fi-sr-phone-call"></i></span>
                        </div>
                        <div class="contact-text">
                            <p>Чтобы специалисты компании «Стратегия» представляли ваши интересы в суде или если Вам
                                требуется консультация — звоните по телефонам, также Вы можете оставить заявку в форме.
                            </p>
                        </div>
                        <div class="contact-action">
                            <button class="callback-btn2 contact-banner-btn" onclick="openCallbackModal()">
                                Заказать звонок
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <!-- <path d="M6 3L11 8L6 13" stroke="currentColor" stroke-width="2" -->
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <style>
                        /* ===== ОБНОВЛЕННЫЙ CONTACT-BANNER С КНОПКОЙ ===== */

                        .contact-banner {
                            display: flex;
                            align-items: center;
                            gap: 20px;
                            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
                            border: 2px solid rgba(227, 30, 36, 0.1);
                            border-radius: 15px;
                            padding: 25px 30px;
                            margin: 40px 0;
                            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
                            position: relative;
                            overflow: hidden;
                        }

                        .contact-banner::before {
                            content: '';
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 4px;
                            background: linear-gradient(90deg, var(--accent-color), var(--accent-light));
                        }

                        .contact-icon {
                            flex-shrink: 0;
                            width: 60px;
                            height: 60px;
                            background: linear-gradient(135deg, rgba(227, 30, 36, 0.1), rgba(227, 30, 36, 0.05));
                            border-radius: 15px;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            font-size: 28px;
                            animation: pulse 2s infinite;
                        }

                        @keyframes pulse {

                            0%,
                            100% {
                                transform: scale(1);
                            }

                            50% {
                                transform: scale(1.05);
                            }
                        }

                        .contact-text {
                            flex: 1;
                            margin: 0;
                        }

                        .contact-text p {
                            margin: 0;
                            font-size: 16px;
                            line-height: 1.6;
                            color: var(--text-secondary);
                            font-weight: 400;
                        }

                        .contact-action {
                            flex-shrink: 0;
                            margin-left: 20px;
                        }

                        /* Кнопка "Заказать звонок" */
                        .callback-btn2 {
                            display: inline-flex;
                            align-items: center;
                            gap: 10px;
                            background: linear-gradient(135deg, var(--accent-color), var(--accent-light));
                            color: white;
                            border: none;
                            padding: 14px 28px;
                            border-radius: 10px;
                            font-size: 16px;
                            font-weight: 600;
                            text-decoration: none;
                            cursor: pointer;
                            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
                            box-shadow: 0 4px 15px rgba(227, 30, 36, 0.3);
                            position: relative;
                            overflow: hidden;
                            text-transform: uppercase;
                            letter-spacing: 0.5px;
                        }

                        .callback-btn2::before {
                            content: '';
                            position: absolute;
                            top: 0;
                            left: -100%;
                            width: 100%;
                            height: 100%;
                            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
                            transition: left 0.5s ease;
                        }

                        .callback-btn2:hover::before {
                            left: 100%;
                        }

                        .callback-btn2:hover {
                            background: linear-gradient(135deg, var(--accent-light), var(--accent-color));
                            transform: translateY(-2px);
                            box-shadow: 0 8px 25px rgba(227, 30, 36, 0.4);
                        }

                        .callback-btn2:active {
                            transform: translateY(0);
                            box-shadow: 0 4px 15px rgba(227, 30, 36, 0.3);
                        }

                        .callback-btn2 svg {
                            transition: transform 0.3s ease;
                            flex-shrink: 0;
                        }

                        .callback-btn2:hover svg {
                            transform: translateX(3px);
                        }

                        /* Мобильная версия */
                        @media (max-width: 768px) {
                            .contact-banner {
                                flex-direction: column;
                                align-items: stretch;
                                gap: 20px;
                                padding: 25px 20px;
                                text-align: center;
                            }

                            .contact-icon {
                                align-self: center;
                                width: 50px;
                                height: 50px;
                                font-size: 24px;
                            }

                            .contact-text p {
                                font-size: 15px;
                                text-align: center;
                            }

                            .contact-action {
                                margin-left: 0;
                                align-self: center;
                            }

                            .callback-btn2 {
                                width: 100%;
                                max-width: 280px;
                                justify-content: center;
                                padding: 12px 24px;
                                font-size: 15px;
                            }
                        }

                        @media (max-width: 480px) {
                            .contact-banner {
                                padding: 20px 15px;
                                margin: 30px 0;
                            }

                            .contact-icon {
                                width: 45px;
                                height: 45px;
                                font-size: 22px;
                            }

                            .contact-text p {
                                font-size: 14px;
                            }

                            .callback-btn2 {
                                padding: 10px 20px;
                                font-size: 14px;
                            }
                        }

                        /* ===== ПРИНУДИТЕЛЬНОЕ ОТОБРАЖЕНИЕ КНОПКИ В CONTACT-BANNER ===== */

                        /* Убеждаемся что кнопка .callback-btn2 всегда видна */
                        .contact-banner .callback-btn2 {
                            display: inline-flex !important;
                            visibility: visible !important;
                            opacity: 1 !important;
                            pointer-events: auto !important;
                            position: relative !important;
                            z-index: 1000 !important;
                        }

                        /* Специально для мобильных - кнопка должна быть видна */
                        @media (max-width: 768px) {
                            .contact-banner .callback-btn2 {
                                display: flex !important;
                                visibility: visible !important;
                                opacity: 1 !important;
                                pointer-events: auto !important;
                                width: 100% !important;
                                max-width: 280px !important;
                                justify-content: center !important;
                                margin: 0 auto !important;
                            }
                        }

                        @media (max-width: 480px) {
                            .contact-banner .callback-btn2 {
                                display: flex !important;
                                width: 100% !important;
                                max-width: 250px !important;
                            }
                        }

                        /* Исключение из общих правил скрытия кнопок */
                        .contact-banner .callback-btn2:not(.mobile-callback-btn-auto) {
                            display: inline-flex !important;
                        }

                        /* Если есть правила скрывающие все кнопки - исключаем нашу */
                        @media (max-width: 768px) {

                            .contact-banner button,
                            .contact-banner .callback-btn2,
                            .contact-banner a[class*="btn"] {
                                display: flex !important;
                                visibility: visible !important;
                                opacity: 1 !important;
                            }
                        }
                    </style>
                    <!-- Подробности о представительстве -->
                    <h3 class="content-subtitle">Профессиональное представительство в суде</h3>

                    <p class="text-paragraph">
                        Юристы нашей компании обеспечивают профессиональную защиту прав в суде физических и юридических
                        лиц. Для того чтобы достичь максимально желаемого результата, необходимо чтобы представительство
                        в суде осуществлял прекрасно ориентирующийся в законодательстве специалист, который знает все
                        нюансы и способен использовать наиболее эффективные приемы в рамках рассматриваемого дела.
                    </p>

                    <p class="text-paragraph">
                        Представление интересов в судах осуществляется на всех стадиях судебного процесса в арбитраже, а
                        также в судах общей юрисдикции. Опытные юристы сначала проводят первичную консультацию,
                        предварительно ознакомившись с имеющимися документами по делу.
                    </p>

                    <!-- Досудебное урегулирование -->
                    <div class="info-box">
                        <h4 class="info-title">Досудебное урегулирование</h4>
                        <p>Нередко, до представления интересов в суде, выполнение процедуры досудебного урегулирования
                            спора даёт положительный результат, так стороны могут прийти к мировому соглашению, наши
                            специалисты максимально нацелены на отстаивание Ваших интересов и дальнейшее сотрудничество.
                        </p>
                    </div>

                    <!-- Категории дел с кнопками -->
                    <h3 class="content-subtitle accent">Категории дел, по которым мы предоставляем защиту в суде:</h3>

                    <div class="cases-buttons-grid">
                        <a href="<?php echo get_page_link(16);?>" class="case-button">
                            <div class="case-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <span class="case-title">Трудовые споры</span>
                            <span class="case-arrow">→</span>
                        </a>

                        <a href="<?php echo get_page_link(26);?>" class="case-button">
                            <div class="case-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M17 21V19C17 17.9 16.1 17 15 17H9C7.9 17 7 17.9 7 19V21M12 13C14.21 13 16 11.21 16 9C16 6.79 14.21 5 12 5C9.79 5 8 6.79 8 9C8 11.21 9.79 13 12 13Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <span class="case-title">Семейные споры</span>
                            <span class="case-arrow">→</span>
                        </a>

                        <a href="<?php echo get_page_link(10);?>" class="case-button">
                            <div class="case-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M3 9L12 2L21 9V20C21 20.5304 20.7893 21.0391 20.4142 21.4142C20.0391 21.7893 19.5304 22 19 22H5C4.46957 22 3.96086 21.7893 3.58579 21.4142C3.21071 21.0391 3 20.5304 3 20V9Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <span class="case-title">Жилищные споры</span>
                            <span class="case-arrow">→</span>
                        </a>

                        <a href="<?php echo get_page_link(41);?>" class="case-button">
                            <div class="case-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M3 3V21H21V3H3ZM12 6L16 10L12 14L8 10L12 6Z" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <span class="case-title">Арбитражные споры</span>
                            <span class="case-arrow">→</span>
                        </a>

                        <a href="<?php echo get_page_link(28);?>" class="case-button">
                            <div class="case-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M14 2H6C5.46957 2 4.96086 2.21071 4.58579 2.58579C4.21071 2.96086 4 3.46957 4 4V20C4 20.5304 4.21071 21.0391 4.58579 21.4142C4.96086 21.7893 5.46957 22 6 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V8L14 2Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <span class="case-title">Наследственные споры</span>
                            <span class="case-arrow">→</span>
                        </a>

                        <a href="<?php echo get_page_link(24);?>" class="case-button">
                            <div class="case-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M9 12L11 14L15 10M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <span class="case-title">Защита прав потребителей</span>
                            <span class="case-arrow">→</span>
                        </a>

                        <a href="<?php echo get_page_link(51);?>" class="case-button">
                            <div class="case-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M8 9L12 12L8 15M16 9L12 12L16 15" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <span class="case-title">Другие ситуации</span>
                            <span class="case-arrow">→</span>
                        </a>
                    </div>


                    <!-- Дополнительная информация -->
                    <div class="cases-info">
                        <p class="cases-note">
                            <strong>Не нашли свою категорию?</strong> Мы работаем с любыми видами споров.
                            Свяжитесь с нами для консультации по вашему делу.
                        </p>
                    </div>
                    <style>
                        /* ===== КНОПКИ КАТЕГОРИЙ ДЕЛ ===== */

                        .cases-buttons-grid {
                            display: grid;
                            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
                            gap: 20px;
                            margin: 30px 0 40px 0;
                        }

                        .case-button {
                            display: flex;
                            align-items: center;
                            gap: 15px;
                            padding: 20px 25px;
                            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
                            border: 2px solid rgba(227, 30, 36, 0.1);
                            border-radius: 12px;
                            text-decoration: none;
                            color: var(--text-color);
                            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
                            position: relative;
                            overflow: hidden;
                            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
                        }

                        .case-button::before {
                            content: '';
                            position: absolute;
                            top: 0;
                            left: -100%;
                            width: 100%;
                            height: 100%;
                            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
                            transition: left 0.5s ease;
                        }

                        .case-button:hover::before {
                            left: 100%;
                        }

                        .case-button:hover {
                            background: linear-gradient(135deg, var(--accent-color), var(--accent-light));
                            color: white;
                            border-color: var(--accent-color);
                            transform: translateY(-3px);
                            box-shadow: 0 8px 25px rgba(227, 30, 36, 0.3);
                            text-decoration: none;
                        }

                        /* Иконка */
                        .case-icon {
                            width: 48px;
                            height: 48px;
                            background: linear-gradient(135deg, rgba(227, 30, 36, 0.1), rgba(227, 30, 36, 0.05));
                            border-radius: 10px;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            color: var(--accent-color);
                            transition: all 0.3s ease;
                            flex-shrink: 0;
                        }

                        .case-button:hover .case-icon {
                            background: rgba(255, 255, 255, 0.2);
                            color: white;
                            transform: scale(1.1);
                        }

                        /* Название категории */
                        .case-title {
                            flex: 1;
                            font-size: 16px;
                            font-weight: 600;
                            line-height: 1.3;
                            text-transform: capitalize;
                        }

                        /* Стрелка */
                        .case-arrow {
                            font-size: 20px;
                            font-weight: bold;
                            color: var(--accent-color);
                            transition: all 0.3s ease;
                            flex-shrink: 0;
                        }

                        .case-button:hover .case-arrow {
                            color: white;
                            transform: translateX(5px);
                        }

                        /* Дополнительная информация */
                        .cases-info {
                            margin-top: 40px;
                            padding: 25px;
                            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
                            border-radius: 12px;
                            border-left: 4px solid var(--accent-color);
                        }

                        .cases-note {
                            margin: 0;
                            font-size: 16px;
                            line-height: 1.6;
                            color: var(--text-secondary);
                            text-align: center;
                        }

                        .cases-note strong {
                            color: var(--accent-color);
                            font-weight: 700;
                        }

                        /* Мобильная версия */
                        @media (max-width: 768px) {
                            .cases-buttons-grid {
                                grid-template-columns: 1fr;
                                gap: 15px;
                                margin: 25px 0 30px 0;
                            }

                            .case-button {
                                padding: 18px 20px;
                                gap: 12px;
                            }

                            .case-icon {
                                width: 40px;
                                height: 40px;
                            }

                            .case-title {
                                font-size: 15px;
                            }

                            .case-arrow {
                                font-size: 18px;
                            }

                            .cases-info {
                                margin-top: 30px;
                                padding: 20px;
                            }

                            .cases-note {
                                font-size: 14px;
                            }
                        }

                        @media (max-width: 480px) {
                            .case-button {
                                padding: 15px 18px;
                                gap: 10px;
                            }

                            .case-icon {
                                width: 36px;
                                height: 36px;
                            }

                            .case-title {
                                font-size: 14px;
                            }

                            .case-arrow {
                                font-size: 16px;
                            }
                        }

                        /* Анимация появления */
                        .case-button {
                            opacity: 0;
                            transform: translateY(20px);
                            animation: fadeInUp 0.6s ease forwards;
                        }

                        .case-button:nth-child(1) {
                            animation-delay: 0.1s;
                        }

                        .case-button:nth-child(2) {
                            animation-delay: 0.2s;
                        }

                        .case-button:nth-child(3) {
                            animation-delay: 0.3s;
                        }

                        .case-button:nth-child(4) {
                            animation-delay: 0.4s;
                        }

                        .case-button:nth-child(5) {
                            animation-delay: 0.5s;
                        }

                        .case-button:nth-child(6) {
                            animation-delay: 0.6s;
                        }

                        .case-button:nth-child(7) {
                            animation-delay: 0.7s;
                        }

                        .case-button:nth-child(8) {
                            animation-delay: 0.8s;
                        }

                        @keyframes fadeInUp {
                            to {
                                opacity: 1;
                                transform: translateY(0);
                            }
                        }
                    </style>
                    <!-- Подготовка к суду -->
                    <h3 class="content-subtitle">Подготовка к судебному заседанию</h3>

                    <p class="text-paragraph">
                        Перед судебным заседанием прорабатывается детальный план процесса, сбор необходимой информации,
                        которая может повлиять на судебное решение, составляется исковое заявление и возражение на
                        исковое заявление, подаются ходатайства, апелляции, надзорные (кассационные) жалобы, проводится
                        полная юридическая экспертиза всех документов.
                    </p>

                    <!-- Тактика и конфиденциальность -->
                    <div class="strategy-section">
                        <div class="strategy-block">
                            <h4>Гибкая тактика ведения дела</h4>
                            <p>Юристами и адвокатами нашей компании прорабатывается оптимальный механизм представления
                                интересов клиента, в ходе заседаний нередко приходится менять тактику из-за вновь
                                выявленных, в ходе разбирательства, обстоятельств.</p>
                        </div>

                        <div class="confidentiality-block">
                            <h4>Конфиденциальность</h4>
                            <p>Представление интересов в суде, в обязательном порядке, предусматривает соблюдение
                                конфиденциальности – мы гарантируем, строгое неразглашение любой информации о
                                деятельности клиента, которая стала известна нам в ходе работы, третьим лицам.</p>
                        </div>
                    </div>

                    <!-- Заключение -->
                    <blockquote class="content-quote">
                        Представление интересов в суде представителями компании «Стратегия» — это
                        высококвалифицированная помощь опытных специалистов в защите прав клиента, которая позволит Вам
                        достичь максимально выгодного результата.
                    </blockquote>

                    <!-- Призыв к действию -->
                    <div class="cta-block">
                        <div class="cta-content">
                            <h4 class="cta-title">Нужно представительство в суде?</h4>
                            <p>Доверьте защиту своих интересов профессионалам! Наши опытные юристы обеспечат эффективное
                                представительство на всех стадиях судебного процесса.</p>
                            <div class="cta-buttons">
                                <button class="cta-button">Получить консультацию</button>
                                <a href="tel:+74732954824" class="secondary-button">Позвонить юристу</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Дополнительные CSS стили -->
            <style>
                /* Стили для блока о качестве */
                .quality-promise {
                    background-color: rgba(198, 163, 89, 0.08);
                    border-left: 4px solid var(--accent-color);
                    padding: 25px;
                    margin: 30px 0;
                    border-radius: 5px;
                    position: relative;
                    overflow: hidden;
                }

                .quality-promise::before {
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

                .quality-promise:hover::before {
                    width: 100%;
                    right: auto;
                    left: 0;
                }

                .quality-promise h4 {
                    font-size: 18px;
                    font-weight: 600;
                    color: var(--accent-color);
                    margin: 0 0 15px;
                    position: relative;
                    z-index: 1;
                }

                .quality-promise p {
                    margin: 0;
                    font-size: 15px;
                    position: relative;
                    z-index: 1;
                }

                /* Стили для контактного баннера */
                .contact-banner {
                    background-color: rgba(255, 255, 255, 0.03);
                    border: 1px solid rgba(198, 163, 89, 0.2);
                    padding: 25px;
                    margin: 30px 0;
                    display: flex;
                    align-items: center;
                    border-radius: 5px;
                }

                .contact-icon {
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

                .contact-icon .emoji {
                    font-size: 24px;
                    color: #fff;
                }

                .contact-icon .emoji .fi {
                    display: flex;
                    align-items: center;
                }

                .contact-text p {
                    margin: 0;
                    font-size: 15px;
                    font-weight: 500;
                }

                /* Стили для сетки категорий дел */
                .cases-grid {
                    display: grid;
                    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
                    gap: 15px;
                    margin: 30px 0;
                }

                .case-item {
                    background-color: rgba(255, 255, 255, 0.02);
                    border: 1px solid rgba(198, 163, 89, 0.15);
                    padding: 15px 20px;
                    border-radius: 5px;
                    text-align: center;
                    font-size: 14px;
                    font-weight: 500;
                    color: var(--text-color);
                    transition: all var(--transition-speed);
                    position: relative;
                    overflow: hidden;
                }

                .case-item::before {
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

                .case-item:hover {
                    border-color: rgba(198, 163, 89, 0.3);
                    color: var(--accent-color);
                    transform: translateY(-3px);
                }

                .case-item:hover::before {
                    width: 100%;
                    right: auto;
                    left: 0;
                }

                /* Стили для секции стратегии */
                .strategy-section {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                    gap: 25px;
                    margin: 40px 0;
                }

                .strategy-block,
                .confidentiality-block {
                    background-color: rgba(255, 255, 255, 0.02);
                    border: 1px solid rgba(198, 163, 89, 0.15);
                    padding: 25px;
                    border-radius: 5px;
                    transition: all var(--transition-speed);
                    position: relative;
                    overflow: hidden;
                }

                .strategy-block::before,
                .confidentiality-block::before {
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

                .strategy-block:hover,
                .confidentiality-block:hover {
                    border-color: rgba(198, 163, 89, 0.3);
                    transform: translateY(-5px);
                }

                .strategy-block:hover::before,
                .confidentiality-block:hover::before {
                    width: 100%;
                    right: auto;
                    left: 0;
                }

                .strategy-block h4,
                .confidentiality-block h4 {
                    font-size: 18px;
                    font-weight: 600;
                    color: var(--accent-color);
                    margin: 0 0 15px;
                    position: relative;
                    z-index: 1;
                }

                .strategy-block p,
                .confidentiality-block p {
                    margin: 0;
                    font-size: 15px;
                    line-height: 1.5;
                    position: relative;
                    z-index: 1;
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
                    .contact-banner {
                        flex-direction: column;
                        text-align: center;
                    }

                    .contact-icon {
                        margin-right: 0;
                        margin-bottom: 15px;
                    }

                    .cases-grid {
                        grid-template-columns: repeat(2, 1fr);
                    }

                    .strategy-section {
                        grid-template-columns: 1fr;
                    }

                    .cta-buttons {
                        flex-direction: column;
                    }
                }

                @media (max-width: 480px) {
                    .cases-grid {
                        grid-template-columns: 1fr;
                    }

                    .quality-promise {
                        padding: 20px 15px;
                    }

                    .contact-banner {
                        padding: 20px 15px;
                    }

                    .strategy-block,
                    .confidentiality-block {
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
