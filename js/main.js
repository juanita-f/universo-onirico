// Funciones globales para el Modal
function openModal(src, title, description) {
    const modal = document.getElementById('gallery-modal');
    const modalImg = document.getElementById('modal-img');
    const modalDesc = document.getElementById('modal-desc');

    if (modal && modalImg && modalDesc) {
        modalImg.src = src;
        modalDesc.innerHTML = `<strong>${title}</strong><p>${description}</p>`;
        modal.style.display = 'flex';
    }
}

function closeModal() {
    const modal = document.getElementById('gallery-modal');
    if (modal) {
        modal.style.display = 'none';
    }
}

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
            if (slides.length > 0 && slides[0]) {
                const slideWidth = slides[0].getBoundingClientRect().width;
                if (slideWidth > 0) {
                    track.style.transform = 'translateX(' + (-currentIndex * slideWidth) + 'px)';
                }
            }
        }

        if (nextButton && prevButton) {
            nextButton.addEventListener('click', () => {
                currentIndex = (currentIndex + 1) % slideCount;
                setSlidePosition();
            });

            prevButton.addEventListener('click', () => {
                currentIndex = (currentIndex - 1 + slideCount) % slideCount;
                setSlidePosition();
            });
        }

        window.addEventListener('resize', setSlidePosition);
        setSlidePosition();
    }

    // Lógica del Modal
    const modal = document.getElementById('gallery-modal');
    if (modal) {
        const closeButton = modal.querySelector('.close-button');

        if(closeButton) {
            closeButton.addEventListener('click', closeModal);
        }

        modal.addEventListener('click', (event) => {
            if (event.target === modal) {
                closeModal();
            }
        });
    }

    // Lógica para las imágenes de la galería en influencia.html
    const galleryImages = document.querySelectorAll('.gallery-image');
    galleryImages.forEach(image => {
        image.addEventListener('click', () => {
            const src = image.getAttribute('src');
            const title = image.dataset.title;
            const description = image.dataset.description;
            openModal(src, title, description);
        });
    });
});
