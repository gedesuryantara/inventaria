<?php 

class Login extends Controller{
    
    public function index()
    {
        $data['judul'] = 'Login';

        $this->view('tamplates/headerlogin', $data);
        $this->view('login/index', $data);
        $this->view('tamplates/footer');
    }

    public function logout(){
        session_start();
        $_SESSION = [];
        session_unset();
        session_destroy();

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
                $_SESSION['status'] = $data['status'];

                if( password_verify($password, $passwordDb) ) {
                    session_start();

                    if($_SESSION['status'] != 0){
                        $location = 'manageuser';
                        $_SESSION['level'] = "admin";
                    }else{
                        $location = 'dashboard';
                        $_SESSION['level'] = "user";
                    }
                    
                } else {
                    $location = 'login';
                    Flasher::setFlasherMassage('masuk', 'Gagal', 'danger', 'password salah');
                }

            } else {
                $location = 'login';
                Flasher::setFlasherMassage('masuk', 'Gagal', 'danger', 'account user tidak ditemukan');
            }

        } else {
            $location = 'login';
            Flasher::setFlasherMassage('masuk', 'Gagal', 'danger', 'lengkapi data terlebih dahulu');
        }

        header('location: '. BASEURL . '/' . $location);
        
    }

}