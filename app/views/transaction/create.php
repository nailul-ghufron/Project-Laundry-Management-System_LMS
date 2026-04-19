<?php require_once '../app/views/layouts/header.php'; ?>
<div class="md:ml-64 flex-1 flex flex-col min-h-screen md:h-screen workspace-bg md:overflow-y-auto relative w-full pb-20 md:pb-0">
<?php require_once '../app/views/layouts/topbar.php'; ?>
<main class="flex-1 mt-16 md:mt-20 p-4 md:p-8 space-y-6 md:space-y-8 max-w-7xl mx-auto w-full">
<form action="<?= BASE_URL ?>transaction/store" method="POST" id="transactionForm">
<!-- Page Content: POS Grid -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
<!-- Left Column: Details (span 8) -->
<div class="lg:col-span-8 space-y-8">
<div class="mb-2">
<h2 class="text-2xl font-headline font-semibold text-on-background tracking-tight">Form Transaksi Baru</h2>
<p class="text-on-surface-variant text-body-md mt-1">Isi detail pelanggan dan item cucian untuk membuat pesanan.</p>
</div>
<!-- Section 1: Customer Details -->
<section class="bg-surface-container-lowest rounded-[24px] p-6 md:p-8 shadow-sm">
<h3 class="text-title-sm font-headline font-semibold text-on-surface mb-6 flex items-center gap-2">
<span class="material-symbols-outlined text-primary">person</span>
                        Customer Details
                    </h3>
<div class="grid grid-cols-1 gap-6">
<div class="flex flex-col gap-2">
<label class="text-sm font-bold text-on-surface-variant uppercase tracking-wider">Pilih Pelanggan</label>
<select name="id_pelanggan" class="bg-surface-container-highest border-none rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary/40 w-full" required>
    <option value="">-- Pilih Pelanggan --</option>
    <?php foreach($data['pelanggan'] as $p): ?>
    <option value="<?= $p['id_pelanggan'] ?>"><?= htmlspecialchars($p['nama_pelanggan']) ?> (<?= htmlspecialchars($p['nomor_telepon']) ?>)</option>
    <?php endforeach; ?>
</select>
<p class="text-xs text-on-surface-variant mt-2">Belum ada? <a href="<?= BASE_URL ?>customer/create" class="text-primary hover:underline">Tambah Pelanggan Baru</a></p>
</div>
</div>
</section>
<!-- Section 2: Dynamic Item List -->
<section class="bg-surface-container-lowest rounded-[24px] p-6 md:p-8 shadow-sm">
<div class="flex items-center justify-between mb-6">
<h3 class="text-title-sm font-headline font-semibold text-on-surface flex items-center gap-2">
<span class="material-symbols-outlined text-primary">checkroom</span> Detail Cucian
</h3>
<button type="button" onclick="addItem()" class="bg-primary-container/10 text-primary hover:bg-primary-container hover:text-on-primary-container px-4 py-2 rounded-full font-label text-sm font-bold flex items-center gap-2 transition-colors">
<span class="material-symbols-outlined text-[18px]">add</span> Tambah Item
</button>
</div>
<!-- List Header -->
<div class="grid grid-cols-12 gap-4 pb-3 border-b border-surface-dim/30 mb-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider hidden md:grid">
<div class="col-span-6">Jenis Layanan</div>
<div class="col-span-4 text-right">Berat / Qty</div>
<div class="col-span-2 text-center">Aksi</div>
</div>
<!-- Items container -->
<div id="itemsContainer">
    <!-- First Row -->
    <div class="grid grid-cols-1 md:grid-cols-12 gap-4 items-center group p-2 rounded-xl transition-colors -mx-2 item-row mb-4 md:mb-0">
        <div class="col-span-1 md:col-span-6">
        <select name="items[0][id_layanan]" class="bg-surface-container-highest border-none rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-primary/40 w-full" required>
            <?php foreach($data['layanan'] as $l): ?>
            <option value="<?= $l['id_layanan'] ?>"><?= htmlspecialchars($l['nama_layanan']) ?> (Rp <?= number_format($l['harga_per_kg'],0,',','.') ?>)</option>
            <?php endforeach; ?>
        </select>
        </div>
        <div class="col-span-1 md:col-span-4 relative">
        <input name="items[0][berat]" class="bg-surface-container-highest border-none rounded-xl pl-4 pr-16 py-3 text-sm focus:ring-2 focus:ring-primary/40 w-full text-right" type="number" step="0.1" min="0.1" required placeholder="0.0"/>
        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-on-surface-variant/60 text-xs font-bold pointer-events-none">kg/pcs</span>
        </div>
        <div class="col-span-1 md:col-span-2 flex justify-end md:justify-center">
        <button type="button" onclick="removeItem(this)" class="text-outline hover:text-error transition-colors p-2 rounded-full hover:bg-error-container/50">
        <span class="material-symbols-outlined text-[20px]">delete</span>
        </button>
        </div>
    </div>
</div>
</section>
</div>
<!-- Right Column: Summary (span 4) -->
<div class="lg:col-span-4">
<div class="bg-surface-bright rounded-[32px] p-6 md:p-8 shadow-sm sticky top-28 border border-white/40">
<h3 class="text-title-sm font-headline font-semibold text-on-surface mb-6">Ringkasan Pesanan</h3>
<div class="space-y-4 mb-8 text-sm">
<div class="flex justify-between text-on-surface-variant">
<span>Biaya Antar/Jemput</span>
<span class="text-on-surface font-medium text-secondary">Gratis</span>
</div>
</div>
<!-- Primary CTA -->
<button type="submit" class="w-full bg-primary-gradient text-on-primary rounded-full py-4 px-6 font-semibold flex items-center justify-center gap-3 hover:shadow-lg transition-all text-sm md:text-base">
<span class="material-symbols-outlined">receipt_long</span>
                        Simpan Transaksi
                    </button>
</div>
</div>
</div>
</form>

<div class="h-12 w-full hidden md:block"></div>
</main>
</div>

<script>
let itemIndex = 1;
function addItem() {
    const container = document.getElementById('itemsContainer');
    const firstRow = container.querySelector('.item-row');
    const newRow = firstRow.cloneNode(true);
    
    // Update names
    const select = newRow.querySelector('select');
    select.name = `items[${itemIndex}][id_layanan]`;
    select.value = "";
    
    const input = newRow.querySelector('input');
    input.name = `items[${itemIndex}][berat]`;
    input.value = "";
    
    container.appendChild(newRow);
    itemIndex++;
}

function removeItem(btn) {
    const container = document.getElementById('itemsContainer');
    if(container.querySelectorAll('.item-row').length > 1) {
        btn.closest('.item-row').remove();
    } else {
        alert("Minimal harus ada 1 item cucian.");
    }
}
</script>
</body></html>
