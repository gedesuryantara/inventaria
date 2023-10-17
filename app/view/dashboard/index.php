
        <!-- Body Design -->
        <div class="body-design">
            <div class="row">

                <!-- Sidebar Design -->
                <div class="col-2">
                    <div class="sidebar-design">
                        <div class="logo d-flex justify-content-center">
                            <img src="<?= BASEURL ?>/img/Logo_inventaria.svg" alt="Inventaria Logo" srcset="">
                        </div>
                        <div class="container-sm">
                            <div class="menu-design d-flex flex-column">
                                <div class="dasboard-design">
                                    <hr class="line-fill">
                                    <a href="#" class="dasboard active-items">
                                        <i class="fa-solid fa-gauge"></i>
                                        Dashboard
                                    </a>
                                    <hr class="line-fill">
                                </div>
                                <a href="" class="manage-user">
                                    <i class="fa-solid fa-circle-user"></i>
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
                        <div class="col p-4">
                            <div class="card h-100">
                                <img src="<?= BASEURL ?>/img/ice-tea-with-mint 1.jpg" alt="Item">
                                <div class="card-body">
                                <h5 class="card-title text-center mb-5">Es Teh Hangat</h5>
                                <p class="card-text">Rak : </p>
                                <p class="card-text">Kategori : </p>
                                <p class="card-text">Kolom : </p>
                                <p class="card-text">Stok : </p>    
                                </div>

                                <div class="card-footer">
                                    <div class="float-start">
                                        <div class="tombol">
                                        <a href="<?= BASEURL ?>/dashboard/editbarang" class="btn btn-warning justify-content-center"><i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></a>
                                        <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash-can" style="color: #ffffff;"></i></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            </div>


                            <div class="col p-4">
                            <div class="card h-100">
                                <img src="<?= BASEURL ?>/img/ice-tea-with-mint 1.jpg" class="card-header p-0" alt="Item">
                                <div class="card-body">
                                <h5 class="card-title text-center mb-5">Es Teh Hangat</h5>
                                <p class="card-text">Rak : </p>
                                <p class="card-text">Kategori : </p>
                                <p class="card-text">Kolom : </p>
                                <p class="card-text">Stok : </p>    
                                </div>

                                <div class="card-footer">
                                    <div class="float-start">
                                        <div class="tombol ">
                                        <a href="<?= BASEURL ?>/dashboard/editbarang" class="btn btn-warning justify-content-center"><i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></a>
                                        <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash-can" style="color: #ffffff;"></i></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            </div>


                            <div class="col p-4">
                            <div class="card h-100">
                                <img src="<?= BASEURL ?>/img/ice-tea-with-mint 1.jpg" class="card-header p-0" alt="Item">
                                <div class="card-body">
                                <h5 class="card-title text-center mb-5">Es Teh Hangat</h5>
                                <p class="card-text">Rak : </p>
                                <p class="card-text">Kategori : </p>
                                <p class="card-text">Kolom : </p>
                                <p class="card-text">Stok : </p>    
                                </div>

                                <div class="card-footer">
                                    <div class="float-start">
                                        <div class="tombol">
                                        <a href="<?= BASEURL ?>/dashboard/editbarang" class="btn btn-warning justify-content-center"><i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></a>
                                        <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash-can" style="color: #ffffff;"></i></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Item Card Design -->



                    



                    <!-- pagination start-->
                    <div class="pagination d-flex justify-content-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
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
                    <div class="accordion-body">
                        <div class="mb-3 row">
                            <label for="inputRak" class="col-sm-4 col-form-label">Nama Rak :</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" id="inputRak">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputJmlKolom" class="col-sm-4 col-form-label">Jumlah kolom :</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" id="inputJmlKolom">
                            </div>
                        </div>
                        <div class="mb-3 row col-md-3 save-button">
                            <button type="button" class="btn btn-primary">Save</button>
                        </div>
                    </div>
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
                    <div class="accordion-body">
                        <div class="mb-3 row">
                            <label for="inputBrg" class="col-sm-4 col-form-label">Nama Barang :</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" id="inputBrg">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputKet" class="col-sm-4 col-form-label">Keterangan :</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" id="inputKet">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputRak" class="col-sm-4 col-form-label">Rak :</label>
                            <div class="col-sm-7">
                                <select class="form-select" aria-label="Default select example" id="inputRak">
                                    <option selected>1</option>
                                    <option value="1">2</option>
                                    <option value="2">3</option>
                                    <option value="3">4</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputKolom" class="col-sm-4 col-form-label">Kolom :</label>
                            <div class="col-sm-7">
                              <select class="form-select" aria-label="Default select example" id="inputKolom">
                                  <option selected>1</option>
                                  <option value="1">2</option>
                                  <option value="2">3</option>
                                  <option value="3">4</option>
                              </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputStok" class="col-sm-4 col-form-label">Stock :</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" id="inputStok">
                            </div>
                        </div>
                        <div class="mb-3 row">
                          <label for="inputGambar" class="col-sm-4 col-form-label">Gambar :</label>
                          <div class="col-sm-7">
                            <input class="form-control" type="file" id="inputGambar">
                          </div>
                        </div>
                        <div class="mb-3 row col-md-3 save-button">
                            <button type="button" class="btn btn-primary">Save</button>
                        </div>
                    </div>
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
        </div>

        <!-- JAVA SCRIPT LINK -->
         <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->

    <!--</body>
    </html>  -->