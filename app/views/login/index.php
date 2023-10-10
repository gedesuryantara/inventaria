<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Halaman Rergister</title>
        <link rel="stylesheet" href=" <?= BASEURL; ?>/css/bootstrap.css">
        <style>
            .vertical-center {
                min-height: 100%;
                min-height: 100vh;

                display: flex;
                align-items: center;
            }
        </style>
    </head>
<body class="bg-dark">

<div class="container-fluid">

    <div class="row d-flex justify-content-center vertical-center">
        <div class="col-4 bg-white py-5" style="border-radius: 12px;">
            <h1 class="text-center pb-3">Login</h1>
            <hr class="col-9">

            <form action="<?= BASEURL ?>/login/user" method="post">

                <div class="row d-flex justify-content-center">
                    <div class="col-9">
                        <div class="form-group py-2">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" id="username">
                        </div>
                        <div class="form-group py-2">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1"> <!-- ini nanti aja belom paham juga saya bang aseli -->
                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary px-5">Login</button>
                        </div>
                        <div class="text-center mt-2">
                            <a href="<?= BASEURL ?>/register">Doesn't have account's? Register</a>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>

</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="<?= BASEURL ?>/js/bootstrap.js"></script>
</body>
</html>