
                <div class="col-10">

                    <!-- Navbar Design -->
                    <div class="navbar-design shadow">
                        <div class="d-flex justify-content-between">
                            <div class="col-6">
                                <div class="input-group search-layout">
                                    <input type="text" class="form-control" placeholder="Search..." aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <button class="btn-search btn btn-primary" type="button" id="button-addon2">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex justify-content-end profile-layout">
                                    <p>User</p>
                                    <i class="fa-solid fa-circle-user"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Navbar Design -->


                    <!-- Item Card Design -->
                    <div class="item-barang ">

                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <?php foreach ( $data['barang'] as $rowBarang ) : ?>
                                <div class="col p-4">
                                    <div class="card h-100">
                                        <img src="<?= BASEURL ?>/img/image_upload/<?= $rowBarang['gambar'] ?>" alt="Item" class="">
                                        <div class="card-body">
                                        <h5 class="card-title text-center mb-2"><?= $rowBarang['nama_barang'] ?> </h5>
                                        <p class="card-text">Rak : <?= $rowBarang['nama_rak'] ?> </p>
                                        <p class="card-text">Keterangan : <?= $rowBarang['keterangan'] ?> </p>
                                        <p class="card-text">Kolom : <?= $rowBarang['kolom'] ?> </p>
                                        <p class="card-text">Stok : <?= $rowBarang['stok'] ?> </p>    
                                        </div>
        
                                        <div class="card-footer">
                                            <div class="float-start">
                                                <div class="tombol">
                                                <a href="<?= BASEURL ?>/dashboard/editbarang" class="btn btn-warning justify-content-center"><i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></a>
                                                <a href="<?= BASEURL ?>/dashboard/deleteBarang/<?= $rowBarang['id_barang'] ?>"  onclick="return confirm('Yakin Barang Ingin Dihapus?')" class="btn btn-danger"><i class="fa-solid fa-trash-can" style="color: #ffffff;"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            
                        </div>
                    </div>
                    <!-- End Item Card Design -->



                    



                    <!-- pagination start-->
                    <div class="pagination d-flex justify-content-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                            <?php if ( $data['halaman_aktif'] > 1) : ?>
                              <li class="page-item">
                                  <a class="page-link" href="<?= BASEURL ?>/dashboard/page/<?= $data['halaman_aktif'] - 1 ?>" aria-label="Previous">
                                  <span aria-hidden="true">&laquo;</span>
                                  </a>
                              </li>
                            <?php endif; ?>

                            <?php for ( $i = 1; $i <= $data['jumlah_halaman'] ; $i++ ) : ?>
                              <?php if( $i == $data['halaman_aktif'] ) : ?>
                                <li class="page-item"><a class="page-link active" href="<?= BASEURL ?>/dashboard/page/<?= $i ?>"><?= $i ?></a></li>
                              <?php else : ?>
                                <li class="page-item"><a class="page-link" href="<?= BASEURL ?>/dashboard/page/<?= $i ?>"><?= $i ?></a></li>
                              <?php endif; ?>
                            <?php endfor; ?>

                            <?php if( $data['halaman_aktif'] < $data['jumlah_halaman']) : ?>
                            <li class="page-item">
                                <a class="page-link" href="<?= BASEURL ?>/dashboard/page/<?= $data['halaman_aktif'] + 1 ?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                            <?php endif; ?>
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
                                            <label for="inputRak" class="col-sm-4 col-form-label">Nama Rak :</label>
                                            <div class="col-sm-7">
                                              <input type="text" name="namarak" class="form-control" id="inputRak">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="inputJmlKolom" class="col-sm-4 col-form-label">Jumlah kolom :</label>
                                            <div class="col-sm-7">
                                              <input type="text" name="jumlahkolom"class="form-control" id="inputJmlKolom">
                                            </div>
                                        </div>
                                        <div class="mb-3 row col-md-3 save-button">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                  </div>
                                </div>
                                <br>
                                <form action="<?= BASEURL ?>/dashboard/tambahBarang" method="post" enctype="multipart/form-data">
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        Barang
                                      </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                          <div class="mb-3 row">
                                              <label for="inputBrg" class="col-sm-4 col-form-label">Nama Barang :</label>
                                              <div class="col-sm-7">
                                                <input type="text" class="form-control" id="inputBrg" name="namaBarang">
                                              </div>
                                          </div>
                                          <div class="mb-3 row">
                                              <label for="inputKet" class="col-sm-4 col-form-label">Keterangan :</label>
                                              <div class="col-sm-7">
                                                <input type="text" class="form-control" id="inputKet" name="keterangan">
                                              </div>
                                          </div>
                                          <div class="mb-3 row">
                                              <label for="inputRak" class="col-sm-4 col-form-label">Rak :</label>
                                              <div class="col-sm-7">
                                                  <select name="idRak" class="form-select" aria-label="Default select example" id="inputRak">
                                                    <?php foreach ( $data['rakData'] as $rowRak) : ?>
                                                      <option value="<?= $rowRak['id_rak'] ?>" ><?= $rowRak['nama_rak'] ?></option>
                                                    <?php endforeach; ?>
                                                  </select>
                                              </div>
                                          </div>
                                          <div class="mb-3 row">
                                              <label for="inputKolom" class="col-sm-4 col-form-label">Kolom :</label>
                                              <div class="col-sm-7">
                                                <select class="form-select" aria-label="Default select example" id="inputKolom" name="jumlahKolom">
                                                    <option selected>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                              </div>
                                          </div>
                                          <div class="mb-3 row">
                                              <label for="inputStok" class="col-sm-4 col-form-label">Stock :</label>
                                              <div class="col-sm-7">
                                                <input type="text" class="form-control" id="inputStok" name="stok">
                                              </div>
                                          </div>
                                          <div class="mb-3 row">
                                            <label for="inputGambar" class="col-sm-4 col-form-label">Gambar :</label>
                                            <div class="col-sm-7">
                                              <input class="form-control" type="file" id="inputGambar" name="gambarBarang">
                                            </div>
                                          </div>
                                          <div class="mb-3 row col-md-3 save-button">
                                              <button type="submit" class="btn btn-primary">Save</button>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                </form>
                        </div>
                        <div class="modal-footer">
                          <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                        </div>
                    </form>
                  </div>
                </div>
                <br>
                <form action="<?= BASEURL ?>/dashboard/tambahBarang" method="post">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        Barang
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                          <div class="mb-3 row">
                              <label for="inputBrg" class="col-sm-4 col-form-label">Nama Barang :</label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputBrg" name="namaBarang">
                              </div>
                          </div>
                          <div class="mb-3 row">
                              <label for="inputKet" class="col-sm-4 col-form-label">Keterangan :</label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputKet" name="keterangan">
                              </div>
                          </div>
                          <div class="mb-3 row">
                              <label for="inputRak" class="col-sm-4 col-form-label">Rak :</label>
                              <div class="col-sm-7">
                                  <select name="idRak" class="form-select" aria-label="Default select example" id="inputRakbarang">
                                    <?php foreach ( $data['rakData'] as $rowRak) : ?>
                                      <option value="<?= $rowRak['id_rak'] ?>" ><?= $rowRak['nama_rak'] ?></option>
                                    <?php endforeach; ?>
                                  </select>
                              </div>
                          </div>
                          <div class="mb-3 row">
                              <label for="inputKolom" class="col-sm-4 col-form-label">Kolom :</label>
                              <div class="col-sm-7">
                                <select class="form-select" aria-label="Default select example" id="inputKolombarang" name="jumlahKolom">
                                    <option value="">Pilih Rak</option>
                                </select>
                              </div>
                          </div>
                          <div class="mb-3 row">
                              <label for="inputStok" class="col-sm-4 col-form-label">Stock :</label>
                              <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputStok" name="stok">
                              </div>
                          </div>
                          <div class="mb-3 row">
                            <label for="inputGambar" class="col-sm-4 col-form-label">Gambar :</label>
                            <div class="col-sm-7">
                              <input class="form-control" type="file" id="inputGambar" name="gambarBarang">
                            </div>
                          </div>
                          <div class="mb-3 row col-md-3 save-button">
                              <button type="submit" class="btn btn-primary">Save</button>
                          </div>
                      </div>
                    </div>
                  </div>
                  </div>


                      
                </div>
            </div>
        </div>

        <!-- JAVA SCRIPT LINK -->
         <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->

    <!--</body>
    </html>  -->