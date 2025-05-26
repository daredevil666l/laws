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


