<?php
/**
 * Template Name: zemelni
 */
get_header();
?>

    <div class="main-image-container">
            <img src="<?php echo get_stylesheet_directory_uri();?>/img/zemelnye-spory.jpg" alt="Жилищные споры" class="main-image">
        </div>
    <!-- Заголовок и подзаголовок -->
        <div class="hero-content">
            <div class="container">
                <div class="hero-text">
                    <h1 class="main-title">ЗЕМЕЛЬНЫЙ ЮРИСТ</h1>
                    <h2 class="subtitle">Юридическая помощь по любым земельным спорам</h2>

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

    <!-- Модальное окно выбора города -->
    <div class="city-modal" id="cityModal">
        <div class="city-modal-content">
            <button class="close-modal" id="closeModal">
                <i class="fas fa-times"></i>
            </button>

            <h2 class="city-modal-title">Выберите ближайший к вам офис</h2>

            <div class="city-list">
                <a href="#" class="city-item" data-city="voronezh">Воронеж</a>
                <a href="#" class="city-item" data-city="yuzhno-sakhalinsk">Южно-Сахалинск</a>
            </div>

            <button class="cancel-btn" id="cancelCitySelection">Отменить выбор</button>
        </div>
    </div>

    <div class="modal-overlay" id="modalOverlay"></div>

    <!-- Основной контент -->
    <div class="page-container">
        <!-- Хлебные крошки -->
        <div class="breadcrumbs">
            <a href="/services" class="breadcrumb-link">Юридические услуги</a>
            <span class="breadcrumb-separator">›</span>
            <span class="breadcrumb-current">Земельный юрист</span>
        </div>

        <div class="content-sidebar-wrapper">
            <!-- Основной контент -->
            <div class="main-content">
                <!-- Контентный блок -->
                <div class="content-container">
                    <div class="article-content">
                        <!-- Вводный текст -->
                        <p class="text-paragraph">
                            Собственников тех или иных наделов земли с каждым годом становится все больше, а земельные
                            споры
                            превращаются в суровую реальность. Если при возникновении конфликта на помощь сразу же
                            приходит
                            опытный юрист по земельным спорам, дело может очень быстро принять выгодный для Вас оборот.
                        </p>

                        <!-- Блок с призывом к действию -->
                        <!-- <div class="cta-block">
                            <h4 class="cta-title">Чтобы получить консультацию адвоката по земельным вопросам в Воронеже
                                заполните заявку</h4>
                            <button class="cta-button">Получить консультацию</button>
                        </div> -->

                        <!-- Остальной контент страницы -->
                        <h3 class="content-subtitle">Помощь юриста при земельных спорах, земельные дела</h3>

                        <p class="text-paragraph">
                            Профессиональный юрист по земельным спорам знает все тонкости нормативной базы и подробности
                            судебной практики, а значит, подробно разобравшись в вашей проблеме, защитит ваши интересы и
                            в суде,
                            и в других инстанциях.
                        </p>

                        <p class="text-paragraph">
                            Даже если Вам кажется, что отстоять Ваше право на землю уже не удастся, вполне возможно, что
                            наша
                            организация предоставит Вам юриста, способного сотворить чудо.
                        </p>

                        <p class="text-paragraph">
                            Наш юрист по земельным спорам постарается помочь Вам на любой из стадий судебной тяжбы, а
                            консультация наших специалистов поможет разобраться в том, почему именно Вам так необходима
                            профессиональная защита ваших интересов.
                        </p>

                        <!-- Подзаголовок о том, как стать собственником -->
                        <h2 class="content-title">Как стать собственником земли?</h2>

                        <p class="text-paragraph">
                            Гражданские дела, связанные с разрешением земельных и жилищных споров, относятся к разряду
                            самых
                            распространенных. Наши клиенты обращаются к нам с такими вопросами, как оформление
                            наследства на
                            земельные паи, а также признание права собственности на землю. Это очень важно, поскольку
                            именно
                            закрепленное право на владение землей позволяет распоряжаться участком по своему усмотрению
                            и
                            беспрепятственно совершать сделки с землей: покупать или продавать ее, менять, дарить,
                            передавать по
                            наследству или в залог.
                        </p>

                        <!-- Подзаголовок с акцентом -->
                        <h3 class="content-subtitle accent">Основаниями для признания права собственности на землю
                            являются:
                        </h3>

                        <!-- Список с квадратными маркерами -->
                        <ul class="custom-list">
                            <li>решения органов государственной власти и местного самоуправления;</li>
                            <li>заключение договоров и других сделок с землей;</li>
                            <li>приобретательная давность;</li>
                            <li>решения суда.</li>
                        </ul>

                        <p class="text-paragraph">
                            Надо заметить, проблемы с признанием права собственности возникают не только у отдельных
                            граждан, но
                            и у юридических лиц. И тем, и другим мы рекомендуем обращаться за помощью к профессионалам,
                            специализирующимся на ведении земельных споров.
                        </p>

                        <p class="text-paragraph">
                            Кроме признания права собственности на землю, юристы нашей компании всегда готовы оказать
                            вам
                            квалифицированную юридическую помощь по таким делам, как:
                        </p>

                        <!-- Список услуг -->
                        <ul class="custom-list">
                            <li>об обжаловании отказа в госрегистрации права на владение землей;</li>
                            <li>о приватизации земельных участков и – в случае необходимости – об обжаловании отказа в
                                приватизации;</li>
                            <li>о признании сделок с землей недействительными;</li>
                            <li>об определении порядка пользования земельным участком;</li>
                            <li>споры по межеванию и другие дела об определении границ земельного участка;</li>
                            <li>об объединении земельных участков;</li>
                            <li>о разделе участка между собственниками;</li>
                            <li>о предоставлении земельных участков и их изъятии из чужого незаконного владения;</li>
                            <li>об изменении категории земельного участка и его разрешенного использования;</li>
                            <li>об устранении препятствий в пользовании участком, которые не связаны с лишением
                                владения;</li>
                            <li>о признании и установлении сервитута;</li>
                            <li>по вопросам, связанным с арендой земли: заключение договоров, их продление, изменение
                                или
                                расторжение;</li>
                            <li>по спорам, связанным с нарушениями правил застройки земельных участков и других
                                положений
                                градостроительного кодекса;</li>
                            <li>по иным категориям гражданских дел, связанных с отношениями в сфере использования земли.
                            </li>
                        </ul>

                        <p class="text-paragraph">
                            Кроме того, наши юристы знают, как правильно и максимально быстро оформить земельные паи, и
                            всегда
                            готовы проконсультировать вас по этоту поводу. Вы всегда можете рассчитывать на то, что,
                            защищая
                            ваши права, представители компании «Стратегия»:
                        </p>

                        <!-- Нумерованный список -->
                        <ol class="numbered-list">
                            <li>Проконсультируют Вас и при необходимости дадут письменное заключение. Юридическая
                                консультация
                                обойдется вам в 2500 рублей, однако если вы заключите с нашими представителями договор о
                                ведении
                                дела, эта услуга будет для вас бесплатной.</li>
                            <li>Составят исковое заявление и представят его в суд.</li>
                            <li>Подготовят отзыв или возражение на исковое заявление.</li>
                            <li>Помогут собрать дополнительные доказательства.</li>
                            <li>Примут участие в судебных заседаниях, получат решение суда и в случае необходимости
                                обжалуют
                                его.</li>
                            <li>Проследят за исполнением решения суда. Ведение земельного дела в суде обойдется вам в
                                сумму от
                                25.000 рублей.</li>
                        </ol>

                        <!-- Выделенный блок с информацией -->
                        <div class="info-box">
                            <h4 class="info-title">Важно знать!</h4>
                            <p>Помните: согласно ст. 100 ГПК РФ, если решение суда будет в вашу пользу, суд присудит
                                оплату
                                услуг адвоката проигравшей стороне.</p>
                        </div>

                        <!-- Блок с призывом к действию -->
                        <div class="cta-block">
                            <h4 class="cta-title">Нужна консультация земельного юриста?</h4>
                            <p>Получите бесплатную первичную консультацию по вашему вопросу</p>
                            <button class="cta-button">Связаться с юристом</button>
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
