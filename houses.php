<?php
/**
 * Template Name: houses
 */
get_header();
?>

        <div class="main-image-container">
            <img src="<?php echo get_stylesheet_directory_uri();?>/img/Houses.webp" alt="Жилищные споры" class="main-image">
        </div>
        <!-- Заголовок и подзаголовок -->
        <div class="hero-content">
            <div class="container">
                <div class="hero-text">
                    <h1 class="main-title">ЮРИСТ ПО НЕДВИЖИМОСТИ</h1>
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
            <span class="breadcrumb-current">>Юрист по недвижимости</span>
        </div>

        <div class="content-sidebar-wrapper">
            <!-- Основной контент -->
            <div class="content-container">
                <div class="article-content">
                    <!-- Главный заголовок -->
                    <h2 class="content-title">Юридические услуги, связанные с недвижимостью</h2>

                    <!-- Вводный текст -->
                    <p class="text-paragraph">
                        Компания «Стратегия» предлагает большой спектр услуг, связанных с недвижимостью.
                    </p>

                    <!-- Информационный блок -->
                    <div class="info-box">
                        <h4 class="info-title">Нужна консультация специалиста?</h4>
                        <p>Для получения грамотной консультации юриста по недвижимости или адвоката по недвижимости —
                            позвоните нам или оставьте заявку в форме.</p>
                    </div>

                    <!-- Подзаголовок услуг -->
                    <h3 class="content-subtitle">Наш отдел по работе с недвижимостью оказывает и другие услуги:</h3>

                    <!-- Список услуг -->
                    <ul class="custom-list">
                        <li>консультация юриста по недвижимости</li>
                        <li>юридическая помощь дольщикам</li>
                        <li>решение споров связанных с недвижимостью</li>
                        <li>юридическое сопровождение сделок с недвижимостью</li>
                        <li>снижение кадастровой стоимости</li>
                        <li>перевод недвижимости в нежилой фонд</li>
                        <li>подбор вариантов для недвижимости для Вас</li>
                        <li>помощь в продаже недвижимости</li>
                        <li>срочный выкуп недвижимости</li>
                        <li>жилищные споры</li>
                    </ul>

                    <!-- Подзаголовок преимуществ -->
                    <h3 class="content-subtitle accent">Наши преимущества:</h3>


                    <!-- Примечание о консультации -->
                    <blockquote class="content-quote">
                        Если же Вам требуется подробная консультация, то необходимо предварительно согласовать дату и
                        время посещения Вами нашего офиса.
                    </blockquote>

                    <!-- Блок с призывом к действию -->
                    <div class="cta-block">
                        <h4 class="cta-title">Нужна помощь с недвижимостью?</h4>
                        <p>Наши специалисты готовы помочь решить любые юридические вопросы, связанные с вашей
                            недвижимостью.</p>
                        <div class="cta-buttons">
                            <button class="cta-button">Получить консультацию</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php wp_footer(); ?>
<?php get_footer(); ?>

</body>
</html>
