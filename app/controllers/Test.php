<?php 

class Test extends Controller {

    public function __construct()
    {
        if($_SESSION['userLogin'] != "success") {
            header('Location: ' . BASEURL . '/login');
        } else {
            if($_SESSION['trueUser'] = true){
                header('Location: ' . BASEURL . '/dashboard');
            } else {
                header('Location: ' . BASEURL . '/test');
            }
        }
        
    }


    public function index()
    {
        $this->view('tamplates/header');
        $this->view('test/index');
        $this->view('tamplates/footer');
    }


}

?>