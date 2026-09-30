<section id="experience" class="py-24 bg-white border-b-4 border-slate-900 overflow-hidden section-atm side-env">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <header class="mb-20 text-center reveal">
            <h2 class="text-4xl md:text-5xl font-black text-slate-900 tracking-tighter uppercase mb-4 pixel-panel inline-block px-6 py-2 bg-slate-100">
                The Journey
            </h2>
            <p class="text-xl text-slate-600 max-w-2xl mx-auto font-medium mt-6">
                From joining the society to becoming a leader, this is how you level up with us.
            </p>
        </header>

        <div class="relative">
            <!-- Desktop Path Line -->
            <div class="hidden md:block absolute top-8 left-0 w-full h-4 bg-slate-900 z-0" aria-hidden="true"></div>
            <div class="hidden md:block absolute top-10 left-0 w-full h-1 bg-white z-0" aria-hidden="true"></div>

            <!-- Mobile Path Line -->
            <div class="md:hidden absolute top-0 left-8 h-full w-4 bg-slate-900 z-0" aria-hidden="true"></div>
            <div class="md:hidden absolute top-0 left-9 h-full w-1 bg-white z-0" aria-hidden="true"></div>

            <ol class="flex flex-col md:flex-row justify-between gap-12 md:gap-6 relative z-10">
                <?php
                global $journey;
                $delay = 100;
                foreach ($journey as $step):
                ?>
                    <li class="flex flex-row md:flex-col items-start md:items-center gap-6 w-full md:w-1/5 reveal" style="transition-delay: <?= $delay ?>ms">
                        <span class="w-16 h-16 shrink-0 bg-blue-600 pixel-border flex items-center justify-center font-black text-white text-xl shadow-[4px_4px_0_0_#0F172A] relative group hover:-translate-y-2 transition-transform">
                            <?= htmlspecialchars($step['num']) ?>
                            <!-- Little decoration -->
                            <span class="absolute top-1 right-1 w-2 h-2 bg-white opacity-50" aria-hidden="true"></span>
                        </span>

                        <article class="pt-2 md:pt-4 md:text-center pixel-panel bg-white p-4 w-full md:w-auto relative group-hover:-translate-y-2 transition-transform">
                            <!-- Connector to line -->
                            <span class="hidden md:block absolute -top-4 left-1/2 w-1 h-4 bg-slate-900 -ml-[2px]" aria-hidden="true"></span>
                            <span class="md:hidden absolute top-1/2 -left-6 w-6 h-1 bg-slate-900" aria-hidden="true"></span>

                            <h3 class="text-xl font-black text-slate-900 uppercase tracking-tight mb-2"><?= htmlspecialchars($step['title']) ?></h3>
                            <p class="text-sm text-slate-700 font-medium leading-relaxed border-t-2 border-dashed border-slate-300 pt-2"><?= htmlspecialchars($step['desc']) ?></p>
                        </article>
                    </li>
                <?php
                    $delay += 100;
                endforeach;
                ?>
            </ol>
        </div>
    </div>

    <!-- Ambient decoration -->
    <footer aria-hidden="true">
        <div class="px-star px-star--blue px-star--sm" style="top:12%; right:7%;"></div>
        <div class="px-cluster px-cluster--sm px-cluster--d2" style="bottom:10%; left:8%;"></div>
        <div class="px-dot px-dot--cyan px-drift-b d1" style="top:52%; left:2.5%;"></div>
    </footer>
</section>