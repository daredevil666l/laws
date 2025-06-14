<form class="quiz-container form-fetch" action="<?php echo get_template_directory_uri(); ?>/send_email.php" method="POST">
    <h2 class="quiz-title">Рассчитайте предварительную стоимость услуги</h2>

        <!-- Прогресс-бар -->
        <div class="progress-wrapper">
            <div class="progress-bar">
                <div class="progress-fill"></div>
            </div>
            <div class="progress-text">Расчет пройден на 0%</div>
        </div>

        <!-- Контейнер с вопросами -->
        <div class="quiz-content">
            <!-- Вопрос 1 -->
            <div class="quiz-step active" data-step="1">
                <div class="question-header">
                    <div class="question-number">Вопрос 1</div>
                    <h2 class="question-title">Какой тип юридической помощи Вам необходим?</h2>
                </div>

                <div class="options-grid">
                    <div class="option-card" data-value="business">
                        <div class="option-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <div class="option-title">Для бизнеса</div>
                        <div class="option-description">Юридическое сопровождение компаний</div>
                        <div class="option-check">
                            <i class="fas fa-check"></i>
                        </div>
                    </div>

                    <div class="option-card" data-value="citizens">
                        <div class="option-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="option-title">Для граждан</div>
                        <div class="option-description">Помощь физическим лицам</div>
                        <div class="option-check">
                            <i class="fas fa-check"></i>
                        </div>
                    </div>

                    <div class="option-card" data-value="licensing">
                        <div class="option-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <div class="option-title">Лицензирование</div>
                        <div class="option-description">Получение лицензий и разрешений</div>
                        <div class="option-check">
                            <i class="fas fa-check"></i>
                        </div>
                    </div>

                    <div class="option-card" data-value="intellectual-property">
                        <div class="option-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <div class="option-title">Интеллектуальная собственность</div>
                        <div class="option-description">Защита авторских прав</div>
                        <div class="option-check">
                            <i class="fas fa-check"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Вопрос 2 -->
            <div class="quiz-step" data-step="2">
                <div class="question-header">
                    <div class="question-number">Вопрос 2</div>
                    <h2 class="question-title">Какой тип помощи Вам нужен?</h2>
                </div>

                <div class="options-list">
                    <div class="option-item" data-value="consultation">
                        <div class="option-radio"></div>
                        <div class="option-text">Требуется консультация</div>
                    </div>

                    <div class="option-item" data-value="documents">
                        <div class="option-radio"></div>
                        <div class="option-text">Необходимо составить некоторые документы</div>
                    </div>

                    <div class="option-item" data-value="full-solution">
                        <div class="option-radio"></div>
                        <div class="option-text">Комплексное решение "под ключ"</div>
                    </div>
                </div>

                <div class="quiz-navigation">
                    <button type="button" class="back-btn"><i class="fas fa-chevron-left"></i> Назад</button>
                    <button type="button" class="next-btn">Далее <i class="fas fa-chevron-right"></i></button>
                </div>
            </div>

            <!-- Вопрос 3 -->
            <div class="quiz-step" data-step="3">
                <div class="question-header">
                    <div class="question-number">Вопрос 3</div>
                    <h2 class="question-title">Как срочно требуется решение?</h2>
                </div>

                <div class="options-list">
                    <div class="option-item" data-value="24h">
                        <div class="option-radio"></div>
                        <div class="option-text">В течение 24 часов</div>
                    </div>

                    <div class="option-item" data-value="week">
                        <div class="option-radio"></div>
                        <div class="option-text">В течение недели</div>
                    </div>

                    <div class="option-item" data-value="month">
                        <div class="option-radio"></div>
                        <div class="option-text">В течение месяца</div>
                    </div>

                    <div class="option-item" data-value="no-matter">
                        <div class="option-radio"></div>
                        <div class="option-text">Срок не имеет значения</div>
                    </div>
                </div>

                <div class="quiz-navigation">
                    <button type="button" class="back-btn"><i class="fas fa-chevron-left"></i> Назад</button>
                    <button type="button" class="next-btn">Далее <i class="fas fa-chevron-right"></i></button>
                </div>
            </div>

            <!-- Исправленный финальный шаг -->
            <div class="quiz-step result-step" data-step="4">
                <div class="result-content">
                    <div class="result-header">
                        <div class="complete-badge">
                            <i class="fas fa-check-circle"></i> Расчет готов
                        </div>
                        <h2 class="result-title">Где удобнее получить ответ?</h2>
                    </div>
        
                    <div class="messenger-options">
                        <div class="messenger-option" data-messenger="whatsapp">
                            <div class="messenger-icon">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/whatsapp.png" alt="WhatsApp">
                            </div>
                            <div class="messenger-name">WhatsApp</div>
                            <div class="messenger-check"><i class="fas fa-check"></i></div>
                        </div>
        
                        <div class="messenger-option" data-messenger="telegram">
                            <div class="messenger-icon">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/telegram.webp" alt="Telegram">
                            </div>
                            <div class="messenger-name">Telegram</div>
                            <div class="messenger-check"><i class="fas fa-check"></i></div>
                        </div>
        
                        <div class="messenger-option" data-messenger="phone">
                            <div class="messenger-icon">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/img/phone.png" alt="Телефон">
                            </div>
                            <div class="messenger-name">Телефон</div>
                            <div class="messenger-check"><i class="fas fa-check"></i></div>
                        </div>
                    </div>

                    <div class="contact-form-wrapper">
                    <div class="contact-form">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Ваше имя" required class="clean">
                        </div>
    
                        <div class="form-group">
                            <input type="tel" name="phone" placeholder="Ваш телефон" required class="clean">
                        </div>
    
                        <!-- ВАЖНО: Добавляем скрытые поля -->
                        <input type="hidden" name="quiz_data" id="quiz_data" value="">
                        <input type="hidden" name="messenger" id="messenger" value="">
    
                        <div class="privacy-policy">
                            <div class="checkbox-wrapper">
                                <input type="checkbox" id="privacy-policy-checkbox" name="privacy-policy-checkbox"
                                    class="custom-checkbox" required>
                                <label for="privacy-policy-checkbox" class="checkbox-label">
                                    Согласен с условиями <a href="conf.docx" target="_blank"
                                        class="privacy-link">политики конфиденциальности</a> и <a href="sogl.docx"
                                        target="_blank" class="privacy-link">согласия на
                                        обработку</a> данных
                                </label>
                            </div>
                        </div>

                        <div class="form-submit">
                            <button type="submit" class="submit-button">
                                <span>Получить расчет</span>
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Контейнер для сообщений -->
    <div class="form-message"></div>

    <footer class="main-footer">
        <!-- Верхняя секция футера с контактами -->
        <div class="footer-contacts">
            <div class="container">
                <div class="contacts-grid">
                    <!-- Адрес -->
                    <div class="contact-column">
                        <h3 class="contact-title">Адрес</h3>
                        <div class="contact-info">
                            <p>Воронеж,</p>
                            <p>Пушкинская 5, 5 этаж, офис 17</p>
                        </div>
                    </div>

                    <!-- Телефоны -->
                    <div class="contact-column">
                        <h3 class="contact-title">Телефоны</h3>
                        <div class="contact-info">
                            <a href="tel:84732954824" class="contact-link">8(473)295-48-24</a>
                            <a href="tel:89525534488" class="contact-link">8(952)553-44-88</a>
                        </div>
                    </div>

                    <!-- E-Mail -->
                    <div class="contact-column">
                        <h3 class="contact-title">E-Mail</h3>
                        <div class="contact-info">
                            <a href="mailto:vrn@стратегия-юк.рф" class="contact-link">vrn@стратегия-юк.рф</a>
                        </div>
                    </div>

                    <!-- Часы работы -->
                    <div class="contact-column">
                        <h3 class="contact-title">Часы работы</h3>
                        <div class="contact-info">
                            <p>Пн - Пт : 9:00 - 18:00</p>
                            <p>Сб - Вс : 9:00 - 15:00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Основная секция футера с логотипом и слоганом -->
        <div class="footer-main">
            <div class="container">
                <div class="footer-brand">
                    <div class="footer-logo">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/img/strategy.png" alt="Стратегия - юридическая компания">
                    </div>
                    <div class="footer-tagline">
                        <h2 class="company-name">"Стратегия"</h2>
                        <p class="company-slogan">На страже Ваших интересов!</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Нижняя секция футера с копирайтом -->
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-content">
                    <div class="copyright">
                        © 2025 "Стратегия". Все права защищены
                    </div>
                    <div class="footer-links">
                        <a href="/privacy-policy" class="footer-link">Политика конфиденциальности</a>
                    </div>

                </div>
            </div>
        </div>
    </footer>
