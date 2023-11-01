<?php 

class Login extends Controller{

    
    public function index()
    {
        $data['judul'] = 'Login';
        $this->view('tamplates/header', $data);
        $this->view('login/index', $data);
        $this->view('tamplates/footer');
    }

    public function logout()
    {
        $_SESSION = [];
        session_destroy();
        session_unset();
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

                    if( $data['status'] != 0  ) {
                        $_SESSION['userLogin'] = "success";
                        $_SESSION['trueUser'] = true;
                        header('Location: ' . BASEURL . '/dashboard');
                    } else {
                        $_SESSION['userLogin'] = "success";
                        $_SESSION['trueUser'] = false;
                        header('Location: ' . BASEURL . '/test');
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
        
    }

}