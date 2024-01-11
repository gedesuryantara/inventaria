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
                <div class="col-2 none">
                    <div class="sidebar-design">
                        <div class="logo d-flex justify-content-center">
                            <img src="<?= BASEURL ?>/img/Logo_inventaria.svg" alt="Inventaria Logo" srcset="">
                        </div>
                        <div class="container-sm">
                            <div class="menu-design d-flex flex-column">
                                <div class="dasboard-design">
                                    <hr class="line-fill">
                                    <a href="<?= BASEURL ?>/dashboard" class="dasboard">
                                        <i class="fa-solid fa-gauge"></i>
                                        Dashboard
                                    </a>
                                    <?php if( $_SESSION['level'] == "admin" ) : ?>
                                    <hr class="line-fill">
                                    <a href="<?= BASEURL ?>/manageuser" class="manage-user">
                                        <i class="fa-solid fa-circle-user"></i>
                                        Manage Users
                                    </a>
                                    <?php endif; ?>
                                    <hr class="line-fill">
                                    <a href="<?= BASEURL ?>/login/logout" class="manage-user">
                                        <i class="fa-solid fa-circle-user"></i>
                                        Logout
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Sidebar Design -->