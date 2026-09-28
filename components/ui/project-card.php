<article class="pixel-panel bg-white flex flex-col h-full reveal group hover:-translate-y-2 transition-transform cursor-pointer relative">
    <div class="h-40 bg-gradient-to-br <?= htmlspecialchars($project['gradient']) ?> relative overflow-hidden border-b-4 border-slate-900">
        <!-- Dot pattern overlay -->
        <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(#0F172A 2px, transparent 2px); background-size: 16px 16px;"></div>
    </div>
    
    <div class="p-6 flex-grow flex flex-col relative">
        <div class="absolute -top-4 right-4 bg-white text-blue-600 font-black px-3 py-1 pixel-border text-xs uppercase tracking-widest z-10">
            <?= htmlspecialchars($project['division']) ?>
        </div>
        
        <h3 class="text-2xl font-black text-slate-900 mb-3 group-hover:text-blue-600 transition-colors uppercase tracking-tight mt-2">
            <?= htmlspecialchars($project['title']) ?>
        </h3>
        
        <p class="text-sm text-slate-700 font-medium flex-grow border-l-2 border-dashed border-slate-300 pl-3">
            <?= htmlspecialchars($project['description']) ?>
        </p>
    </div>
</article>
