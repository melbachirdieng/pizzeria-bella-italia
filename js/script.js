/**
 * Script JavaScript — Pizzeria Bella Italia
 * Mini interactions front-end (toggle menu mobile + lazy enhancements)
 */

document.addEventListener('DOMContentLoaded', () => {
    // === Menu burger mobile ===
    const burger = document.querySelector('.burger');
    const nav    = document.querySelector('.main-nav');

    if (burger && nav) {
        burger.addEventListener('click', () => {
            nav.classList.toggle('open');
        });
    }

    // === Validation simple du formulaire (avant envoi PHP) ===
    const form = document.querySelector('.contact-form');
    if (form && form.querySelector('button[type="submit"]')) {
        form.addEventListener('submit', (e) => {
            const email = form.querySelector('#email');
            if (email && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value.trim())) {
                e.preventDefault();
                alert('Merci de saisir un email valide.');
                email.focus();
            }
        });
    }

    // === Smooth scroll pour les ancres internes ===
    document.querySelectorAll('a[href^="#"]').forEach(link => {
        link.addEventListener('click', function (e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
});
