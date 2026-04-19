<header class="fixed top-0 right-0 w-full md:w-[calc(100%-16rem)] z-40 bg-white/70 backdrop-blur-md dark:bg-slate-950/70 font-['Inter'] flex items-center justify-between px-4 md:px-8 h-16 md:h-20 shadow-[0_4px_20px_rgba(26,27,34,0.04)]">
<!-- Search / Left area -->
<div class="flex items-center space-x-4 w-1/2 md:w-1/3">
<div class="relative w-full max-w-md hidden md:block">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-sm" data-icon="search">search</span>
<input class="w-full bg-surface-container-highest border-none rounded-md py-2 pl-10 pr-4 text-sm focus:bg-surface-container-lowest focus:ring-1 focus:ring-primary/40 focus:outline-none transition-colors" placeholder="Search orders..." type="text"/>
</div>
<div class="md:hidden font-bold text-lg text-primary">Pristine LMS</div>
</div>
<!-- Trailing Actions -->
<div class="flex items-center space-x-3">
    <div class="text-sm font-semibold text-slate-700 hidden md:block mr-2"><?= isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'User' ?> (<?= isset($_SESSION['role']) ? $_SESSION['role'] : '' ?>)</div>
    <div class="w-8 h-8 md:w-10 md:h-10 rounded-full overflow-hidden bg-surface-container-highest border border-outline-variant/20 flex items-center justify-center">
        <span class="material-symbols-outlined text-primary">person</span>
    </div>
</div>
</header>
