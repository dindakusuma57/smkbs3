const cssLink = document.createElement("link");
cssLink.rel = "stylesheet";
cssLink.href = "css/filament/style.css";
document.head.appendChild(cssLink);

//animation
AOS.init();

// Statistik
document.addEventListener('DOMContentLoaded', () => {
    new PureCounter();
});

// Body
document.body.style.overflowX = 'hidden';

function changeImage(src) {
    document.getElementById('mainImage').src = src;
}

// KeenSlider Initialization
import KeenSlider from 'https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/+esm';

document.addEventListener('DOMContentLoaded', () => {
    const sliderElement = document.querySelector('#keen-slider');
    if (!sliderElement) {
        console.error("Element with ID 'keen-slider' not found.");
        return;
    }

    const keenSlider = new KeenSlider(sliderElement, {
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
    });

    const keenSliderPrevious = document.querySelector('#keen-slider-previous');
    const keenSliderNext = document.querySelector('#keen-slider-next');
    const keenSliderPreviousDesktop = document.querySelector('#keen-slider-previous-desktop');
    const keenSliderNextDesktop = document.querySelector('#keen-slider-next-desktop');

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
document.addEventListener('DOMContentLoaded', () => {

    const navbar = document.getElementById('navbar');
    const navLinks = document.querySelectorAll('.nav-link');
    const ctaButton = document.getElementById('cta-button');
    const navbarBrand = document.getElementById('navbarBrand');
    const kontakLink = document.getElementById('kontak-link');

    window.addEventListener('scroll', function () {
        const navbar = document.querySelector(".navbar");
        console.log(window.scrollY);
        if (window.scrollY > 50) {
            navbar.classList.add("scrolled");
            navbar.classList.add('bg-white', 'shadow-md');
            navLinks.forEach(link => {
                if (link !== kontakLink) {
                    link.style.color = '#16423C';
                }
            });
            kontakLink.style.color = 'white';
            navbarBrand.style.color = '#16423C';
            ctaButton.style.color = '#16423C';

        } else {
            navbar.classList.remove("scrolled");
            navbar.classList.remove('bg-white', 'shadow-md');
            navLinks.forEach(link => link.style.color = 'white');
            navbarBrand.style.color = 'white';
            ctaButton.style.color = 'white';
        }
    });
});

//dropdown navbar


//toggle navbar
document.addEventListener('DOMContentLoaded', () => {
    const toggleButton = document.querySelector('[data-collapse-toggle="navbar-cta"]');
    const navbar = document.getElementById('navbar');
    const navbarMenu = document.getElementById('navbar-cta');

    toggleButton.addEventListener('click', () => {
        navbarMenu.classList.toggle('hidden');
        navbar.classList.toggle('open');
    });

    window.addEventListener('scroll', () => {
        if (window.scrollY > 0) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
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

//category berita
document.addEventListener('DOMContentLoaded', function () {
    const categoryButtons = document.querySelectorAll('.category-button');
    const beritaItems = document.querySelectorAll('.berita-item');
    const allCategoryButton = document.getElementById('allCategoryButton');

    function selectCategory(categoryId) {
        categoryButtons.forEach(button => button.classList.remove('active'));
        if (allCategoryButton) allCategoryButton.classList.remove('active');

        if (categoryId === 'all') {
            if (allCategoryButton) allCategoryButton.classList.add('active');
        } else {
            const activeButton = document.querySelector(`.category-button[data-category-id="${categoryId}"]`);
            if (activeButton) activeButton.classList.add('active');
        }

        beritaItems.forEach(item => {
            const itemCategoryId = item.getAttribute('data-category-id');
            if (categoryId === 'all' || itemCategoryId == categoryId) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    }

    categoryButtons.forEach(button => {
        button.addEventListener('click', function () {
            const categoryId = button.getAttribute('data-category-id');
            selectCategory(categoryId);
        });
    });

    if (allCategoryButton) {
        allCategoryButton.addEventListener('click', function () {
            selectCategory('all');
        });
    }

    const defaultCategory = 'all';
    selectCategory(defaultCategory);
});

//Calendar
document.addEventListener('livewire:initialized', function () {
    const calendarEl = document.getElementById('calendar');
    const events = JSON.parse(calendarEl.getAttribute('data-events'));

    const isMobile = window.innerWidth < 768;

    const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: isMobile ? 'timeGridDay' : 'dayGridMonth',
        timeZone: 'local',
        events: events,
        headerToolbar: isMobile
            ? {
                left: 'prev,next',
                center: '',
                right: 'timeGridDay,timeGridWeek',
            }
            : {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay',
            },
        contentHeight: 'auto',
        aspectRatio: isMobile ? 0.8 : 1.5,
        displayEventTime: false,
        eventColor: function (info) {
            return info.event.extendedProps.color;
        },
    });

    calendar.render();

    window.addEventListener('resize', function () {
        const currentIsMobile = window.innerWidth < 768;

        if (currentIsMobile !== isMobile) {
            calendar.setOption('headerToolbar', currentIsMobile
                ? {
                    left: 'prev,next',
                    center: '',
                    right: 'timeGridDay,timeGridWeek',
                }
                : {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay',
                }
            );

            calendar.changeView(currentIsMobile ? 'timeGridDay' : 'dayGridMonth');
        }
    });
});

//Pagination guru
document.addEventListener('click', function (e) {
    if (e.target.classList.contains('ajax-pagination')) {
        e.preventDefault();
        const url = e.target.getAttribute('href');
        fetchGuruData(url);
    }
});

async function fetchGuruData(url) {
    try {
        const response = await fetch(url);
        const html = await response.text();
        const parser = new DOMParser();
        const doc = parser.parseFromString(html, 'text/html');

        document.getElementById('guru-container').innerHTML = doc.querySelector('#guru-container').innerHTML;
        document.getElementById('pagination-links').innerHTML = doc.querySelector('#pagination-links').innerHTML;
    } catch (error) {
        console.error('Gagal memuat data:', error);
    }
}












