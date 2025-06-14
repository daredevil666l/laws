document.addEventListener('DOMContentLoaded', function () {
    // Анимация заголовка при загрузке страницы
    const title = document.querySelector('.main-title');
    const subtitle = document.querySelector('.subtitle');
    const image = document.querySelector('.main-image-container');

    title.style.opacity = '0';
    subtitle.style.opacity = '0';
    image.style.opacity = '0';

    setTimeout(() => {
        title.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
        title.style.transform = 'translateX(-20px)';
        title.style.opacity = '0';

        setTimeout(() => {
            title.style.opacity = '1';
            title.style.transform = 'translateX(0)';
        }, 200);
    }, 100);

    setTimeout(() => {
        subtitle.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
        subtitle.style.transform = 'translateX(-20px)';
        subtitle.style.opacity = '0';

        setTimeout(() => {
            subtitle.style.opacity = '1';
            subtitle.style.transform = 'translateX(0)';
        }, 200);
    }, 300);

    setTimeout(() => {
        image.style.transition = 'opacity 1s ease';
        image.style.opacity = '1';
    }, 600);

    // Эффект параллакса для изображения
    image.addEventListener('mousemove', function (e) {
        const xPos = (e.clientX / window.innerWidth - 0.5) * 10;
        const yPos = (e.clientY / window.innerHeight - 0.5) * 10;

        const img = this.querySelector('.main-image');
        // img.style.transform = `scale(1.02) translate(${xPos}px, ${yPos}px)`;
    });

    image.addEventListener('mouseleave', function () {
        const img = this.querySelector('.main-image');
        img.style.transform = 'scale(1)';
    });
});


document.addEventListener('DOMContentLoaded', function () {
    // Сначала добавляем CSS стили для класса .visible
    const styleEl = document.createElement('style');
    styleEl.textContent = `
      .visible {
        opacity: 1 !important;
        transform: translateY(0) !important;
      }
    `;
    document.head.appendChild(styleEl);

    // Создаем Observer с улучшенными настройками
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Небольшая задержка перед добавлением класса для гарантии обработки
                setTimeout(() => {
                    entry.target.classList.add('visible');
                }, 100);
            }
        });
    }, {
        threshold: 0.05, // Снижаем порог до 5%
        rootMargin: '0px 0px -50px 0px' // Срабатывает на 50px раньше нижнего края экрана
    });

    // Выбираем все важные элементы для анимации
    const elements = document.querySelectorAll('.content-title, .content-subtitle, .custom-list, .numbered-list, .info-box, .content-quote, .cta-block');

    // Добавляем задержку для правильной инициализации стилей
    setTimeout(() => {
        elements.forEach((element, index) => {
            // Добавляем базовый стиль для анимации
            element.style.opacity = '0';
            element.style.transform = 'translateY(20px)';
            element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';

            // Наблюдаем за элементом
            observer.observe(element);

            // Для первых элементов, которые сразу видны на странице, показываем их с задержкой
            if (index < 3) {
                setTimeout(() => {
                    element.classList.add('visible');
                }, 300 * (index + 1));
            }
        });
    }, 200);
});


document.addEventListener('DOMContentLoaded', function () {
    // Обработчики для главных категорий
    const categoryHeaders = document.querySelectorAll('.category-header');

    categoryHeaders.forEach(header => {
        header.addEventListener('click', function () {
            const parent = this.parentElement;
            const items = parent.querySelector('.category-items');
            const icon = this.querySelector('i');

            items.classList.toggle('collapsed');

            if (items.classList.contains('collapsed')) {
                icon.classList.remove('fa-chevron-up');
                icon.classList.add('fa-chevron-down');
            } else {
                icon.classList.remove('fa-chevron-down');
                icon.classList.add('fa-chevron-up');
            }
        });
    });

    // Обработчики для подменю
    const submenuHeaders = document.querySelectorAll('.submenu-header');

    submenuHeaders.forEach(header => {
        header.addEventListener('click', function (e) {
            e.stopPropagation(); // Предотвращаем всплытие события

            const parent = this.parentElement;
            const items = parent.querySelector('.submenu-items');
            const icon = this.querySelector('i');

            // Переключаем класс для скрытия/показа
            if (items) {
                items.classList.toggle('collapsed');

                if (items.classList.contains('collapsed')) {
                    icon.classList.remove('fa-chevron-up');
                    icon.classList.add('fa-chevron-down');
                } else {
                    icon.classList.remove('fa-chevron-down');
                    icon.classList.add('fa-chevron-up');
                }
            }
        });
    });

    // Подсветка активного пункта меню
    const currentPath = window.location.pathname;
    const menuLinks = document.querySelectorAll('.category-items li a, .submenu-items li a');

    menuLinks.forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('active');

            // Разворачиваем родительское меню, если пункт активен
            const parentCategory = link.closest('.category-items');
            if (parentCategory && parentCategory.classList.contains('collapsed')) {
                const categoryHeader = parentCategory.previousElementSibling;
                categoryHeader.click();
            }

            // Разворачиваем подменю, если пункт активен
            const parentSubmenu = link.closest('.submenu-items');
            if (parentSubmenu && parentSubmenu.classList.contains('collapsed')) {
                const submenuHeader = parentSubmenu.previousElementSibling;
                submenuHeader.click();
            }
        }
    });

    // Эффект анимации при наведении
    const allLinks = document.querySelectorAll('.category-items li a, .submenu-items li a, .article-link');

    allLinks.forEach(link => {
        link.addEventListener('mouseenter', function () {
            this.style.transition = 'all var(--transition-speed)';
        });
    });
});




document.addEventListener('DOMContentLoaded', function () {
    const checkbox = document.getElementById('privacy-policy-checkbox');
    const submitButton = document.querySelector('.form-submit-button'); // Замените на селектор вашей кнопки отправки

    if (checkbox && submitButton) {
        // Изначально кнопка отправки неактивна
        submitButton.disabled = true;

        checkbox.addEventListener('change', function () {
            // Активируем/деактивируем кнопку в зависимости от состояния чекбокса
            submitButton.disabled = !this.checked;
        });
    }
});

