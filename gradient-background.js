document.addEventListener('DOMContentLoaded', function() {
    const mainImageContainer = document.querySelector('.main-image-container');
    const mainImage = document.querySelector('.main-image');

    if (mainImage && (!mainImage.complete || mainImage.naturalHeight === 0 || mainImage.src.endsWith('alt'))) {
        // Удаляем изображение
        mainImage.remove();
        
        // Добавляем анимированный градиентный фон
        mainImageContainer.classList.add('animated-gradient');
        
        // Добавляем стили для градиента
        const style = document.createElement('style');
        style.textContent = `
            .animated-gradient {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: linear-gradient(45deg, #ff0000, #ff6b6b, #ffffff);
                background-size: 200% 200%;
                animation: gradientAnimation 8s ease infinite;
                opacity: 0.8;
            }

            @keyframes gradientAnimation {
                0% {
                    background-position: 0% 50%;
                }
                50% {
                    background-position: 100% 50%;
                }
                100% {
                    background-position: 0% 50%;
                }
            }
        `;
        document.head.appendChild(style);
    }
});