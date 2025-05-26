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
document.addEventListener('DOMContentLoaded', function() {
    const logoWrapper = document.querySelector('.logo-wrapper');
    if (logoWrapper) {
        logoWrapper.addEventListener('click', function(e) {
            e.preventDefault(); // Предотвращаем стандартное поведение ссылки
            window.location.href = 'index.html';
        });
        
        // Добавляем стиль курсора, чтобы показать, что элемент кликабельный
        logoWrapper.style.cursor = 'pointer';
    }
});