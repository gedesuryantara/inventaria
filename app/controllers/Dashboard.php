<?php 


class Dashboard extends Controller{

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
        $data['judul'] = 'Dashboard';

        $this->view('tamplates/header', $data);
        $this->view('dashboard/index');
        $this->view('tamplates/footer');
    }
}