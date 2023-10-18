
            <div class="col-10">

                <!-- Navbar Design -->
                <div class="navbar-design shadow">
                    <div class="manage d-flex">
                        <i class="fa-solid fa-box"></i>
                        <h3 class="manage-text align-self-center">Kelola Barang</h3>
                    </div>
                </div>
                <!-- End Navbar Design -->

                <!-- Users Card Design -->
                <div class="container-brg container-sm shadow-lg">
                    <div class="row">
                        <div class="col-md-5">
                            <img class="img-brg " src="<?= BASEURL ?>/img/ice-tea-with-mint 1.jpg" alt="">
                            <div class="file-form mb-3">
                                <label for="choose" class="btn btn-primary">
                                    <i class="fa-solid fa-camera"></i>
                                </label>
                                <input class="form-control form-control-sm" id="choose" type="file">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="container-sm form-edit">
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nama Barang" name="namaBarang" value="<?= $data['barang']['nama_barang'] ?>" >
                                </div>
                            </div>
                            <div class="container-sm form-edit2">
                                <select class="form-select mb-3" aria-label="Default select example" name="namaRak">
                                    <option value="<?= $data['barang']['id_rak'] ?>"><?= $data['barang']['nama_rak'] ?></option>
                                </select>
                            </div>
                            <div class="container-sm form-edit2">
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="keterangan" name="keterangan" value="<?= $data['barang']['keterangan'] ?>">
                                </div>
                            </div>
                            <div class="container-sm form-edit2">
                                <select class="form-select mb-3" aria-label="Default select example" name="kolom" value="<?= $data['barang']['kolom'] ?>">
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="container-sm form-edit2">
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Stock" value="<?= $data['barang']['stok'] ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-3 save-buttonedit">
                                    <button type="button" class="btn btn-primary">Save</button>
                                </div>
                                <div class="mb-3 col-md-3 cancel-buttonedit">
                                    <button type="button" class="btn btn-danger">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Users Card Design -->
            </div>
        </div>
    </div>

    <!-- JAVA SCRIPT LINK -->
