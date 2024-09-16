let currentSlide = 0;

        function moveSlide(step) {
            const slides = document.querySelector('.carousel-slide');
            const totalSlides = document.querySelectorAll('.carousel-item').length;
            currentSlide = (currentSlide + step + totalSlides) % totalSlides;
            slides.style.transform = `translateX(${-currentSlide * 100}%)`;
        }