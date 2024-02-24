let currentSlide = 0;
const slides = document.querySelectorAll('.slide');

function showSlide(index) {
    slides[currentSlide].classList.remove('active');
    currentSlide = (index + slides.length) % slides.length;
    slides[currentSlide].classList.add('active');
}

function changeSlide(offset) {
    showSlide(currentSlide + offset);
}

function startCarousel() {
    setInterval(() => {
        changeSlide(1);
    }, 3000); // Cambia la imagen cada 3 segundos (ajusta según tus necesidades)
}

startCarousel();
