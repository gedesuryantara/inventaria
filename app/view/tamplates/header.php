<!doctype html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Halaman <?= $data['judul']; ?></title>
      <link href="<?= BASEURL ?>/css/bootstrap.min.css" rel="stylesheet">
      <link href="<?= BASEURL ?>/fontawesome/css/all.min.css" rel="stylesheet">
      <link href="<?= BASEURL ?>/css/merge1.css" rel="stylesheet">
      <!-- <link rel="stylesheet" href="/css/style.css"> -->
    </head>
    <body>

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
                                    <a href="<?= BASEURL ?>/dashboard" class="dasboard <?= $data['activeItem'] ?>">
                                        <i class="fa-solid fa-gauge"></i>
                                        Dashboard
                                    </a>
                                    <hr class="line-fill">
                                </div>
                                <a href="<?= BASEURL ?>/manageuser" class="manage-user <?= $data['activeItem'] ?>">
                                    <i class="fa-solid fa-circle-user"></i>
                                    Manage Users
                                </a>
                                <hr class="line-fill">
                                <a href="<?= BASEURL ?>/login/logout" class="manage-user <?= $data['activeItem'] ?>">
                                    <i class="fa-solid fa-circle-user"></i>
                                    Logout
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Sidebar Design -->