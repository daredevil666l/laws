// Анимация при прокрутке
document.addEventListener('DOMContentLoaded', function() {
    const animateElements = document.querySelectorAll('.animate-fade-in-up');
    
    function checkInView() {
        animateElements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const elementVisible = 150;
            
            if (elementTop < window.innerHeight - elementVisible) {
                element.style.opacity = '1';
                element.style.transform = 'translateY(0)';
            } else {
                element.style.opacity = '0';
                element.style.transform = 'translateY(30px)';
            }
        });
    }
    
    // Инициализация стилей для анимируемых элементов
    animateElements.forEach(element => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(30px)';
        element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    });
    
    // Проверка при загрузке страницы
    checkInView();
    
    // Проверка при прокрутке
    window.addEventListener('scroll', checkInView);
    
    // Плавная прокрутка для якорных ссылок
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Анимация счетчиков в секции статистики
    const statNumbers = document.querySelectorAll('.stat-number');
    let animated = false;
    
    function animateNumbers() {
        if (animated) return;
        
        const statsSection = document.querySelector('.stats');
        if (!statsSection) return;
        
        const statsSectionTop = statsSection.getBoundingClientRect().top;
        
        if (statsSectionTop < window.innerHeight - 150) {
            statNumbers.forEach(statNumber => {
                const target = parseInt(statNumber.textContent);
                let count = 0;
                const duration = 2000; // 2 секунды
                const interval = Math.floor(duration / target);
                
                const counter = setInterval(() => {
                    count += 1;
                    statNumber.textContent = count;
                    
                    if (count >= target) {
                        clearInterval(counter);
                    }
                }, interval);
            });
            
            animated = true;
        }
    }
    
    // Проверка для анимации счетчиков
    window.addEventListener('scroll', animateNumbers);
    animateNumbers(); // Проверка при загрузке
    
    // Добавление эффекта волны при наведении на элементы
    const addRippleEffect = (elements) => {
        elements.forEach(element => {
            element.addEventListener('mouseenter', function(e) {
                const ripple = document.createElement('span');
                ripple.classList.add('ripple');
                
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                
                ripple.style.width = ripple.style.height = `${size}px`;
                ripple.style.left = `${e.clientX - rect.left - size/2}px`;
                ripple.style.top = `${e.clientY - rect.top - size/2}px`;
                
                this.appendChild(ripple);
                
                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });
        });
    };
    
    // Применение эффекта волны к кнопкам и карточкам
    addRippleEffect(document.querySelectorAll('.btn, .service-card, .property-card, .team-member'));
});