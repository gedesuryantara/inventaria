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

    <div class="row d-flex justify-content-center vertical-center h-100">

        <div class="col-4 py-5 m-0 bg-white" style="border-radius: 12px;">
            <h2 class="text-center pb-3">Register</h2>
            <hr class="col-10 mb-4">

            <!-- form -->
            <div class="row d-flex justify-content-center">
                <div class="col-9">
                    <form action="<?= BASEURL; ?>/register/regist/" method="post">
                        <div class="form-group py-1">
                            <label for="username">Username</label> 
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                        <div class="form-group py-1">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                        </div>
                        <div class="form-group py-2">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="admin">Admin</option>
                                <option value="view">View</option>
                            </select>
                        </div>

                        <!-- button -->
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary text-center px-5">Register</button>
                        </div>
                        <div class="text-center mt-3">
                            <a href="<?= BASEURL ?>/login">Already have account's? Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>


</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="<?= BASEURL ?>/js/bootstrap.js"></script>
</body>
</html>