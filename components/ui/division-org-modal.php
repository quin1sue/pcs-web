<dialog id="division-org-modal" class="p-0 bg-transparent w-full h-full max-w-none max-h-none m-0 border-none outline-none pcs-dialog">
    <div class="fixed inset-0 grid place-items-center p-4 sm:p-6 lg:p-8 pcs-dialog-presentation">
        <div class="pixel-panel bg-white w-full max-w-5xl max-h-[calc(100dvh-32px)] overflow-y-auto flex flex-col relative section-atm section-atm--corners pcs-dialog-panel pointer-events-auto">
            <!-- Header -->
            <header class="border-b-4 border-slate-900 flex justify-between items-center p-4 md:p-6 bg-slate-50 sticky top-0 z-10 shrink-0">
                <div class="flex items-center gap-4">
                    <span id="modal-div-num" class="font-mono text-sm font-bold text-blue-600 border-2 border-blue-600 px-2 py-1"></span>
                    <h3 id="modal-div-name" class="font-black text-xl md:text-2xl text-slate-900 uppercase tracking-tighter"></h3>
                </div>
                <button id="modal-close-btn" class="w-10 h-10 flex items-center justify-center border-3 border-slate-900 bg-white hover:bg-slate-100 transition-colors focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600" aria-label="Close modal" style="border-width: 3px;">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                        <path stroke-linecap="square" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </header>

            <!-- Body -->
            <div class="flex flex-col lg:flex-row p-6 md:p-8 gap-8">

                <!-- Left Info -->
                <div class="lg:w-1/3 flex flex-col justify-center">
                    <p id="modal-div-tagline" class="text-blue-600 font-bold uppercase tracking-widest text-lg mb-6 leading-tight"></p>
                    <div class="border-l-4 border-slate-900 pl-4 py-1 mb-8">
                        <p id="modal-div-desc" class="text-slate-700 font-medium text-lg leading-relaxed"></p>
                    </div>
                </div>

                <!-- Right Chart -->
                <div class="lg:w-2/3 bg-slate-50 border-4 border-slate-900 p-4 relative flex flex-col items-center justify-center section-atm section-atm--grid min-h-[300px]">
                    <div class="absolute top-0 left-0 bg-slate-900 text-white font-mono text-xs font-bold px-2 py-1 uppercase tracking-widest">
                        Organizational Chart
                    </div>
                    <img id="modal-div-chart" src="" alt="Division organizational chart" class="max-h-[500px] w-auto object-contain mt-4">

                    <!-- View full chart button on mobile -->
                    <button type="button" id="modal-view-full-btn-mobile" class="pixel-btn-outline w-full mt-6 text-sm lg:hidden">
                        View Full Chart &rarr;
                    </button>
                </div>

            </div>
        </div>
    </div>
</dialog>

<!-- Full Chart Lightbox Modal -->
<dialog id="full-chart-modal" class="p-0 bg-transparent w-full h-full max-w-none max-h-none m-0 border-none outline-none pcs-dialog">
    <div class="fixed inset-0 grid place-items-center p-4 sm:p-6 lg:p-8 pcs-dialog-presentation">
        <div class="w-full h-full flex flex-col pcs-dialog-panel pointer-events-auto">
            <header class="flex justify-end shrink-0 mb-4">
                <button id="full-chart-close-btn" class="w-12 h-12 flex items-center justify-center border-4 border-white bg-slate-900 text-white hover:bg-slate-800 transition-colors focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white" aria-label="Close full chart view">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                        <path stroke-linecap="square" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </header>
            <div class="flex-1 overflow-auto flex items-center justify-center">
                <img id="full-chart-img" src="" alt="Full division organizational chart" class="max-w-none w-auto max-h-full object-contain">
            </div>
        </div>
    </div>
</dialog>