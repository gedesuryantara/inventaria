<?php 


class Dashboard extends Controller{
    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['barang'] = $this->model('Barang_model')->getAllBarang();
        $data['rak'] = $this->model('Addrak_model')->dataRak();

        $this->view('tamplates/header', $data);
        $this->view('dashboard/index', $data);
        $this->view('tamplates/footer');
    }
    public function tambahRak(){
        if ($this->model('Addrak_model')->tambahRak($_POST) > 0){
            header('Location: '. BASEURL.'/dashboard');
            exit;
        }
    }

    public function tambahBarang()
    {

        $nama_barang = $_POST['nama_barang'];

        if( !empty($nama_barang) ) {
            
            if( $this->model('Barang_model')->tambahBarang($_POST) ) {
                header('Location: ' . BASEURL . '/dashboard');
            }

        } else {

            echo 'gagal';

        }
    }
}