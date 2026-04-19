<div class="bg-surface-container-lowest rounded-2xl pt-6 ambient-shadow relative z-10 overflow-hidden mb-16 md:mb-0">
<div class="px-6 mb-4 flex items-center justify-between">
<h3 class="text-[1rem] font-semibold text-on-surface font-headline">Transaksi Terakhir</h3>
<a href="<?= BASE_URL ?>transaction" class="text-sm font-semibold text-primary hover:text-primary-container transition-colors">Lihat Semua</a>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse min-w-[500px]">
<thead>
<tr class="text-[0.875rem] text-on-surface-variant font-semibold border-b-2 border-surface-container-low">
<th class="py-4 px-6 font-headline w-1/4">No Nota</th>
<th class="py-4 px-6 font-headline w-2/4">Nama Pelanggan</th>
<th class="py-4 px-6 font-headline w-1/4">Status Cucian</th>
</tr>
</thead>
<tbody class="text-[0.875rem] font-body text-on-surface">
<?php foreach($data['recent_transactions'] as $trx): ?>
<tr class="hover:bg-surface-container-high/50 transition-colors duration-200 group border-b border-surface-container-low last:border-0">
<td class="py-4 px-6 font-medium text-on-surface-variant group-hover:text-primary transition-colors">#TRX-<?= sprintf('%04d', $trx['id_transaksi']) ?></td>
<td class="py-4 px-6"><?= htmlspecialchars($trx['nama_pelanggan']) ?></td>
<td class="py-4 px-6">
    <?php if($trx['status_cucian'] == 'Selesai' || $trx['status_cucian'] == 'Diambil'): ?>
    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-[0.6875rem] font-bold tracking-wide bg-[#6ffbbe]/20 text-[#00714d] uppercase font-label">
        <?= $trx['status_cucian'] ?>
    </span>
    <?php elseif($trx['status_cucian'] == 'Antre'): ?>
    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-[0.6875rem] font-bold tracking-wide bg-[#ffddb8]/30 text-[#4c2e00] uppercase font-label">
        Antre
    </span>
    <?php else: ?>
    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-[0.6875rem] font-bold tracking-wide bg-primary-fixed/50 text-on-primary-fixed uppercase font-label">
        Diproses
    </span>
    <?php endif; ?>
</td>
</tr>
<?php endforeach; ?>
<?php if(empty($data['recent_transactions'])): ?>
<tr><td colspan="3" class="text-center py-8 text-on-surface-variant">Belum ada transaksi</td></tr>
<?php endif; ?>
</tbody>
</table>
</div>
</div>
