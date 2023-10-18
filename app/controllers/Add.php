<?php 


class Add extends Controller{
    public function addbarang()
    {
        $data['judul'] = 'Manage User';

        $this->view('tamplates/header', $data);
        $this->view('add/addbarang');
        $this->view('tamplates/footer');
    }
    public function editbarang()
    {
        $data['judul'] = 'Manage User';

        $this->view('tamplates/header', $data);
        $this->view('add/editbarang');
        $this->view('tamplates/footer');
    }
}