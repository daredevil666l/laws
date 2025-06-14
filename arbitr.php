<?php
/**
 * Template Name: arbitr
 */
get_header();?>

        <style>
            /* ===== ИСПРАВЛЕНИЕ ПЕРЕНОСОВ СТРОК НА СТРАНИЦЕ АРБИТРАЖА ===== */

            .procedure-card {
                background: white;
                border-radius: 12px;
                padding: 25px;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
                border: 1px solid rgba(227, 30, 36, 0.1);
                margin-bottom: 20px;
                overflow: hidden;
                /* Предотвращаем выход контента за границы */
            }

            .procedure-header {
                display: flex;
                justify-content: space-between;
                align-items: flex-start;
                /* Изменено с center на flex-start */
                margin-bottom: 20px;
                gap: 15px;
                /* Добавляем отступ между элементами */
            }

            .procedure-header h3 {
                flex: 1;
                /* Заголовок занимает доступное пространство */
                margin: 0;
                font-size: 20px;
                font-weight: 700;
                color: var(--text-color);
                line-height: 1.3;
                /* Управление переносами */
                word-wrap: break-word;
                overflow-wrap: break-word;
                hyphens: auto;
                -webkit-hyphens: auto;
                -ms-hyphens: auto;
            }

            .procedure-icon {
                flex-shrink: 0;
                /* Иконка не сжимается */
                width: 50px;
                height: 50px;
                background: linear-gradient(135deg, var(--accent-color), var(--accent-light));
                border-radius: 10px;
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                font-size: 20px;
            }

            .procedure-content {
                width: 100%;
            }

            .sum-info {
                display: flex;
                flex-direction: column;
                gap: 15px;
            }

            .sum-item {
                display: flex;
                justify-content: space-between;
                align-items: flex-start;
                /* Выравнивание по верху */
                gap: 15px;
                /* Отступ между label и value */
                padding: 12px 0;
                border-bottom: 1px solid rgba(227, 30, 36, 0.1);
                /* Управление переносами для всего блока */
                word-wrap: break-word;
                overflow-wrap: break-word;
            }

            .sum-item:last-child {
                border-bottom: none;
            }

            .sum-label {
                flex: 1;
                /* Занимает доступное пространство */
                font-size: 15px;
                font-weight: 500;
                color: var(--text-secondary);
                line-height: 1.4;
                /* Правильные переносы */
                word-wrap: break-word;
                overflow-wrap: break-word;
                hyphens: auto;
                -webkit-hyphens: auto;
                -ms-hyphens: auto;
                /* Предотвращаем слишком узкие строки */
                min-width: 120px;
            }

            .sum-value {
                flex-shrink: 0;
                /* Значение не сжимается */
                font-size: 16px;
                font-weight: 700;
                color: var(--accent-color);
                text-align: right;
                line-height: 1.4;
                /* Предотвращаем разрыв валютных значений */
                white-space: nowrap;
                /* Если все же нужен перенос для длинных значений */
                overflow-wrap: break-word;
            }

            /* Мобильная версия */
            @media (max-width: 768px) {
                .procedure-card {
                    padding: 20px;
                    margin-bottom: 15px;
                }

                .procedure-header {
                    flex-direction: column;
                    align-items: flex-start;
                    gap: 15px;
                }

                .procedure-header h3 {
                    font-size: 18px;
                    margin-bottom: 0;
                }

                .procedure-icon {
                    align-self: center;
                    /* Центрируем иконку */
                    width: 45px;
                    height: 45px;
                    font-size: 18px;
                }

                .sum-item {
                    flex-direction: column;
                    align-items: flex-start;
                    gap: 8px;
                    padding: 10px 0;
                }

                .sum-label {
                    min-width: unset;
                    font-size: 14px;
                }

                .sum-value {
                    align-self: flex-end;
                    /* Выравниваем значение по правому краю */
                    font-size: 15px;
                }
            }

            @media (max-width: 480px) {
                .procedure-card {
                    padding: 15px;
                }

                .procedure-header h3 {
                    font-size: 16px;
                }

                .procedure-icon {
                    width: 40px;
                    height: 40px;
                    font-size: 16px;
                }

                .sum-label {
                    font-size: 13px;
                }

                .sum-value {
                    font-size: 14px;
                }
            }

            /* Дополнительные правила для предотвращения странных переносов */
            .procedure-card * {
                /* Глобальные правила переносов для всех элементов */
                word-wrap: break-word;
                overflow-wrap: break-word;
            }

            /* Специально для длинных текстов */
            .sum-label,
            .sum-value {
                /* Принудительные переносы для очень длинных слов */
                word-break: break-word;
                /* Но сохраняем целостность коротких фраз */
                white-space: normal;
            }

            /* Исключение для валютных обозначений - не разрывать */
            .sum-value {
                word-break: keep-all;
                /* Для валют и чисел */
            }

            /* Если текст все равно выходит за границы */
            .procedure-content {
                min-width: 0;
                /* Позволяет flex-элементам сжиматься */
                overflow-wrap: anywhere;
                /* Переносы в любом месте если необходимо */
            }
        </style>

        <div class="main-image-container">
            <img src="<?php echo get_stylesheet_directory_uri();?>/img/arbitr.jpg" alt="Арбитраж" class="main-image">
        </div>
        <!-- Заголовок и подзаголовок -->
        <div class="hero-content">
            <div class="container">
                <div class="hero-text">
                    <h1 class="main-title">АРБИТРАЖ. АРБИТРАЖНЫЕ СПОРЫ</h1>
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
            <span class="breadcrumb-current">Арбитражные споры</span>
        </div>

        <div class="content-sidebar-wrapper">
            <!-- Основной контент -->
            <!-- Секция арбитражных споров -->
            <section class="arbitration-section">
                <div class="container">
                    <!-- Заголовок и введение -->
                    <div class="section-header">
                        <h1 class="section-title">Арбитражные споры</h1>
                        <div class="title-underline"></div>
                        <p class="section-intro">
                            Профессиональная защита ваших интересов в арбитражных судах.
                            Опытные юристы и адвокаты для решения споров любой сложности.
                        </p>
                    </div>

                    <!-- Основной контент -->
                    <div class="arbitration-content">
                        <!-- Сложность арбитражных споров -->
                        <div class="content-block">
                            <h2 class="block-title">Почему арбитражные споры считаются сложными?</h2>
                            <div class="text-content">
                                <p>
                                    Арбитражные споры часто относят к категории наиболее сложных споров, так как не
                                    платят по договорам часто по причине того, что есть определенные основания, или же
                                    недовольства, и поэтому для решения таких споров необходима помощь опытного
                                    арбитражного юриста (адвоката), способного оказать качественную правовую поддержку.
                                </p>
                                <div class="highlight-box">
                                    <i class="fas fa-exclamation-triangle"></i>
                                    <p>Арбитражный суд рассматривает споры, в которых фигурируют <strong>крупные
                                            денежные суммы</strong>, важные, а порой и решающие для бизнеса.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Досудебное урегулирование -->
                        <div class="content-block">
                            <h2 class="block-title">Досудебное урегулирование споров</h2>
                            <div class="text-content">
                                <p>
                                    Достаточно часто получается избежать суда, путем привлечения юриста для переговоров,
                                    или же ведения претензионной работы. В этом случае задача юриста — обосновано
                                    разъяснить о последствиях и дополнительных тратах, которые понесет проигравшая
                                    сторона и убедить в необходимости решения спора без суда.
                                </p>

                                <div class="advantages-grid">
                                    <div class="advantage-item">
                                        <div class="advantage-icon">
                                            <i class="fi fi-sr-handshake"></i>
                                        </div>
                                        <div class="advantage-content">
                                            <h4>Переговоры</h4>
                                            <p>Профессиональное ведение переговоров с контрагентами</p>
                                        </div>
                                    </div>

                                    <div class="advantage-item">
                                        <div class="advantage-icon">
                                            <i class="fi fi-ss-search-alt"></i>
                                        </div>
                                        <div class="advantage-content">
                                            <h4>Претензионная работа</h4>
                                            <p>Составление и направление обоснованных претензий</p>
                                        </div>
                                    </div>

                                    <div class="advantage-item">
                                        <div class="advantage-icon">
                                            <i class="fi fi-ss-money-bill-wave"></i>
                                        </div>
                                        <div class="advantage-content">
                                            <h4>Экономия средств</h4>
                                            <p>Избежание судебных расходов и длительных процессов</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Судебная стратегия -->
                        <div class="content-block">
                            <h2 class="block-title">Стратегия судебного процесса</h2>
                            <div class="text-content">
                                <p>
                                    Если же судебный процесс неизбежен, то очень важно чтобы адвокат по арбитражным
                                    делам, при решении арбитражного дела, выбрал правильную тактику, стратегия которой
                                    вырабатывается в ходе ознакомления с материалами дела и важно знать все тонкости.
                                </p>
                            </div>
                        </div>

                        <!-- Порядки рассмотрения -->
                        <div class="content-block">
                            <h2 class="block-title">Порядки рассмотрения арбитражных споров</h2>
                            <div class="procedures-info">
                                <p class="procedures-intro">В зависимости от суммы спора возможны следующие варианты
                                    рассмотрения арбитражных споров:</p>

                                <div class="procedures-grid">
                                    <div class="procedure-card">
                                        <div class="procedure-header">
                                            <h3>Упрощенный порядок</h3>
                                            <div class="procedure-icon">
                                                <i class="fi fi-sr-forward-fast"></i>
                                            </div>
                                        </div>
                                        <div class="procedure-content">
                                            <div class="sum-info">
                                                <div class="sum-item">
                                                    <span class="sum-label">Для юридических лиц:</span>
                                                    <span class="sum-value">до 800 000 ₽</span>
                                                </div>
                                                <div class="sum-item">
                                                    <span class="sum-label">Для ИП:</span>
                                                    <span class="sum-value">до 400 000 ₽</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="procedure-card">
                                        <div class="procedure-header">
                                            <h3>Общий порядок</h3>
                                            <div class="procedure-icon">
                                                <i class="fi fi-sr-balance-scale-left"></i>
                                            </div>
                                        </div>
                                        <div class="procedure-content">
                                            <div class="sum-info">
                                                <div class="sum-item">
                                                    <span class="sum-label">Для юридических лиц:</span>
                                                    <span class="sum-value">свыше 800 000 ₽</span>
                                                </div>
                                                <div class="sum-item">
                                                    <span class="sum-label">Для ИП:</span>
                                                    <span class="sum-value">свыше 400 000 ₽</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="additional-info">
                                    <i class="fas fa-info-circle"></i>
                                    <p>Если вынесен судебный приказ, то его оспорить не сложно и тем самым перевести
                                        дело в рассмотрение общим порядком.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Опыт компании -->
                        <div class="content-block experience-block">
                            <h2 class="block-title">Опыт компании «Стратегия»</h2>
                            <div class="text-content">
                                <p>
                                    Арбитражные юристы и адвокаты Воронежа, работающие в компании «Стратегия» имеют
                                    богатый опыт, опираясь на который, при изучении материалов Вашего дела, способны с
                                    высокой вероятностью спрогнозировать каким образом можно достичь наиболее
                                    эффективного результата в кратчайшие сроки.
                                </p>

                                <div class="benefits-list">
                                    <div class="benefit-item">
                                        <i class="fas fa-shield-alt"></i>
                                        <span>Защита материальных интересов</span>
                                    </div>
                                    <div class="benefit-item">
                                        <i class="fas fa-chart-line-down"></i>
                                        <span>Сокращение финансовых рисков</span>
                                    </div>
                                    <div class="benefit-item">
                                        <i class="fas fa-coins"></i>
                                        <span>Избавление от непредвиденных затрат</span>
                                    </div>
                                    <div class="benefit-item">
                                        <i class="fas fa-trophy"></i>
                                        <span>Безупречный профессионализм</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Стоимость услуг -->
                        <div class="content-block pricing-block">
                            <h2 class="block-title">Стоимость услуг</h2>
                            <div class="text-content">
                                <p>
                                    Когда дело переходит в арбитраж цена вопроса имеет большое значение. Юристы нашей
                                    компании при участии в арбитраже стоимость услуг придерживают на среднерыночном
                                    уровне, при этом качеством своей работы мы по праву гордимся!
                                </p>

                                <div class="pricing-highlight">
                                    <div class="pricing-content">
                                        <h3>Среднерыночные цены</h3>
                                        <p>Высокое качество услуг по разумной стоимости</p>
                                    </div>
                                    <div class="pricing-icon">
                                        <i class="fi fi-br-ruble-sign"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Призыв к действию -->
                    <div class="cta-section">
                        <div class="cta-content">
                            <h2 class="cta-title">Нужен арбитражный адвокат?</h2>
                            <p class="cta-description">
                                Юристы и адвокаты компании «Стратегия» защитят ваши материальные интересы, сократят
                                финансовые риски, избавят от непредвиденных затрат. Услуги наших специалистов помогут
                                решить спор любой сложности!
                            </p>
                            <div class="cta-buttons">
                                <button class="cta-button primary">
                                    <span>Получить консультацию</span>
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                                <a href="tel:+74732954824" class="cta-button secondary">
                                    <i class="fas fa-phone"></i>
                                    <span>Позвонить сейчас</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <style>
                /* Секция арбитражных споров */
                .arbitration-section {
                    padding: 80px 0;
                    background: var(--primary-color);
                    position: relative;
                }

                .arbitration-section::before {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="arbitration-pattern" width="60" height="60" patternUnits="userSpaceOnUse"><circle cx="30" cy="30" r="1" fill="%23e31e24" opacity="0.05"/></pattern></defs><rect width="100" height="100" fill="url(%23arbitration-pattern)"/></svg>');
                    pointer-events: none;
                }

                /* Заголовок секции */
                .section-header {
                    text-align: center;
                    margin-bottom: 60px;
                    position: relative;
                    z-index: 1;
                }

                .section-title {
                    font-size: 48px;
                    font-weight: 700;
                    color: var(--text-color);
                    margin: 0 0 20px;
                    line-height: 1.2;
                }

                .title-underline {
                    width: 100px;
                    height: 4px;
                    background: linear-gradient(90deg, var(--accent-color), var(--accent-light));
                    margin: 0 auto 30px;
                    border-radius: 2px;
                }

                .section-intro {
                    font-size: 20px;
                    color: var(--text-secondary);
                    max-width: 700px;
                    margin: 0 auto;
                    line-height: 1.6;
                }

                /* Основной контент */
                .arbitration-content {
                    position: relative;
                    z-index: 1;
                }

                .content-block {
                    margin-bottom: 60px;
                    background: var(--primary-color);
                    border-radius: 12px;
                    padding: 40px;
                    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
                    border: 1px solid rgba(227, 30, 36, 0.1);
                    transition: all var(--transition-speed) ease;
                    position: relative;
                    overflow: hidden;
                }

                .content-block::before {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: -100%;
                    width: 100%;
                    height: 100%;
                    background: linear-gradient(90deg, transparent, rgba(227, 30, 36, 0.03), transparent);
                    transition: left 0.6s ease;
                    z-index: 0;
                }

                .content-block:hover::before {
                    left: 100%;
                }

                .content-block:hover {
                    border-color: var(--accent-color);
                    box-shadow: 0 8px 30px rgba(227, 30, 36, 0.1);
                    transform: translateY(-5px);
                }

                .block-title {
                    font-size: 28px;
                    font-weight: 600;
                    color: var(--accent-color);
                    margin: 0 0 25px;
                    position: relative;
                    z-index: 1;
                }

                .text-content {
                    position: relative;
                    z-index: 1;
                }

                .text-content p {
                    font-size: 16px;
                    line-height: 1.7;
                    color: var(--text-color);
                    margin: 0 0 20px;
                }

                .text-content p:last-child {
                    margin-bottom: 0;
                }

                /* Выделенные блоки */
                .highlight-box {
                    display: flex;
                    align-items: flex-start;
                    gap: 15px;
                    background: rgba(227, 30, 36, 0.05);
                    border-left: 4px solid var(--accent-color);
                    padding: 20px;
                    border-radius: 8px;
                    margin: 25px 0;
                }

                .highlight-box i {
                    color: var(--accent-color);
                    font-size: 20px;
                    margin-top: 2px;
                    flex-shrink: 0;
                }

                .highlight-box p {
                    margin: 0;
                    font-size: 16px;
                    color: var(--text-color);
                }

                /* Сетка преимуществ */
                .advantages-grid {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                    gap: 25px;
                    margin-top: 30px;
                }

                .advantage-item {
                    display: flex;
                    align-items: flex-start;
                    gap: 15px;
                    padding: 20px;
                    /* background: var(--secondary-color); */
                    border-radius: 8px;
                    transition: all var(--transition-speed) ease;
                }

                .advantage-item:hover {
                    background: rgba(227, 30, 36, 0.05);
                    transform: translateY(-3px);
                }

                .advantage-icon {
                    width: 50px;
                    height: 50px;
                    background: linear-gradient(135deg, var(--accent-color), var(--accent-light));
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    flex-shrink: 0;
                }

                .advantage-icon i {
                    color: var(--primary-color);
                    font-size: 20px;
                }

                .advantage-content h4 {
                    font-size: 16px;
                    font-weight: 600;
                    color: var(--text-color);
                    margin: 0 0 5px;
                }

                .advantage-content p {
                    font-size: 14px;
                    color: var(--text-secondary);
                    margin: 0;
                }

                /* Процедуры рассмотрения */
                .procedures-info {
                    margin-top: 20px;
                }

                .procedures-intro {
                    font-size: 16px;
                    color: var(--text-color);
                    margin-bottom: 30px;
                }

                .procedures-grid {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                    gap: 30px;
                    margin-bottom: 30px;
                }

                .procedure-card {
                    background: var(--secondary-color);
                    border-radius: 12px;
                    overflow: hidden;
                    border: 2px solid transparent;
                    transition: all var(--transition-speed) ease;
                }

                .procedure-card:hover {
                    border-color: var(--accent-color);
                    transform: translateY(-5px);
                    box-shadow: 0 10px 25px rgba(227, 30, 36, 0.15);
                }

                .procedure-header {
                    color: #fff;
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    padding: 25px;
                    background: linear-gradient(135deg, var(--accent-color), var(--accent-light));
                    color: var(--primary-color);
                    border-radius: 10px;
                }

                .procedure-header h3 {
                    color: #fff;
                    font-size: 20px;
                    font-weight: 600;
                    margin: 0;
                }

                .procedure-icon {
                    width: 40px;
                    height: 40px;
                    background: rgba(255, 255, 255, 0.2);
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }

                .procedure-icon i {
                    font-size: 18px;
                }

                .procedure-content {
                    padding: 25px;
                }

                .sum-info {
                    display: flex;
                    flex-direction: column;
                    gap: 15px;
                }

                .sum-item {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    padding: 12px 0;
                    border-bottom: 1px solid rgba(227, 30, 36, 0.1);
                }

                .sum-item:last-child {
                    border-bottom: none;
                }

                .sum-label {
                    font-size: 14px;
                    color: var(--text-secondary);
                }

                .sum-value {
                    font-size: 16px;
                    font-weight: 600;
                    color: var(--accent-color);
                }

                .additional-info {
                    display: flex;
                    align-items: flex-start;
                    gap: 12px;
                    background: rgba(227, 30, 36, 0.05);
                    padding: 20px;
                    border-radius: 8px;
                    border-left: 4px solid var(--accent-color);
                }

                .additional-info i {
                    color: var(--accent-color);
                    font-size: 18px;
                    margin-top: 2px;
                    flex-shrink: 0;
                }

                .additional-info p {
                    margin: 0;
                    font-size: 15px;
                    color: var(--text-color);
                }

                /* Блок опыта */
                .experience-block {
                    background: linear-gradient(135deg, rgba(227, 30, 36, 0.05), rgba(255, 58, 64, 0.02));
                }

                /* .benefits-list {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                    gap: 20px;
                    margin-top: 25px;
                } */

                /* .benefit-item {
                    display: flex;
                    align-items: center;
                    gap: 12px;
                    padding: 15px;
                    background: var(--primary-color);
                    border-radius: 8px;
                    transition: all var(--transition-speed) ease;
                }

                .benefit-item:hover {
                    transform: translateX(5px);
                    box-shadow: 0 5px 15px rgba(227, 30, 36, 0.1);
                }

                .benefit-item i {
                    color: var(--accent-color);
                    font-size: 16px;
                    flex-shrink: 0;
                }

                .benefit-item span {
                    font-size: 14px;
                    color: var(--text-color);
                    font-weight: 500;
                } */

                /* Блок стоимости */
                .pricing-block {
                    border: 2px solid var(--accent-color);
                }

                .pricing-highlight {
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    background: rgba(227, 30, 36, 0.05);
                    padding: 25px;
                    border-radius: 8px;
                    margin-top: 25px;
                }

                .pricing-content h3 {
                    font-size: 20px;
                    font-weight: 600;
                    color: var(--accent-color);
                    margin: 0 0 5px;
                }

                .pricing-content p {
                    margin: 0;
                    font-size: 16px;
                    color: var(--text-secondary);
                }

                .pricing-icon {
                    width: 60px;
                    height: 60px;
                    background: linear-gradient(135deg, var(--accent-color), var(--accent-light));
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    animation: pulse 2s ease-in-out infinite;
                }

                .pricing-icon i {
                    color: var(--primary-color);
                    font-size: 24px;
                }

                /* CTA секция */
                .cta-section {
                    background: linear-gradient(135deg, var(--accent-color), var(--accent-light));
                    border-radius: 16px;
                    padding: 50px 40px;
                    text-align: center;
                    position: relative;
                    overflow: hidden;
                    margin-top: 40px;
                }

                .cta-section::before {
                    content: '';
                    position: absolute;
                    top: -50%;
                    right: -50%;
                    width: 200%;
                    height: 200%;
                    background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
                    animation: rotate 20s linear infinite;
                }

                .cta-content {
                    position: relative;
                    z-index: 1;
                }

                .cta-title {
                    font-size: 32px;
                    font-weight: 700;
                    color: var(--primary-color);
                    margin: 0 0 20px;
                }

                .cta-description {
                    font-size: 18px;
                    color: rgba(255, 255, 255, 0.9);
                    max-width: 700px;
                    margin: 0 auto 40px;
                    line-height: 1.6;
                }

                .cta-buttons {
                    display: flex;
                    justify-content: center;
                    gap: 20px;
                    flex-wrap: wrap;
                }

                .cta-button {
                    display: inline-flex;
                    align-items: center;
                    gap: 10px;
                    padding: 16px 32px;
                    border: none;
                    border-radius: 8px;
                    font-size: 16px;
                    font-weight: 600;
                    text-decoration: none;
                    cursor: pointer;
                    transition: all var(--transition-speed) ease;
                    position: relative;
                    overflow: hidden;
                }

                .cta-button.primary {
                    background: var(--primary-color);
                    color: var(--accent-color);
                }

                .cta-button.primary:hover {
                    transform: translateY(-3px);
                    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
                }

                .cta-button.secondary {
                    background: transparent;
                    color: var(--primary-color);
                    border: 2px solid var(--primary-color);
                }

                .cta-button.secondary:hover {
                    background: var(--primary-color);
                    color: var(--accent-color);
                }

                /* Анимации */
                @keyframes pulse {

                    0%,
                    100% {
                        transform: scale(1);
                    }

                    50% {
                        transform: scale(1.05);
                    }
                }

                @keyframes rotate {
                    from {
                        transform: rotate(0deg);
                    }

                    to {
                        transform: rotate(360deg);
                    }
                }

                /* Адаптивные стили */
                @media (max-width: 1024px) {
                    .section-title {
                        font-size: 40px;
                    }

                    .content-block {
                        padding: 30px;
                    }

                    .block-title {
                        font-size: 24px;
                    }
                }

                @media (max-width: 768px) {
                    .arbitration-section {
                        padding: 60px 0;
                    }

                    .section-title {
                        font-size: 32px;
                    }

                    .section-intro {
                        font-size: 18px;
                    }

                    .content-block {
                        padding: 25px 20px;
                        margin-bottom: 40px;
                    }

                    .advantages-grid {
                        grid-template-columns: 1fr;
                    }

                    .procedures-grid {
                        grid-template-columns: 1fr;
                    }

                    .benefits-list {
                        grid-template-columns: 1fr;
                    }

                    .pricing-highlight {
                        flex-direction: column;
                        text-align: center;
                        gap: 20px;
                    }

                    .cta-section {
                        padding: 40px 30px;
                    }

                    .cta-title {
                        font-size: 26px;
                    }

                    .cta-buttons {
                        flex-direction: column;
                        align-items: center;
                    }
                }

                @media (max-width: 480px) {
                    .arbitration-section {
                        padding: 40px 0;
                    }

                    .section-title {
                        font-size: 28px;
                    }

                    .content-block {
                        padding: 20px 15px;
                    }

                    .block-title {
                        font-size: 20px;
                    }

                    .procedure-header {
                        padding: 20px;
                    }

                    .procedure-content {
                        padding: 20px;
                    }

                    .cta-section {
                        padding: 30px 20px;
                    }

                    .cta-title {
                        font-size: 22px;
                    }

                    .cta-description {
                        font-size: 16px;
                    }
                }
            </style>
        </div>
    </div>

    <?php wp_footer();?>
    <?php get_footer();?>

</body>
</html>