document.addEventListener('DOMContentLoaded', function () {
    // Плавный скролл наверх при клике на кнопку
    const backToTopButton = document.getElementById('backToTop');

    if (backToTopButton) {
        backToTopButton.addEventListener('click', function (e) {
            e.preventDefault();

            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Показывать/скрывать кнопку в зависимости от прокрутки
        window.addEventListener('scroll', function () {
            if (window.scrollY > 300) {
                backToTopButton.style.opacity = '1';
                backToTopButton.style.visibility = 'visible';
            } else {
                backToTopButton.style.opacity = '0';
                backToTopButton.style.visibility = 'hidden';
            }
        });
    }
});

// Функция для оживления кнопок и добавления эффектов
document.addEventListener('DOMContentLoaded', function () {
    // Добавляем эффект блеска ко всем кнопкам
    const allButtons = document.querySelectorAll('.cta-button, .callback-btn, .submit-button, .next-btn, .back-btn');

    allButtons.forEach(button => {
        // Добавляем класс для эффекта блеска
        button.classList.add('shine-effect');
        // Добавляем класс для эффекта при наведении
        button.classList.add('button-hover-effect');
    });

    // Добавляем стрелки к кнопкам связи
    const contactButtons = document.querySelectorAll('.cta-button, .callback-btn');

    contactButtons.forEach(button => {
        // Добавляем класс для стилизации
        button.classList.add('contact-arrow-btn');

        // Создаем элемент для стрелки
        const arrowIcon = document.createElement('img');
        arrowIcon.src = 'https://xn----7sbjhqn0bhjc0lk.xn--p1ai/wp-content/themes/laws/img/arrow-top-right.svg';
        arrowIcon.alt = 'Связаться';
        arrowIcon.classList.add('arrow-icon');

        // Добавляем стрелку в кнопку
        button.appendChild(arrowIcon);
    });

    // Добавляем эффект при клике на кнопки
    allButtons.forEach(button => {
        button.addEventListener('click', function (e) {
            // Создаем эффект пульсации при клике
            const ripple = document.createElement('span');
            ripple.classList.add('ripple-effect');

            // Позиционируем эффект в месте клика
            const rect = button.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';

            button.appendChild(ripple);

            // Удаляем эффект после анимации
            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
    });
});

// Добавляем стили для эффекта пульсации при клике
const style = document.createElement('style');
style.textContent = `
    .ripple-effect {
        position: absolute;
        background: rgba(255, 255, 255, 0.4);
        border-radius: 50%;
        pointer-events: none;
        width: 100px;
        height: 100px;
        transform: translate(-50%, -50%) scale(0);
        animation: ripple 0.6s linear;
    }
    
    @keyframes ripple {
        to {
            transform: translate(-50%, -50%) scale(3);
            opacity: 0;
        }
    }
`;
document.head.appendChild(style);


document.addEventListener('DOMContentLoaded', function () {
    // Находим все ссылки nav-link
    const navLinks = document.querySelectorAll('a.nav-link');

    // Ищем ссылку с текстом "Контакты"
    const contactLink = Array.from(navLinks).find(link => link.textContent.trim() === 'Контакты');

    if (contactLink) {
        contactLink.addEventListener('click', function (e) {
            e.preventDefault(); // Предотвращаем стандартное поведение ссылки

            // Находим секцию с контактами
            const contactsSection = document.querySelector('.footer-contacts');

            if (contactsSection) {
                // Плавно прокручиваем к секции контактов
                contactsSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    }
});

document.addEventListener('DOMContentLoaded', function () {
    // Находим кнопку CTA
    const ctaButton = document.querySelector('.cta-button');

    if (ctaButton) {
        ctaButton.addEventListener('click', function (e) {
            e.preventDefault(); // Предотвращаем стандартное поведение, если это ссылка

            // Находим контейнер с квизом
            const quizContainer = document.querySelector('.quiz-container');

            if (quizContainer) {
                // Плавно прокручиваем к квизу
                quizContainer.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    }
});

document.addEventListener('DOMContentLoaded', function () {
    // Находим кнопку CTA
    const arrowButton = document.querySelector('.services-cta-button');

    if (arrowButton) {
        arrowButton.addEventListener('click', function (e) {
            // e.preventDefault(); // Предотвращаем стандартное поведение, если это ссылка

            // Находим контейнер с квизом
            const quizContainer = document.querySelector('.quiz-container');

            if (quizContainer) {
                // Плавно прокручиваем к квизу
                quizContainer.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const statItems = document.querySelectorAll('.stat-item');
    let hasAnimated = false; // Флаг для предотвращения повторных анимаций

    // Функция для анимации счетчика
    function animateCounter(element, target, duration = 2000) {
        const counter = element.querySelector('.counter');
        if (!counter) return;

        const increment = target / (duration / 16);
        let current = 0;

        const timer = setInterval(() => {
            current += increment;

            if (current >= target) {
                current = target;
                clearInterval(timer);
            }

            // Форматирование больших чисел
            if (target >= 1000000000) {
                counter.textContent = Math.floor(current).toLocaleString('ru-RU');
            } else if (target >= 1000) {
                counter.textContent = Math.floor(current).toLocaleString('ru-RU');
            } else {
                counter.textContent = Math.floor(current);
            }
        }, 16);
    }

    // Функция запуска анимации
    function startAnimation() {
        if (hasAnimated) return; // Предотвращаем повторную анимацию

        hasAnimated = true;

        statItems.forEach((item, index) => {
            const target = parseInt(item.dataset.target);

            setTimeout(() => {
                item.classList.add('animated');
                animateCounter(item, target);
            }, index * 200);
        });
    }

    // ИСПРАВЛЕННЫЙ Intersection Observer
    const observerOptions = {
        root: null, // viewport
        rootMargin: '-20% 0px -20% 0px', // Уменьшил margin для лучшего срабатывания
        threshold: 0.3 // Увеличил threshold
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            // ВАЖНО: проверяем что элемент действительно видим И пересекает viewport
            if (entry.isIntersecting && entry.intersectionRatio >= 0.3) {
                console.log('Statistics section is visible!'); // Для отладки
                startAnimation();
                // НЕ отключаем observer, чтобы можно было отладить
                // observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Наблюдаем за секцией статистики
    const statisticsSection = document.querySelector('.statistics-section');
    if (statisticsSection) {
        observer.observe(statisticsSection);

        // ДОПОЛНИТЕЛЬНАЯ проверка на случай если элемент уже видим при загрузке
        setTimeout(() => {
            const rect = statisticsSection.getBoundingClientRect();
            const windowHeight = window.innerHeight || document.documentElement.clientHeight;

            // Если секция уже видна при загрузке страницы
            if (rect.top < windowHeight * 0.8 && rect.bottom > windowHeight * 0.2) {
                console.log('Statistics already visible on load!'); // Для отладки
                startAnimation();
            }
        }, 500); // Небольшая задержка для корректной загрузки
    }

    // FALLBACK: дополнительный обработчик скролла для надежности
    let scrollTimeout;
    window.addEventListener('scroll', function () {
        if (hasAnimated) return;

        clearTimeout(scrollTimeout);
        scrollTimeout = setTimeout(() => {
            const statisticsSection = document.querySelector('.statistics-section');
            if (!statisticsSection) return;

            const rect = statisticsSection.getBoundingClientRect();
            const windowHeight = window.innerHeight || document.documentElement.clientHeight;

            // Проверяем видимость секции
            if (rect.top < windowHeight * 0.8 && rect.bottom > windowHeight * 0.2) {
                console.log('Statistics visible via scroll fallback!'); // Для отладки
                startAnimation();
            }
        }, 100);
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const tabButtons = document.querySelectorAll('.tab-button');
    const servicesGrids = document.querySelectorAll('.services-grid');
    const showMoreBtn = document.querySelector('.show-more-btn');
    const servicesContainer = document.querySelector('.services-container');

    // Количество видимых карточек по умолчанию
    const defaultVisibleCount = 6;

    // Функция для проверки и управления видимостью кнопки
    function toggleShowMoreButton(activeTab) {
        if (!showMoreBtn) return;

        const activeGrid = document.querySelector(`[data-content="${activeTab}"]`);
        if (!activeGrid) return;

        const itemsCount = activeGrid.querySelectorAll('.service-card').length;

        // Скрываем кнопку если элементов меньше или равно видимому количеству
        if (itemsCount <= defaultVisibleCount) {
            showMoreBtn.style.display = 'none';
        } else {
            showMoreBtn.style.display = 'block';
        }

        // Сбрасываем состояние кнопки при переключении табов
        showMoreBtn.classList.remove('expanded');
        showMoreBtn.querySelector('span').textContent = 'Показать все услуги';
        activeGrid.classList.remove('expanded');
    }

    // Переключение табов
    tabButtons.forEach(button => {
        button.addEventListener('click', function () {
            const targetTab = this.getAttribute('data-tab');

            // Удаляем активный класс у всех кнопок
            tabButtons.forEach(btn => btn.classList.remove('active'));

            // Добавляем активный класс к нажатой кнопке
            this.classList.add('active');

            // Скрываем все сетки
            servicesGrids.forEach(grid => {
                grid.classList.remove('active');
            });

            // Показываем нужную сетку
            setTimeout(() => {
                const targetGrid = document.querySelector(`[data-content="${targetTab}"]`);
                if (targetGrid) {
                    targetGrid.classList.add('active');

                    // Обновляем видимость кнопки "Показать больше"
                    toggleShowMoreButton(targetTab);

                    // Обновляем высоту контейнера
                    setTimeout(() => {
                        servicesContainer.style.minHeight = targetGrid.scrollHeight + 'px';
                    }, 100);
                }
            }, 200);
        });
    });

    // Функционал "Показать больше" - ОБНОВЛЕН
    if (showMoreBtn) {
        showMoreBtn.addEventListener('click', function () {
            const activeGrid = document.querySelector('.services-grid.active');
            if (!activeGrid) return;

            const isExpanded = this.classList.contains('expanded');

            if (!isExpanded) {
                activeGrid.classList.add('expanded');
                this.classList.add('expanded');
                this.querySelector('span').textContent = 'Скрыть услуги';

                // Обновляем высоту контейнера
                setTimeout(() => {
                    servicesContainer.style.minHeight = activeGrid.scrollHeight + 'px';
                }, 100);
            } else {
                activeGrid.classList.remove('expanded');
                this.classList.remove('expanded');
                this.querySelector('span').textContent = 'Показать все услуги';

                // Обновляем высоту контейнера
                setTimeout(() => {
                    servicesContainer.style.minHeight = activeGrid.scrollHeight + 'px';
                }, 100);

                // Прокручиваем к началу секции
                document.querySelector('.services-section').scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    }

    // Устанавливаем начальную высоту контейнера и видимость кнопки
    setTimeout(() => {
        const activeGrid = document.querySelector('.services-grid.active');
        if (activeGrid && servicesContainer) {
            servicesContainer.style.minHeight = activeGrid.scrollHeight + 'px';

            // Проверяем активную вкладку и устанавливаем видимость кнопки
            const activeTab = document.querySelector('.tab-button.active');
            if (activeTab) {
                toggleShowMoreButton(activeTab.getAttribute('data-tab'));
            }
        }
    }, 100);
});


document.addEventListener('DOMContentLoaded', function () {
    // Анимация появления этапов при скролле
    const workSteps = document.querySelectorAll('.work-step');

    const observerOptions = {
        threshold: 0.3,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const steps = entry.target.querySelectorAll('.work-step');
                steps.forEach((step, index) => {
                    setTimeout(() => {
                        step.classList.add('animated');
                    }, index * 200);
                });
            }
        });
    }, observerOptions);

    // Наблюдаем за секцией
    const workSection = document.querySelector('.how-we-work-section');
    if (workSection) {
        observer.observe(workSection);
    }

    // Интерактивность для этапов
    workSteps.forEach(step => {
        step.addEventListener('mouseenter', function () {
            // Подсвечиваем соответствующую линию
            const stepNumber = this.getAttribute('data-step');
            const line = document.querySelector(`.line-${stepNumber}`);
            if (line) {
                line.style.opacity = '0.8';
                line.style.transform += ' scale(1.2)';
            }
        });

        step.addEventListener('mouseleave', function () {
            // Возвращаем линию в исходное состояние
            const stepNumber = this.getAttribute('data-step');
            const line = document.querySelector(`.line-${stepNumber}`);
            if (line) {
                line.style.opacity = '';
                line.style.transform = line.style.transform.replace(' scale(1.2)', '');
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');

        question.addEventListener('click', function () {
            const isActive = item.classList.contains('active');

            // Закрываем все открытые элементы
            faqItems.forEach(otherItem => {
                otherItem.classList.remove('active');
            });

            // Если элемент не был активным, открываем его
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });

    // Анимация появления при скролле
    const observerOptions = {
        threshold: 0.2,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const faqItems = entry.target.querySelectorAll('.faq-item');
                faqItems.forEach((item, index) => {
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'translateY(0)';
                    }, index * 150);
                });
            }
        });
    }, observerOptions);

    // Изначально скрываем элементы для анимации
    faqItems.forEach(item => {
        item.style.opacity = '0';
        item.style.transform = 'translateY(30px)';
        item.style.transition = 'all 0.6s ease';
    });

    // Наблюдаем за секцией
    const faqSection = document.querySelector('.faq-section');
    if (faqSection) {
        observer.observe(faqSection);
    }
});

// ... existing code ...

// Добавляем шрифт Pacifico из Google Fonts
const link = document.createElement('link');
link.rel = 'stylesheet';
link.href = 'https://fonts.googleapis.com/css2?family=Great+Vibes&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap';
document.head.appendChild(link);

// Создаем новый элемент link для favicon
const favicon = document.createElement('link');
favicon.rel = 'icon';
favicon.type = 'image/x-icon';
favicon.href = 'https://xn----7sbjhqn0bhjc0lk.xn--p1ai/wp-content/themes/laws/img/favicon.ico';

// Добавляем элемент в head документа
document.head.appendChild(favicon);

// Применяем шрифт к слогану
const companySlogan = document.querySelector('.company-slogan');
if (companySlogan) {
    companySlogan.style.fontFamily = '"Great Vibes", cursive';
    companySlogan.style.fontSize = '24px';
    companySlogan.style.letterSpacing = '1px';
    companySlogan.style.marginTop = '10px';
}


// ... existing code ...

// Обработка клика по логотипу
document.addEventListener('DOMContentLoaded', function () {
    const logoWrapper = document.querySelector('.logo-wrapper');
    if (logoWrapper) {
        logoWrapper.addEventListener('click', function (e) {
            e.preventDefault(); // Предотвращаем стандартное поведение ссылки
            window.location.href = 'https://xn----7sbjhqn0bhjc0lk.xn--p1ai/';
        });

        // Добавляем стиль курсора, чтобы показать, что элемент кликабельный
        logoWrapper.style.cursor = 'pointer';
    }
});


document.addEventListener('DOMContentLoaded', function () {
    // Находим кнопку CTA
    const callButton = document.querySelector('.callback-btn');

    if (callButton) {
        callButton.addEventListener('click', function (e) {
            // e.preventDefault(); // Предотвращаем стандартное поведение, если это ссылка

            // Находим контейнер с квизом
            const quizContainer = document.querySelector('.quiz-container');

            if (quizContainer) {
                // Плавно прокручиваем к квизу
                quizContainer.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    }
});



// Создаем новый meta тег
const viewportMeta = document.createElement('meta');
viewportMeta.name = 'viewport';
viewportMeta.content = 'width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes';

// Добавляем meta тег в head
document.head.appendChild(viewportMeta);


document.addEventListener('DOMContentLoaded', function () {
    // Функция для создания и управления кнопкой обратного звонка
    function initCallbackButton() {
        // Находим или создаем кнопку
        let callbackBtn = document.querySelector('.mobile-callback-btn-auto');

        // Если кнопки нет, создаем ее
        if (!callbackBtn) {
            callbackBtn = document.createElement('a');
            callbackBtn.href = '#';
            callbackBtn.className = 'mobile-callback-btn-auto';
            callbackBtn.textContent = 'Звонок';
            callbackBtn.setAttribute('aria-label', 'Заказать обратный звонок');

            // Добавляем обработчик клика
            callbackBtn.addEventListener('click', function (e) {
                e.preventDefault();

                // Ищем существующую кнопку обратного звонка в header
                const existingCallbackBtn = document.querySelector('.callback-btn');
                if (existingCallbackBtn) {
                    existingCallbackBtn.click();
                } else {
                    // Если нет, можно добавить свою логику
                    alert('Свяжитесь с нами: +7 (473) 295-48-24');
                }
            });

            // Добавляем кнопку в body
            document.body.appendChild(callbackBtn);
            console.log('✅ Кнопка mobile-callback-btn-auto создана');
        }

        // Находим header для определения его высоты
        const header = document.querySelector('.main-header');
        const headerHeight = header ? header.offsetHeight : 100;

        let isVisible = false;

        // Функция для показа/скрытия кнопки
        // Обновите функцию toggleButton в script.js
        function toggleButton() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            const windowWidth = window.innerWidth || document.documentElement.clientWidth;

            // Показываем кнопку только на мобильных и после прокрутки header
            if (windowWidth <= 768 && scrollTop > headerHeight && !isVisible) {
                isVisible = true;

                // ПЛАВНОЕ появление
                callbackBtn.style.transition = 'opacity 0.6s ease-in-out, transform 0.6s ease-in-out';
                callbackBtn.classList.add('show');

                console.log('✅ Плавно показываем кнопку слева');
            } else if ((scrollTop <= headerHeight || windowWidth > 768) && isVisible) {
                isVisible = false;

                // ПЛАВНОЕ исчезновение
                callbackBtn.style.transition = 'opacity 0.4s ease-in-out, transform 0.4s ease-in-out';
                callbackBtn.classList.remove('show');

                console.log('❌ Плавно скрываем кнопку');
            }
        }

        // Добавляем обработчики событий
        window.addEventListener('scroll', toggleButton);
        window.addEventListener('resize', toggleButton);

        // Начальная проверка
        setTimeout(toggleButton, 100);

        console.log('🚀 Система кнопки обратного звонка инициализирована', {
            headerHeight: headerHeight,
            buttonElement: callbackBtn
        });
    }

    // Инициализируем кнопку
    initCallbackButton();
});


const addMobileLogoStyles = () => {
    const styleSheet = document.createElement('style');
    styleSheet.textContent = `
        @media (max-width: 480px) {
            .footer-logo img {
                width: 80px;
                height: auto;
            }
        }
        
        @media (max-width: 320px) {
            .footer-logo img {
                width: 60px;
                height: auto;
            }
            .footer-logo {
                margin-bottom: 10px;
            }
        }
    `;
    document.head.appendChild(styleSheet);
};

// Вызываем функцию при загрузке страницы
document.addEventListener('DOMContentLoaded', addMobileLogoStyles);

// Дополнительная логика для слайдера партнеров
document.addEventListener('DOMContentLoaded', function () {
    function initPartnersSlider() {
        const partnersSection = document.querySelector('.partners-section');
        const partnersTrack = document.querySelector('.partners-track');

        if (!partnersSection || !partnersTrack) return;

        // Плавное появление при скролле
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, {
            threshold: 0.2
        });

        // Начальное состояние
        partnersSection.style.opacity = '0';
        partnersSection.style.transform = 'translateY(30px)';
        partnersSection.style.transition = 'all 0.8s ease';

        observer.observe(partnersSection);

        // Адаптивная скорость анимации
        function adjustAnimationSpeed() {
            const screenWidth = window.innerWidth;
            let duration;

            if (screenWidth <= 480) {
                duration = '20s';
            } else if (screenWidth <= 768) {
                duration = '25s';
            } else {
                duration = '30s';
            }

            partnersTrack.style.animationDuration = duration;
        }

        adjustAnimationSpeed();
        window.addEventListener('resize', adjustAnimationSpeed);

        console.log('✅ Слайдер партнеров инициализирован');
    }

    initPartnersSlider();
});


// БЕСКОНЕЧНАЯ прокрутка партнеров в обе стороны
document.addEventListener('DOMContentLoaded', function () {
    function initInfiniteScroll() {
        const slider = document.querySelector('.partners-slider');
        const track = document.querySelector('.partners-track');

        if (!slider || !track) return;

        let isDragging = false;
        let startX = 0;
        let currentX = 0;
        let autoScrollPosition = 0;
        let animationId = null;

        // Вычисляем размеры
        const partnerItems = track.querySelectorAll('.partner-item');
        const itemCount = partnerItems.length / 3; // У нас 3 копии по 10 элементов
        const itemWidth = 220 + 30; // ширина + gap
        const sectionWidth = itemWidth * itemCount;

        // Начальная позиция - по центру (средняя копия)
        autoScrollPosition = -sectionWidth;
        track.style.transform = `translateX(${autoScrollPosition}px)`;

        console.log('Инициализация:', { itemCount, itemWidth, sectionWidth, startPosition: autoScrollPosition });

        // Отключаем CSS анимацию
        track.style.animation = 'none';

        // Функция для проверки и исправления позиции (бесконечная прокрутка)
        function checkInfiniteLoop() {
            // Если ушли слишком далеко вправо - перепрыгиваем к левой копии
            if (autoScrollPosition > 0) {
                autoScrollPosition = -sectionWidth * 2;
                track.style.transform = `translateX(${autoScrollPosition}px)`;
                console.log('Перепрыгнули к левой копии');
            }
            // Если ушли слишком далеко влево - перепрыгиваем к правой копии
            else if (autoScrollPosition < -sectionWidth * 2) {
                autoScrollPosition = 0;
                track.style.transform = `translateX(${autoScrollPosition}px)`;
                console.log('Перепрыгнули к правой копии');
            }
        }

        // Автоматическая прокрутка
        function autoScroll() {
            if (!isDragging) {
                autoScrollPosition -= 1; // Скорость автопрокрутки
                track.style.transform = `translateX(${autoScrollPosition}px)`;
                checkInfiniteLoop();
            }
            animationId = requestAnimationFrame(autoScroll);
        }

        autoScroll();

        // Начало перетаскивания
        function startDrag(e) {
            isDragging = true;
            slider.style.cursor = 'grabbing';

            startX = e.type.includes('mouse') ? e.pageX : e.touches[0].pageX;

            // Запоминаем текущую позицию
            const transform = track.style.transform;
            const match = transform.match(/translateX\(([^)]+)px\)/);
            if (match) {
                autoScrollPosition = parseFloat(match[1]);
            }

            e.preventDefault();
        }

        // Процесс перетаскивания
        function drag(e) {
            if (!isDragging) return;

            e.preventDefault();

            currentX = e.type.includes('mouse') ? e.pageX : e.touches[0].pageX;
            const deltaX = currentX - startX;
            const newPosition = autoScrollPosition + deltaX;

            track.style.transform = `translateX(${newPosition}px)`;
        }

        // Конец перетаскивания
        function stopDrag() {
            if (!isDragging) return;

            isDragging = false;
            slider.style.cursor = 'grab';

            // Обновляем позицию для автопрокрутки
            const transform = track.style.transform;
            const match = transform.match(/translateX\(([^)]+)px\)/);
            if (match) {
                autoScrollPosition = parseFloat(match[1]);
            }

            // Проверяем бесконечность
            checkInfiniteLoop();
        }

        // События
        slider.addEventListener('mousedown', startDrag);
        document.addEventListener('mousemove', drag);
        document.addEventListener('mouseup', stopDrag);

        slider.addEventListener('touchstart', startDrag, { passive: false });
        document.addEventListener('touchmove', drag, { passive: false });
        slider.addEventListener('touchend', stopDrag);

        slider.addEventListener('selectstart', e => e.preventDefault());

        console.log('✅ Бесконечная прокрутка инициализирована');
    }

    initInfiniteScroll();
});

document.addEventListener('DOMContentLoaded', function() {
    console.log('✅ Инициализация квиза');
    
    // Элементы квиза
    const form = document.querySelector('.quiz-container');
    const steps = document.querySelectorAll('.quiz-step');
    const progressFill = document.querySelector('.progress-fill');
    const progressText = document.querySelector('.progress-text');
    const nextBtns = document.querySelectorAll('.next-btn');
    const backBtns = document.querySelectorAll('.back-btn');
    const submitButton = document.querySelector('.submit-button');
    
    // Проверка существования элементов
    if (!form) {
        console.error('Форма квиза не найдена');
        return;
    }
    
    if (steps.length === 0) {
        console.error('Шаги квиза не найдены');
        return;
    }
    
    // Переменные состояния
    let currentStep = 1;
    const totalSteps = steps.length;
    const quizData = {}; // Единый объект для хранения данных
    
    // Функция для отправки событий в Яндекс.Метрику
    function sendYandexMetricaEvent(goalId, params = {}) {
        if (typeof ym !== 'undefined') {
            ym(102554079, 'reachGoal', goalId, params);
            console.log('Отправлено событие в Метрику:', goalId, params);
        } else {
            console.warn('Яндекс Метрика не загружена');
        }
    }
    
    // Обновление прогресс-бара
    function updateProgress() {
        const progress = Math.round((currentStep / totalSteps) * 100);
        if (progressFill) {
            progressFill.style.width = progress + '%';
        }
        if (progressText) {
            progressText.textContent = `Расчет пройден на ${progress}%`;
        }
    }
    
    // Переход к следующему шагу с анимацией
    function goToNextStep() {
        if (currentStep < totalSteps) {
            const currentStepEl = document.querySelector(`.quiz-step[data-step="${currentStep}"]`);
            const nextStep = currentStep + 1;
            const nextStepEl = document.querySelector(`.quiz-step[data-step="${nextStep}"]`);
            
            if (currentStepEl && nextStepEl) {
                // Анимация скрытия текущего шага
                currentStepEl.style.opacity = '0';
                currentStepEl.style.transform = 'translateY(10px)';
                
                setTimeout(() => {
                    currentStepEl.classList.remove('active');
                    nextStepEl.classList.add('active');
                    currentStep = nextStep;
                    
                    // Анимация показа следующего шага
                    setTimeout(() => {
                        nextStepEl.style.opacity = '1';
                        nextStepEl.style.transform = 'translateY(0)';
                    }, 50);
                    
                    updateProgress();
                    
                    // Скролл к началу квиза
                    form.scrollIntoView({ behavior: 'smooth' });
                }, 300);
            }
        }
    }
    
    // Возврат к предыдущему шагу
    function goToPreviousStep() {
        if (currentStep > 1) {
            const currentStepEl = document.querySelector(`.quiz-step[data-step="${currentStep}"]`);
            const prevStep = currentStep - 1;
            const prevStepEl = document.querySelector(`.quiz-step[data-step="${prevStep}"]`);
            
            if (currentStepEl && prevStepEl) {
                currentStepEl.style.opacity = '0';
                currentStepEl.style.transform = 'translateY(10px)';
                
                setTimeout(() => {
                    currentStepEl.classList.remove('active');
                    prevStepEl.classList.add('active');
                    currentStep = prevStep;
                    
                    setTimeout(() => {
                        prevStepEl.style.opacity = '1';
                        prevStepEl.style.transform = 'translateY(0)';
                    }, 50);
                    
                    updateProgress();
                    form.scrollIntoView({ behavior: 'smooth' });
                }, 300);
            }
        }
    }
    
    // Показ анимации пульсации для привлечения внимания
    function showPulseAnimation(element) {
        if (element) {
            element.style.animation = 'pulse 0.5s';
            setTimeout(() => {
                element.style.animation = '';
            }, 500);
        }
    }
    
    // Обработка выбора опций (карточки)
    function handleOptionCardClick(card) {
        const step = card.closest('.quiz-step');
        const stepNumber = parseInt(step.dataset.step);
        
        // Снимаем выделение со всех карточек в этом шаге
        step.querySelectorAll('.option-card').forEach(c => c.classList.remove('selected'));
        
        // Выделяем выбранную карточку
        card.classList.add('selected');
        
        // Сохраняем ответ
        quizData[`question${stepNumber}`] = card.dataset.value;
        
        // Отправляем событие в Яндекс.Метрику
        const optionTitle = card.querySelector('.option-title')?.textContent || '';
        sendYandexMetricaEvent(`quiz_step${stepNumber}_complete`, {
            quiz_step: stepNumber,
            selected_value: card.dataset.value,
            option_title: optionTitle
        });
        
        // Автоматический переход к следующему шагу
        setTimeout(goToNextStep, 500);
    }
    
    // Обработка выбора опций (список)
    function handleOptionItemClick(item) {
        const step = item.closest('.quiz-step');
        const stepNumber = parseInt(step.dataset.step);
        
        // Снимаем выделение со всех элементов в этом шаге
        step.querySelectorAll('.option-item').forEach(i => i.classList.remove('selected'));
        
        // Выделяем выбранный элемент
        item.classList.add('selected');
        
        // Сохраняем ответ
        quizData[`question${stepNumber}`] = item.dataset.value;
        
        // Отправляем событие в Яндекс.Метрику
        const optionText = item.querySelector('.option-text')?.textContent || '';
        sendYandexMetricaEvent(`quiz_step${stepNumber}_complete`, {
            quiz_step: stepNumber,
            selected_value: item.dataset.value,
            option_text: optionText
        });
    }
    
    // Обработка выбора мессенджера
    function handleMessengerClick(option) {
        // Снимаем выделение со всех мессенджеров
        document.querySelectorAll('.messenger-option').forEach(o => o.classList.remove('selected'));
        
        // Выделяем выбранный мессенджер
        option.classList.add('selected');
        
        // Сохраняем выбор
        quizData.messenger = option.dataset.messenger;
        
        // Обновляем скрытое поле
        const messengerField = document.getElementById('messenger');
        if (messengerField) {
            messengerField.value = option.dataset.messenger;
        }
        
        // Отправляем событие в Яндекс.Метрику
        const messengerName = option.querySelector('.messenger-name')?.textContent || '';
        sendYandexMetricaEvent('quiz_messenger_selected', {
            selected_messenger: option.dataset.messenger,
            messenger_name: messengerName
        });
    }
    
    // Валидация формы
    function validateForm() {
        const nameInput = document.querySelector('input[name="name"]');
        const phoneInput = document.querySelector('input[name="phone"]');
        const checkbox = document.querySelector('#privacy-policy-checkbox');
        const selectedMessenger = document.querySelector('.messenger-option.selected');
        
        // Проверка имени
        if (!nameInput || !nameInput.value.trim()) {
            if (nameInput) {
                nameInput.style.borderColor = '#e31e24';
                showPulseAnimation(nameInput);
                setTimeout(() => {
                    nameInput.style.borderColor = '';
                }, 500);
            }
            return false;
        }
        
        // Проверка телефона
        if (!phoneInput || !phoneInput.value.trim()) {
            if (phoneInput) {
                phoneInput.style.borderColor = '#e31e24';
                showPulseAnimation(phoneInput);
                setTimeout(() => {
                    phoneInput.style.borderColor = '';
                }, 500);
            }
            return false;
        }
        
        // Проверка согласия
        if (!checkbox || !checkbox.checked) {
            const checkboxContainer = document.querySelector('.checkbox-wrapper');
            if (checkboxContainer) {
                checkboxContainer.style.color = '#e31e24';
                showPulseAnimation(checkboxContainer);
                setTimeout(() => {
                    checkboxContainer.style.color = '';
                }, 500);
            }
            return false;
        }
        
        // Проверка выбора мессенджера
        if (!selectedMessenger) {
            const messengerContainer = document.querySelector('.messenger-options');
            if (messengerContainer) {
                showPulseAnimation(messengerContainer);
            }
            return false;
        }
        
        return true;
    }
    
    // Функция показа уведомления об успехе
    function showSuccessNotification() {
        const successNotification = document.createElement('div');
        successNotification.className = 'success-notification';
        successNotification.innerHTML = `
            <div class="notification-icon">
                <i class="fas fa-check-circle"></i>
            </div>
            <div class="notification-content">
                <div class="notification-title">Заявка принята!</div>
                <div class="notification-text">Юрист свяжется с вами в течение 45 минут</div>
            </div>
            <div class="notification-close">
                <i class="fas fa-times"></i>
            </div>
        `;
        
        successNotification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: linear-gradient(135deg, #28a745, #20c997);
            color: white;
            padding: 20px 25px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            gap: 15px;
            max-width: 350px;
            box-shadow: 0 8px 25px rgba(40, 167, 69, 0.3);
            z-index: 9999;
            animation: slideIn 0.5s ease-out;
        `;
        
        document.body.appendChild(successNotification);
        
        // Обработчик закрытия
        const closeBtn = successNotification.querySelector('.notification-close');
        closeBtn.addEventListener('click', () => {
            successNotification.remove();
        });
        
        // Автоматическое удаление через 7 секунд
        setTimeout(() => {
            if (successNotification.parentNode) {
                successNotification.remove();
            }
        }, 7000);
    }
    
    // Привязка обработчиков событий
    function bindEvents() {
        // Обработчики для карточек опций
        document.querySelectorAll('.option-card').forEach(card => {
            card.addEventListener('click', () => handleOptionCardClick(card));
        });
        
        // Обработчики для элементов списка
        document.querySelectorAll('.option-item').forEach(item => {
            item.addEventListener('click', () => handleOptionItemClick(item));
        });
        
        // Обработчики для мессенджеров
        document.querySelectorAll('.messenger-option').forEach(option => {
            option.addEventListener('click', () => handleMessengerClick(option));
        });
        
        // Кнопки "Далее"
        nextBtns.forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                
                const step = this.closest('.quiz-step');
                const stepNumber = parseInt(step.dataset.step);
                
                // Проверяем, был ли сделан выбор
                if (!quizData[`question${stepNumber}`]) {
                    const optionsList = step.querySelector('.options-list') || step.querySelector('.option-cards');
                    showPulseAnimation(optionsList);
                    return;
                }
                
                goToNextStep();
            });
        });
        
        // Кнопки "Назад"
        backBtns.forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                goToPreviousStep();
            });
        });
        
        // Обработчик отправки формы (ИСПРАВЛЕННАЯ ВЕРСИЯ)
        if (form) {
            form.addEventListener('submit', async function(e) {
                e.preventDefault();
                e.stopPropagation();
                
                // Проверяем, что это форма квиза
                if (!this.classList.contains('quiz-container')) {
                    return;
                }
                
                // Проверяем, что модальное окно не открыто
                if (document.querySelector('.callback-modal-overlay.active')) {
                    console.log('Модальное окно открыто, отменяем отправку квиза');
                    return;
                }
                
                console.log('=== ОТПРАВКА ФОРМЫ КВИЗА ===');
                
                // Валидация формы
                if (!validateForm()) {
                    console.log('Форма не прошла валидацию');
                    return;
                }
                
                // Собираем данные формы
                const nameInput = document.querySelector('input[name="name"]');
                const phoneInput = document.querySelector('input[name="phone"]');
                
                quizData.name = nameInput.value.trim();
                quizData.phone = phoneInput.value.trim();
                
                console.log('Данные квиза перед отправкой:', quizData);
                
                // ИСПРАВЛЕННАЯ ПОДГОТОВКА ДАННЫХ
                const formData = new FormData();
                
                // Добавляем основные поля
                formData.append('name', quizData.name);
                formData.append('phone', quizData.phone);
                formData.append('messenger', quizData.messenger || '');
                formData.append('form_type', 'quiz_form');
                
                // ПРАВИЛЬНО ФОРМИРУЕМ JSON ДЛЯ ОТПРАВКИ
                const quizDataForSending = {
                    question1: quizData.question1 || '',
                    question2: quizData.question2 || '',
                    question3: quizData.question3 || '',
                    messenger: quizData.messenger || '',
                    name: quizData.name,
                    phone: quizData.phone
                };
                
                const jsonString = JSON.stringify(quizDataForSending);
                console.log('JSON строка для отправки:', jsonString);
                
                formData.append('quiz_data', jsonString);
                
                // Отладка FormData
                console.log('FormData содержит:');
                for (let [key, value] of formData.entries()) {
                    console.log(key + ':', value);
                }
                
                // Анимация отправки
                if (submitButton) {
                    submitButton.style.pointerEvents = 'none';
                    const submitButtonText = submitButton.querySelector('span');
                    const submitButtonIcon = submitButton.querySelector('i');
                    
                    if (submitButtonText) submitButtonText.textContent = 'Отправка...';
                    if (submitButtonIcon) submitButtonIcon.className = 'fas fa-spinner fa-spin';
                }
                
                try {
                    console.log('Отправляем запрос на send_email.php...');
                    
                    const response = await fetch('https://xn----7sbjhqn0bhjc0lk.xn--p1ai/wp-content/themes/laws/send_email.php', {
                        method: 'POST',
                        body: formData
                    });
                    
                    console.log('Статус ответа:', response.status);
                    
                    if (!response.ok) {
                        const errorText = await response.text();
                        console.error('Ошибка сервера:', errorText);
                        throw new Error(`HTTP ${response.status}: ${errorText}`);
                    }
                    
                    const result = await response.json();
                    console.log('Результат:', result);
                    
                    if (result.error === '') {
                        // Успешная отправка
                        if (submitButton) {
                            const submitButtonText = submitButton.querySelector('span');
                            const submitButtonIcon = submitButton.querySelector('i');
                            
                            if (submitButtonText) submitButtonText.textContent = 'Отправлено!';
                            if (submitButtonIcon) submitButtonIcon.className = 'fas fa-check';
                            submitButton.style.backgroundColor = '#28a745';
                        }
                        
                        // Отправляем событие в Яндекс.Метрику
                        sendYandexMetricaEvent('quiz_form_submitted', quizDataForSending);
                        
                        // Показываем уведомление
                        showSuccessNotification();
                        
                        console.log('✅ Форма квиза успешно отправлена');
                        
                    } else {
                        throw new Error(result.error);
                    }
                    
                } catch (error) {
                    console.error('Ошибка отправки:', error);
                    
                    if (submitButton) {
                        const submitButtonText = submitButton.querySelector('span');
                        const submitButtonIcon = submitButton.querySelector('i');
                        
                        if (submitButtonText) submitButtonText.textContent = 'Ошибка';
                        if (submitButtonIcon) submitButtonIcon.className = 'fas fa-exclamation-triangle';
                        submitButton.style.backgroundColor = '#dc3545';
                    }
                    
                    // Показываем ошибку пользователю
                    alert('Произошла ошибка при отправке формы: ' + error.message);
                }
                
                // Восстановление кнопки через 3 секунды
                if (submitButton) {
                    setTimeout(() => {
                        const submitButtonText = submitButton.querySelector('span');
                        const submitButtonIcon = submitButton.querySelector('i');
                        
                        if (submitButtonText) submitButtonText.textContent = 'Получить расчет';
                        if (submitButtonIcon) submitButtonIcon.className = 'fas fa-arrow-right';
                        submitButton.style.backgroundColor = '';
                        submitButton.style.pointerEvents = 'auto';
                    }, 3000);
                }
            });
        }
    }
    
    // Инициализация
    function init() {
        // Привязываем события
        bindEvents();
        
        // Устанавливаем начальные стили для всех шагов
        steps.forEach(step => {
            step.style.opacity = '0';
            step.style.transform = 'translateY(10px)';
            step.style.transition = 'all 0.3s ease';
        });
        
        // Показываем первый шаг с анимацией
        setTimeout(() => {
            const firstStep = document.querySelector('.quiz-step[data-step="1"]');
            if (firstStep) {
                firstStep.classList.add('active');
                firstStep.style.opacity = '1';
                firstStep.style.transform = 'translateY(0)';
            }
        }, 100);
        
        // Инициализируем прогресс
        updateProgress();
        
        console.log('✅ Квиз успешно инициализирован');
    }
    
    // Запускаем инициализацию
    init();
});

// Добавляем CSS анимации
const quizStyles = document.createElement('style');
quizStyles.textContent = `
    @keyframes slideIn {
        from { opacity: 0; transform: translateX(100%); }
        to { opacity: 1; transform: translateX(0); }
    }
    
    @keyframes slideOut {
        from { opacity: 1; transform: translateX(0); }
        to { opacity: 0; transform: translateX(100%); }
    }
    
    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
    }
    
    .notification-icon { font-size: 24px; flex-shrink: 0; }
    .notification-content { flex: 1; }
    .notification-title { font-size: 16px; font-weight: 700; margin-bottom: 5px; }
    .notification-text { font-size: 14px; opacity: 0.9; }
    .notification-close { cursor: pointer; padding: 5px; border-radius: 50%; transition: background 0.3s ease; }
    .notification-close:hover { background: rgba(255, 255, 255, 0.2); }
`;
document.head.appendChild(quizStyles);
