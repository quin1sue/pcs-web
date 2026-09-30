<section id="identity" class="relative bg-white min-h-screen flex items-center pt-16 md:pt-10 overflow-hidden border-b-4 border-slate-900">

    <!-- Decorative background environment -->
    <aside class="hero-environment" aria-hidden="true">
        <div class="hero-corner-bl"></div>

        <!-- Desktop particles: outer edges only, away from content -->
        <div class="hidden md:block">
            <span class="px-dot px-drift-a"                         style="top:14%;  left:4%;"></span>
            <span class="px-dot px-dot--cyan px-drift-b"            style="top:28%;  left:9%;"></span>
            <span class="px-dot px-dot--sm px-drift-c"              style="top:52%;  left:5%;"></span>
            <span class="px-dot px-drift-d"                         style="top:70%;  left:11%;"></span>
            <span class="px-dot px-dot--sm px-dot--cyan px-drift-a" style="top:82%;  left:7%;"></span>
            <span class="px-dot px-dot--lg px-dot--cyan px-drift-b" style="top:10%;  right:6%;"></span>
            <span class="px-dot px-drift-c"                         style="top:24%;  right:4%;"></span>
            <span class="px-dot px-dot--sm px-drift-d"              style="top:65%;  right:8%;"></span>
            <span class="px-dot px-dot--cyan px-drift-a"            style="bottom:18%; right:5%;"></span>
            <!-- Technical crosshair marks -->
            <span class="px-cross px-drift-c" style="top:38%; left:3%;"></span>
            <span class="px-cross px-drift-b" style="top:60%; right:3%;"></span>
            <!-- Stepped stair motif top-right corner -->
            <span class="px-stair" style="top:0; right:0; width:48px;">
                <span style="width:100%;"></span>
                <span style="width:66%;"></span>
                <span style="width:33%;"></span>
            </span>
        </div>

        <!-- Mobile: minimal, edges only -->
        <div class="md:hidden">
            <span class="px-dot px-drift-a"              style="top:8%;   right:5%;"></span>
            <span class="px-dot px-dot--cyan px-drift-c" style="top:38%;  left:4%;"></span>
            <span class="px-dot px-dot--sm px-drift-b"   style="bottom:15%; right:6%;"></span>
        </div>
    </aside>

    <!-- Main hero content area -->
    <article class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-10 py-16 lg:py-24">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-12 lg:gap-16">

            <!-- Hero header copy -->
            <header class="lg:w-1/2 reveal">
                <p class="inline-flex items-center gap-2 mb-6 px-3 py-1.5 bg-blue-50 border-3 border-slate-900">
                    <span class="block w-2 h-2 bg-blue-600" aria-hidden="true"></span>
                    <span class="font-mono text-xs font-bold tracking-widest text-blue-700 uppercase">Pixel &amp; Code Society</span>
                </p>

                <h1 class="font-black leading-none tracking-tighter mb-8 flex flex-col gap-1" style="font-size: clamp(3.5rem, 10vw, 6.5rem);">
                    <span class="text-slate-900" style="text-shadow: 4px 4px 0 rgba(37,99,235,0.15);">Build.</span>
                    <span class="text-blue-600" style="text-shadow: 4px 4px 0 rgba(15,23,42,0.12);">Explore.</span>
                    <span class="text-slate-900" style="text-shadow: 4px 4px 0 rgba(37,99,235,0.15);">Connect.</span>
                </h1>

                <p class="text-base sm:text-lg text-slate-600 mb-10 max-w-lg leading-relaxed font-medium border-l-4 border-blue-600 pl-4">
                    Where creativity meets technology.
                </p>

                <nav aria-label="Hero action links" class="flex flex-wrap items-center gap-4">
                    <a href="#discover" class="pixel-btn">Explore Society</a>
                    <a href="#join" class="pixel-btn-outline">Join Us</a>
                </nav>
            </header>

            <!-- Hero graphic/figure -->
            <figure class="hidden lg:flex lg:w-1/2 items-center justify-center reveal w-full" style="transition-delay: 180ms;">
                <span class="relative block">
                    <span class="absolute inset-0 bg-blue-600" style="transform: translate(8px, 8px); z-index: 0;" aria-hidden="true"></span>

                    <span class="relative z-10 bg-slate-50 p-12 flex items-center justify-center border-4 border-slate-900 block">
                        <span class="absolute -top-2 -left-2 w-4 h-4 bg-blue-600" aria-hidden="true"></span>
                        <span class="absolute -bottom-2 -right-2 w-4 h-4 bg-cyan-400" aria-hidden="true"></span>

                        <span class="absolute inset-0 pointer-events-none pixel-grid-sm opacity-50 block" aria-hidden="true"></span>

                        <pcs-logo animate style="--pcs-logo-size: clamp(180px, 32vw, 300px);" role="img" aria-label="Pixel &amp; Code Society animated logo"></pcs-logo>
                    </span>
                </span>
            </figure>

        </div>
    </article>

    <!-- Decorative section divider -->
    <footer class="pixel-divider absolute bottom-0 left-0 right-0" aria-hidden="true"></footer>

</section>