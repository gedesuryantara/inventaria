<?php 

class Login extends Controller{
    
    public function index()
    {
        if ( @$_SESSION['userLogin'] ){
            if( $_SESSION['userTrue'] != true) {
                $location = 'test';
            } else {
                $location = 'dashboard';
            }
            header('Location: ' . BASEURL . '/' . $location);
        }


        $data['judul'] = 'Login';

        $this->view('tamplates/headerlogin', $data);
        $this->view('login/index', $data);
        $this->view('tamplates/footer');
    }

    public function logout(){
        session_destroy();
        session_unset();
        $_SESSION = [];

        header('location: '. BASEURL . '/login');
    }   

    public function user()
    {

        $username = $_POST['username'];
        $password = $_POST['password'];

        if( !empty($username) || !empty($password) ) {

            if( $this->model('Login_model')->cekUserTrue($username) > 0 ) {

                $data = $this->model('Login_model')->ambilDataUser($username);
                $passwordDb = $data['password'];

                if( password_verify($password, $passwordDb) ) {

                    if( $data['status'] != 0 ) {
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