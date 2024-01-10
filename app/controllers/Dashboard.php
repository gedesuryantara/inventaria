<?php 


class Dashboard extends Controller{
    public function index()
    { 
        // pagination
        $batasHalaman = 3; 
        $jumlah_data = count($this->model('Barang_model')->queryData());
        $data['halaman_aktif'] = (isset($idPages)) ? (int)$idPages : 1 ;
        $data['jumlah_halaman'] = ceil($jumlah_data / $batasHalaman);
        
        $data['judul'] = 'Dashboard';
        $data['barang'] = $this->model('Barang_model')->getAllBarang();
        $data['rakData'] = $this->model('Rak_model')->queryRak();

        // Percobaan kolom

        // json_encode(array('rak' => $data['rak']['nama_rak']));

        // $data['jumlahKolom'] = $this->model('Rak_model')->getJumlahKolomRak();
        $data['activeItem'] = 'active-item';
        
        $this->view('tamplates/header', $data);
        $this->view('dashboard/index', $data);
        $this->view('tamplates/footer');
    }

    public function cari()
    {
        $keyword = $_POST['keyword'];
        var_dump($keyword);
        die;
        $batasHalaman = 3;
        $jumlah_data = count($this->model('Barang_model')->queryCariData($keyword));
        $data['halaman_aktif'] = (isset($idPages)) ? (int)$idPages : 1 ;
        $halamanAwal = ( $batasHalaman * $data['halaman_aktif'] ) - $batasHalaman ;
        $data['jumlah_halaman'] = ceil($jumlah_data / $batasHalaman);

        $data['judul'] = 'Dashboard';
        $data['barang'] = $this->model('Barang_model')->getAllBarangPage( $keyword, $halamanAwal, $batasHalaman );
        $data['rakData'] = $this->model('Rak_model')->queryRak();
        $data['activeItem'] = 'active-item';

        $this->view('tamplates/header', $data);
        $this->view('dashboard/index', $data);
        $this->view('tamplates/footer');
    }

    public function tambahRak(){
        if ($this->model('Rak_model')->tambahRak($_POST) > 0){
            header('location: '. BASEURL.'/dashboard');
            exit;
        }
    }

    public function editbarang($idBarang)
    {
        $data['judul'] = 'Edit Barang';
        $data['activeItem'] = 'active-item';

        $data['barang_edit'] = $this->model('Barang_model')->getAllBarangById($idBarang);
        $data['rakData'] = $this->model('Rak_model')->queryRak();

        $this->view('tamplates/header', $data);
        $this->view('dashboard/editbarang', $data);
        $this->view('tamplates/footer');
    }

    public function tambahBarang()
    {
        if( $this->model('Barang_model')->tambahDataBarang($_POST) > 0 ) {
            header('Location: ' . BASEURL . '/dashboard');
            Flasher::setFlasherMassage('berhasil', 'ditambahkan', 'success');
            exit;
        } else {
            header('Location: ' . BASEURL . '/dashboard');
        }
    }

    public function page($idPages)
    {
        // pagination
        $batasHalaman = 3;
        $jumlah_data = count($this->model('Barang_model')->queryData());
        $data['halaman_aktif'] = (isset($idPages)) ? (int)$idPages : 1 ;
        $halamanAwal = ( $batasHalaman * $data['halaman_aktif'] ) - $batasHalaman ;
        $data['jumlah_halaman'] = ceil($jumlah_data / $batasHalaman);

        $data['judul'] = 'Dashboard';
        $data['barang'] = $this->model('Barang_model')->getAllBarangPage( $halamanAwal, $batasHalaman );
        $data['rakData'] = $this->model('Rak_model')->queryRak();
        $data['activeItem'] = 'active-item';

        $this->view('tamplates/header', $data);
        $this->view('dashboard/index', $data);
        $this->view('tamplates/footer');
    }

    public function deleteBarang($id)
    {
        if( $this->model('Barang_model')->deleteDataBarang($id) ){
            header('Location: ' . BASEURL . '/dashboard');
        }
    }

    public function queryJumlahRak($idRak)
    {
        header('Content-Type: application/json');
        $data = $this->model('Rak_model')->getQueryJumlahRak($idRak);
        echo json_encode($data);
    }

    public function queryKolomBarang($idBarang)
    {
        header('Content-Type: application/json');
        $data = $this->model('Barang_model')->getAllBarangById($idBarang);
        echo json_encode($data);
    }

    public function barangEdit()
    {
        if( $this->model('Barang_model')->editDataBarang($_POST) > 0 ) {
            header('Location: ' . BASEURL . '/dashboard');
            Flasher::setFlasherMassage('berhasil', 'diubah', 'success');
            exit;
        } else {
            header('Location: ' . BASEURL . '/dashboard');
        }
    }

    

}