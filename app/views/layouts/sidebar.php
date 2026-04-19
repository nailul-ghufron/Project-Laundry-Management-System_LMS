<nav class="h-screen w-64 fixed left-0 top-0 border-none bg-slate-100 dark:bg-slate-900 font-['Inter'] tracking-tight headline-md:font-semibold body-md:font-normal flex flex-col py-8 space-y-4 z-50 hidden md:flex">
<!-- Brand Header -->
<div class="px-8 mb-8 flex items-center space-x-3">
<div class="w-10 h-10 rounded-full bg-primary-container flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-on-primary-container" data-icon="local_laundry_service">local_laundry_service</span>
</div>
<div>
<h1 class="text-xl font-bold tracking-tighter text-blue-900 dark:text-blue-100">Pristine LMS</h1>
<p class="text-xs text-on-surface-variant">The Pristine Flow</p>
</div>
</div>
<!-- Navigation Links -->
<div class="flex-1 flex flex-col space-y-2">
<!-- Active Tab: Dashboard -->
<a class="text-slate-500 dark:text-slate-400 px-8 py-3 hover:text-blue-700 hover:bg-slate-200/50 dark:hover:bg-slate-800/50 transition-colors duration-200 flex items-center space-x-4" href="<?= BASE_URL ?>dashboard">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
<span>Dashboard</span>
</a>
<!-- Inactive Tabs -->
<a class="text-slate-500 dark:text-slate-400 px-8 py-3 hover:text-blue-700 hover:bg-slate-200/50 dark:hover:bg-slate-800/50 transition-colors duration-200 flex items-center space-x-4" href="<?= BASE_URL ?>transaction/create">
<span class="material-symbols-outlined" data-icon="add_shopping_cart">add_shopping_cart</span>
<span>New Order</span>
</a>
<a class="text-slate-500 dark:text-slate-400 px-8 py-3 hover:text-blue-700 hover:bg-slate-200/50 dark:hover:bg-slate-800/50 transition-colors duration-200 flex items-center space-x-4" href="<?= BASE_URL ?>transaction">
<span class="material-symbols-outlined" data-icon="local_laundry_service">local_laundry_service</span>
<span>Laundry Status</span>
</a>
<?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'Owner'): ?>
<a class="text-slate-500 dark:text-slate-400 px-8 py-3 hover:text-blue-700 hover:bg-slate-200/50 dark:hover:bg-slate-800/50 transition-colors duration-200 flex items-center space-x-4" href="<?= BASE_URL ?>report">
<span class="material-symbols-outlined" data-icon="bar_chart">bar_chart</span>
<span>Revenue Reports</span>
</a>
<?php endif; ?>
</div>
<!-- CTA / Footer -->
<div class="px-8 mt-auto">
<a href="<?= BASE_URL ?>auth/logout" class="w-full text-slate-500 dark:text-slate-400 px-4 py-3 hover:text-blue-700 hover:bg-slate-200/50 transition-colors duration-200 flex items-center space-x-4 rounded-full">
<span class="material-symbols-outlined" data-icon="logout">logout</span>
<span>Logout</span>
</a>
</div>
</nav>

<!-- Mobile bottom nav (simplified) -->
<nav class="md:hidden fixed bottom-0 w-full bg-white border-t border-slate-200 z-50 flex justify-around py-2">
    <a href="<?= BASE_URL ?>dashboard" class="flex flex-col items-center text-slate-500">
        <span class="material-symbols-outlined">dashboard</span>
        <span class="text-xs">Home</span>
    </a>
    <a href="<?= BASE_URL ?>transaction/create" class="flex flex-col items-center text-slate-500">
        <span class="material-symbols-outlined">add_circle</span>
        <span class="text-xs">New</span>
    </a>
    <a href="<?= BASE_URL ?>transaction" class="flex flex-col items-center text-slate-500">
        <span class="material-symbols-outlined">list_alt</span>
        <span class="text-xs">Status</span>
    </a>
    <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'Owner'): ?>
    <a href="<?= BASE_URL ?>report" class="flex flex-col items-center text-slate-500">
        <span class="material-symbols-outlined">bar_chart</span>
        <span class="text-xs">Report</span>
    </a>
    <?php endif; ?>
    <a href="<?= BASE_URL ?>auth/logout" class="flex flex-col items-center text-slate-500">
        <span class="material-symbols-outlined">logout</span>
        <span class="text-xs">Logout</span>
    </a>
</nav>
