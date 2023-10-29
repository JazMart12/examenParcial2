const design_card_butttons = document.querySelectorAll('.design-card');
const introduction_text = document.querySelectorAll('.introduction-text');

const single_profile_card = document.querySelectorAll('.single-profile-card');
const testimonial_card = document.querySelectorAll('.testimonial-card');

const carousel = document.querySelector(".carousel-container");
const slides = document.querySelectorAll(".carousel-slide");

design_card_butttons.forEach((button, index) => {
    button.addEventListener('click', () => {
        introduction_text.forEach((introduction, introductionIndex) => {
            if (index === introductionIndex) {
                introduction.style.display = 'block';
            } else {
                introduction.style.display = 'none';
            }
        });
        design_card_butttons.forEach((btn, btnIndex) => {
            if (index === btnIndex) {
                btn.classList.add('active');
            } else {
                btn.classList.remove('active');
                
            }
        });
    });
});

single_profile_card.forEach((btn, index) => {
    btn.addEventListener('click', ()=> {
        testimonial_card.forEach((testimonialCard, testimonialCardIndex) => {
            if (index === testimonialCardIndex) {
                testimonialCard.style.display = 'block';
            } else {
                testimonialCard.style.display = 'none';
            }
        });
        single_profile_card.forEach((cardBtn, cardIndex) => {
            if (index === cardIndex) {
                cardBtn.classList.add('profile-card-active');
            } else {
                cardBtn.classList.remove('profile-card-active');
            }
        });
    });
});

let currentSlide = 0;

function showSlide(slideIndex) {
    if (slideIndex < 0) {
        currentSlide = slides.length - 1;
    } else if (slideIndex >= slides.length) {
        currentSlide = 0;
    }

    slides.forEach((slide) => {
        slide.style.display = "none";
    });

    slides[currentSlide].style.display = "block";
}

function nextSlide() {
    currentSlide++;
    showSlide(currentSlide);
}

function autoChangeSlide() {
    nextSlide();
    setTimeout(autoChangeSlide, 3000); // Cambiar la imagen cada 3 segundos (3000 ms)
}

autoChangeSlide();

document.addEventListener("DOMContentLoaded", function() {
    const toggleButtons = document.querySelectorAll(".toggle-button");
  
    toggleButtons.forEach(button => {
      button.addEventListener("click", function() {
        const target = this.getAttribute("data-target");
        const info = document.getElementById(target);
  
        if (info.style.display === "none" || info.style.display === "") {
          info.style.display = "block";
          button.textContent = "VER MENOS...";
        } else {
          info.style.display = "none";
          button.textContent = "LEER MÁS...";
        }
      });
    });
  });