<section id="organization" class="py-24 bg-white border-b-4 border-slate-900 section-atm section-atm--org relative overflow-hidden">

    <aside class="org-artifacts" aria-hidden="true">
        <img src="public/assets/images/logo/tux.png"
            alt=""
            class="org-artifact org-artifact--tux"
            loading="lazy">
        <img src="public/assets/images/logo/gopher.png"
            alt=""
            class="org-artifact org-artifact--gopher"
            loading="lazy">
        <img src="public/assets/images/logo/photoshop-r.png"
            alt=""
            class="org-artifact org-artifact--photoshop"
            loading="lazy">

        <!-- L-bracket pixel corner marks (full technical frame) -->
        <span class="org-mark org-mark--tl"></span>
        <span class="org-mark org-mark--tr"></span>
        <span class="org-mark org-mark--bl"></span>
        <span class="org-mark org-mark--br"></span>

        <!-- Pixel cluster details around the chart -->
        <div class="px-cluster hidden md:block"                     style="top:22%; right:9%;"></div>
        <div class="px-cluster px-cluster--sm px-cluster--cyan px-cluster--d1 hidden lg:block" style="top:36%; left:12%;"></div>
        <div class="px-cluster px-cluster--cyan px-cluster--sm px-cluster--d2 hidden lg:block" style="bottom:16%; right:14%;"></div>
        <div class="px-dot px-dot--lg px-drift-b d1 hidden md:block" style="top:14%; right:22%;"></div>
        <div class="px-dot px-dot--cyan px-drift-a d3 hidden md:block" style="bottom:9%; left:18%;"></div>
        <div class="px-star px-star--navy px-star--sm px-star--d1 hidden md:block" style="top:64%; right:7%;"></div>
    </aside>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <header class="mb-14 text-center reveal">
            <div class="inline-flex items-center gap-2 mb-4 px-3 py-1.5 bg-blue-50" style="border: 3px solid #0F172A;">
                <span class="block w-2 h-2 bg-blue-600"></span>
                <span class="font-mono text-xs font-bold tracking-widest text-blue-700 uppercase">Organization</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-black text-slate-900 tracking-tighter uppercase">
                How PCS Is Structured
            </h2>
            <p class="text-lg text-slate-600 max-w-2xl mx-auto font-medium mt-6 border-t-2 border-dashed border-slate-300 pt-4">
                The leadership structure that guides Pixel &amp; Code Society across its divisions.
            </p>
        </header>

        <!-- Technical presentation frame -->
        <div class="org-chart-frame reveal">
            <!-- HUD corner labels -->
            <span class="org-hud org-hud--tl" aria-hidden="true">CORE / 00</span>
            <span class="org-hud org-hud--tr" aria-hidden="true">STRUCTURE</span>
            <span class="org-hud org-hud--bl" aria-hidden="true">PCS ORG</span>

            <figure class="pixel-panel bg-white p-3 md:p-6 relative flex flex-col items-center justify-center overflow-hidden">
                <!-- Blue offset shadow layer -->
                <div class="absolute inset-0 bg-blue-600 pointer-events-none" style="transform: translate(6px,6px); z-index:-1;" aria-hidden="true"></div>

                <img
                    src="public/assets/images/pcs-charts/core.png"
                    alt="Pixel &amp; Code Society core organizational chart"
                    class="w-full lg:w-3/4 h-auto max-h-[85vh] scale-125 lg:scale-150 object-contain border-4 border-slate-900 bg-white origin-center translate-y-6 lg:translate-y-12 transition-transform duration-300"
                    loading="lazy">
            </figure>
        </div>

    </div>
</section>