document.addEventListener('DOMContentLoaded', function () {
    const loadMoreBtn = document.getElementById('load-more-btn');
    const resetBtn = document.getElementById('reset-btn');
    const hiddenCards = document.querySelectorAll('.card-container.hidden');
    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');
    const cardRow = document.getElementById('card-row');
    const cardContainers = Array.from(document.querySelectorAll('.card-container'));
    let currentIndex = 0;
    let startX, scrollLeft;

    loadMoreBtn.addEventListener('click', function () {
        Array.from(hiddenCards).forEach(card => {
            card.classList.remove('hidden');
        });
        loadMoreBtn.style.display = 'none';
        resetBtn.style.display = 'inline-block';
    });

    resetBtn.addEventListener('click', function () {
        hiddenCards.forEach(card => {
            card.classList.add('hidden');
        });
        loadMoreBtn.style.display = 'inline-block';
        resetBtn.style.display = 'none';
    });

    function updateCarousel() {
        const cardWidth = cardContainers[0].offsetWidth + 10;
        cardRow.scrollTo({
            left: cardWidth * currentIndex,
            behavior: 'smooth'
        });
    }

    function handleNext() {
        const cardWidth = cardContainers[0].offsetWidth + 10;
        currentIndex++;
        if (currentIndex >= cardContainers.length) {
            currentIndex = 0;
            cardRow.scrollLeft = 0;
        }
        cardRow.scrollTo({
            left: cardWidth * currentIndex,
            behavior: 'smooth'
        });
    }

    function handlePrev() {
        const cardWidth = cardContainers[0].offsetWidth + 10;
        currentIndex--;
        if (currentIndex < 0) {
            currentIndex = cardContainers.length - 1;
            cardRow.scrollLeft = cardWidth * currentIndex;
        }
        cardRow.scrollTo({
            left: cardWidth * currentIndex,
            behavior: 'smooth'
        });
    }

    prevBtn.addEventListener('click', handlePrev);
    nextBtn.addEventListener('click', handleNext);

    function checkScreenWidth() {
        if (window.innerWidth >= 1000) {
            prevBtn.style.display = 'none';
            nextBtn.style.display = 'none';
            loadMoreBtn.style.display = 'inline-block';
            hiddenCards.forEach(card => {
                card.classList.add('hidden');
            });
        } else {
            prevBtn.style.display = 'none';
            nextBtn.style.display = 'none';
            loadMoreBtn.style.display = 'none';
            resetBtn.style.display = 'none';
            cardContainers.forEach(card => {
                card.classList.remove('hidden');
            });
        }
    }

    window.addEventListener('resize', checkScreenWidth);
    checkScreenWidth();

    // Eventos de desplazamiento táctil
    cardRow.addEventListener('touchstart', (e) => {
        startX = e.touches[0].pageX - cardRow.offsetLeft;
        scrollLeft = cardRow.scrollLeft;
    });

    cardRow.addEventListener('touchmove', (e) => {
        const x = e.touches[0].pageX - cardRow.offsetLeft;
        const walk = (x - startX) * 3; // Velocidad de desplazamiento
        cardRow.scrollLeft = scrollLeft - walk;
    });
});


// scroll


document.addEventListener("DOMContentLoaded", () => {
    const fadeElements = document.querySelectorAll('.fade-out');

    function checkVisibility() {
        fadeElements.forEach(element => {
            const rect = element.getBoundingClientRect();
            if (rect.top < window.innerHeight && rect.bottom >= 0) {
                element.classList.add('fade-in');
                element.classList.remove('fade-out');
            } else {
                element.classList.add('fade-out');
                element.classList.remove('fade-in');
            }
        });
    }

    window.addEventListener('scroll', checkVisibility);
    checkVisibility(); // inicializa para verificar la visibilidad al cargar la página
});
