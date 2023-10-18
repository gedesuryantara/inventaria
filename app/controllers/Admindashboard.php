<?php 


class Admindashboard extends Controller{
    public function index()
    {
        $data['judul'] = 'Manage User';

        $this->view('tamplates/header', $data);
        $this->view('Admindashboard/index');
        $this->view('tamplates/footer');
    }
    public function useredit()
    {
        $data['judul'] = 'Manage User';

        $this->view('tamplates/header', $data);
        $this->view('Admindashboard/useredit');
        $this->view('tamplates/footer');
    }
}