const menuButton = document.querySelector('[data-menu-button]');
const mobileMenu = document.querySelector('[data-mobile-menu]');

menuButton?.addEventListener('click', () => {
    const open = menuButton.getAttribute('aria-expanded') === 'true';
    menuButton.setAttribute('aria-expanded', String(!open));
    mobileMenu?.classList.toggle('hidden');
});

const slides = [...document.querySelectorAll('[data-slide]')];
const dots = [...document.querySelectorAll('[data-slide-dot]')];
let activeSlide = 0;
let sliderTimer;

function showSlide(index) {
    if (!slides.length) return;
    activeSlide = (index + slides.length) % slides.length;
    slides.forEach((slide, i) => slide.classList.toggle('is-active', i === activeSlide));
    dots.forEach((dot, i) => {
        dot.classList.toggle('bg-white', i === activeSlide);
        dot.classList.toggle('bg-white/40', i !== activeSlide);
        dot.setAttribute('aria-current', i === activeSlide ? 'true' : 'false');
    });
}

function autoplay() {
    clearInterval(sliderTimer);
    sliderTimer = setInterval(() => showSlide(activeSlide + 1), 6500);
}

dots.forEach((dot, index) => dot.addEventListener('click', () => {
    showSlide(index);
    autoplay();
}));

document.querySelector('[data-slide-next]')?.addEventListener('click', () => {
    showSlide(activeSlide + 1);
    autoplay();
});
document.querySelector('[data-slide-prev]')?.addEventListener('click', () => {
    showSlide(activeSlide - 1);
    autoplay();
});

showSlide(0);
if (slides.length > 1 && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) autoplay();

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            observer.unobserve(entry.target);
        }
    });
}, { threshold: 0.12 });

document.querySelectorAll('.reveal').forEach((item) => observer.observe(item));
