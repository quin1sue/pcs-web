document.addEventListener('DOMContentLoaded', () => {

    // ─── 1. Nav scroll shadow ────────────────────────────────
    const header = document.getElementById('site-header');
    if (header) {
        window.addEventListener('scroll', () => {
            header.classList.toggle('scrolled', window.scrollY > 50);
        }, { passive: true });
    }

    // ─── 2. Mobile menu ──────────────────────────────────────
    const menuBtn       = document.getElementById('mobile-menu-btn');
    const mobileMenu    = document.getElementById('mobile-menu');
    const iconOpen      = document.getElementById('menu-icon-open');
    const iconClose     = document.getElementById('menu-icon-close');

    function openMenu() {
        mobileMenu.classList.add('is-open');
        menuBtn.setAttribute('aria-expanded', 'true');
        menuBtn.setAttribute('aria-label', 'Close navigation menu');
        iconOpen.classList.add('hidden');
        iconClose.classList.remove('hidden');
    }

    function closeMenu() {
        mobileMenu.classList.remove('is-open');
        menuBtn.setAttribute('aria-expanded', 'false');
        menuBtn.setAttribute('aria-label', 'Open navigation menu');
        iconOpen.classList.remove('hidden');
        iconClose.classList.add('hidden');
    }

    if (menuBtn && mobileMenu) {
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.contains('is-open') ? closeMenu() : openMenu();
        });

        // Close on Escape
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && mobileMenu.classList.contains('is-open')) {
                closeMenu();
                menuBtn.focus();
            }
        });
    }

    // ─── 3. Smooth scroll + close menu on nav link click ─────
    const navLinks = document.querySelectorAll('a[href^="#"]');
    navLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;

            const target = document.querySelector(targetId);
            if (!target) return;

            e.preventDefault();

            // Close mobile menu
            if (mobileMenu && mobileMenu.classList.contains('is-open')) closeMenu();

            // Scroll with header offset
            const headerHeight = header ? header.offsetHeight : 0;
            const top = target.getBoundingClientRect().top + window.pageYOffset - headerHeight;
            window.scrollTo({ top, behavior: 'smooth' });
        });
    });

    // ─── 4. IntersectionObserver scroll reveals ───────────────
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const revealEls = document.querySelectorAll('.reveal');

    if (prefersReducedMotion) {
        revealEls.forEach(el => el.classList.add('is-visible'));
    } else {
        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    obs.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

        revealEls.forEach(el => observer.observe(el));
    }

    // ─── 5. Division card expand/collapse ────────────────────
    const divisionCards = document.querySelectorAll('.division-card');
    divisionCards.forEach(card => {
        // Make each card's expand trigger a real button if not already
        const trigger = card.querySelector('[data-expand-trigger]') || card;
        trigger.addEventListener('click', () => {
            const wasExpanded = card.classList.contains('expanded');
            // Collapse all others first (optional: comment out for multi-open)
            divisionCards.forEach(c => {
                c.classList.remove('expanded');
                const btn = c.querySelector('[data-expand-label]');
                if (btn) btn.textContent = 'EXPLORE →';
            });
            if (!wasExpanded) {
                card.classList.add('expanded');
                const btn = card.querySelector('[data-expand-label]');
                if (btn) btn.textContent = 'CLOSE ↑';
            }
        });
    });
});

// ─── <pcs-logo> Custom Element ───────────────────────────────
(() => {
    let uid = 0;

    const pixels = [
        [879, 0,   150, 146],
        [729, 146, 150, 161],
        [495, 416, 150, 161],
        [620, 548, 150, 162],
        [345, 811, 150, 161],
    ];

    class PcsLogo extends HTMLElement {
        static get observedAttributes() { return ['size', 'label']; }

        connectedCallback()    { this.render(); }
        attributeChangedCallback() { if (this.isConnected) this.render(); }

        render() {
            const size = this.getAttribute('size');
            if (size) this.style.setProperty('--pcs-logo-size', size);

            const label  = this.getAttribute('label') || 'Pixel Code & Society logo';
            const clipId = `pcs-clip-${++uid}`;

            const pixelRects = pixels
                .map(([x, y, w, h], i) =>
                    `<rect class="pcs-white pcs-pixel" style="--i:${i}" x="${x}" y="${y}" width="${w}" height="${h}"/>`
                )
                .join('');

            this.innerHTML = `
                <svg viewBox="0 0 1932 1932" role="img" aria-label="${label}" xmlns="http://www.w3.org/2000/svg">
                    <defs><clipPath id="${clipId}"><circle cx="966" cy="966" r="966"/></clipPath></defs>
                    <g clip-path="url(#${clipId})">
                        <rect class="pcs-blue" width="1932" height="1932"/>
                        <polygon class="pcs-navy" points="0,1755 1932,273 1932,1932 0,1932"/>
                        ${pixelRects}
                        <g class="pcs-white">
                            <polygon points="1037,1302 1037,1368 867,1486 1037,1603 1037,1669 771,1486"/>
                            <polygon points="1270,1131 1322,1131 1143,1673 1091,1673"/>
                            <polygon points="1338,1308 1605,1493 1338,1677 1338,1611 1509,1493 1338,1374"/>
                        </g>
                    </g>
                </svg>`;
        }
    }

    if (!customElements.get('pcs-logo')) customElements.define('pcs-logo', PcsLogo);
})();