<?php require_once '../app/views/layouts/header.php'; ?>
<div class="md:ml-64 flex-1 flex flex-col min-h-screen md:h-screen workspace-bg md:overflow-y-auto relative w-full pb-20 md:pb-0">
<?php require_once '../app/views/layouts/topbar.php'; ?>
<main class="flex-1 mt-16 md:mt-20 p-4 md:p-8 space-y-6 md:space-y-8 max-w-7xl mx-auto w-full">

<!-- Dashboard Header Section -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4 md:gap-6">
<div>
<h2 class="text-xl md:text-[1.75rem] leading-tight font-semibold tracking-[-0.02em] text-on-surface font-headline">Selamat Datang, <?= htmlspecialchars($data['username']) ?></h2>
<p class="text-[0.875rem] text-on-surface-variant font-body mt-1">Status operasional laundry hari ini.</p>
</div>
<!-- Action Button -->
<a href="<?= BASE_URL ?>transaction/create" class="bg-primary-gradient text-on-primary px-4 py-2 md:px-6 md:py-3 rounded-xl font-semibold text-sm flex items-center justify-center space-x-2 shadow-[0_8px_16px_rgba(0,40,142,0.15)] hover:shadow-[0_12px_24px_rgba(0,40,142,0.2)] transition-all">
<span class="material-symbols-outlined text-[1.25rem]" data-icon="add">add</span>
<span>Buat Transaksi Baru</span>
</a>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6">
<!-- Stat Card 1 -->
<div class="bg-surface-container-lowest rounded-2xl p-6 ambient-shadow relative overflow-hidden flex flex-col justify-between h-32 md:h-40 group">
<div class="flex items-center space-x-3 relative z-10">
<div class="w-8 h-8 rounded-full bg-primary-container/10 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-sm md:text-base">receipt_long</span>
</div>
<h3 class="text-sm md:text-[1rem] font-semibold text-on-surface-variant">Antrean Baru</h3>
</div>
<div class="relative z-10">
<span class="text-3xl md:text-[3.5rem] font-bold leading-none tabular-nums"><?= $data['cucian_baru'] ?></span>
</div>
</div>

<!-- Stat Card 2 -->
<div class="bg-surface-container-lowest rounded-2xl p-6 ambient-shadow relative overflow-hidden flex flex-col justify-between h-32 md:h-40 group">
<div class="flex items-center space-x-3 relative z-10">
<div class="w-8 h-8 rounded-full bg-secondary-container/20 flex items-center justify-center text-secondary">
<span class="material-symbols-outlined text-sm md:text-base">local_laundry_service</span>
</div>
<h3 class="text-sm md:text-[1rem] font-semibold text-on-surface-variant">Sedang Diproses</h3>
</div>
<div class="relative z-10">
<span class="text-3xl md:text-[3.5rem] font-bold leading-none tabular-nums"><?= $data['sedang_diproses'] ?></span>
</div>
</div>

<div class="bg-surface-container-lowest rounded-2xl p-6 ambient-shadow relative overflow-hidden flex flex-col justify-between h-32 md:h-40 group">
<div class="flex items-center space-x-3 relative z-10">
<div class="w-8 h-8 rounded-full bg-secondary-container/20 flex items-center justify-center text-secondary">
<span class="material-symbols-outlined text-sm md:text-base">check_circle</span>
</div>
<h3 class="text-sm md:text-[1rem] font-semibold text-on-surface-variant">Siap Diambil</h3>
</div>
<div class="relative z-10">
<span class="text-3xl md:text-[3.5rem] font-bold leading-none tabular-nums"><?= $data['siap_diambil'] ?></span>
</div>
</div>

</div>

<?php require_once '../app/views/dashboard/_recent_transactions.php'; ?>

<div class="h-12 w-full hidden md:block"></div>
</main>
</div>
</body></html>
