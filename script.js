document.addEventListener('DOMContentLoaded', function() {
    // Переменные
    const cityNameElement = document.getElementById('cityName');
    const cityModal = document.getElementById('cityModal');
    const modalOverlay = document.getElementById('modalOverlay');
    const closeModal = document.getElementById('closeModal');
    const cancelCitySelection = document.getElementById('cancelCitySelection');
    const cityItems = document.querySelectorAll('.city-item');
    const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
    
    // Открытие модального окна по клику на имя города
    cityNameElement.addEventListener('click', function() {
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
      item.addEventListener('click', function(e) {
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
      toggle.addEventListener('click', function(e) {
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
  