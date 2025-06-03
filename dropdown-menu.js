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
        { text: 'Юридическая консультация', href: 'juridicheskaya-konsultacia.html' },
        { text: 'Досудебное урегулирование споров', href: 'dosudebnaya.html' },
        { text: 'Представительство в суде', href: 'sudebnoe-predstavitelstvo.html' },
        { text: 'Исполнительное производство', href: 'ispolnitelnoe-proizvodtvo.html' },
        { text: 'Регистрация товарных знаков', href: 'registracia-tovarnih.html' }
    ];

    // Меню для граждан
    const citizenMenuItems = [
        { text: 'Земельные споры', href: 'Zemelni.html' },
        { text: 'Военный юрист', href: 'voen.html' },
        { text: 'Страховой юрист', href: 'strahovie.html' },
        { text: 'Трудовой юрист', href: 'trud.html' },
        { text: 'Жилищный юрист', href: 'doma.html' },
        { text: 'Перевод недвижимости в нежилой фонд', href: 'perevod-v.html' },
        { text: 'Юрист по недвижимости', href: 'Houses.html' },
        { text: 'Защита прав потребителей', href: 'Zachita-prav.html' },
        { text: 'Наследственные дела', href: 'Nasledstvennie.html' },
        { text: 'Семейный юрист', href: 'Semeini.html' },
        { text: "Затопление квартрир", href: 'zatoplenie.html' },
        ...commonMenuItems
    ];

    // Меню для бизнеса
    const businessMenuItems = [
        { text: 'Ликвидация организаций', href: 'licvidation.html' },
        { text: 'Арбитраж. Арбитражные споры', href: 'arbitr.html' },
        { text: 'Персональные данные', href: 'persdata.html' },
        { text: 'Юридическое сопровождение', href: 'soprov.html' },
        ...commonMenuItems
    ];

    // Меню лицензирования
    const licensingMenuItems = [
        { text: 'Получение лицензии на алкоголь', href: 'alcochol.html' },
        { text: 'Получение образовательной лицензии', href: 'obrazovatelnaya.html' },
        { text: 'Получение лицензии на деятельность с отходами', href: 'deyatelnost-s-othodami.html' },
        { text: 'Получение лицензии МЧС', href: 'licensiya-mchs.html' },
        { text: 'Получение медицинской лицензии', href: 'medicinskaya-licensia.html' },
        { text: 'Получение лицензии ФСБ', href: 'licensia-fsb.html' },
        { text: 'Лицензия УК', href: 'license-uk.html' },
        { text: 'Получение лицензии Ростехнадзора', href: 'license-rostechnadzor.html' }
    ];

    // Создаем все меню
    createDropdownMenu('Для Граждан', citizenMenuItems);
    createDropdownMenu('Для бизнеса', businessMenuItems);
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

    // Ваши данные меню (остаются прежними)
    const commonMenuItems = [
        { text: 'Юридическая консультация', href: 'juridicheskaya-konsultacia.html' },
        { text: 'Досудебное урегулирование споров', href: 'dosudebnaya.html' },
        { text: 'Представительство в суде', href: 'sudebnoe-predstavitelstvo.html' },
        { text: 'Исполнительное производство', href: 'ispolnitelnoe-proizvodtvo.html' },
        { text: 'Регистрация товарных знаков', href: 'registracia-tovarnih.html' }
    ];

    const citizenMenuItems = [
        { text: 'Земельные споры', href: 'Zemelni.html' },
        { text: 'Военный юрист', href: 'voen.html' },
        { text: 'Страховой юрист', href: 'strahovie.html' },
        { text: 'Трудовой юрист', href: 'trud.html' },
        { text: 'Жилищный юрист', href: 'doma.html' },
        { text: 'Перевод недвижимости в нежилой фонд', href: 'perevod-v.html' },
        { text: 'Юрист по недвижимости', href: 'Houses.html' },
        { text: 'Защита прав потребителей', href: 'Zachita-prav.html' },
        { text: 'Наследственные дела', href: 'Nasledstvennie.html' },
        { text: 'Семейный юрист', href: 'Semeini.html' },
        { text: "Затопление квартир", href: 'zatoplenie.html' },
        ...commonMenuItems
    ];

    const businessMenuItems = [
        { text: 'Ликвидация организаций', href: 'licvidation.html' },
        { text: 'Арбитраж. Арбитражные споры', href: 'arbitr.html' },
        { text: 'Персональные данные', href: 'persdata.html' },
        { text: 'Юридическое сопровождение', href: 'soprov.html' },
        ...commonMenuItems
    ];

    const licensingMenuItems = [
        { text: 'Получение лицензии на алкоголь', href: 'alcochol.html' },
        { text: 'Получение образовательной лицензии', href: 'obrazovatelnaya.html' },
        { text: 'Получение лицензии на деятельность с отходами', href: 'deyatelnost-s-othodami.html' },
        { text: 'Получение лицензии МЧС', href: 'licensiya-mchs.html' },
        { text: 'Получение медицинской лицензии', href: 'medicinskaya-licensia.html' },
        { text: 'Получение лицензии ФСБ', href: 'licensia-fsb.html' },
        { text: 'Лицензия УК', href: 'license-uk.html' },
        { text: 'Получение лицензии Ростехнадзора', href: 'license-rostechnadzor.html' }
    ];

    // Создаем выпадающие меню
    createDropdownMenu('Для Граждан', citizenMenuItems);
    createDropdownMenu('Для бизнеса', businessMenuItems);
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
                    <a href="index.html" class="mobile-nav-link">Главная</a>
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
                        Для бизнеса
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
