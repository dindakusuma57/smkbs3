// Statistik
document.addEventListener('DOMContentLoaded', () => {
    new PureCounter();
});

// Body
document.body.style.overflowX = 'hidden';

// Function to change image source dynamically
function changeImage(src) {
    document.getElementById('mainImage').src = src;
}

// KeenSlider Initialization
import KeenSlider from 'https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/+esm';

document.addEventListener('DOMContentLoaded', () => {
    const keenSlider = new KeenSlider(
        '#keen-slider',
        {
            loop: true,
            slides: {
                origin: 'center',
                perView: 1.25,
                spacing: 16,
            },
            breakpoints: {
                '(min-width: 1024px)': {
                    slides: {
                        origin: 'auto',
                        perView: 1.5,
                        spacing: 32,
                    },
                },
            },
        },
        []
    );

    const keenSliderPrevious = document.getElementById('keen-slider-previous');
    const keenSliderNext = document.getElementById('keen-slider-next');

    const keenSliderPreviousDesktop = document.getElementById('keen-slider-previous-desktop');
    const keenSliderNextDesktop = document.getElementById('keen-slider-next-desktop');

    if (keenSliderPrevious) {
        keenSliderPrevious.addEventListener('click', () => keenSlider.prev());
    }
    if (keenSliderNext) {
        keenSliderNext.addEventListener('click', () => keenSlider.next());
    }
    if (keenSliderPreviousDesktop) {
        keenSliderPreviousDesktop.addEventListener('click', () => keenSlider.prev());
    }
    if (keenSliderNextDesktop) {
        keenSliderNextDesktop.addEventListener('click', () => keenSlider.next());
    }
});

//NAVBAR
const navbar = document.getElementById('navbar');
    const navLinks = document.querySelectorAll('.nav-link');
    const ctaButton = document.getElementById('cta-button');
    const navbarBrand = document.getElementById('navbar-brand');

    window.addEventListener('scroll', () => {
      if (window.scrollY > 50) {
        navbar.classList.add('bg-white', 'shadow-md');
        navLinks.forEach(link => link.style.color = '#16423C');
        navbarBrand.style.color = '#16423C';
        ctaButton.style.color = '#16423C';
      } else {
        navbar.classList.remove('bg-white', 'shadow-md');
        navLinks.forEach(link => link.style.color = 'white');
        navbarBrand.style.color = 'white';
        ctaButton.style.color = 'white';
      }
    });

    



