<section id="identity" class="relative bg-white overflow-hidden border-b-4 border-slate-900">
    <div class="hero-shell flex items-center pt-20 md:pt-16 pb-20">

        <!-- ═══ Decorative background environment (aria-hidden) ═══ -->
        <aside class="hero-environment" aria-hidden="true">

            <!-- Grid fragments: partial technical grid areas near edges -->
            <div class="hero-grid-patch hero-grid-patch--a"></div>
            <div class="hero-grid-patch hero-grid-patch--b"></div>

            <!-- ── Upper-left quadrant ── -->
            <div class="px-cluster hidden md:block"                 style="top:12%; left:5%;"></div>
            <div class="px-cluster px-cluster--sm px-cluster--cyan px-cluster--d1 hidden md:block" style="top:26%; left:12%;"></div>
            <div class="px-star px-star--blue"                      style="top:9%;  left:20%;"></div>
            <div class="px-dot px-dot--lg px-drift-a d1"            style="top:34%; left:6%;"></div>
            <div class="px-tickline px-tickline--navy hidden lg:block" style="top:47%; left:3.5%; width:150px;"></div>
            <div class="px-cross px-drift-c d2 hidden md:block"     style="top:60%; left:9%;"></div>

            <!-- ── Upper-right quadrant ── -->
            <div class="px-cluster px-cluster--lg px-cluster--navy px-cluster--d2 hidden md:block" style="top:10%; right:7%;"></div>
            <div class="px-cluster px-cluster--cyan px-cluster--d1 hidden lg:block" style="top:30%; right:14%;"></div>
            <div class="px-star px-star--lg"                        style="top:20%; right:20%;"></div>
            <div class="px-star px-star--sm px-star--navy px-star--d2" style="top:44%; right:6%;"></div>
            <div class="px-dot px-dot--xl px-dot--cyan px-drift-b"  style="top:6%;  right:30%;"></div>
            <div class="px-dot px-drift-d d3 hidden md:block"       style="top:38%; right:9%;"></div>
            <div class="px-tickline px-tickline--v px-tickline--cyan hidden lg:block" style="top:8%; right:4%; height:130px;"></div>

            <!-- ── Middle edges ── -->
            <div class="px-cross px-cross--cyan px-drift-b d1 hidden md:block" style="top:52%; right:3.5%;"></div>
            <div class="px-dot px-dot--navy px-drift-c d2 hidden md:block"     style="top:55%; left:3%;"></div>

            <!-- ── Lower-left quadrant ── -->
            <div class="px-cluster px-cluster--cyan px-cluster--sm hidden md:block" style="bottom:14%; left:7%;"></div>
            <div class="px-star px-star--navy px-star--d1"          style="bottom:26%; left:15%;"></div>
            <div class="px-dot px-dot--cyan px-drift-a d4"          style="bottom:8%;  left:20%;"></div>
            <div class="px-dot px-drift-b d2 hidden md:block"       style="bottom:33%; left:4%;"></div>
            <div class="px-tickline px-tickline--cyan hidden lg:block" style="bottom:6%; left:5%; width:170px;"></div>

            <!-- ── Lower-right quadrant ── -->
            <div class="px-cluster px-cluster--d2 hidden md:block"  style="bottom:12%; right:8%;"></div>
            <div class="px-cluster px-cluster--sm px-cluster--navy px-cluster--d1 hidden lg:block" style="bottom:28%; right:13%;"></div>
            <div class="px-star px-star--blue px-star--d2"          style="bottom:20%; right:22%;"></div>
            <div class="px-star px-star--sm"                        style="bottom:7%;  right:16%;"></div>
            <div class="px-dot px-dot--lg px-drift-d d1"            style="bottom:38%; right:4%;"></div>
            <div class="px-tickline px-tickline--navy hidden lg:block" style="bottom:16%; right:4%; width:120px;"></div>

            <!-- Stepped stair motif: top-right landmark -->
            <span class="px-stair" style="top:0; right:72px; width:56px;">
                <span style="width:100%;"></span>
                <span style="width:66%;"></span>
                <span style="width:33%;"></span>
            </span>

            <!-- Mobile: minimal ambient pixels, edges only -->
            <div class="md:hidden">
                <div class="px-dot px-dot--cyan px-drift-a"    style="top:10%; right:6%;"></div>
                <div class="px-dot px-drift-c d2"              style="top:42%; left:4%;"></div>
                <div class="px-star px-star--blue px-star--d1" style="bottom:18%; right:8%;"></div>
                <div class="px-cluster px-cluster--sm"         style="bottom:6%; left:5%;"></div>
            </div>
        </aside>

        <!-- ═══ Hero content: intentionally constrained composition ═══ -->
        <article class="relative z-10 w-full max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-6">
            <div class="flex flex-col lg:flex-row items-center justify-center gap-10 lg:gap-20">

                <!-- Hero header copy -->
                <header class="lg:w-1/2 max-w-xl reveal">
                    <p class="inline-flex items-center gap-2 mb-5 px-3 py-1.5 bg-blue-50 border-3 border-slate-900">
                        <span class="block w-2 h-2 bg-blue-600" aria-hidden="true"></span>
                        <span class="font-mono text-xs font-bold tracking-widest text-blue-700 uppercase">Pixel &amp; Code Society</span>
                    </p>

                    <h1 class="font-black leading-none tracking-tighter mb-7 flex flex-col gap-1" style="font-size: clamp(2.9rem, 7vw, 5.4rem);">
                        <span class="text-slate-900" style="text-shadow: 4px 4px 0 rgba(37,99,235,0.15);">Build.</span>
                        <span class="text-blue-600" style="text-shadow: 4px 4px 0 rgba(15,23,42,0.12);">Explore.</span>
                        <span class="text-slate-900" style="text-shadow: 4px 4px 0 rgba(37,99,235,0.15);">Connect.</span>
                    </h1>

                    <p class="text-base sm:text-lg text-slate-600 mb-9 max-w-md leading-relaxed font-medium border-l-4 border-blue-600 pl-4">
                        Where creativity meets technology.
                    </p>

                    <nav aria-label="Hero action links" class="flex flex-wrap items-center gap-4">
                        <a href="#discover" class="pixel-btn">Explore Society</a>
                        <a href="#join" class="pixel-btn-outline">Join Us</a>
                    </nav>
                </header>

                <!-- Hero graphic/figure -->
                <figure class="hidden lg:flex lg:w-1/2 justify-center reveal w-full" style="transition-delay: 180ms;">
                    <span class="relative block">
                        <span class="absolute inset-0 bg-blue-600" style="transform: translate(8px, 8px); z-index: 0;" aria-hidden="true"></span>

                        <span class="relative z-10 bg-slate-50 p-12 flex items-center justify-center border-4 border-slate-900 block">
                            <span class="absolute -top-2 -left-2 w-4 h-4 bg-blue-600" aria-hidden="true"></span>
                            <span class="absolute -bottom-2 -right-2 w-4 h-4 bg-cyan-400" aria-hidden="true"></span>

                            <span class="absolute inset-0 pointer-events-none pixel-grid-sm opacity-50 block" aria-hidden="true"></span>

                            <pcs-logo animate style="--pcs-logo-size: clamp(170px, 26vw, 270px);" role="img" aria-label="Pixel &amp; Code Society animated logo"></pcs-logo>
                        </span>
                    </span>
                </figure>

            </div>
        </article>
    </div>

    <!-- Decorative section divider -->
    <footer class="pixel-divider absolute bottom-0 left-0 right-0" aria-hidden="true"></footer>

</section>
