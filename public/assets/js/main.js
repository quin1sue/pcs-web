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

    // ─── 6. Division Organization Modals ──────────────────────
    const divisionModal = document.getElementById('division-org-modal');
    const fullChartModal = document.getElementById('full-chart-modal');
    const triggers = document.querySelectorAll('.org-modal-trigger');
    const modalCloseBtn = document.getElementById('modal-close-btn');
    const fullChartCloseBtn = document.getElementById('full-chart-close-btn');

    // Modal elements to populate
    const elNum = document.getElementById('modal-div-num');
    const elName = document.getElementById('modal-div-name');
    const elTagline = document.getElementById('modal-div-tagline');
    const elDesc = document.getElementById('modal-div-desc');
    const elChart = document.getElementById('modal-div-chart');
    const elFullChartImg = document.getElementById('full-chart-img');
    const viewFullBtn = document.getElementById('modal-view-full-btn');
    const viewFullBtnMobile = document.getElementById('modal-view-full-btn-mobile');

    function openDivisionModal(data) {
        if (!divisionModal) return;
        
        elNum.textContent = 'CLASS ' + data.num;
        elName.textContent = data.name;
        elTagline.textContent = data.tagline;
        elDesc.textContent = data.desc;
        
        elChart.src = '';
        elChart.src = data.chart;
        
        document.body.style.overflow = 'hidden';
        
        divisionModal.showModal();
        requestAnimationFrame(() => {
            divisionModal.classList.add('is-open');
        });
        modalCloseBtn.focus();
    }

    function closeDivisionModal() {
        if (!divisionModal) return;
        divisionModal.classList.remove('is-open');
        setTimeout(() => {
            divisionModal.close();
            // Only restore body overflow if full chart isn't open
            if (!fullChartModal || !fullChartModal.classList.contains('is-open')) {
                document.body.style.overflow = '';
            }
        }, 250);
    }

    function openFullChart() {
        if (!fullChartModal) return;
        elFullChartImg.src = elChart.src;
        fullChartModal.showModal();
        requestAnimationFrame(() => {
            fullChartModal.classList.add('is-open');
        });
        fullChartCloseBtn.focus();
    }

    function closeFullChart() {
        if (!fullChartModal) return;
        fullChartModal.classList.remove('is-open');
        setTimeout(() => {
            fullChartModal.close();
            modalCloseBtn.focus();
        }, 250);
    }

    if (divisionModal && triggers.length > 0) {
        triggers.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                
                const data = {
                    num: btn.dataset.num,
                    name: btn.dataset.name,
                    tagline: btn.dataset.tagline,
                    desc: btn.dataset.desc,
                    chart: btn.dataset.chart
                };
                openDivisionModal(data);
            });
        });

        modalCloseBtn.addEventListener('click', closeDivisionModal);
        
        divisionModal.addEventListener('click', (e) => {
            // Check if clicking on the backdrop (presentation layer)
            if (e.target.classList.contains('pcs-dialog-presentation')) closeDivisionModal();
            // Also native backdrop
            if (e.target === divisionModal) closeDivisionModal();
        });
        
        divisionModal.addEventListener('cancel', (e) => {
            e.preventDefault();
            closeDivisionModal();
        });
    }

    if (fullChartModal) {
        if (viewFullBtn) viewFullBtn.addEventListener('click', openFullChart);
        if (viewFullBtnMobile) viewFullBtnMobile.addEventListener('click', openFullChart);
        
        fullChartCloseBtn.addEventListener('click', closeFullChart);
        
        fullChartModal.addEventListener('click', (e) => {
            if (e.target.classList.contains('pcs-dialog-presentation')) closeFullChart();
            if (e.target === fullChartModal) closeFullChart();
        });
        
        fullChartModal.addEventListener('cancel', (e) => {
            e.preventDefault();
            closeFullChart();
        });
    }

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

            const label  = this.getAttribute('label') || 'Pixel & Code Society logo';
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
// ─── Nyan PCS Companion — section-aware flight ────────────
// One fixed element; JS only writes `transform` (the CSS `nyan-bob`
// keyframes animate `margin-top`, so they compose, never conflict).
// Scroll → rAF-throttled waypoint resolution → lerped flight loop.
(() => {
    const nyan = document.getElementById('nyan-pcs');
    if (!nyan) return;

    // Reduced motion: CSS parks the mascot statically; JS stays out
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

    // Sections Nyan visits, in page order
    const sectionIds = ['identity', 'organization', 'discover', 'experience', 'showcase', 'join'];
    const sections = sectionIds
        .map(id => document.getElementById(id))
        .filter(Boolean);
    if (sections.length === 0) return;

    const VW  = () => window.innerWidth;
    const VH  = () => window.innerHeight;
    const NW  = () => nyan.offsetWidth || 120;
    const NH  = () => nyan.offsetHeight || 80;

    // Deterministic per-section variation (no randomness → stable flights)
    const sideFor    = i => (i % 2 === 0 ? 1 : -1);            // 1 right, -1 left
    const bandPctFor = i => (((i * 37) % 21) - 10);            // −10 … +10 (percent of VH)

    // Waypoint for section i, in *fixed-viewport* coordinates
    function waypoint(i) {
        const gap = VW() < 768 ? 10 : 26;
        const x = sideFor(i) === 1 ? VW() - NW() - gap : gap;
        const y = clampY((VH() * (50 + bandPctFor(i)) / 100) - NH() / 2);
        return { x, y };
    }

    function clampY(y) {
        const min = 80;
        const max = Math.max(min, VH() - NH() - 90);
        return Math.min(max, Math.max(min, y));
    }

    // Section midpoints in document space (read in one batch)
    let centers = [];
    function measure() {
        const sy = window.scrollY;
        centers = sections.map(el => {
            const r = el.getBoundingClientRect();
            return r.top + sy + r.height / 2;
        });
    }

    let activeIndex = -1;
    let targetX = -NW() * 2;
    let targetY = VH() * 0.3;
    let curX = targetX;
    let curY = targetY;
    let heading = 1;
    let rafId = null;
    let idleFrames = 0;
    let ticking = false;

    function retarget(scrollEased) {
        // Which section is the user currently looking at?
        const viewMid = scrollEased + VH() / 2;
        let idx = 0;
        for (let i = 0; i < centers.length; i++) {
            if (centers[i] <= viewMid) idx = i;
        }

        // Sections already flown past: snap them (they are offscreen anyway)
        if (idx !== activeIndex) {
            for (let i = Math.max(0, idx - 1); i < idx; i++) {
                const w = waypoint(i);
                const flipped = sideFor(i) === -1 ? ' scaleX(-1)' : '';
                if (i !== idx) {
                    nyan.style.transform = `translate3d(${w.x.toFixed(1)}px, ${w.y.toFixed(1)}px, 0)${flipped}`;
                    curX = w.x; curY = w.y;
                }
            }
            activeIndex = idx;
        }

        const w = waypoint(activeIndex);
        targetX = w.x;
        targetY = w.y;
    }

    function tick() {
        const dx = targetX - curX;
        const dy = targetY - curY;

        // Velocity-proportional smoothing: quick to start, gentle arrival
        const kx = Math.min(0.14, Math.max(0.045, Math.abs(dx) / 240));
        curX += dx * kx;
        curY += dy * 0.05;

        if (Math.abs(dx) > 1) heading = dx > 0 ? 1 : -1;

        const flip = heading === -1 ? ' scaleX(-1)' : '';
        nyan.style.transform = `translate3d(${curX.toFixed(1)}px, ${curY.toFixed(1)}px, 0)${flip}`;

        if (Math.abs(targetX - curX) < 0.5 && Math.abs(targetY - curY) < 0.5) {
            idleFrames++;
            if (idleFrames > 40) { rafId = null; return; }   // park until next scroll
        } else {
            idleFrames = 0;
        }
        rafId = requestAnimationFrame(tick);
    }

    function startTick() {
        if (!rafId) { idleFrames = 0; rafId = requestAnimationFrame(tick); }
    }

    function onScrollOrResize() {
        if (ticking) return;
        ticking = true;
        requestAnimationFrame(() => {
            measure();
            retarget(window.scrollY);
            ticking = false;
            startTick();
        });
    }

    // Boot: measure, place off-screen left of the first waypoint, fly in
    measure();
    const first = waypoint(0);
    targetX = first.x; targetY = first.y;
    curX = -NW() * 2; curY = first.y;
    window.addEventListener('scroll', onScrollOrResize, { passive: true });
    window.addEventListener('resize', onScrollOrResize, { passive: true });
    startTick();
})();
