<?php 

class Test extends Controller {

    public function __construct()
    {
        if($_SESSION['userLogin'] != "success") {
            header('Location: ' . BASEURL . '/login');
        } else {
            if( $_SESSION['userTrue'] == true ) {
                header('Location: ' . BASEURL . '/dashboard');
            } else {
                header('Location: ' . BASEURL . '/test');
            }
        }
        
    }


    public function index()
    {
        var_dump($_SESSION);

        $this->view('tamplates/header');
        $this->view('test/index');
        $this->view('tamplates/footer');
    }


}

?>