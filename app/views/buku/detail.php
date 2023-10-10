<div class="container mt-5">

    <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?= $data['buku']['judul']; ?></h5> <!--- ambil nama dari database untuk card title ---->
        <h6 class="card-subtitle mb-2 text-muted"><?= $data['buku']['kategori']; ?>, <?= $data['buku']['genre']; ?></h6>
        <p class="card-text"><?= $data['buku']['pengarang']; ?></p>
        <a href="<?= BASEURL; ?>/buku"  class="card-link">Kembali</a>
    </div>
    </div>

</div>