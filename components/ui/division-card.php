<?php

/** @var array $division */
if (!isset($division)) return;
?>
<article class="pixel-panel p-6 md:p-8 bg-white cursor-pointer group hover:bg-slate-50 transition-colors relative">
    <div class="absolute top-0 right-0 bg-slate-900 text-white font-black px-3 py-1 text-sm border-l-4 border-b-4 border-slate-900">
        CLASS <?= htmlspecialchars($division['num']) ?>
    </div>

    <h3 class="text-3xl font-black text-slate-900 uppercase tracking-tight mb-2 mt-2 group-hover:text-blue-600 transition-colors">
        <?= htmlspecialchars($division['name']) ?>
    </h3>

    <p class="text-blue-600 font-bold mb-4 uppercase text-sm tracking-wider">
        <?= htmlspecialchars($division['tagline']) ?>
    </p>

    <div class="bg-slate-100 pixel-border p-4 mb-4">
        <p class="text-sm text-slate-700 font-medium">
            <?= htmlspecialchars($division['description']) ?>
        </p>
    </div>


    <div class="mt-4 flex flex-wrap items-center justify-between text-slate-900 font-black text-sm tracking-widest uppercase">

        <button type="button"
            class="text-blue-600 hover:text-blue-800 org-modal-trigger border-b-2 border-transparent hover:border-blue-600"
            data-num="<?= htmlspecialchars($division['num']) ?>"
            data-name="<?= htmlspecialchars($division['name']) ?>"
            data-tagline="<?= htmlspecialchars($division['tagline']) ?>"
            data-desc="<?= htmlspecialchars($division['modal_desc']) ?>"
            data-chart="<?= htmlspecialchars($division['chart']) ?>">
            View Division &rarr;
        </button>
    </div>
</article>