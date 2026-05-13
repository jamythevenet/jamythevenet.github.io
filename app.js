document.addEventListener('DOMContentLoaded', () => {

    // --- 1. SMOOTH SCROLL (Lenis) ---
    const lenis = new Lenis({
        duration: 1.2,
        easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
        smoothWheel: true
    });

    function raf(time) {
        lenis.raf(time);
        requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);

    // --- 2. BARRE DE PROGRESSION ---
    window.addEventListener('scroll', () => {
        const winScroll = document.documentElement.scrollTop;
        const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (winScroll / height) * 100;
        document.querySelector(".progress-bar").style.width = scrolled + "%";
    });

    // --- 3. ANIMATIONS D'APPARITION (Intersection Observer) ---
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.15
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Gestion du délai optionnel (défini dans le HTML avec data-delay)
                const delay = entry.target.getAttribute('data-delay');
                if (delay) {
                    entry.target.style.transitionDelay = delay;
                }

                entry.target.classList.add('active');
                observer.unobserve(entry.target); // Ne joue l'animation qu'une fois
            }
        });
    }, observerOptions);

    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

    // --- 4. NAVIGATION FLUIDE ---
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if(targetId === '#') return;

            lenis.scrollTo(targetId, {
                offset: -80, // Compense la hauteur de la navbar fixe
                duration: 1.5
            });
        });
    });
});