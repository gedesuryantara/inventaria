<?php 


class ManageUser extends Controller{
    public function index()
    {
        $data['judul'] = 'Manage User';
        $data['activeItem'] = 'active-item';

        $this->view('tamplates/header', $data);
        $this->view('manageuser/index', $data);
        $this->view('tamplates/footer');
    }
    public function useredit()
    {
        $data['judul'] = 'Manage User';
        $data['activeItem'] = 'active-item';

        $this->view('tampla tes/header', $data);
        $this->view('manageuser/useredit', $data);
        $this->view('tamplates/footer');
    }
}