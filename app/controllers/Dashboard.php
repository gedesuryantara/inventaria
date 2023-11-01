<?php 


class Dashboard extends Controller{

    public function __construct()
    {
        if($_SESSION['userLogin'] != "success") {
            header('Location: ' . BASEURL . '/login');
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