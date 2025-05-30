// Функция для отправки событий в Яндекс Метрику
function sendYandexMetricaEvent(goalId, params = {}) {
    if (typeof ym !== 'undefined') {
        ym(102159330, 'reachGoal', goalId, params);
        console.log('Отправлено событие в Метрику:', goalId, params);
    } else {
        console.warn('Яндекс Метрика не загружена');
    }
}


document.addEventListener('DOMContentLoaded', function () {
    // Переменные
    const cityNameElement = document.getElementById('cityName');
    const cityModal = document.getElementById('cityModal');
    const modalOverlay = document.getElementById('modalOverlay');
    const closeModal = document.getElementById('closeModal');
    const cancelCitySelection = document.getElementById('cancelCitySelection');
    const cityItems = document.querySelectorAll('.city-item');
    const dropdownToggles = document.querySelectorAll('.dropdown-toggle');

    // Открытие модального окна по клику на имя города
    cityNameElement.addEventListener('click', function () {
        cityModal.classList.add('active');
        modalOverlay.classList.add('active');
        document.body.style.overflow = 'hidden'; // Блокировка прокрутки
    });

    // Закрытие модального окна
    function closeModalWindow() {
        cityModal.classList.remove('active');
        modalOverlay.classList.remove('active');
        document.body.style.overflow = ''; // Разблокировка прокрутки
    }

    closeModal.addEventListener('click', closeModalWindow);
    cancelCitySelection.addEventListener('click', closeModalWindow);
    modalOverlay.addEventListener('click', closeModalWindow);

    // Выбор города
    cityItems.forEach(item => {
        item.addEventListener('click', function (e) {
            e.preventDefault();

            const cityName = this.textContent;
            cityNameElement.textContent = cityName + ' ';

            // Добавляем иконку стрелки после текста
            const arrowIcon = document.createElement('i');
            arrowIcon.className = 'fas fa-chevron-down';
            cityNameElement.appendChild(arrowIcon);

            // Сохраняем выбранный город в localStorage
            localStorage.setItem('selectedCity', cityName);

            closeModalWindow();
        });
    });

    // Инициализация города из localStorage при загрузке страницы
    const savedCity = localStorage.getItem('selectedCity');
    if (savedCity) {
        cityNameElement.textContent = savedCity + ' ';

        // Добавляем иконку стрелки после текста
        const arrowIcon = document.createElement('i');
        arrowIcon.className = 'fas fa-chevron-down';
        cityNameElement.appendChild(arrowIcon);
    }

    // Для мобильных устройств - обработка клика на dropdown-toggle
    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', function (e) {
            if (window.innerWidth <= 768) {
                e.preventDefault();
                const parent = this.parentElement;
                const dropdownMenu = parent.querySelector('.dropdown-menu');

                // Закрываем все другие открытые меню
                document.querySelectorAll('.nav-item.dropdown').forEach(item => {
                    if (item !== parent && item.classList.contains('active')) {
                        item.classList.remove('active');
                        item.querySelector('.dropdown-menu').style.display = 'none';
                    }
                });

                // Переключаем текущее меню
                parent.classList.toggle('active');

                if (parent.classList.contains('active')) {
                    dropdownMenu.style.display = 'block';
                    setTimeout(() => {
                        dropdownMenu.style.opacity = '1';
                        dropdownMenu.style.transform = 'translateY(0)';
                    }, 10);
                } else {
                    dropdownMenu.style.opacity = '0';
                    dropdownMenu.style.transform = 'translateY(10px)';
                    setTimeout(() => {
                        dropdownMenu.style.display = 'none';
                    }, 300);
                }
            }
        });
    });
});


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
    // Элементы для работы с тестом
    const progressFill = document.querySelector('.progress-fill');
    const progressText = document.querySelector('.progress-text');
    const quizSteps = document.querySelectorAll('.quiz-step');
    const nextButtons = document.querySelectorAll('.next-btn');
    const backButtons = document.querySelectorAll('.back-btn');
    const optionCards = document.querySelectorAll('.option-card');
    const optionItems = document.querySelectorAll('.option-item');
    const messengerOptions = document.querySelectorAll('.messenger-option');
    const submitButton = document.querySelector('.submit-button');

    // Общее количество шагов
    const totalSteps = quizSteps.length;
    let currentStep = 1;

    // Объект для хранения ответов пользователя
    const userAnswers = {};

    // Обновление прогресс-бара
    function updateProgress() {
        const progress = Math.round((currentStep / totalSteps) * 100);
        progressFill.style.width = progress + '%';
        progressText.textContent = `Расчет пройден на ${progress}%`;
    }

    // Переход к следующему шагу с анимацией
    function goToNextStep() {
        if (currentStep < totalSteps) {
            // Плавно скрываем текущий шаг
            const currentStepEl = document.querySelector(`.quiz-step[data-step="${currentStep}"]`);
            currentStepEl.style.opacity = '0';
            currentStepEl.style.transform = 'translateY(10px)';

            setTimeout(() => {
                // Скрываем текущий шаг
                currentStepEl.classList.remove('active');

                // Показываем следующий шаг
                currentStep++;
                const nextStepEl = document.querySelector(`.quiz-step[data-step="${currentStep}"]`);
                nextStepEl.classList.add('active');

                // Плавно показываем следующий шаг
                setTimeout(() => {
                    nextStepEl.style.opacity = '1';
                    nextStepEl.style.transform = 'translateY(0)';
                }, 50);

                // Обновляем прогресс
                updateProgress();

                // Скроллим к началу теста
                document.querySelector('.quiz-container').scrollIntoView({ behavior: 'smooth' });
            }, 300);
        }
    }

    // Возврат к предыдущему шагу с анимацией
    function goToPreviousStep() {
        if (currentStep > 1) {
            // Плавно скрываем текущий шаг
            const currentStepEl = document.querySelector(`.quiz-step[data-step="${currentStep}"]`);
            currentStepEl.style.opacity = '0';
            currentStepEl.style.transform = 'translateY(10px)';

            setTimeout(() => {
                // Скрываем текущий шаг
                currentStepEl.classList.remove('active');

                // Показываем предыдущий шаг
                currentStep--;
                const prevStepEl = document.querySelector(`.quiz-step[data-step="${currentStep}"]`);
                prevStepEl.classList.add('active');

                // Плавно показываем предыдущий шаг
                setTimeout(() => {
                    prevStepEl.style.opacity = '1';
                    prevStepEl.style.transform = 'translateY(0)';
                }, 50);

                // Обновляем прогресс
                updateProgress();

                // Скроллим к началу теста
                document.querySelector('.quiz-container').scrollIntoView({ behavior: 'smooth' });
            }, 300);
        }
    }

    // Обработчики клика на карточки опций
    // Обработчики клика на карточки опций
    optionCards.forEach(card => {
        card.addEventListener('click', function () {
            // Находим все карточки в текущем шаге
            const stepCards = this.closest('.quiz-step').querySelectorAll('.option-card');

            // Снимаем выделение со всех карточек
            stepCards.forEach(c => c.classList.remove('selected'));

            // Выделяем выбранную карточку
            this.classList.add('selected');

            // Сохраняем ответ пользователя
            const stepNumber = parseInt(this.closest('.quiz-step').dataset.step);
            userAnswers[`step${stepNumber}`] = this.dataset.value;

            // Отправляем событие в Яндекс Метрику
            if (stepNumber === 1) {
                sendYandexMetricaEvent('quiz_step1_complete', {
                    quiz_step: stepNumber,
                    legal_help_type: this.dataset.value,
                    option_title: this.querySelector('.option-title').textContent
                });
            }

            // Автоматический переход к следующему шагу через небольшую задержку
            setTimeout(goToNextStep, 500);
        });
    });

    // Обработчики клика на элементы списка опций
    optionItems.forEach(item => {
        item.addEventListener('click', function () {
            // Находим все элементы в текущем шаге
            const stepItems = this.closest('.quiz-step').querySelectorAll('.option-item');

            // Снимаем выделение со всех элементов
            stepItems.forEach(i => i.classList.remove('selected'));

            // Выделяем выбранный элемент
            this.classList.add('selected');

            // Сохраняем ответ пользователя
            const stepNumber = parseInt(this.closest('.quiz-step').dataset.step);
            userAnswers[`step${stepNumber}`] = this.dataset.value;

            // Отправляем события в Яндекс Метрику для разных шагов
            const eventParams = {
                quiz_step: stepNumber,
                selected_value: this.dataset.value,
                option_text: this.querySelector('.option-text').textContent
            };

            switch (stepNumber) {
                case 2:
                    sendYandexMetricaEvent('quiz_step2_complete', {
                        ...eventParams,
                        case_stage: this.dataset.value
                    });
                    break;
                case 3:
                    sendYandexMetricaEvent('quiz_step3_complete', {
                        ...eventParams,
                        problem_timeframe: this.dataset.value
                    });
                    break;
                case 4:
                    sendYandexMetricaEvent('quiz_step4_complete', {
                        ...eventParams,
                        budget_range: this.dataset.value
                    });
                    break;
                case 5:
                    sendYandexMetricaEvent('quiz_step5_complete', {
                        ...eventParams,
                        urgency_level: this.dataset.value
                    });
                    break;
            }
        });
    });


    // Обработчики клика на опции мессенджеров
    messengerOptions.forEach(option => {
        option.addEventListener('click', function () {
            // Снимаем выделение со всех опций
            messengerOptions.forEach(o => o.classList.remove('selected'));

            // Выделяем выбранную опцию
            this.classList.add('selected');

            // Сохраняем выбранный мессенджер
            userAnswers.messenger = this.dataset.messenger;

            // Отправляем событие в Яндекс Метрику
            sendYandexMetricaEvent('quiz_step6_messenger', {
                quiz_step: 6,
                selected_messenger: this.dataset.messenger,
                messenger_name: this.querySelector('.messenger-name').textContent
            });

            // Обновляем текст кнопки (остальной код без изменений)
            const submitButtonText = document.querySelector('.submit-button span');
            switch (this.dataset.messenger) {
                case 'whatsapp':
                    submitButtonText.textContent = 'Получить расчет в WhatsApp';
                    break;
                case 'viber':
                    submitButtonText.textContent = 'Получить расчет в Viber';
                    break;
                case 'telegram':
                    submitButtonText.textContent = 'Получить расчет в Telegram';
                    break;
                case 'email':
                    submitButtonText.textContent = 'Получить расчет на E-mail';
                    break;
                default:
                    submitButtonText.textContent = 'Получить расчет';
            }
        });
    });

    // Обработчики клика на кнопки "Далее"
    nextButtons.forEach(button => {
        button.addEventListener('click', function () {
            // Проверяем, был ли сделан выбор на текущем шаге
            const currentStepEl = this.closest('.quiz-step');
            const stepNumber = parseInt(currentStepEl.dataset.step);

            // Для шагов со списком опций проверяем наличие выбранного элемента
            if (currentStepEl.querySelector('.options-list')) {
                const selectedOption = currentStepEl.querySelector('.option-item.selected');
                if (!selectedOption) {
                    // Показываем анимацию пульсации для подсвечивания необходимости выбора
                    const optionsList = currentStepEl.querySelector('.options-list');
                    optionsList.style.animation = 'pulse 0.5s';
                    setTimeout(() => {
                        optionsList.style.animation = '';
                    }, 500);
                    return;
                }
            }

            goToNextStep();
        });
    });

    // Обработчики клика на кнопки "Назад"
    backButtons.forEach(button => {
        button.addEventListener('click', goToPreviousStep);
    });

    // Обработчик отправки формы
    if (submitButton) {
        submitButton.addEventListener('click', function (e) {
            e.preventDefault();

            // Проверка заполнения формы
            const nameInput = document.querySelector('.contact-form input[type="text"]');
            const phoneInput = document.querySelector('.contact-form input[type="tel"]');
            const checkbox = document.querySelector('.contact-form input[type="checkbox"]');

            // Проверка имени
            if (!nameInput.value.trim()) {
                nameInput.style.borderColor = 'var(--red-color)';
                nameInput.style.animation = 'pulse 0.5s';
                setTimeout(() => {
                    nameInput.style.animation = '';
                }, 500);
                return;
            }

            // Проверка телефона
            if (!phoneInput.value.trim()) {
                phoneInput.style.borderColor = 'var(--red-color)';
                phoneInput.style.animation = 'pulse 0.5s';
                setTimeout(() => {
                    phoneInput.style.animation = '';
                }, 500);
                return;
            }

            // Проверка согласия
            if (!checkbox.checked) {
                const checkboxContainer = document.querySelector('.checkbox-container');
                checkboxContainer.style.color = 'var(--red-color)';
                checkboxContainer.style.animation = 'pulse 0.5s';
                setTimeout(() => {
                    checkboxContainer.style.animation = '';
                    checkboxContainer.style.color = '';
                }, 500);
                return;
            }

            // Проверка выбора мессенджера
            const selectedMessenger = document.querySelector('.messenger-option.selected');
            if (!selectedMessenger) {
                const messengerOptionsContainer = document.querySelector('.messenger-options');
                messengerOptionsContainer.style.animation = 'pulse 0.5s';
                setTimeout(() => {
                    messengerOptionsContainer.style.animation = '';
                }, 500);
                return;
            }

            // Собираем все данные формы
            userAnswers.name = nameInput.value.trim();
            userAnswers.phone = phoneInput.value.trim();

            // Анимация отправки
            submitButton.style.pointerEvents = 'none';
            const submitButtonText = submitButton.querySelector('span');
            const submitButtonIcon = submitButton.querySelector('i');
            const originalText = submitButtonText.textContent;
            const originalIcon = submitButtonIcon.className;

            submitButtonText.textContent = 'Отправка';
            submitButtonIcon.className = 'fas fa-spinner fa-spin';

            // Имитация отправки данных на сервер
            setTimeout(() => {
                submitButtonText.textContent = 'Отправлено!';
                submitButtonIcon.className = 'fas fa-check';
                submitButton.style.backgroundColor = '#2ecc71';

                // Здесь был бы код для отправки данных на сервер
                console.log('Данные для отправки:', userAnswers);
                sendYandexMetricaEvent('quiz_form_submitted', {
                    name: userAnswers.name,
                    phone: userAnswers.phone,
                    messenger: userAnswers.messenger,
                    legal_help_type: userAnswers.step1,
                    case_stage: userAnswers.step2,
                    problem_timeframe: userAnswers.step3,
                    budget_range: userAnswers.step4,
                    urgency_level: userAnswers.step5,
                    quiz_completed: true
                });


                // Показываем сообщение об успешной отправке через небольшую задержку
                setTimeout(() => {
                    // Создаем и добавляем уведомление об успехе
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

                    // Стили для уведомления
                    successNotification.style.cssText = `
              position: fixed;
              top: 20px;
              right: 20px;
              background-color: rgba(46, 204, 113, 0.95);
              color: white;
              padding: 15px 20px;
              border-radius: 5px;
              display: flex;
              align-items: center;
              max-width: 320px;
              box-shadow: 0 5px 15px rgba(0,0,0,0.3);
              z-index: 9999;
              animation: slideIn 0.3s forwards;
            `;

                    document.body.appendChild(successNotification);

                    // Восстановление формы
                    setTimeout(() => {
                        submitButtonText.textContent = originalText;
                        submitButtonIcon.className = originalIcon;
                        submitButton.style.backgroundColor = '';
                        submitButton.style.pointerEvents = 'auto';
                        nameInput.value = '';
                        phoneInput.value = '';
                    }, 1500);

                    // Удаление уведомления через 5 секунд
                    setTimeout(() => {
                        successNotification.style.animation = 'slideOut 0.3s forwards';
                        setTimeout(() => {
                            document.body.removeChild(successNotification);
                        }, 300);
                    }, 5000);
                }, 1000);
            }, 1500);
        });
    }

    // Инициализация первого шага
    updateProgress();

    // Установка начального стиля для элементов
    quizSteps.forEach(step => {
        step.style.opacity = '0';
        step.style.transform = 'translateY(10px)';
    });

    // Показываем первый шаг с анимацией
    setTimeout(() => {
        const firstStep = document.querySelector('.quiz-step[data-step="1"]');
        firstStep.style.opacity = '1';
        firstStep.style.transform = 'translateY(0)';
    }, 100);
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
        arrowIcon.src = 'images/arrow-top-right.svg';
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
favicon.href = 'images/favicon.ico';

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
            window.location.href = 'index.html';
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


(function () {
    'use strict';

    // Проверка, чтобы скрипт не загружался дважды
    if (window.callbackModalLoaded) return;
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
            <form class="callback-form-auto" id="callbackFormAuto">
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

        async sendData(data) {
            // Заглушка для отправки данных
            return new Promise((resolve) => {
                setTimeout(() => {
                    console.log('Данные формы:', data);
                    resolve();
                }, 1000);
            });
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
            const YANDEX_COUNTER_ID = 102159330;

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