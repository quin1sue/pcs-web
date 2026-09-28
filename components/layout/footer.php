<footer class="bg-slate-900 text-white pt-16 pb-8 border-t-8 border-blue-600 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
            <!-- Brand info -->
            <div class="col-span-1 md:col-span-1">
                <div class="flex items-center gap-3 mb-6 bg-white text-slate-900 px-3 py-2 pixel-border w-max">
                    <img
                        class="h-8 w-auto"
                        src="public/assets/images/logo/pcs-logo.png"
                        alt="Pixel Code &amp; Society"
                        onerror="this.style.display='none'">
                    <span class="font-black text-base uppercase tracking-tight">PCS</span>
                </div>
                <p class="text-sm text-slate-300 mb-6 leading-relaxed font-medium">
                    A student community building technology, exploring ideas, and connecting curious people.
                </p>
            </div>

            <!-- Navigation -->
            <nav class="col-span-1" aria-label="Footer navigation">
                <h4 class="text-blue-400 font-black mb-4 uppercase tracking-wider text-sm">Navigation</h4>
                <ul class="space-y-3 font-bold">
                    <li><a href="#identity" class="text-sm text-slate-300 hover:text-white hover:pl-2 transition-all block">> Identity</a></li>
                    <li><a href="#discover" class="text-sm text-slate-300 hover:text-white hover:pl-2 transition-all block">> Discovery</a></li>
                    <li><a href="#people" class="text-sm text-slate-300 hover:text-white hover:pl-2 transition-all block">> People</a></li>
                    <li><a href="#experience" class="text-sm text-slate-300 hover:text-white hover:pl-2 transition-all block">> Experience</a></li>
                    <li><a href="#showcase" class="text-sm text-slate-300 hover:text-white hover:pl-2 transition-all block">> Showcase</a></li>
                </ul>
            </nav>

            <!-- Divisions -->
            <nav class="col-span-1" aria-label="Footer divisions">
                <h4 class="text-blue-400 font-black mb-4 uppercase tracking-wider text-sm">Divisions</h4>
                <ul class="space-y-3 font-bold">
                    <li><a href="#" class="text-sm text-slate-300 hover:text-white hover:pl-2 transition-all block">> Programming</a></li>
                    <li><a href="#" class="text-sm text-slate-300 hover:text-white hover:pl-2 transition-all block">> Cybersecurity</a></li>
                    <li><a href="#" class="text-sm text-slate-300 hover:text-white hover:pl-2 transition-all block">> Infrastructure</a></li>
                    <li><a href="#" class="text-sm text-slate-300 hover:text-white hover:pl-2 transition-all block">> Multimedia</a></li>
                    <li><a href="#" class="text-sm text-slate-300 hover:text-white hover:pl-2 transition-all block">> Communications</a></li>
                </ul>
            </nav>

            <!-- Connect -->
            <div class="col-span-1">
                <h4 class="text-blue-400 font-black mb-4 uppercase tracking-wider text-sm">Updates</h4>
                <p class="text-sm text-slate-300 mb-4 font-medium">Subscribe to our network broadcast.</p>
                <form class="flex flex-col gap-2">
                    <input type="email" placeholder="Email address" class="bg-slate-800 text-white px-3 py-2 text-sm focus:outline-none pixel-border border-slate-600 focus:border-blue-400 transition-colors">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-500 text-white font-black text-xs px-4 py-2 uppercase tracking-wide transition-colors pixel-border mt-2">Subscribe</button>
                </form>
            </div>
        </div>

        <div class="pt-8 border-t-4 border-slate-800 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-xs text-slate-400 font-bold uppercase tracking-widest">© <?php echo date('Y'); ?> Pixel Code & Society. All rights reserved.</p>
        </div>
    </div>
</footer>