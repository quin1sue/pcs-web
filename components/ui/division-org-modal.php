<dialog id="division-org-modal" class="p-0 bg-transparent w-full h-full max-w-none max-h-none m-0 border-none outline-none pcs-dialog" aria-labelledby="modal-div-name">
    <div class="fixed inset-0 grid place-items-center p-4 sm:p-6 lg:p-8 pcs-dialog-presentation">
        <section class="pixel-panel bg-white w-full max-w-5xl max-h-[calc(100dvh-32px)] overflow-y-auto flex flex-col relative section-atm section-atm--corners pcs-dialog-panel pointer-events-auto" aria-label="Division organization details">

            <!-- Header: division identity + close action -->
            <header class="border-b-4 border-slate-900 flex justify-between items-center gap-4 p-4 md:p-6 bg-slate-50 sticky top-0 z-10 shrink-0">
                <section class="flex items-center gap-4 min-w-0">
                    <p id="modal-div-num" class="font-mono text-sm font-bold text-blue-600 border-2 border-blue-600 px-2 py-1 shrink-0"></p>
                    <h3 id="modal-div-name" class="font-black text-xl md:text-2xl text-slate-900 uppercase tracking-tighter truncate"></h3>
                </section>

                <button type="button" id="modal-close-btn" class="w-10 h-10 shrink-0 flex items-center justify-center border-3 border-slate-900 bg-white hover:bg-slate-100 transition-colors focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600" aria-label="Close modal" style="border-width: 3px;">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5" aria-hidden="true">
                        <path stroke-linecap="square" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </header>

            <!-- Body: division info + chart preview -->
            <section class="flex flex-col lg:flex-row p-6 md:p-8 gap-8">

                <!-- Division information -->
                <article class="lg:w-1/3 flex flex-col justify-center">
                    <p id="modal-div-tagline" class="text-blue-600 font-bold uppercase tracking-widest text-lg mb-6 leading-tight"></p>
                    <p id="modal-div-desc" class="text-slate-700 font-medium text-lg leading-relaxed border-l-4 border-slate-900 pl-4 py-1 mb-8"></p>
                </article>

                <!-- Chart preview -->
                <figure class="lg:w-2/3 bg-slate-50 border-4 border-slate-900 p-4 relative flex flex-col items-center justify-center section-atm section-atm--grid min-h-[300px]">
                    <figcaption class="absolute top-0 left-0 bg-slate-900 text-white font-mono text-xs font-bold px-2 py-1 uppercase tracking-widest">
                        Organizational Chart
                    </figcaption>

                    <img id="modal-div-chart" src="" alt="Division organizational chart" class="max-h-[420px] max-w-full w-auto h-auto object-contain mt-4">

                    <!-- View full chart action (mobile layout) -->
                    <button type="button" id="modal-view-full-btn-mobile" class="pixel-btn-outline w-full mt-6 text-sm lg:hidden">
                        View Full Chart &rarr;
                    </button>
                </figure>

            </section>
        </section>
    </div>
</dialog>

<!-- Full Chart Lightbox Modal -->
<dialog id="full-chart-modal" class="p-0 bg-transparent w-full h-full max-w-none max-h-none m-0 border-none outline-none pcs-dialog" aria-labelledby="full-chart-title">
    <div class="fixed inset-0 grid place-items-center p-4 sm:p-6 lg:p-8 pcs-dialog-presentation">
        <section class="w-full h-full flex flex-col pcs-dialog-panel pointer-events-auto">

            <!-- Header: accessible name + close action (never scrolls away) -->
            <header class="flex justify-end items-center shrink-0 mb-4">
                <h2 id="full-chart-title" class="sr-only">Full organizational chart</h2>
                <button type="button" id="full-chart-close-btn" class="w-12 h-12 flex items-center justify-center border-4 border-white bg-slate-900 text-white hover:bg-slate-800 transition-colors focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white" aria-label="Close full chart view">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5" aria-hidden="true">
                        <path stroke-linecap="square" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </header>

            <!-- Chart fits the remaining viewport; scrolls only as tiny-screen fallback -->
            <figure class="full-chart-figure flex-1 min-h-0 grid place-items-center">
                <img id="full-chart-img" src="" alt="Full division organizational chart" class="full-chart-image">
            </figure>

        </section>
    </div>
</dialog>
