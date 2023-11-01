<?php 

class Test extends Controller {

    public function __construct()
    {
        $location = 0;
        if( $_SESSION['userLogin'] != 'success' ){
            $location = 'login';
        } elseif( $_SESSION['userTrue'] === true) {
            $location = 'login';
        }
        if($location) {
            header('Location: ' . BASEURL . '/' . $location);
            exit;
        }
    }


    public function index()
    {

        $data['judul'] = 'User';
        $data['activeItem'] = 'active';

        $this->view('tamplates/header', $data);
        $this->view('test/index');
        $this->view('tamplates/footer');
    }


}

?>