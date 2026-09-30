<section id="discover" class="py-24 bg-white border-b-4 border-slate-900 section-atm side-env">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-16">
            <h2 class="text-4xl md:text-5xl font-black text-slate-900 uppercase tracking-tighter mb-4 pixel-panel inline-block px-4 py-2 bg-blue-100">
                Choose Your Division
            </h2>
            <p class="text-lg text-slate-600 max-w-2xl font-medium border-l-4 border-slate-900 pl-4 mt-4">
                Select a division that matches your skills. Each class plays a unique role in our ecosystem.
            </p>
        </div>

        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Left Side (Main 3) -->
            <div class="lg:w-2/3 flex flex-col gap-8">
                <?php
                global $divisions;
                for ($i = 0; $i < 3; $i++) {
                    if (isset($divisions[$i])) {
                        $division = $divisions[$i];
                        require __DIR__ . '/../ui/division-card.php';
                    }
                }
                ?>
            </div>

            <!-- Right Side (Support 2) -->
            <div class="lg:w-1/3 flex flex-col gap-8 lg:mt-16">
                <?php
                for ($i = 3; $i < 5; $i++) {
                    if (isset($divisions[$i])) {
                        $division = $divisions[$i];
                        require __DIR__ . '/../ui/division-card.php';
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Ambient decoration -->
    <div class="px-star px-star--navy px-star--d1" aria-hidden="true" style="top:10%; right:5%;"></div>
    <div class="px-cluster px-cluster--cyan px-cluster--sm px-cluster--d1" aria-hidden="true" style="bottom:8%; right:9%;"></div>
    <div class="px-dot px-drift-a d3" aria-hidden="true" style="top:46%; left:3%;"></div>
</section>