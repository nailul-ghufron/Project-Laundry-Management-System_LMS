<?php require_once '../app/views/layouts/header.php'; ?>
<div class="md:ml-64 flex-1 flex flex-col min-h-screen md:h-screen workspace-bg md:overflow-y-auto relative w-full pb-20 md:pb-0">
<?php require_once '../app/views/layouts/topbar.php'; ?>
<main class="flex-1 mt-16 md:mt-20 p-4 md:p-8 space-y-6 md:space-y-8 max-w-7xl mx-auto w-full">

<!-- Dashboard Header Section -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4 md:gap-6">
<div>
<h2 class="text-xl md:text-[1.75rem] leading-tight font-semibold tracking-[-0.02em] text-on-surface font-headline">Selamat Datang, <?= htmlspecialchars($data['username']) ?></h2>
<p class="text-[0.875rem] text-on-surface-variant font-body mt-1">Laporan Singkat Hari Ini.</p>
</div>
</div>

<div class="grid grid-cols-1 md:grid-cols-4 gap-4 md:gap-6">
<!-- Stat Card 1 -->
<div class="bg-surface-container-lowest rounded-2xl p-6 ambient-shadow relative overflow-hidden flex flex-col justify-between h-32 md:h-40 group">
<div class="flex items-center space-x-3 relative z-10">
<div class="w-8 h-8 rounded-full bg-primary-container/10 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-sm md:text-base" data-icon="receipt_long">receipt_long</span>
</div>
<h3 class="text-sm md:text-[1rem] font-semibold text-on-surface-variant">Selesai/Diambil</h3>
</div>
<div class="relative z-10">
<span class="text-3xl md:text-[3.5rem] font-bold leading-none tabular-nums"><?= $data['total_cucian_selesai'] ?></span>
</div>
</div>

<!-- Stat Card 2 -->
<div class="bg-surface-container-lowest rounded-2xl p-6 ambient-shadow relative overflow-hidden flex flex-col justify-between h-32 md:h-40 group">
<div class="flex items-center space-x-3 relative z-10">
<div class="w-8 h-8 rounded-full bg-secondary-container/20 flex items-center justify-center text-secondary">
<span class="material-symbols-outlined text-sm md:text-base" data-icon="check_circle">check_circle</span>
</div>
<h3 class="text-sm md:text-[1rem] font-semibold text-on-surface-variant">Antrean Baru</h3>
</div>
<div class="relative z-10">
<span class="text-3xl md:text-[3.5rem] font-bold leading-none tabular-nums"><?= $data['cucian_baru'] ?></span>
</div>
</div>

<!-- Stat Card 3 (Featured/Larger) -->
<div class="md:col-span-2 bg-surface-container-lowest rounded-2xl p-6 ambient-shadow relative overflow-hidden flex flex-col justify-between h-32 md:h-40 group">
<div class="flex items-center justify-between relative z-10">
<div class="flex items-center space-x-3">
<div class="w-8 h-8 rounded-full bg-surface-variant flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-sm md:text-base" data-icon="account_balance_wallet">account_balance_wallet</span>
</div>
<h3 class="text-sm md:text-[1rem] font-semibold text-on-surface-variant">Total Pendapatan</h3>
</div>
</div>
<div class="relative z-10 flex items-baseline space-x-2 mt-2 md:mt-4">
<span class="text-lg md:text-[1.75rem] font-semibold text-on-surface-variant">Rp</span>
<span class="text-3xl md:text-[3.5rem] font-bold leading-none tabular-nums"><?= number_format($data['total_pendapatan'], 0, ',', '.') ?></span>
</div>
</div>
</div>

<?php require_once '../app/views/dashboard/_recent_transactions.php'; ?>

<div class="h-12 w-full hidden md:block"></div>
</main>
</div>
</body></html>
