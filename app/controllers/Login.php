<?php

class Login extends Controller
{
    public function index()
    {
        session_start();

        if (isset($_SESSION['userLogin'])) {
            if ($_SESSION['userTrue'] != true) {
                $location = 'test';
            } else {
                $location = 'dashboard';
            }
            header('Location: ' . BASEURL . '/' . $location);
        }

        $data['judul'] = 'Login';
        $_SESSION['status'] = [];

        if (!empty($_SESSION['status'])) {
            if ($_SESSION['status'] == 1) {
                header('location: ' . BASEURL . '/manageuser');
            } else {
                header('location: ' . BASEURL . '/manageuser/useredit');
            }
        }

        $this->view('tamplates/headerlogin', $data);
        $this->view('login/index', $data);
        $this->view('tamplates/footer');
    }

    public function logout()
    {
        session_start();
        $_SESSION = [];
        session_unset();
        session_destroy();

        header('location: ' . BASEURL . '/login');
    }

    public function user()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (!empty($username) || !empty($password)) {
            if ($this->model('Login_model')->cekUserTrue($username) > 0) {
                $data = $this->model('Login_model')->ambilDataUser($username);
                $passwordDb = $data['password'];

                if (password_verify($password, $passwordDb)) {
                    session_start();

                    $_SESSION['status'] = $data['status'];

                    if ($_SESSION['status'] == 1) {
                        header('location: ' . BASEURL . '/manageuser');
                    } else {
                        header('location: ' . BASEURL . '/manageuser/useredit');
                    }

                    $_SESSION['userLogin'] = 'success';

                    if ($data['status'] != 0) {
                        $_SESSION['userTrue'] = true;
                        $location = "dashboard";
                    } else {
                        $_SESSION['userTrue'] = false;
                        $location = "test";
                    }
                } else {
                    echo 'password salah';
                }
            } else {
                echo 'gagal menemukan user';
            }
        } else {
            echo 'isikan data terlebih dahulu';
        }

        header('Location: ' . BASEURL . '/' . $location);
        exit;
    }
}
