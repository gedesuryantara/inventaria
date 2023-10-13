<?php 


class Dashboard extends Controller{
    public function index()
    {
        
        // pagination
        $batasHalaman = 3;
        $jumlah_data = count($this->model('Barang_model')->queryData());
        $data['jumlah_halaman'] = ceil($jumlah_data / $batasHalaman);

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

    public function hapusDataBarang($id)
    {
        if( $this->model('Barang_model')->hapusBarang($id) > 0 ) {
            header('Location: ' . BASEURL . '/dashboard');
        }
    }

    public function page($idPages)
    {
        
         
        // pagination
        $batasHalaman = 3;
        $jumlah_data = count($this->model('Barang_model')->queryData());
        $data['jumlah_halaman'] = ceil($jumlah_data / $batasHalaman);
        $halaman_aktif = (isset($idPages)) ?(int)$idPages : 1;
        $halaman_awal = ( $batasHalaman * $halaman_aktif ) - $batasHalaman;

        $data['judul'] = 'Dashboard';
        $data['barang'] = $this->model('Barang_model')->getAllBarangPage($batasHalaman, $halaman_awal);
        $data['rak'] = $this->model('Addrak_model')->dataRak();

        $this->view('tamplates/header', $data);
        $this->view('dashboard/index', $data);
        $this->view('tamplates/footer');

    }
}