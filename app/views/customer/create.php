<?php require_once '../app/views/layouts/header.php'; ?>
<div class="md:ml-64 flex-1 flex flex-col min-h-screen md:h-screen workspace-bg md:overflow-y-auto relative w-full pb-20 md:pb-0">
<?php require_once '../app/views/layouts/topbar.php'; ?>
<main class="flex-1 mt-16 md:mt-20 p-4 md:p-8 space-y-6 md:space-y-8 max-w-3xl mx-auto w-full">

<!-- Page Header -->
<div class="mb-2">
<h2 class="text-2xl font-headline font-semibold text-on-background tracking-tight">Tambah Pelanggan Baru</h2>
<p class="text-on-surface-variant text-body-md mt-1">Lengkapi data diri pelanggan untuk disimpan ke dalam sistem.</p>
</div>

<?php if(isset($data['error'])): ?>
<div class="bg-error-container text-on-error-container p-3 rounded-md mb-4 text-sm text-center">
    <?= htmlspecialchars($data['error']) ?>
</div>
<?php endif; ?>

<section class="bg-surface-container-lowest rounded-[24px] p-6 md:p-8 shadow-sm">
<form action="<?= BASE_URL ?>customer/store" method="POST" class="space-y-6">

<div class="flex flex-col gap-2">
<label class="text-sm font-bold text-on-surface-variant uppercase tracking-wider">Nama Lengkap</label>
<input name="nama_pelanggan" class="bg-surface-container-highest border-none rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary/40 w-full outline-none" type="text" placeholder="Masukkan nama pelanggan" required/>
</div>

<div class="flex flex-col gap-2">
<label class="text-sm font-bold text-on-surface-variant uppercase tracking-wider">Nomor Telepon</label>
<input name="nomor_telepon" class="bg-surface-container-highest border-none rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary/40 w-full outline-none" type="text" placeholder="08..." required/>
</div>

<div class="flex flex-col gap-2">
<label class="text-sm font-bold text-on-surface-variant uppercase tracking-wider">Alamat</label>
<textarea name="alamat" class="bg-surface-container-highest border-none rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary/40 w-full outline-none resize-none" rows="3" placeholder="Masukkan alamat lengkap"></textarea>
</div>

<div class="flex justify-end gap-3 mt-8">
<a href="<?= BASE_URL ?>transaction/create" class="px-6 py-3 rounded-full font-semibold text-primary hover:bg-surface-container transition-colors">Batal</a>
<button type="submit" class="bg-primary-gradient text-on-primary px-6 py-3 rounded-full font-semibold shadow-sm hover:shadow-md transition-all">Simpan Pelanggan</button>
</div>

</form>
</section>

</main>
</div>
</body></html>
