<div class="container mt-4">


<div class="row">
  <div class="col-lg-6">
    <?php Flasher::flash() ?> <!-- menampilkan pesan flash -->
  </div>
</div>

    <div class="row">
        <div class="col-lg-6">

        <!-- Trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
            Tambah Data Buku
        </button>
        <br><br>
            <h3>Daftar Buku</h3> 

            <ul class="list-group">
            <?php foreach($data['buku'] as $rowBuku) :?>
                <li class="list-group-item">
                    <?= $rowBuku['judul']; ?>
                    <a href="<?= BASEURL; ?>/buku/hapus/<?= $rowBuku['id_buku'] ?>" class="badge badge-primary float-right ml-2">hapus</a>
                    <a href="<?= BASEURL; ?>/buku/detail/<?= $rowBuku['id_buku'] ?>" class="badge badge-primary float-right">detail</a>
                </li>
            <?php endforeach; ?>    
            </ul>

        </div>
    </div>

</div>



<!-- modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Buku</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL ?>/buku/tambah"  method="post">
          <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul">
          </div>

          <div class="form-group">
            <label for="kategori">Kategori</label>
            <select class="form-control" id="kategori" name="kategori">
              <option value="Self Improvement">Self Improvement</option>
              <option value="Business">Business</option>
              <option value="Novel">Novel</option>
              <option value="Comic">Comic</option>
            </select>
          </div>

          <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" class="form-control" id="genre" name="genre">
          </div>

          <div class="form-group">
            <label for="pengarang">Pengarang</label>
            <input type="text" class="form-control" id="pengarang" name="pengarang">
          </div>

        </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>


        </form>
      </div>
    </div>
  </div>
</div>