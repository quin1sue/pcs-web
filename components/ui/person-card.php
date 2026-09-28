<article class="pixel-panel pixel-shadow bg-white p-6 flex flex-col items-center text-center transition-transform hover:-translate-y-1">
    <div class="w-32 h-32 mb-6 pixel-border overflow-hidden bg-slate-100 relative">
        <img src="https://api.dicebear.com/8.x/initials/svg?seed=<?= urlencode($person['name'] ?? 'User') ?>&backgroundColor=cbd5e1&textColor=0f172a" 
             alt="<?= htmlspecialchars($person['name'] ?? '') ?>" 
             class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-300">
    </div>
    <h3 class="text-xl font-bold text-slate-900 uppercase tracking-tight mb-2">
        <?= htmlspecialchars($person['name'] ?? '') ?>
    </h3>
    <p class="text-sm font-bold text-blue-600 bg-blue-50 px-3 py-1 pixel-border inline-block uppercase tracking-wider">
        <?= htmlspecialchars($person['role'] ?? '') ?>
    </p>
</article>
