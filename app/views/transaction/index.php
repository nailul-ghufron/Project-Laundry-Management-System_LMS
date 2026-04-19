<?php require_once '../app/views/layouts/header.php'; ?>
<div class="md:ml-64 flex-1 flex flex-col min-h-screen md:h-screen workspace-bg md:overflow-y-auto relative w-full pb-20 md:pb-0">
<?php require_once '../app/views/layouts/topbar.php'; ?>
<main class="flex-1 mt-16 md:mt-20 p-4 md:p-8 space-y-6 md:space-y-8 max-w-7xl mx-auto w-full">

<!-- Dashboard Header Section -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4 md:gap-6">
<div>
<h2 class="text-xl md:text-[1.75rem] leading-tight font-semibold tracking-[-0.02em] text-on-surface font-headline">Status Cucian</h2>
<p class="text-[0.875rem] text-on-surface-variant font-body mt-1">Pantau dan update status cucian.</p>
</div>
</div>

<div class="bg-surface-container-lowest rounded-2xl pt-6 shadow-sm relative z-10 overflow-hidden">
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse min-w-[600px]">
<thead>
<tr class="text-[0.875rem] text-on-surface-variant font-semibold border-b-2 border-surface-container-low">
<th class="py-4 px-6 font-headline w-1/5">No Nota</th>
<th class="py-4 px-6 font-headline w-1/5">Tanggal</th>
<th class="py-4 px-6 font-headline w-1/5">Nama Pelanggan</th>
<th class="py-4 px-6 font-headline w-1/5">Total Harga</th>
<th class="py-4 px-6 font-headline w-1/5">Status Cucian & Aksi</th>
</tr>
</thead>
<tbody class="text-[0.875rem] font-body text-on-surface">
<?php foreach($data['transactions'] as $trx): ?>
<tr class="hover:bg-surface-container-high/50 transition-colors duration-200 group border-b border-surface-container-low last:border-0">
<td class="py-4 px-6 font-medium text-on-surface-variant group-hover:text-primary transition-colors">#TRX-<?= sprintf('%04d', $trx['id_transaksi']) ?></td>
<td class="py-4 px-6"><?= date('d M Y H:i', strtotime($trx['tanggal_transaksi'])) ?></td>
<td class="py-4 px-6"><?= htmlspecialchars($trx['nama_pelanggan']) ?></td>
<td class="py-4 px-6">Rp <?= number_format($trx['total_harga'], 0, ',', '.') ?></td>
<td class="py-4 px-6 flex items-center gap-2">
    <form action="<?= BASE_URL ?>transaction/updateStatus" method="POST" class="flex items-center gap-2 m-0">
        <input type="hidden" name="id_transaksi" value="<?= $trx['id_transaksi'] ?>">
        <select name="status" class="text-xs font-bold tracking-wide rounded-full px-3 py-1 outline-none border-none cursor-pointer focus:ring-0
        <?php 
            if($trx['status_cucian'] == 'Antre') echo 'bg-[#ffddb8]/30 text-[#4c2e00]';
            elseif($trx['status_cucian'] == 'Proses') echo 'bg-primary-fixed/50 text-on-primary-fixed';
            else echo 'bg-[#6ffbbe]/20 text-[#00714d]';
        ?>" onchange="this.form.submit()">
            <option value="Antre" <?= $trx['status_cucian'] == 'Antre' ? 'selected' : '' ?>>Antre</option>
            <option value="Proses" <?= $trx['status_cucian'] == 'Proses' ? 'selected' : '' ?>>Proses</option>
            <option value="Selesai" <?= $trx['status_cucian'] == 'Selesai' ? 'selected' : '' ?>>Selesai</option>
            <option value="Diambil" <?= $trx['status_cucian'] == 'Diambil' ? 'selected' : '' ?>>Diambil</option>
        </select>
    </form>
</td>
</tr>
<?php endforeach; ?>
<?php if(empty($data['transactions'])): ?>
<tr><td colspan="5" class="text-center py-8 text-on-surface-variant">Belum ada transaksi</td></tr>
<?php endif; ?>
</tbody>
</table>
</div>
</div>

<div class="h-12 w-full hidden md:block"></div>
</main>
</div>
</body></html>
