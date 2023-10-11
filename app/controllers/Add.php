<?php 


class Add extends Controller{
    public function index()
    {
        $data['judul'] = 'Add';

        $this->view('tamplates/header', $data);
        $this->view('add/index');
        $this->view('tamplates/footer');
    }
    public function tambah(){
        var_dump($_POST);
        if ($this->model('Addrak_model')->tambahRak($_POST) > 0){
            header('location: '. BASEURL.'  /add');
            exit;
        }
    }
}