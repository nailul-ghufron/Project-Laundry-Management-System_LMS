<?php require_once '../app/views/layouts/header.php'; ?>
<div class="md:ml-64 flex-1 flex flex-col min-h-screen md:h-screen workspace-bg md:overflow-y-auto relative w-full pb-20 md:pb-0">
<?php require_once '../app/views/layouts/topbar.php'; ?>
<main class="flex-1 mt-16 md:mt-20 p-4 md:p-8 space-y-6 md:space-y-8 max-w-7xl mx-auto w-full">

<!-- Header Section -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4 md:gap-6">
<div>
<h2 class="text-xl md:text-[1.75rem] leading-tight font-semibold tracking-[-0.02em] text-on-surface font-headline">Laporan Pendapatan</h2>
<p class="text-[0.875rem] text-on-surface-variant font-body mt-1">Rekapitulasi keuangan bisnis laundry Anda.</p>
</div>
<button onclick="window.print()" class="bg-primary-gradient text-on-primary px-4 py-2 md:px-6 md:py-3 rounded-xl font-semibold text-sm flex items-center justify-center space-x-2 shadow-sm hover:shadow-md transition-all">
<span class="material-symbols-outlined text-[1.25rem]" data-icon="print">print</span>
<span>Cetak Laporan</span>
</button>
</div>

<!-- Summary Card -->
<div class="bg-surface-container-lowest rounded-2xl p-6 ambient-shadow relative overflow-hidden flex flex-col justify-between h-32 md:h-40 group max-w-md">
<div class="flex items-center justify-between relative z-10">
<div class="flex items-center space-x-3">
<div class="w-8 h-8 rounded-full bg-surface-variant flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-sm md:text-base" data-icon="account_balance_wallet">account_balance_wallet</span>
</div>
<h3 class="text-sm md:text-[1rem] font-semibold text-on-surface-variant">Total Pendapatan (Keseluruhan)</h3>
</div>
</div>
<div class="relative z-10 flex items-baseline space-x-2 mt-2 md:mt-4">
<span class="text-lg md:text-[1.75rem] font-semibold text-on-surface-variant">Rp</span>
<span class="text-3xl md:text-[3.5rem] font-bold leading-none tabular-nums"><?= number_format($data['total_pendapatan'], 0, ',', '.') ?></span>
</div>
</div>

<div class="bg-surface-container-lowest rounded-2xl pt-6 shadow-sm relative z-10 overflow-hidden">
<div class="px-6 mb-4 flex items-center justify-between">
<h3 class="text-[1rem] font-semibold text-on-surface font-headline">Rincian Transaksi</h3>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse min-w-[600px]">
<thead>
<tr class="text-[0.875rem] text-on-surface-variant font-semibold border-b-2 border-surface-container-low">
<th class="py-4 px-6 font-headline w-1/5">No Nota</th>
<th class="py-4 px-6 font-headline w-1/5">Tanggal</th>
<th class="py-4 px-6 font-headline w-1/5">Nama Pelanggan</th>
<th class="py-4 px-6 font-headline w-1/5 text-right">Total Pendapatan</th>
</tr>
</thead>
<tbody class="text-[0.875rem] font-body text-on-surface">
<?php foreach($data['transactions'] as $trx): ?>
<tr class="border-b border-surface-container-low last:border-0">
<td class="py-4 px-6 font-medium text-on-surface-variant">#TRX-<?= sprintf('%04d', $trx['id_transaksi']) ?></td>
<td class="py-4 px-6"><?= date('d M Y H:i', strtotime($trx['tanggal_transaksi'])) ?></td>
<td class="py-4 px-6"><?= htmlspecialchars($trx['nama_pelanggan']) ?></td>
<td class="py-4 px-6 font-semibold text-right">Rp <?= number_format($trx['total_harga'], 0, ',', '.') ?></td>
</tr>
<?php endforeach; ?>
<?php if(empty($data['transactions'])): ?>
<tr><td colspan="4" class="text-center py-8 text-on-surface-variant">Belum ada transaksi</td></tr>
<?php endif; ?>
</tbody>
</table>
</div>
</div>

<div class="h-12 w-full hidden md:block"></div>
</main>
</div>

<style>
@media print {
    body * {
        visibility: hidden;
    }
    main, main * {
        visibility: visible;
    }
    main {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        margin: 0;
        padding: 0;
    }
    button, nav, header {
        display: none !important;
    }
}
</style>
</body></html>
