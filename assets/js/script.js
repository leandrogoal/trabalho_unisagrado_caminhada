const menuToggle = document.querySelector('.menu-toggle');
const siteNav = document.querySelector('.site-nav');

if (menuToggle && siteNav) {
    menuToggle.addEventListener('click', () => {
        const isOpen = menuToggle.getAttribute('aria-expanded') === 'true';
        menuToggle.setAttribute('aria-expanded', String(!isOpen));
        siteNav.classList.toggle('is-open', !isOpen);
    });

    siteNav.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            menuToggle.setAttribute('aria-expanded', 'false');
            siteNav.classList.remove('is-open');
        });
    });
}

const interestForm = document.querySelector('.interest-form');
if (interestForm) {
    interestForm.addEventListener('submit', (event) => {
        event.preventDefault();
        const button = interestForm.querySelector('button');
        button.textContent = 'Interesse registrado nesta demonstração';
        button.disabled = true;
    });
}