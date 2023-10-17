<?php 


class Add extends Controller{
    public function index()
    {
        $data['judul'] = 'Add';

        $data['rak'] = $this->model('Rak_model')->ambilRak();
        $this->view('tamplates/header', $data);
        $this->view('add/index', $data);
        $this->view('tamplates/footer');
    }
    public function tambah(){
        var_dump($_POST);
        if ($this->model('Rak_model')->tambahRak($_POST) > 0){
            header('location: '. BASEURL.'  /add');
            exit;
        }
    }
}