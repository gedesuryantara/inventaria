
            <div class="col-9">

                <!-- Navbar Design -->
                <div class="navbar-design shadow d-flex">
                    <div class="menu">
                        <i class="fa-solid fa-bars"></i>
                     </div>
                    <div class="manage d-flex">
                        <i class="fa-solid fa-box"></i>
                        <h3 class="manage-text align-self-center">Kelola Barang</h3>
                    </div>    
                </div>
                <!-- End Navbar Design -->

                <!-- Sidebar Responsive Design -->
                <div id="sidebar">
                    <ul>
                        <li>
                            <a href="<?= BASEURL ?>/dashboard/admin" class="dasboard <?= $data['activeItem'] ?>">
                                <i class="fa-solid fa-gauge"></i>
                                    Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="<?= BASEURL ?>/dashboard/manageuser" class="manage-user <?= $data['activeItem'] ?>">
                                <i class="fa-solid fa-circle-user"></i>
                                    Manage Users
                            </a>
                        </li>
                        <li>
                            <a href="<?= BASEURL ?>/login/logout" class="manage-user <?= $data['activeItem'] ?>">
                                <i class="fa-solid fa-circle-user"></i>
                                    Logout
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar Responsive Design End -->

                <!-- Users Card Design -->
                <?php $dataBarang = $data['barang_edit'] ?>
                <div class="container-brg container-sm shadow-lg">
                    <form action="<?= BASEURL; ?>/dashboard/barangEdit" method="post" enctype="multipart/form-data">
                        <div class="row edit-body">
                            <div class="col-md-5 card-edit">
                                <div id="imagePreview">
                                    <img class="img-brg rounded" src="<?= BASEURL ?>/img/image_upload/<?= $dataBarang['gambar'];?>" alt="">
                                </div>
                                <div class="file-form mb-3">
                                    <label for="choose" class="btn btn-primary">
                                        <i class="fa-solid fa-camera"></i>
                                    </label>
                                    <input class="form-control form-control-sm" type="file" id="choose" accept="image/*" name="gambar">
                                    <input type="hidden" name="gambarLama" value="<?= $dataBarang["gambar"]; ?>"> 
                                </div>
                            </div>
                            <div class="col-md-7 form-view">
                                <div class="container-sm form-edit">
                                    <div class="mb-3">
                                        <input type="hidden" class="form-control" id="id_barang" name="id_barang" value="<?= $dataBarang['id_barang']; ?>">
                                    </div>
                                </div>
                                <div class="container-sm form-edit">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Barang" value="<?= $dataBarang['nama_barang']; ?>" name="nama_barang">
                                    </div>
                                </div>
                                <div class="container-sm form-edit2">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Keterangan" value="<?= $dataBarang['keterangan']; ?>" name="keterangan">
                                    </div>
                                </div>
                                <div class="container-sm form-edit2">
                                    <select class="form-select mb-3" aria-label="Default select example" id="editBarangInput" name="id_rak">
                                        <?php foreach ( $data['rakData'] as $rowRak) : ?>
                                        <option value="<?= $rowRak['id_rak'] ?>" data-id="<?= $rowRak['id_rak'] ?>" <?= $dataBarang['id_rak'] == $rowRak['id_rak'] ? "selected" : null ?> ><?= $rowRak['nama_rak'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="container-sm form-edit2">
                                    <select class="form-select mb-3" aria-label="Default select example" id="editBarangInputKolom" name="kolom_rak">
                                    </select>
                                </div>
                                <div class="container-sm form-edit2">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Stock" value="<?= $dataBarang['stok']; ?>" name="stok">
                                    </div>
                                </div>
                                <div class="container-sm form-edit2">
                                    <div class="row d-flex justify-content-end text-center">
                                        
                                        <div class="col-2 cancel-buttonedit me-4">
                                            <button type="button" class="btn btn-danger">Cancel</button>
                                        </div>
                                        <div class="col-2 ms-3 me-4 save-buttonedit">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php Flasher::setMassage() ?>
                </div>
                <!-- End Users Card Design -->
            </div>
        </div>
    </div>

    <!-- JAVA SCRIPT LINK -->
