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

//Kirim pesan
document.addEventListener("DOMContentLoaded", function () {
    var form = document.getElementById("my-form");
    var successModal = document.getElementById("successModal");

    function closeModal() {
        successModal.classList.add("hidden");
        successModal.classList.remove("flex");
    }

    async function handleSubmit(event) {
        event.preventDefault();
        var status = document.getElementById("my-form-status");
        var data = new FormData(event.target);

        fetch(event.target.action, {
            method: form.method,
            body: data,
            headers: {
                Accept: "application/json"
            }
        })
            .then(response => {
                if (response.ok) {
                    form.reset();
                    successModal.classList.remove("hidden");
                    successModal.classList.add("flex");
                } else {
                    response.json().then(data => {
                        if (Object.hasOwn(data, "errors")) {
                            status.innerHTML = data["errors"]
                                .map(error => error["message"])
                                .join(", ");
                        } else {
                            status.innerHTML = "Oops! There was a problem submitting your form.";
                        }
                    });
                }
            })
            .catch(() => {
                status.innerHTML = "Oops! There was a problem submitting your form.";
            });
    }

    form.addEventListener("submit", handleSubmit);

    successModal
        .querySelector('button[data-modal-toggle="successModal"]')
        .addEventListener("click", closeModal);

    successModal
        .querySelector('button[type="button"]:nth-child(6)')
        .addEventListener("click", closeModal);

    function validateInput(event) {
        const input = event.target;
        input.value = input.value.replace(/[^0-9]/g, "");
    }

    const numericInputs = document.querySelectorAll(".numeric-only");
    numericInputs.forEach(input => input.addEventListener("input", validateInput));
});


//scrool to top
const toTop = document.querySelector(".to-top");

window.addEventListener("scroll", () => {
    if (window.pageYOffset > 100) {
        toTop.classList.add("active");
    } else {
        toTop.classList.remove("active");
    }
})





