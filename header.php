<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri();?>/css/styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-solid-straight/css/uicons-solid-straight.css'>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <title><?php echo get_the_title();?></title>
</head>

<body>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (m, e, t, r, i, k, a) {
            m[i] = m[i] || function () { (m[i].a = m[i].a || []).push(arguments) };
            m[i].l = 1 * new Date();
            for (var j = 0; j < document.scripts.length; j++) { if (document.scripts[j].src === r) { return; } }
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(102554079, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/102554079" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->

    <script src="<?php echo get_stylesheet_directory_uri();?>/js/script.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri();?>/js/gradient-background.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Функция создания выпадающего меню
            function createDropdownMenu(linkText, menuItems) {
                // Находим нужную ссылку
                const navLinks = document.querySelectorAll('.nav-link.dropdown-toggle');
                let targetLink = null;
                navLinks.forEach(link => {
                    if (link.textContent.trim().startsWith(linkText)) {
                        targetLink = link;
                    }
                });

                if (!targetLink) return;

                // Создаем выпадающий список
                const dropdownList = document.createElement('ul');
                dropdownList.className = 'dropdown-menu';

                // Создаем пункты меню
                menuItems.forEach(item => {
                    const li = document.createElement('li');
                    const a = document.createElement('a');
                    a.href = item.href;
                    a.textContent = item.text;
                    a.className = 'dropdown-item';
                    li.appendChild(a);
                    dropdownList.appendChild(li);
                });

                // Добавляем выпадающий список в DOM
                const parentItem = targetLink.closest('.nav-item');
                parentItem.appendChild(dropdownList);
            }

            // Общие пункты меню
            const commonMenuItems = [
                { text: 'Юридическая консультация', href: '<?php echo get_page_link(51);?>' },
                { text: 'Досудебное урегулирование споров', href: '<?php echo get_page_link(45);?>' },
                { text: 'Представительство в суде', href: '<?php echo get_page_link(71);?>' },
                { text: 'Исполнительное производство', href: '<?php echo get_page_link(49);?>' },
                { text: 'Регистрация товарных знаков', href: '<?php echo get_page_link(61);?>' }
            ];

            // Меню для граждан
            const citizenMenuItems = [
                { text: 'Земельные споры', href: '<?php echo get_page_link(8);?>' },
                { text: 'Военный юрист', href: '<?php echo get_page_link(14);?>' },
                { text: 'Страховой юрист', href: '<?php echo get_page_link(18);?>' },
                { text: 'Трудовой юрист', href: '<?php echo get_page_link(16);?>' },
                { text: 'Жилищный юрист', href: '<?php echo get_page_link(10);?>' },
                { text: 'Перевод недвижимости в нежилой фонд', href: '<?php echo get_page_link(22);?>' },
                { text: 'Юрист по недвижимости', href: '<?php echo get_page_link(12);?>' },
                { text: 'Защита прав потребителей', href: '<?php echo get_page_link(24);?>' },
                { text: 'Наследственные дела', href: '<?php echo get_page_link(28);?>' },
                { text: 'Семейный юрист', href: '<?php echo get_page_link(26);?>' },
                { text: 'Затопление квартир', href: '<?php echo get_page_link(20);?>' },
                ...commonMenuItems
            ];

            // Меню для бизнеса
            const businessMenuItems = [
                { text: 'Ликвидация организаций', href: '<?php echo get_page_link(63);?>' },
                { text: 'Арбитраж. Арбитражные споры', href: '<?php echo get_page_link(41);?>' },
                { text: 'Персональные данные', href: '<?php echo get_page_link(67);?>' },
                { text: 'Юридическое сопровождение', href: '<?php echo get_page_link(69);?>' },
                ...commonMenuItems
            ];

            // Меню лицензирования
            const licensingMenuItems = [
                { text: 'Получение лицензии на алкоголь', href: '<?php echo get_page_link(39);?>' },
                { text: 'Получение образовательной лицензии', href: '<?php echo get_page_link(74);?>' },
                { text: 'Получение лицензии на деятельность с отходами', href: '<?php echo get_page_link(43);?>' },
                { text: 'Получение лицензии МЧС', href: '<?php echo get_page_link(59);?>' },
                { text: 'Получение медицинской лицензии', href: '<?php echo get_page_link(65);?>' },
                { text: 'Получение лицензии ФСБ', href: '<?php echo get_page_link(57);?>' },
                { text: 'Лицензия УК', href: '<?php echo get_page_link(55);?>' },
                { text: 'Получение лицензии Ростехнадзора', href: '<?php echo get_page_link(53);?>' }
            ];

            // Создаем все меню
            createDropdownMenu('Для Граждан', citizenMenuItems);
            createDropdownMenu('Для Бизнеса', businessMenuItems);
            createDropdownMenu('Лицензирование', licensingMenuItems);

            // Добавляем стили
            const styles = document.createElement('style');
            styles.textContent = `
                .nav-item.dropdown {
                    position: relative;
                }

                .dropdown-menu {
                    display: none;
                    position: absolute;
                    top: 100%;
                    left: 0;
                    background-color: var(--primary-color);
                    border: 1px solid rgba(227, 30, 36, 0.3);
                    border-radius: 4px;
                    padding: 8px 0;
                    min-width: 300px;
                    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                    z-index: 1000;
                }

                .nav-item.dropdown:last-child .dropdown-menu {
                    left: auto;
                    right: 0;
                }

                .nav-item.dropdown:hover .dropdown-menu {
                    display: flex;
                    flex-wrap: wrap;
                    width: max-content;
                    max-width: 800px;
                }

                .dropdown-menu li {
                    flex: 0 0 50%;
                    min-width: 300px;
                }

                .dropdown-menu:has(li:nth-child(7)) {
                    display: flex;
                    flex-wrap: wrap;
                }

                .dropdown-item {
                    display: block;
                    padding: 8px 20px;
                    color: var(--text-color);
                    text-decoration: none;
                    transition: all var(--transition-speed);
                    font-size: 12px;
                    white-space: normal;
                    line-height: 1.4;
                }

                .dropdown-item:hover {
                    background-color: var(--secondary-color);
                    color: var(--accent-color);
                }

                @media (max-width: 1200px) {
                    .nav-item.dropdown:last-child .dropdown-menu {
                        right: 0;
                        left: auto;
                    }
                }
            `;

            document.head.appendChild(styles);
        });


        document.addEventListener('DOMContentLoaded', function () {
            // ДОБАВЛЯЕМ КЛАСС ЗАГРУЗКИ JS
            document.body.classList.add('js-loaded');

            // Ваш существующий код создания выпадающих меню
            function createDropdownMenu(linkText, menuItems) {
                const navLinks = document.querySelectorAll('.nav-link.dropdown-toggle, .nav-link');
                let targetLink = null;

                navLinks.forEach(link => {
                    if (link.textContent.trim().startsWith(linkText)) {
                        targetLink = link;
                    }
                });

                if (!targetLink) {
                    console.log('Не найдена ссылка для:', linkText);
                    return;
                }

                const dropdownList = document.createElement('ul');
                dropdownList.className = 'dropdown-menu';

                menuItems.forEach(item => {
                    const li = document.createElement('li');
                    const a = document.createElement('a');
                    a.href = item.href;
                    a.textContent = item.text;
                    a.className = 'dropdown-item';
                    li.appendChild(a);
                    dropdownList.appendChild(li);
                });

                const parentItem = targetLink.closest('.nav-item');
                if (parentItem) {
                    parentItem.appendChild(dropdownList);
                    parentItem.classList.add('dropdown');
                }
            }

            // Общие пункты меню
            const commonMenuItems = [
                { text: 'Юридическая консультация', href: '<?php echo get_page_link(51);?>' },
                { text: 'Досудебное урегулирование споров', href: '<?php echo get_page_link(45);?>' },
                { text: 'Представительство в суде', href: '<?php echo get_page_link(71);?>' },
                { text: 'Исполнительное производство', href: '<?php echo get_page_link(49);?>' },
                { text: 'Регистрация товарных знаков', href: '<?php echo get_page_link(61);?>' }
            ];

            // Меню для граждан
            const citizenMenuItems = [
                { text: 'Земельные споры', href: '<?php echo get_page_link(8);?>' },
                { text: 'Военный юрист', href: '<?php echo get_page_link(14);?>' },
                { text: 'Страховой юрист', href: '<?php echo get_page_link(18);?>' },
                { text: 'Трудовой юрист', href: '<?php echo get_page_link(16);?>' },
                { text: 'Жилищный юрист', href: '<?php echo get_page_link(10);?>' },
                { text: 'Перевод недвижимости в нежилой фонд', href: '<?php echo get_page_link(22);?>' },
                { text: 'Юрист по недвижимости', href: '<?php echo get_page_link(12);?>' },
                { text: 'Защита прав потребителей', href: '<?php echo get_page_link(24);?>' },
                { text: 'Наследственные дела', href: '<?php echo get_page_link(28);?>' },
                { text: 'Семейный юрист', href: '<?php echo get_page_link(26);?>' },
                { text: 'Затопление квартир', href: '<?php echo get_page_link(20);?>' },
                ...commonMenuItems
            ];

            // Меню для бизнеса
            const businessMenuItems = [
                { text: 'Ликвидация организаций', href: '<?php echo get_page_link(63);?>' },
                { text: 'Арбитраж. Арбитражные споры', href: '<?php echo get_page_link(41);?>' },
                { text: 'Персональные данные', href: '<?php echo get_page_link(67);?>' },
                { text: 'Юридическое сопровождение', href: '<?php echo get_page_link(69);?>' },
                ...commonMenuItems
            ];

            // Меню лицензирования
            const licensingMenuItems = [
                { text: 'Получение лицензии на алкоголь', href: '<?php echo get_page_link(39);?>' },
                { text: 'Получение образовательной лицензии', href: '<?php echo get_page_link(74);?>' },
                { text: 'Получение лицензии на деятельность с отходами', href: '<?php echo get_page_link(43);?>' },
                { text: 'Получение лицензии МЧС', href: '<?php echo get_page_link(59);?>' },
                { text: 'Получение медицинской лицензии', href: '<?php echo get_page_link(65);?>' },
                { text: 'Получение лицензии ФСБ', href: '<?php echo get_page_link(57);?>' },
                { text: 'Лицензия УК', href: '<?php echo get_page_link(55);?>' },
                { text: 'Получение лицензии Ростехнадзора', href: '<?php echo get_page_link(53);?>' }
            ];


            // Создаем выпадающие меню
            createDropdownMenu('Для Граждан', citizenMenuItems);
            createDropdownMenu('Для Бизнеса', businessMenuItems);
            createDropdownMenu('Лицензирование', licensingMenuItems);

            // ИСПРАВЛЕННОЕ СОЗДАНИЕ МОБИЛЬНОГО МЕНЮ
            // ИСПРАВЛЕННОЕ СОЗДАНИЕ МОБИЛЬНОГО МЕНЮ
            function createMobileMenu() {
                // Удаляем существующую кнопку если есть
                const existingButton = document.querySelector('.mobile-menu-toggle');
                const existingMenu = document.querySelector('.mobile-menu');

                if (existingButton) existingButton.remove();
                if (existingMenu) existingMenu.remove();

                // Создаем кнопку
                const burgerButton = document.createElement('button');
                burgerButton.className = 'mobile-menu-toggle';
                burgerButton.innerHTML = `
                <span class="burger-line"></span>
                <span class="burger-line"></span>
                <span class="burger-line"></span>
            `;
                burgerButton.setAttribute('aria-label', 'Открыть меню');

                // Создаем мобильное меню
                const mobileMenu = document.createElement('div');
                mobileMenu.className = 'mobile-menu';
                mobileMenu.innerHTML = `
                <div class="mobile-menu-header">
                    <div class="mobile-menu-logo">
                        <span>Меню</span>
                    </div>
                    <button class="mobile-menu-close">✕</button>
                </div>
                <div class="mobile-menu-content">
                    <nav class="mobile-nav">
                        <div class="mobile-nav-item">
                            <a href="/" class="mobile-nav-link">Главная</a>
                        </div>
                        
                        <div class="mobile-nav-item has-submenu">
                            <button class="mobile-nav-link submenu-toggle">
                                Для Граждан
                                <span class="submenu-arrow">›</span>
                            </button>
                            <div class="mobile-submenu">
                                ${citizenMenuItems.map(item =>
                    `<a href="${item.href}" class="mobile-submenu-item">${item.text}</a>`
                ).join('')}
                            </div>
                        </div>
                        
                        <div class="mobile-nav-item has-submenu">
                            <button class="mobile-nav-link submenu-toggle">
                                Для Бизнеса
                                <span class="submenu-arrow">›</span>
                            </button>
                            <div class="mobile-submenu">
                                ${businessMenuItems.map(item =>
                    `<a href="${item.href}" class="mobile-submenu-item">${item.text}</a>`
                ).join('')}
                            </div>
                        </div>
                        
                        <div class="mobile-nav-item has-submenu">
                            <button class="mobile-nav-link submenu-toggle">
                                Лицензирование
                                <span class="submenu-arrow">›</span>
                            </button>
                            <div class="mobile-submenu">
                                ${licensingMenuItems.map(item =>
                    `<a href="${item.href}" class="mobile-submenu-item">${item.text}</a>`
                ).join('')}
                            </div>
                        </div>
                        

                    </nav>
                    
                    <div class="mobile-menu-contacts">
                        <div class="mobile-contact-item">
                            <a href="tel:8(473)295-48-24" class="mobile-contact-link">
                                📞 8(473)295-48-24
                            </a>
                        </div>
                        <div class="mobile-contact-item">
                            <a href="tel:tel:8(952)553-44-88" class="mobile-contact-link">
                                📞 8(952)553-44-88
                            </a>
                        </div>
                    </div>
                </div>
            `;

                // Добавляем кнопку прямо в body (не в header)
                document.body.appendChild(burgerButton);
                document.body.appendChild(mobileMenu);

                console.log('Мобильное меню создано и добавлено в body');

                return { burgerButton, mobileMenu };
            }

            // Создаем мобильное меню
            const { burgerButton, mobileMenu } = createMobileMenu();

            // ИСПРАВЛЕННАЯ ИНИЦИАЛИЗАЦИЯ ОБРАБОТЧИКОВ
            function initMobileMenuHandlers() {
                if (!burgerButton || !mobileMenu) {
                    console.error('Элементы мобильного меню не найдены');
                    return;
                }

                const closeButton = mobileMenu.querySelector('.mobile-menu-close');
                const submenuToggles = mobileMenu.querySelectorAll('.submenu-toggle');

                // Создаем overlay
                let overlay = document.querySelector('.mobile-menu-overlay');
                if (!overlay) {
                    overlay = document.createElement('div');
                    overlay.className = 'mobile-menu-overlay';
                    document.body.appendChild(overlay);
                }

                console.log('Инициализация обработчиков мобильного меню');

                // Открытие меню
                burgerButton.addEventListener('click', (e) => {
                    e.preventDefault();
                    console.log('Клик по бургер-кнопке');

                    mobileMenu.classList.add('active');
                    overlay.classList.add('active');
                    burgerButton.classList.add('active');
                    document.body.style.overflow = 'hidden';
                });

                // Закрытие меню
                const closeMenu = () => {
                    console.log('Закрытие мобильного меню');
                    mobileMenu.classList.remove('active');
                    overlay.classList.remove('active');
                    burgerButton.classList.remove('active');
                    document.body.style.overflow = '';
                };

                if (closeButton) {
                    closeButton.addEventListener('click', closeMenu);
                }

                overlay.addEventListener('click', closeMenu);

                // Обработка подменю
                submenuToggles.forEach(toggle => {
                    toggle.addEventListener('click', (e) => {
                        e.preventDefault();
                        const parent = toggle.closest('.mobile-nav-item');
                        const submenu = parent.querySelector('.mobile-submenu');
                        const arrow = toggle.querySelector('.submenu-arrow');

                        parent.classList.toggle('active');

                        if (parent.classList.contains('active')) {
                            submenu.style.maxHeight = submenu.scrollHeight + 'px';
                            arrow.style.transform = 'rotate(90deg)';
                        } else {
                            submenu.style.maxHeight = '0';
                            arrow.style.transform = 'rotate(0deg)';
                        }
                    });
                });

                // Закрытие при клике на ссылку
                mobileMenu.addEventListener('click', (e) => {
                    if (e.target.matches('a[href]') && !e.target.matches('.submenu-toggle')) {
                        closeMenu();
                    }
                });
            }

            // Инициализация
            initMobileMenuHandlers();

            // ИСПРАВЛЕННАЯ ЛОГИКА КНОПКИ СВЯЗИ

            // Добавляем стили (ваши существующие + исправления)
            const styles = document.createElement('style');
            styles.textContent = `
                /* Базовые стили для предотвращения мерцания */
                .mobile-menu-toggle {
                    display: none;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    width: 40px;
                    height: 40px;
                    background: none;
                    border: none;
                    cursor: pointer;
                    padding: 5px;
                    z-index: 9999;
                    position: relative;
                }

                .burger-line {
                    width: 25px;
                    height: 3px;
                    background-color: var(--text-color, #333);
                    margin: 2px 0;
                    transition: all 0.3s ease;
                    border-radius: 2px;
                }

                .mobile-menu-toggle.active .burger-line:nth-child(1) {
                    transform: rotate(45deg) translate(6px, 6px);
                }

                .mobile-menu-toggle.active .burger-line:nth-child(2) {
                    opacity: 0;
                }

                .mobile-menu-toggle.active .burger-line:nth-child(3) {
                    transform: rotate(-45deg) translate(7px, -6px);
                }

                .mobile-menu-overlay {
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: rgba(0, 0, 0, 0.5);
                    backdrop-filter: blur(5px);
                    z-index: 9998;
                    opacity: 0;
                    visibility: hidden;
                    transition: all 0.3s ease;
                }

                .mobile-menu-overlay.active {
                    opacity: 1;
                    visibility: visible;
                }

                .mobile-menu {
                    position: fixed;
                    top: 0;
                    right: -100%;
                    width: 300px;
                    height: 100%;
                    background: var(--primary-color, #fff);
                    z-index: 9999;
                    transition: right 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
                    overflow-y: auto;
                    box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
                    padding-bottom: 100px;
                }

                .mobile-menu.active {
                    right: 0;
                }

                .mobile-menu-header {
                    padding: 20px;
                    border-bottom: 1px solid rgba(227, 30, 36, 0.1);
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    background: var(--secondary-color, #f5f5f5);
                }

                .mobile-menu-logo span {
                    font-size: 16px;
                    font-weight: 600;
                    color: var(--text-color, #333);
                }

                .mobile-menu-close {
                    width: 30px;
                    height: 30px;
                    border: none;
                    background: rgba(227, 30, 36, 0.1);
                    color: #e31e24;
                    border-radius: 50%;
                    font-size: 16px;
                    cursor: pointer;
                    transition: all 0.3s ease;
                }

                .mobile-menu-close:hover {
                    background: #e31e24;
                    color: #fff;
                }

                .mobile-nav-item {
                    border-bottom: 1px solid rgba(227, 30, 36, 0.1);
                }

                .mobile-nav-link {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    padding: 15px 20px;
                    color: var(--text-color, #333);
                    text-decoration: none;
                    font-size: 16px;
                    font-weight: 500;
                    background: none;
                    border: none;
                    width: 100%;
                    text-align: left;
                    cursor: pointer;
                    transition: all 0.3s ease;
                }

                .mobile-nav-link:hover {
                    background: rgba(227, 30, 36, 0.05);
                    color: #e31e24;
                }

                .submenu-arrow {
                    font-size: 14px;
                    transition: transform 0.3s ease;
                    color: #e31e24;
                }

                .mobile-submenu {
                    max-height: 0;
                    overflow: hidden;
                    background: var(--secondary-color, #f5f5f5);
                    transition: max-height 0.3s ease;
                }

                .mobile-submenu-item {
                    display: block;
                    padding: 12px 40px;
                    color: var(--text-secondary, #666);
                    text-decoration: none;
                    font-size: 14px;
                    border-bottom: 1px solid rgba(227, 30, 36, 0.05);
                    transition: all 0.3s ease;
                }

                .mobile-submenu-item:hover {
                    background: rgba(227, 30, 36, 0.08);
                    color: #e31e24;
                    padding-left: 45px;
                }

                .mobile-menu-contacts {
                    padding: 20px;
                    border-top: 1px solid rgba(227, 30, 36, 0.1);
                    background: var(--secondary-color, #f5f5f5);
                }

                .mobile-contact-item {
                    margin-bottom: 10px;
                }

                .mobile-contact-link {
                    display: block;
                    color: var(--text-color, #333);
                    text-decoration: none;
                    font-size: 14px;
                    font-weight: 500;
                    transition: color 0.3s ease;
                }

                .mobile-contact-link:hover {
                    color: #e31e24;
                }

                /* МОБИЛЬНОЕ ОТОБРАЖЕНИЕ */
                @media (max-width: 768px) {
                    body.js-loaded .mobile-menu-toggle {
                        display: flex !important;
                    }

                    .main-nav {
                        display: none !important;
                    }

                    .dropdown-menu {
                        display: none !important;
                    }
                }

                @media (max-width: 480px) {
                    .mobile-menu {
                        width: 100%;
                    }
                }
            `;

            document.head.appendChild(styles);

            console.log('Мобильное меню инициализировано');
        });

    </script>

    <!-- Главное меню и баннер -->
    <div class="hero-section">
        <!-- Главное меню -->
        <header class="main-header transparent-header">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo-wrapper">
                        <a href="/" class="logo">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/strategy.png" alt="Стратегия - юридические услуги">
                            <div class="logo-text">
                                <h1 class="site-name">"СТРАТЕГИЯ"</h1>
                                <p class="site-description">юридические услуги</p>
                            </div>
                        </a>
                    </div>

                    <nav class="main-nav">
                        <ul class="nav-list">
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle">Для Граждан <i
                                        class="fas fa-chevron-down"></i></a>

                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle">Для Бизнеса <i
                                        class="fas fa-chevron-down"></i></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle">Лицензирование <i
                                        class="fas fa-chevron-down"></i></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Контакты</a>
                            </li>
                        </ul>
                    </nav>

                    <div class="header-contacts">
                        <div class="phone-numbers">
                            <a href="tel:84732954824" class="phone">8(473)295-48-24</a>
                            <a href="tel:89525534488" class="phone">8(952)553-44-88</a>
                        </div>
                        <a href="#callback" class="callback-btn">Обратный звонок</a>
                    </div>
                </div>
            </div>
        </header>
