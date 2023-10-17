<?php 


class Dashboard extends Controller{
    public function index()
    {
        $data['judul'] = 'Dashboard';

        $this->view('tamplates/header', $data);
        $this->view('dashboard/index');
        $this->view('tamplates/footer');
    }
    public function editbarang()
    {
        $data['judul'] = 'Manage User';

        $this->view('tamplates/header', $data);
        $this->view('dashboard/editbarang');
        $this->view('tamplates/footer');
    }
}