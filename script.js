document.addEventListener('DOMContentLoaded', () => {
    const elements = document.querySelectorAll('.slide-in');


    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.5 // dès que 100% de l’élément est visible
    });

    elements.forEach(el => observer.observe(el));
});