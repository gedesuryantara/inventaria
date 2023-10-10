<?php 

class Login extends Controller{
    public function index()
    {
        $this->view('login/index');
    }

    public function user()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if( !empty($username) || !empty($password) ) {

            if ( $this->model('Login_model')->cekUserTrue($username) > 0 ) {
                
                $data = $this->model('Login_model')->ambilDataUser($username);
                $passwordDb = $data['password'];

                if( password_verify($password, $passwordDb) ) {
                    $_SESSION['username'] = $usernamesession;
                    header('Location: ' . BASEURL . '/home');
                } else {
                    echo 'password salah';
                }

            } else {
                echo 'user ga ditemuin';
            }

        } else {
            echo 'isiin data dulu njir';
        }


    }
}