<script>
    (function () {
    'use strict';

    // ДОБАВЬТЕ ЭТУ ПРОВЕРКУ:
    if (window.callbackModalLoaded) {
        console.log('Модальное окно уже загружено, пропускаем инициализацию');
        return;
    }
    window.callbackModalLoaded = true;

    // Создаем стили
    const createStyles = () => {
        const styles = `
        /* Мобильная кнопка обратного звонка */
        .mobile-callback-btn-auto {
          position: fixed;
          top: max(env(safe-area-inset-top, 10px), 15px);
          right: 10px;
          z-index: 9998;
          background: linear-gradient(135deg, #e31e24, #ff3a40);
          color: #ffffff;
          border: none;
          border-radius: 20px;
          padding: 8px 15px;
          font-size: 12px;
          font-weight: 600;
          text-transform: uppercase;
          letter-spacing: 0.5px;
          cursor: pointer;
          box-shadow: 0 4px 12px rgba(227, 30, 36, 0.3);
          transition: all 0.3s ease;
          text-decoration: none;
          display: none;
          line-height: 1;
          font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
          animation: slideInFromRight 0.5s ease-out;
        }
  
        .mobile-callback-btn-auto:hover {
          transform: translateY(-2px);
          box-shadow: 0 6px 16px rgba(227, 30, 36, 0.4);
          background: linear-gradient(135deg, #ff3a40, #e31e24);
          color: #ffffff;
          text-decoration: none;
        }
  
        .mobile-callback-btn-auto:active {
          transform: translateY(0);
        }
  
        @media (max-width: 768px) {
          .mobile-callback-btn-auto {
            display: block !important;
          }
        }
  
        @media (max-width: 480px) {
          .mobile-callback-btn-auto {
            right: 8px;
            top: max(env(safe-area-inset-top, 8px), 12px);
            padding: 6px 12px;
            font-size: 11px;
          }
        }
  
        @keyframes slideInFromRight {
          from {
            opacity: 0;
            transform: translateX(100px);
          }
          to {
            opacity: 1;
            transform: translateX(0);
          }
        }
  
        /* Модальное окно */
        .callback-modal-overlay {
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background: rgba(0, 0, 0, 0.7);
          backdrop-filter: blur(5px);
          z-index: 10000;
          display: flex;
          align-items: center;
          justify-content: center;
          opacity: 0;
          visibility: hidden;
          transition: all 0.3s ease;
          padding: 20px;
          box-sizing: border-box;
        }
  
        .callback-modal-overlay.active {
          opacity: 1;
          visibility: visible;
        }
  
        .callback-modal-container {
          background: var(--primary-color);
          border-radius: 12px;
          max-width: 500px;
          width: 100%;
          max-height: 90vh;
          overflow-y: auto;
          box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
          transform: translateY(-50px) scale(0.9);
          transition: all 0.3s ease;
          position: relative;
          box-sizing: border-box;
        }
  
        .callback-modal-overlay.active .callback-modal-container {
          transform: translateY(0) scale(1);
        }
  
        .callback-modal-header {
          padding: 30px 30px 0;
          text-align: center;
          position: relative;
        }
  
        .callback-modal-title {
          font-size: 24px;
          font-weight: 700;
          color: var(--text-color);
          margin: 0 0 10px;
          line-height: 1.2;
          font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
  
        .callback-modal-subtitle {
          font-size: 14px;
          color: var(--text-secondary);
          margin: 0 0 20px;
          line-height: 1.4;
          font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
  
        .callback-modal-close {
          position: absolute;
          top: 20px;
          right: 20px;
          width: 40px;
          height: 40px;
          border: none;
          background: rgba(227, 30, 36, 0.1);
          border-radius: 50%;
          color: var(--accent-color);
          font-size: 16px;
          cursor: pointer;
          transition: all 0.3s ease;
          display: flex;
          align-items: center;
          justify-content: center;
          font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
  
        .callback-modal-close:hover {
          background: var(--accent-color);
          color: var(--primary-color);
          transform: rotate(90deg);
        }
  
        .callback-modal-body {
          padding: 0 30px 30px;
        }
  
        .callback-form-auto {
          display: flex;
          flex-direction: column;
          gap: 20px;
        }
  
        .callback-form-group {
          display: flex;
          flex-direction: column;
          position: relative;
        }
  
        .callback-form-label {
          font-size: 14px;
          font-weight: 600;
          color: var(--text-color);
          margin-bottom: 8px;
          font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
  
        .callback-form-input,
        .callback-form-textarea {
          width: 100%;
          padding: 12px 16px;
          border: 2px solid rgba(227, 30, 36, 0.2);
          border-radius: 8px;
          font-size: 16px;
          color: var(--text-color);
          background: var(--primary-color);
          transition: all 0.3s ease;
          outline: none;
          box-sizing: border-box;
          font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
  
        .callback-form-input:focus,
        .callback-form-textarea:focus {
          border-color: var(--accent-color);
          box-shadow: 0 0 0 3px rgba(227, 30, 36, 0.1);
        }
  
        .callback-form-input::placeholder,
        .callback-form-textarea::placeholder {
          color: var(--text-secondary);
        }
  
        .callback-form-textarea {
          resize: vertical;
          min-height: 80px;
        }
  
        .callback-form-error {
          font-size: 12px;
          color: var(--accent-color);
          margin-top: 5px;
          display: block;
          min-height: 16px;
          font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
  
        .callback-form-input.error,
        .callback-form-textarea.error {
          border-color: var(--accent-color);
        }
  
        .callback-checkbox-group {
          margin: 10px 0;
        }
  
        .callback-checkbox-label {
          display: flex;
          align-items: flex-start;
          gap: 12px;
          cursor: pointer;
          line-height: 1.4;
          font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
  
        .callback-checkbox-input {
          position: absolute;
          opacity: 0;
          width: 0;
          height: 0;
        }
  
        .callback-checkbox-custom {
          width: 20px;
          height: 20px;
          border: 2px solid rgba(227, 30, 36, 0.3);
          border-radius: 4px;
          background: var(--primary-color);
          position: relative;
          flex-shrink: 0;
          transition: all 0.3s ease;
        }
  
        .callback-checkbox-custom::after {
          content: '';
          position: absolute;
          top: 50%;
          left: 50%;
          width: 6px;
          height: 10px;
          border: solid var(--primary-color);
          border-width: 0 2px 2px 0;
          transform: translate(-50%, -50%) rotate(45deg);
          opacity: 0;
          transition: all 0.3s ease;
        }
  
        .callback-checkbox-input:checked + .callback-checkbox-custom {
          background: var(--accent-color);
          border-color: var(--accent-color);
        }
  
        .callback-checkbox-input:checked + .callback-checkbox-custom::after {
          opacity: 1;
        }
  
        .callback-checkbox-text {
          font-size: 14px;
          color: var(--text-color);
        }
  
        .callback-privacy-link {
          color: var(--accent-color);
          text-decoration: none;
          border-bottom: 1px solid transparent;
          transition: border-color 0.3s ease;
        }
  
        .callback-privacy-link:hover {
          border-bottom-color: var(--accent-color);
        }
  
        .callback-form-actions {
          margin-top: 10px;
        }
  
        .callback-form-submit {
          width: 100%;
          padding: 16px;
          background: linear-gradient(135deg, var(--accent-color), var(--accent-light));
          color: var(--primary-color);
          border: none;
          border-radius: 8px;
          font-size: 16px;
          font-weight: 600;
          cursor: pointer;
          transition: all 0.3s ease;
          position: relative;
          overflow: hidden;
          font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
  
        .callback-form-submit::before {
          content: '';
          position: absolute;
          top: 0;
          left: -100%;
          width: 100%;
          height: 100%;
          background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
          transition: left 0.6s ease;
        }
  
        .callback-form-submit:hover::before {
          left: 100%;
        }
  
        .callback-form-submit:hover {
          transform: translateY(-2px);
          box-shadow: 0 8px 20px rgba(227, 30, 36, 0.3);
        }
  
        .callback-form-submit:disabled {
          opacity: 0.7;
          cursor: not-allowed;
          transform: none;
        }
  
        .callback-btn-text,
        .callback-btn-loader {
          transition: all 0.3s ease;
        }
  
        .callback-form-note {
          margin-top: 20px;
          padding-top: 15px;
          border-top: 1px solid rgba(227, 30, 36, 0.1);
          text-align: center;
        }
  
        .callback-form-note p {
          font-size: 12px;
          color: var(--text-secondary);
          margin: 0 0 5px;
          font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
  
        .callback-form-note p:last-child {
          margin-bottom: 0;
        }
  
        .callback-success-message {
          text-align: center;
          padding: 30px 20px;
        }
  
        .callback-success-icon {
          font-size: 60px;
          color: #28a745;
          margin-bottom: 20px;
        }
  
        .callback-success-message h3 {
          font-size: 22px;
          color: var(--text-color);
          margin: 0 0 15px;
          font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
  
        .callback-success-message p {
          font-size: 16px;
          color: var(--text-secondary);
          margin: 0 0 25px;
          line-height: 1.5;
          font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
  
        @media (max-width: 768px) {
          .callback-modal-overlay {
            padding: 10px;
          }
  
          .callback-modal-container {
            max-height: 95vh;
          }
  
          .callback-modal-header {
            padding: 20px 20px 0;
          }
  
          .callback-modal-body {
            padding: 0 20px 20px;
          }
  
          .callback-modal-title {
            font-size: 20px;
          }
  
          .callback-modal-close {
            top: 15px;
            right: 15px;
            width: 35px;
            height: 35px;
          }
        }
  
        @media (max-width: 480px) {
          .callback-modal-container {
            margin: 10px;
            max-width: calc(100% - 20px);
          }
  
          .callback-modal-header {
            padding: 15px 15px 0;
          }
  
          .callback-modal-body {
            padding: 0 15px 15px;
          }
  
          .callback-form-auto {
            gap: 15px;
          }
  
          .callback-modal-title {
            font-size: 18px;
          }
  
          .callback-modal-subtitle {
            font-size: 13px;
          }
        }
      `;

        const styleSheet = document.createElement('style');
        styleSheet.textContent = styles;
        document.head.appendChild(styleSheet);
    };

    // Создаем HTML элементы
    const createElements = () => {
        // Создаем только мобильную кнопку
        const mobileBtn = document.createElement('a');
        mobileBtn.href = '#';
        mobileBtn.className = 'mobile-callback-btn-auto';
        mobileBtn.textContent = 'Заказать обратный звонок';
        mobileBtn.setAttribute('aria-label', 'Заказать обратный звонок');

        // Создаем модальное окно
        const modal = document.createElement('div');
        modal.className = 'callback-modal-overlay';
        modal.id = 'callbackModalAuto';
        modal.innerHTML = `
        <div class="callback-modal-container">
          <div class="callback-modal-header">
            <h2 class="callback-modal-title">Заказать обратный звонок</h2>
            <p class="callback-modal-subtitle">Оставьте свои контакты и мы свяжемся с вами в течение 15 минут</p>
            <button class="callback-modal-close" type="button" aria-label="Закрыть">
              ✕
            </button>
          </div>
  
          <div class="callback-modal-body">
            <form class="callback-form-auto form-fetch" id="callbackFormAuto" action="<?php echo get_template_directory_uri(); ?>/send_callback.php" method="POST">
              <div class="callback-form-group">
                <label for="clientNameAuto" class="callback-form-label">Ваше имя *</label>
                <input 
                  type="text" 
                  id="clientNameAuto" 
                  name="name" 
                  class="callback-form-input" 
                  required 
                  placeholder="Введите ваше имя"
                  autocomplete="name"
                >
                <span class="callback-form-error" id="nameErrorAuto"></span>
              </div>
  
              <div class="callback-form-group">
                <label for="clientPhoneAuto" class="callback-form-label">Номер телефона *</label>
                <input 
                  type="tel" 
                  id="clientPhoneAuto" 
                  name="phone" 
                  class="callback-form-input" 
                  required 
                  placeholder="+7 (___) ___-__-__"
                  autocomplete="tel"
                >
                <span class="callback-form-error" id="phoneErrorAuto"></span>
              </div>
  
              <div class="callback-form-group">
                <label for="clientEmailAuto" class="callback-form-label">Email (необязательно)</label>
                <input 
                  type="email" 
                  id="clientEmailAuto" 
                  name="email" 
                  class="callback-form-input" 
                  placeholder="example@email.ru"
                  autocomplete="email"
                >
                <span class="callback-form-error" id="emailErrorAuto"></span>
              </div>
  
              <div class="callback-form-group">
                <label for="clientMessageAuto" class="callback-form-label">Сообщение (необязательно)</label>
                <textarea 
                  id="clientMessageAuto" 
                  name="message" 
                  class="callback-form-textarea" 
                  rows="3" 
                  placeholder="Опишите вашу ситуацию или вопрос"
                ></textarea>
              </div>
  
              <div class="callback-form-group callback-checkbox-group">
                <label class="callback-checkbox-label">
                  <input 
                    type="checkbox" 
                    id="privacyConsentAuto" 
                    name="privacy" 
                    class="callback-checkbox-input" 
                    required
                  >
                  <span class="callback-checkbox-custom"></span>
                  <span class="callback-checkbox-text">
                    Я согласен на <a href="/privacy-policy.html" target="_blank" class="callback-privacy-link">обработку персональных данных</a> *
                  </span>
                </label>
                <span class="callback-form-error" id="privacyErrorAuto"></span>
              </div>
  
              <div class="callback-form-actions">
                <button type="submit" class="callback-form-submit" id="submitBtnAuto">
                  <span class="callback-btn-text">Заказать звонок</span>
                  <span class="callback-btn-loader" style="display: none;">
                    ⟳
                  </span>
                </button>
              </div>
  
              <div class="callback-form-note">
                <p>* - обязательные поля</p>
                <p>Мы гарантируем конфиденциальность ваших данных</p>
              </div>
            </form>
          </div>
        </div>
      `;

        document.body.appendChild(mobileBtn);
        document.body.appendChild(modal);

        return { mobileBtn, modal };
    };
    
    

    // Класс модального окна
    class CallbackModal {
        constructor() {
            this.modal = document.getElementById('callbackModalAuto');
            this.form = document.getElementById('callbackFormAuto');
            this.closeBtn = this.modal.querySelector('.callback-modal-close');
            this.submitBtn = document.getElementById('submitBtnAuto');
            this.mobileBtn = document.querySelector('.mobile-callback-btn-auto');

            this.init();
        }

        init() {
            this.bindEvents();
            this.setupPhoneMask();
        }

        bindEvents() {
            // Обработка клика по мобильной кнопке
            this.mobileBtn.addEventListener('click', (e) => {
                e.preventDefault();
                this.open();
            });

            // Обработка кликов по СУЩЕСТВУЮЩИМ кнопкам на сайте
            document.addEventListener('click', (e) => {
                if (e.target.matches('.callback-btn, .call-btn, .phone-btn') ||
                    e.target.closest('.callback-btn, .call-btn, .phone-btn')) {
                    e.preventDefault();
                    this.open();
                }
            });

            // Закрытие модального окна
            this.closeBtn.addEventListener('click', () => this.close());

            this.modal.addEventListener('click', (e) => {
                if (e.target === this.modal) {
                    this.close();
                }
            });

            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && this.modal.classList.contains('active')) {
                    this.close();
                }
            });

            // Отправка формы
            this.form.addEventListener('submit', (e) => {
                e.preventDefault();
                this.submitForm();
            });

            // Валидация в реальном времени
            this.form.addEventListener('input', (e) => {
                this.validateField(e.target);
            });
        }

        setupPhoneMask() {
            const phoneInput = document.getElementById('clientPhoneAuto');

            phoneInput.addEventListener('input', (e) => {
                let value = e.target.value.replace(/\D/g, ''); // ИСПРАВЛЕНО: одинарный слеш

                if (value.startsWith('8')) {
                    value = '7' + value.slice(1);
                }

                if (value.startsWith('7')) {
                    value = value.slice(0, 11);
                    const formatted = value.replace(/^7(\d{0,3})(\d{0,3})(\d{0,2})(\d{0,2})$/,
                        (_, p1, p2, p3, p4) => {
                            let result = '+7';
                            if (p1) result += ` (${p1}`;
                            if (p2) result += `) ${p2}`;
                            if (p3) result += `-${p3}`;
                            if (p4) result += `-${p4}`;
                            return result;
                        });
                    e.target.value = formatted;
                } else if (value === '') {
                    e.target.value = '+7 ';
                } else {
                    e.target.value = '+7 ';
                }
            });

            // Устанавливаем начальное значение
            if (phoneInput.value === '') {
                phoneInput.value = '+7 ';
            }

            // Предотвращаем удаление префикса +7
            phoneInput.addEventListener('keydown', (e) => {
                const cursorPosition = e.target.selectionStart;
                const value = e.target.value;

                // Запрещаем удаление префикса "+7 "
                if ((e.key === 'Backspace' || e.key === 'Delete') && cursorPosition <= 3) {
                    e.preventDefault();
                }

                // Запрещаем ввод букв (кроме служебных клавиш)
                if (!/[\d\s\-\(\)\+]/.test(e.key) &&
                    !['Backspace', 'Delete', 'ArrowLeft', 'ArrowRight', 'Tab', 'Enter'].includes(e.key)) {
                    e.preventDefault();
                }
            });

            // Обработка фокуса
            phoneInput.addEventListener('focus', (e) => {
                if (e.target.value === '' || e.target.value === '+7') {
                    e.target.value = '+7 ';
                    // Устанавливаем курсор в конец
                    setTimeout(() => {
                        e.target.setSelectionRange(e.target.value.length, e.target.value.length);
                    }, 0);
                }
            });
        }

        open() {
            this.modal.classList.add('active');
            document.body.style.overflow = 'hidden';

            setTimeout(() => {
                document.getElementById('clientNameAuto').focus();
            }, 300);

            this.trackEvent('callback_modal_open');
        }

        close() {
            this.modal.classList.remove('active');
            document.body.style.overflow = '';
            this.resetForm();
        }

        validateField(field) {
            const value = field.value.trim();
            const errorElement = document.getElementById(field.name + 'ErrorAuto');
            let error = '';

            switch (field.name) {
                case 'name':
                    if (!value) {
                        error = 'Пожалуйста, введите ваше имя';
                    } else if (value.length < 2) {
                        error = 'Имя должно содержать минимум 2 символа';
                    } else if (!/^[а-яёА-ЯЁa-zA-Z\s\-]+$/u.test(value)) {
                        error = 'Имя может содержать только буквы, пробелы и дефисы';
                    }
                    break;

                case 'phone':
                    // Извлекаем только цифры из номера телефона
                    const phoneDigits = value.replace(/\D/g, '');
                    console.log('Телефон - исходное значение:', value);
                    console.log('Телефон - только цифры:', phoneDigits);
                    console.log('Телефон - количество цифр:', phoneDigits.length);

                    if (!value || value === '+7 ' || value === '+7') {
                        error = 'Пожалуйста, введите номер телефона';
                    } else if (phoneDigits.length !== 11) {
                        error = `Номер телефона должен содержать 11 цифр (введено: ${phoneDigits.length})`;
                    } else if (!phoneDigits.startsWith('7')) {
                        error = 'Номер должен начинаться с +7';
                    }
                    break;

                case 'email':
                    console.log('Email - проверяемое значение:', value);

                    if (value) {
                        // Упрощенная, но надежная регулярка для email
                        const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
                        if (!emailRegex.test(value)) {
                            error = 'Пожалуйста, введите корректный email';
                            console.log('Email не прошел валидацию:', value);
                        } else {
                            console.log('Email прошел валидацию:', value);
                        }
                    }
                    break;

                case 'privacy':
                    if (!field.checked) {
                        error = 'Необходимо согласие на обработку персональных данных';
                    }
                    break;
            }

            if (errorElement) {
                errorElement.textContent = error;
                field.classList.toggle('error', !!error);
            }

            console.log(`Валидация поля ${field.name}:`, error ? 'ОШИБКА' : 'ОК', error || '');
            return !error;
        }

        validateForm() {
            const fields = this.form.querySelectorAll('[required]');
            let isValid = true;

            fields.forEach(field => {
                if (!this.validateField(field)) {
                    isValid = false;
                }
            });

            return isValid;
        }

        async submitForm() {
            if (!this.validateForm()) {
                return;
            }

            this.setSubmitState(true);

            try {
                const formData = new FormData(this.form);
                
                console.log('=== ОТПРАВКА CALLBACK ФОРМЫ (IIFE) ===');
                console.log('Action URL:', this.form.action);
                for (let [key, value] of formData.entries()) {
                    console.log(key + ':', value);
                }
                const data = {
                    name: formData.get('name'),
                    phone: formData.get('phone'),
                    email: formData.get('email'),
                    message: formData.get('message'),
                    timestamp: new Date().toISOString(),
                    page: window.location.href
                };

                await this.sendData(data);
                this.trackEvent('callback_form_submit', data);
                this.showSuccess();

            } catch (error) {
                console.error('Ошибка отправки формы:', error);
                this.showError('Произошла ошибка при отправке. Попробуйте еще раз.');
            } finally {
                this.setSubmitState(false);
            }
        }

        // В методе submitForm класса CallbackModal
        async sendData(data) {
            try {
                const formData = new FormData();
                formData.append('name', data.name);
                formData.append('phone', data.phone);
                formData.append('email', data.email || '');
                formData.append('message', data.message || '');
                formData.append('privacy', 'on'); // Согласие на обработку данных
        
                // ОТПРАВЛЯЕМ НА НОВЫЙ ФАЙЛ
                const response = await fetch('<?php echo get_template_directory_uri(); ?>/send_callback.php', {
                    method: 'POST',
                    body: formData
                });
        
                const result = await response.json();
                
                if (result.error !== '') {
                    throw new Error(result.error);
                }
        
                return result;
            } catch (error) {
                console.error('Ошибка отправки callback:', error);
                throw error;
            }
        }


        setSubmitState(loading) {
            const btnText = this.submitBtn.querySelector('.callback-btn-text');
            const btnLoader = this.submitBtn.querySelector('.callback-btn-loader');

            this.submitBtn.disabled = loading;
            btnText.style.display = loading ? 'none' : 'block';
            btnLoader.style.display = loading ? 'block' : 'none';
        }

        showSuccess() {
            const modalBody = this.modal.querySelector('.callback-modal-body');
            modalBody.innerHTML = `
          <div class="callback-success-message">
            <div class="callback-success-icon">
              ✓
            </div>
            <h3>Спасибо за обращение!</h3>
            <p>Мы получили вашу заявку и свяжемся с вами в течение 15 минут.</p>
            <button type="button" class="callback-form-submit" onclick="window.callbackModalInstance.close()">
              Закрыть
            </button>
          </div>
        `;

            setTimeout(() => {
                this.close();
            }, 5000);
        }

        showError(message) {
            const errorDiv = document.createElement('div');
            errorDiv.style.cssText = `
          color: #e31e24;
          text-align: center;
          margin-top: 10px;
          padding: 10px;
          background: rgba(227, 30, 36, 0.1);
          border-radius: 5px;
          font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        `;
            errorDiv.textContent = message;

            this.form.appendChild(errorDiv);

            setTimeout(() => {
                errorDiv.remove();
            }, 5000);
        }

        resetForm() {
            this.form.reset();
            this.form.querySelectorAll('.callback-form-error').forEach(error => {
                error.textContent = '';
            });
            this.form.querySelectorAll('.error').forEach(field => {
                field.classList.remove('error');
            });

            document.getElementById('clientPhoneAuto').value = '+7 ';

            if (this.modal.querySelector('.callback-success-message')) {
                setTimeout(() => {
                    window.location.reload();
                }, 100);
            }
        }

        // Обновленная функция для отправки событий в Яндекс.Метрику
        trackEvent(eventName, data = {}) {
            // Сохраняем данные
            window.callbackData = {
                event: eventName,
                name: data.name || '',
                phone: data.phone || '',
                email: data.email || '',
                timestamp: new Date().toISOString()
            };

            console.log('Event tracked:', eventName, data);

            // ЗАМЕНИТЕ 12345678 НА ВАШ НОМЕР СЧЕТЧИКА
            const YANDEX_COUNTER_ID = 102554079;

            // Отправляем событие в Яндекс.Метрику
            if (typeof ym !== 'undefined') {
                switch (eventName) {
                    case 'callback_modal_open':
                        ym(YANDEX_COUNTER_ID, 'reachGoal', 'modal_open');
                        console.log('Яндекс.Метрика: Открытие модального окна');
                        break;

                    case 'callback_form_submit':
                        ym(YANDEX_COUNTER_ID, 'reachGoal', 'callback_form_submit', {
                            callback_name: data.name,
                            callback_phone: data.phone
                        });
                        console.log('Яндекс.Метрика: Отправка формы', data);
                        break;
                }
            } else {
                console.warn('Яндекс.Метрика не загружена');
            }

            // Отправляем данные в dataLayer для Google Analytics (если используется)
            if (typeof gtag !== 'undefined') {
                gtag('event', eventName, {
                    'custom_parameter_name': data.name,
                    'custom_parameter_phone': data.phone
                });
            }
        }

    }

    // Инициализация
    const init = () => {
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', () => {
                createStyles();
                createElements();
                window.callbackModalInstance = new CallbackModal();
            });
        } else {
            createStyles();
            createElements();
            window.callbackModalInstance = new CallbackModal();
        }
    };

    init();
})();
    </script>