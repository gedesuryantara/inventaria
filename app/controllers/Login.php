<?php 

class Login extends Controller{
    
    public function index()
    {
        // if( !isset($_SESSION['userLogin']) ) {

            $data['judul'] = 'Login';
    
            $this->view('tamplates/header', $data);
            $this->view('login/index', $data);
            $this->view('tamplates/footer');

        // } else if (isset($_SESSION['userLogin'])){
            // $data['judul'] = 'Dashboard';
    
            // $this->view('tamplates/header', $data);
            // $this->view('dashboard/index', $data);
            // $this->view('tamplates/footer');   
        // }
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

                    $_SESSION['userLogin'] = true;

                    header('Location: ' . BASEURL . '/dashboard');

                } else {
                    echo 'password salah';
                }

            } else {
                echo 'gagal menemukan user';
            }

        } else {
            echo 'isikan data terlebih dahulu';
        }
        
    }

}