<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage User's</title> -->

    <!-- CSS LINK -->
    <!-- <link rel="stylesheet" href="../../../public/bootstraps/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../public/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../../../public/css/merge.css">

</head>
<body> -->

    <!-- Body Design -->
    <div class="body-design">
        <div class="row">

            <!-- Sidebar Design -->
            <div class="col-2">
                <div class="sidebar-design">
                    <div class="logo d-flex justify-content-center">
                        <img src="<?= BASEURL ?>/img/logo-inventaria.png" alt="Inventaria Logo" srcset="">
                    </div>
                    <div class="container-sm">
                        <div class="menu-design d-flex flex-column">
                            <div class="dasboard-design">
                                <hr class="line-fill">
                                <a href="#" class="dasboard">
                                    <i class="fa-solid fa-gauge"></i>
                                    Dashboard
                                </a>
                                <hr class="line-fill">
                            </div>
                            <a href="" class="manage-user active-items">
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
                                <button class=" btn-search btn btn-primary" type="button" id="button-addon2">
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

                <!-- Users Card Design -->
                <div class="user-card-design">
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card mb-3 shadow">
                                <div class="row g-0">
                                  <div class="col-md-4">
                                    <img src="<?= BASEURL ?>/img/user_icon.png" class="img-fluid rounded-start" alt="...">
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">User</h5>
                                        <hr>
                                        <div class="d-flex card-btn justify-content-center mt-4">
                                            <a class="btn btn-warning me-2 text-center" href="<?= BASEURL ?>/admindashboard/useredit" role="button">
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
                        <div class="col">
                            <div class="card mb-3 shadow">
                                <div class="row g-0">
                                  <div class="col-md-4">
                                    <img src="<?= BASEURL ?>/img/user_icon.png" class="img-fluid rounded-start" alt="...">
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">User</h5>
                                        <hr>
                                        <div class="d-flex card-btn justify-content-center mt-4">
                                            <a class="btn btn-warning me-2 text-center" href="<?= BASEURL ?>/admindashboard/useredit" role="button">
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
                        <div class="col">
                            <div class="card mb-3 shadow">
                                <div class="row g-0">
                                  <div class="col-md-4">
                                    <img src="<?= BASEURL ?>/img/user_icon.png" class="img-fluid rounded-start" alt="...">
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">User</h5>
                                        <hr>
                                        <div class="d-flex card-btn justify-content-center mt-4">
                                            <a class="btn btn-warning me-2 text-center" href="<?= BASEURL ?>/admindashboard/useredit" role="button">
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
                        <div class="col">
                            <div class="card mb-3 shadow">
                                <div class="row g-0">
                                  <div class="col-md-4">
                                    <img src="<?= BASEURL ?>/img/user_icon.png" class="img-fluid rounded-start" alt="...">
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">User</h5>
                                        <hr>
                                        <div class="d-flex card-btn justify-content-center mt-4">
                                            <a class="btn btn-warning me-2 text-center" href="<?= BASEURL ?>/admindashboard/useredit" role="button">
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
                            <div class="mb-3 row">
                                <label for="Username" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Username">
                                </div>
                              </div>
                              <div class="mb-3 row">
                                <label for="Password" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="Password">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn save-btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal -->
                <!-- End Button Add Users Design -->


            </div>
        </div>
    </div>
    <!-- End Body Design -->

    <!-- JAVA SCRIPT LINK -->
    <!-- <script src="../../../public/bootstraps/js/bootstrap.bundle.min.js"></script>
    <script src="../../../public/fontawesome/js/all.min.js"></script>
</body>
</html> -->