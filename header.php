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
