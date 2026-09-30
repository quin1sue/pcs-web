<section id="people" class="py-24 bg-white border-t-4 border-slate-900 section-atm section-atm--corners">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-16">
            <h2 class="text-4xl md:text-5xl font-black text-slate-900 uppercase tracking-tighter mb-4 pixel-panel inline-block px-4 py-2 bg-blue-100">
                Our People
            </h2>
            <p class="text-lg text-slate-600 max-w-2xl font-medium border-l-4 border-slate-900 pl-4">
                The leaders driving the Pixel & Code Society forward.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            global $people;
            foreach ($people as $person): ?>
                <?php include __DIR__ . '/../ui/person-card.php'; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>