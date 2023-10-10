<?php 

class Register extends Controller{

    public function index()
    {
        $this->view('register/index');
    }

    public function regist()
    {
        $nameForm = $_POST['username'];
        $passwordForm = $_POST['password'];
        $confirmPassword = $_POST['confirm_password'];
        $status = $_POST['status'];

        if ( !empty($nameForm) || !empty($passwordForm) ) {
            
            if( $this->model('Regist_model')->cekUserTrue($nameForm) == 0 ) {
                
                if( $passwordForm !== $confirmPassword) {
                            header('Location: ' . BASEURL . '/register');
                } else {

                    $passwordHash = password_hash($passwordForm, PASSWORD_DEFAULT);

                    $data = [
                        "username" => $nameForm,
                        "password" => $passwordHash,
                        "status" => $status
                    ];

                    if ( $this->model('Regist_model')->inputUser($data) > 0 ) {
                            header('Location: ' . BASEURL . '/home');
                    } else {
                            header('Location: ' . BASEURL . '/register');
                    }

                }
                // $data = $this->model('Regist_model')->cekUser($nameForm); // ini bener buat login
                // var_dump($data);

            } else {
                header('Location: ' . BASEURL . '/register');
            }
            
        } else {
            header('Location: ' . BASEURL . '/register');
        }

    }
}