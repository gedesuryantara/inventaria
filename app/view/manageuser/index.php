<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage User's</title>

    <!-- CSS LINK -->
    <link rel="stylesheet" href="../../../public/bootstraps/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../public/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../../../public/css/merge.css">
</head>
<body>

    <!-- Body Design -->
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

        <!-- Users Card Design -->
        <div class="user-card-design">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <!-- ... (omitted for brevity) ... -->
            </div>
        </div>
        <!-- End Users Card Design -->

        <!-- Paginations Design -->
        <div class="paginations-design d-flex justify-content-center mt-5">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <!-- ... (omitted for brevity) ... -->
                </ul>
            </nav>
        </div>
        <!-- End Paginations Design -->

        <!-- Button Add Users Design -->
        <div class="d-flex justify-content-end position-absolute bottom-0 end-0">
            <button type="button" class="user-add-btn btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fa-solid fa-plus"></i>
            </button>
        </div>
        <!-- End Button Add Users Design -->

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
        </div>
        <!-- End Modal -->
    </div>
    <!-- End Body Design -->

    <!-- JAVA SCRIPT LINK -->
    <script src="../../../public/bootstraps/js/bootstrap.bundle.min.js"></script>
    <script src="../../../public/fontawesome/js/all.min.js"></script>
</body>
</html>
