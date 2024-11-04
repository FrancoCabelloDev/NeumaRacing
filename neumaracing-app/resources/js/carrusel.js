let currentIndex = 0;
    
function moveSlide(direction) {
    const carousel = document.getElementById('carouselSlides');
    const slides = carousel.children;
    const totalSlides = slides.length;
                            
// Ajustar el índice si es menor o mayor que la cantidad de slides
    currentIndex += direction;
    if (currentIndex < 0) {
        currentIndex = totalSlides - 1;
    } else if (currentIndex >= totalSlides) {
        currentIndex = 0;
    }
                    
// Mover el carrusel usando translateX
    carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
}
                            
// Cambio automático de diapositiva cada 4 segundos
setInterval(() => {
    moveSlide(1);
}, 4000);