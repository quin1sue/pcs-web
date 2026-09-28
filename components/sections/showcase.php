<section id="showcase" class="py-24 bg-blue-50 border-b-4 border-slate-900 section-atm section-atm--corners">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-16 flex flex-col md:flex-row md:items-end justify-between gap-6 reveal">
            <div>
                <h2 class="text-4xl md:text-5xl font-black text-slate-900 uppercase tracking-tighter mb-4 pixel-panel inline-block px-4 py-2 bg-white">
                    Showcase
                </h2>
                <p class="text-lg text-slate-700 font-bold border-l-4 border-blue-600 pl-4 mt-4">Built by the Society</p>
            </div>
            <a href="#" class="pixel-btn-outline bg-white">
                VIEW ALL PROJECTS
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            global $projects;
            foreach ($projects as $project) {
                require __DIR__ . '/../ui/project-card.php';
            }
            ?>
        </div>
    </div>
</section>