<header id="site-header" class="sticky top-0 z-50 bg-white border-b-4 border-slate-900 transition-shadow duration-300" style="position: sticky;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16 md:h-20">

            <!-- Brand / Logo -->
            <div class="flex-shrink-0">
                <a href="#" class="flex items-center gap-3" aria-label="Pixel Code &amp; Society — Home">
                    <img
                        src="public/assets/images/logo/pcs-logo.png"
                        alt="Pixel Code &amp; Society"
                        class="site-logo-img"
                        onerror="this.style.display='none'">
                    <span class="font-black text-sm tracking-widest text-slate-900 uppercase hidden sm:block" aria-hidden="true">Pixel & Code Society</span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center gap-1" aria-label="Main navigation">
                <a href="#identity" class="text-xs font-bold text-slate-700 hover:text-blue-600 uppercase tracking-wider px-3 py-2 hover:bg-blue-50 transition-colors">About</a>
                <a href="#discover" class="text-xs font-bold text-slate-700 hover:text-blue-600 uppercase tracking-wider px-3 py-2 hover:bg-blue-50 transition-colors">Divisions</a>
                <a href="#people" class="text-xs font-bold text-slate-700 hover:text-blue-600 uppercase tracking-wider px-3 py-2 hover:bg-blue-50 transition-colors">People</a>
                <a href="#experience" class="text-xs font-bold text-slate-700 hover:text-blue-600 uppercase tracking-wider px-3 py-2 hover:bg-blue-50 transition-colors">Journey</a>
                <a href="#showcase" class="text-xs font-bold text-slate-700 hover:text-blue-600 uppercase tracking-wider px-3 py-2 hover:bg-blue-50 transition-colors">Projects</a>
                <a href="#join" class="pixel-btn text-xs ml-4">Join →</a>
            </nav>

            <!-- Mobile: Hamburger button -->
            <button
                id="mobile-menu-btn"
                type="button"
                class="flex items-center justify-center md:hidden w-11 h-11 border-3 border-slate-900 bg-white hover:bg-slate-50 transition-colors"
                aria-expanded="false"
                aria-controls="mobile-menu"
                aria-label="Open navigation menu"
                style="border-width: 3px;">
                <!-- Hamburger icon -->
                <svg id="menu-icon-open" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                    <path stroke-linecap="square" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <!-- Close icon (hidden when closed) -->
                <svg id="menu-icon-close" class="w-5 h-5 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                    <path stroke-linecap="square" d="M6 6l12 12M6 18L18 6" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation Panel -->
    <div id="mobile-menu" role="dialog" aria-label="Navigation menu" aria-modal="false">
        <div class="mobile-nav-inner">
            <span class="mobile-nav-label">// Navigation</span>

            <nav aria-label="Mobile navigation">
                <a href="#identity" class="mobile-nav-item">
                    <span class="mobile-nav-num">01 /</span>
                    About
                </a>
                <a href="#discover" class="mobile-nav-item">
                    <span class="mobile-nav-num">02 /</span>
                    Divisions
                </a>
                <a href="#people" class="mobile-nav-item">
                    <span class="mobile-nav-num">03 /</span>
                    People
                </a>
                <a href="#experience" class="mobile-nav-item">
                    <span class="mobile-nav-num">04 /</span>
                    Journey
                </a>
                <a href="#showcase" class="mobile-nav-item">
                    <span class="mobile-nav-num">05 /</span>
                    Projects
                </a>
            </nav>

            <div class="mt-4 pt-4" style="border-top: 2px solid #e2e8f0;">
                <a href="#join" class="pixel-btn w-full block text-center">
                    Join PCS →
                </a>
            </div>
        </div>
    </div>
</header>