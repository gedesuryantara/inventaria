<!-- Body Design -->
        <div class="body-design">
            <div class="row">

                <!-- Sidebar Design -->
                <div class="col-2">
                    <div class="sidebar-design">
                        <div class="logo d-flex justify-content-center">
                            <img src="../Bootstrap Login/images/Logo_inventaria.svg" alt="Inventaria Logo" srcset="">
                        </div>
                        <div class="container-sm">
                            <div class="menu-design d-flex flex-column">
                                <div class="dasboard-design">
                                    <hr class="line-fill">
                                    <a href="#" class="dasboard">
                                        <i class="fa-solid fa-gauge fa-flip"></i>
                                        Dashboard
                                    </a>
                                    <hr class="line-fill">
                                </div>
                                <a href="" class="manage-user">
                                    <i class="fa-solid fa-circle-user fa-flip"></i>
                                    Manage Users
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Sidebar Design -->


                <div class="col-10">

                    <!-- Navbar Design -->
                    <div class="navbar-design shadow">
                        <div class="d-flex justify-content-between">
                            <div class="col-6">
                                <div class="input-group search-layout">
                                    <input type="text" class="form-control" placeholder="Search..." aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <button class="btn btn-primary" type="button" id="button-addon2">
                                        <i class="fa-solid fa-magnifying-glass fa-bounce"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex justify-content-end profile-layout">
                                    <p>User</p>
                                    <i class="fa-solid fa-circle-user fa-fade"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Navbar Design -->


                    <!-- Item Card Design -->
                    <div class="user-card-design">

                        
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <?php foreach ( $data['barang'] as $rowBarang ) : ?>
                            <div class="col">
                                <div class="card h-100">
                                    <img src="../Bootstrap Login/images/ice-tea-with-mint 1.jpg" class="card-img-top" alt="Item">
                                    <div class="card-body">
                                        <h2 class="card-title text-center mb-5"><?= $rowBarang['nama_barang'] ?></h2>
                                        <p class="card-text">Rak : <?= $rowBarang['nama_rak'] ?></p>
                                        <p class="card-text">Kolom : <?= $rowBarang['kolom'] ?></p>
                                        <p class="card-text">Stok : <?= $rowBarang['stok'] ?></p>
                                        <p class="card-text">Keterangan : <br><?= $rowBarang['keterangan'] ?></p>
                                    </div>


                                    <div class="card-footer">
                                        <div class="float-end">
                                            <div class="tombol">
                                            <a href="<?= BASEURL ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></a>
                                            <a href="<?= BASEURL ?>/dashboard/hapusDataBarang/<?= $rowBarang['id_barang']?>" class="btn btn-danger"><i class="fa-solid fa-trash-can fa-shake" style="color: #ffffff;" onclick="return confirm('yakin?');"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php endforeach ; ?>
                        </div>
                    
                    </div>
                    <!-- End Item Card Design -->



                    <!-- pagination start-->
                    <div class="pagination d-flex justify-content-center mt-5">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <?php for ($i = 1; $i <= $data['jumlah_halaman'] ; $i++) : ?>
                            <li class="page-item"><a class="page-link" href="<?= BASEURL ?>/dashboard/page/<?= $i ?>"><?= $i; ?></a></li>
                            <?php endfor; ?>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                            </ul>
                        </nav>
                    </div>
                      <!-- Pagination End -->

                    <!-- Button trigger modal -->
    <div class="d-flex justify-content-end btn-add position-absolute bottom-0 end-0">
        <button type="button" class="btn btn-add btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fa-solid fa-plus"></i>
        </button>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ADD</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Rak
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <form class="accordion-body form-control" action="<?=BASEURL?>/dashboard/tambahRak" method="POST">
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-4 col-form-label">Nama Rak :</label>
                                <div class="col-sm-7">
                                <input type="text" name="namarak" class="form-control" id="inputRak">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-4 col-form-label">Jumlah kolom :</label>
                                <div class="col-sm-7">
                                <input type="text" name="jumlahkolom" class="form-control" id="inputKolom">
                                </div>
                            </div>
                            <div class="mb-3 row col-md-3 save-button">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                    </div>
                    <br>
                    <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        Barang
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <form action="<?= BASEURL ?>/dashboard/tambahBarang" method="post" class="accordion-body">
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-4 col-form-label">Nama Barang :</label>
                                <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputRak" name="nama_barang">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-4 col-form-label">Keterangan :</label>
                                <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputKolom" name="keterangan">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="rakBarang" class="col-sm-4 col-form-label">Rak :</label>
                                <div class="col-sm-7">
                                    <select class="form-select" id="rakBarang" aria-label="Default select example" name="rakField">

                                    <?php foreach ( $data['rak'] as $rowRak ) : ?>

                                        <option value="<?= $rowRak['id_rak']; ?>"><?= $rowRak['nama_rak']; ?></option>

                                    <?php endforeach; ?>

                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-4 col-form-label">Kolom :</label>
                                <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputKolom" name="kolom_barang">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-4 col-form-label">Stock :</label>
                                <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputKolom" name="stok_barang">
                                </div>
                            </div>
                            <div class="mb-3 row col-md-3 save-button">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                    </div>
            </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
        </div>
      </div>
    </div>
  </div>


                      
                </div>
            </div>
        </div>

        <!-- JAVA SCRIPT LINK -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="fontawesome/fontawesome-free-6.4.2-web/fontawesome-free-6.4.2-web/js/all.min.js"></script>
    </body>
    </html>
