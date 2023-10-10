<?php 


class Dashboard extends Controller{
    public function index()
    {
        $data['judul'] = 'Dashboard';

        $this->view('tamplates/header', $data);
        $this->view('dashboard/index');
        $this->view('tamplates/footer');
    }
}