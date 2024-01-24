<!-- Body Design -->

            <div class="col-10">

            <!-- Navbar Design -->
            <div class="navbar-design shadow d-flex sticky-top">
                <div class="d-flex justify-content-between">

                            <div class="col-6 ds-none">
                              <div class="searchbar">
                                    <Form class="input-group search-layout" action="<?= BASEURL ?>/dashboard/cari" method="post">
                                        <input type="text" class="form-control" placeholder="Search..." aria-label="Recipient's username" name="keyword" aria-describedby="button-addon2">
                                        <button class=" btn-search btn btn-primary" type="submit" id="button-addon2">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </button>
                                    </Form>
                                </div>
                            </div>

                    <div class="col-8 dnr">
                    <!-- Searchbar Responsive Design -->
                    <div class="searchbar-responsive">
                        <Form class="input-group search-layout" action="<?= BASEURL ?>/dashboard/cari" method="post">
                            <input type="text" class="form-control" placeholder="Search..." aria-label="Recipient's username" name="keyword" aria-describedby="button-addon2">
                            <button class=" btn-search btn btn-primary" type="submit" id="button-addon2">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </Form>
                    </div>
                    <!-- Searchbar Responsive End -->
                    </div>

                    <div class="col-6 ds-none">
                        <div class="d-flex justify-content-end profile-layout">
                            <p><?php // $_SESSION['username']; ?></p>
                            <i class="fa-solid fa-circle-user"></i>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="menu-responsive">
                            <div class="menu">
                             <i class="fa-solid fa-bars"></i>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- End Navbar Design -->


            <div class="col-8 dnr">
                              <!-- Searchbar Responsive Design -->
                              <div class="searchbar-responsive">
                                  <Form class="input-group search-layout" action="<?= BASEURL ?>/dashboard/cari" method="post">
                                      <input type="text" class="form-control" placeholder="Search..." aria-label="Recipient's username" name="keyword" aria-describedby="button-addon2">
                                      <button class=" btn-search btn btn-primary" type="submit" id="button-addon2">
                                          <i class="fa-solid fa-magnifying-glass"></i>
                                      </button>
                                  </Form>
                              </div>
                              <!-- Searchbar Responsive End -->
                            </div>

                            <div class="col-6 ds-none">
                                <div class="d-flex justify-content-end profile-layout">
                                    <p><?php // $_SESSION['username']; ?></p>
                                    <i class="fa-solid fa-circle-user"></i>
                                </div>
                            </div>


            <!-- Sidebar Responsive Design -->
            <div id="sidebar">
            <div class="d-flex flex-column">
                <div class="logo ">
                    <img src="<?= BASEURL ?>/img/Logo_inventaria.svg" alt="Inventaria Logo" srcset="">
                </div>
                <div class="profile-layout d-flex">
                    <i class="fa-solid fa-circle-user"></i>
                    <p><?php // $_SESSION['username']; ?> Admin</p>
                </div>
                <ul>
                    <li>
                        <a href="<?= BASEURL ?>/dashboard/admin" class="dasboard">
                            <i class="fa-solid fa-gauge"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="<?= BASEURL ?>/dashboard/manageuser" class="manage-user">
                            <i class="fa-solid fa-circle-user"></i>
                            Manage Users
                        </a>
                    </li>
                    <li>
                        <a href="<?= BASEURL ?>/login/logout" class="manage-user">
                            <i class="fa-solid fa-circle-user"></i>
                            Logout
                        </a>
                    </li>
                </ul>
                </div>
            </div>
            <!-- Sidebar Responsive Design End -->

                <!-- Users Card Design -->
                <div class="user-card-design">
                    <div class="row row-cols-1 row-cols-md-2 g-4">

                        <?php foreach( $data['UserName'] as $usr ) : ?>
                        <div class="col">
                            <div class="card mb-3 shadow">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="<?= BASEURL ?>/img/user_icon.png" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title text-center"><?= $usr['username']; ?> </h5>
                                            <hr>
                                            <div class="d-flex card-btn justify-content-center mt-4">
                                                <a class="btn btn-warning me-2 text-center" href="<?= BASEURL ?>/manageuser/useredit" role="button">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                    Edit
                                                </a>
                                                <a class="btn btn-danger ms-2 text-center" href="#" role="button">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                    Hapus
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        
                    </div>
                </div>
                <!-- End Users Card Design -->

                <!-- Paginations Design -->
                <div class="paginations-design d-flex justify-content-center mt-5">
                    <nav aria-label="Page navigation">
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
                <!-- End Paginations Design -->

                <!-- Button Add Users Design -->
                <!-- Button Trigger Modal -->
                <div class="d-flex justify-content-end position-absolute bottom-0 end-0">
                    <button type="button" class="user-add-btn btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </div>
                 <!-- End Button Trigger Modal -->

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Users</h5>
                            <button type="button" class="btn close-btn" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fa-solid fa-circle-xmark"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?=BASEURL ?>/admindashboard/adduser" method="post">
                                <div class="mb-3 row">
                                    <label for="Username" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="Username" name="username">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="Email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="Email" name="email">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="No. Telp" class="col-sm-2 col-form-label">No. Telp</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="No. Telp" name="no_telp">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="Password" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="Password" name="password">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn save-btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Modal -->
                <!-- End Button Add Users Design -->


            </div>
        </div>
    </div>
<!-- End Body Design -->