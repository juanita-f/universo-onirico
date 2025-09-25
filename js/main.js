document.addEventListener('DOMContentLoaded', function() {

    // Lógica del Slider
    const track = document.querySelector('.slider-track');
    if (track) {
        const slides = Array.from(track.children);
        const nextButton = document.querySelector('.slider-button.next');
        const prevButton = document.querySelector('.slider-button.prev');
        const slideCount = slides.length;
        let currentIndex = 0;

        const setSlidePosition = () => {
            if (slides.length > 0) {
                const slideWidth = slides[0].getBoundingClientRect().width;
                track.style.transform = 'translateX(' + (-currentIndex * slideWidth) + 'px)';
            }
        }

        nextButton.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % slideCount;
            setSlidePosition();
        });

        prevButton.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + slideCount) % slideCount;
            setSlidePosition();
        });

        // Reajustar en caso de que cambie el tamaño de la ventana
        window.addEventListener('resize', setSlidePosition);
        // Llamada inicial para establecer la posición
        setSlidePosition();
    }

    // Lógica del Modal (si se usa en otras partes del sitio)
    const modal = document.getElementById('gallery-modal');
    if (modal) {
        const closeButton = document.querySelector('.close-button');

        const closeModal = () => {
            modal.style.display = "none";
        }

        if(closeButton) {
            closeButton.addEventListener('click', closeModal);
        }

        modal.addEventListener('click', (event) => {
            // Si se hace clic en el fondo oscuro
            if (event.target === modal) {
                closeModal();
            }
        });
    }
});