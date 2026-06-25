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

const locationSelect = document.querySelector('[data-location-select]');
const otherLocation = document.querySelector('[data-other-location]');
const otherLocationInput = otherLocation?.querySelector('input');

function updateOtherLocation() {
    const showOther = locationSelect?.value === 'Other';
    otherLocation?.classList.toggle('hidden', !showOther);
    if (otherLocationInput) {
        otherLocationInput.required = showOther;
    }
}

locationSelect?.addEventListener('change', updateOtherLocation);
updateOtherLocation();

const photoInput = document.querySelector('[data-photo-input]');
const fileName = document.querySelector('[data-file-name]');

photoInput?.addEventListener('change', () => {
    if (fileName) {
        fileName.textContent = photoInput.files?.[0]?.name ?? 'JPG, PNG or WebP, maximum 5 MB';
    }
});

const supportingDocumentsInput = document.querySelector('#supporting_documents');
const supportingFilesName = document.querySelector('[data-supporting-files-name]');

supportingDocumentsInput?.addEventListener('change', () => {
    const files = [...(supportingDocumentsInput.files ?? [])];

    if (!supportingFilesName) return;

    if (!files.length) {
        supportingFilesName.textContent = 'Optional: PDF, Word or image files, maximum 5 files / 10 MB each';
    } else if (files.length === 1) {
        supportingFilesName.textContent = files[0].name;
    } else {
        supportingFilesName.textContent = `${files.length} files selected: ${files.map((file) => file.name).join(', ')}`;
    }
});

document.querySelectorAll('[data-date-input]').forEach((input) => {
    input.addEventListener('input', () => {
        const digits = input.value.replace(/\D/g, '').slice(0, 8);
        const parts = [digits.slice(0, 2), digits.slice(2, 4), digits.slice(4, 8)].filter(Boolean);
        input.value = parts.join('-');
    });
});

const applicationForm = document.querySelector('[data-application-form]');

applicationForm?.addEventListener('submit', () => {
    const submitButton = applicationForm.querySelector('[data-application-submit]');
    const spinner = applicationForm.querySelector('[data-application-spinner]');
    const label = applicationForm.querySelector('[data-application-submit-label]');

    if (!submitButton || submitButton.disabled) return;

    submitButton.disabled = true;
    submitButton.setAttribute('aria-busy', 'true');
    spinner?.classList.remove('hidden');

    if (label) {
        label.textContent = 'Submitting...';
    }
});
