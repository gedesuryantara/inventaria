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
//        $data['jumlahKolom'] = $this->model('Rak_model')->getJumlahKolomRak();
        $data['activeItem'] = 'active-item';

        $this->view('tamplates/header', $data);
        $this->view('dashboard/index', $data);
        $this->view('tamplates/footer');
    }
    public function editbarang($idBarang)
    {
        $data['judul'] = 'Edit Barang';
        $data['activeItem'] = 'active-item';
        $data['barang'] = $this->model('Barang_model')->getDataBarang($idBarang);
        $data['rakData'] = $this->model('Rak_model')->queryRak();

        // if( $this->model('Barang_model')->editDataBarang() > 0 ) {
            $this->view('tamplates/header', $data);
            $this->view('dashboard/editbarang', $data);
            $this->view('tamplates/footer');
        // }
    }

    public function tambahBarang()
    {
        if( $this->model('Barang_model')->tambahDataBarang($_POST) ) {
            header('Location: ' . BASEURL . '/dashboard');
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
        if( $this->model('Barang_model')->deleteDataBarang($id) > 0 ){
            header('Location: ' . BASEURL . '/dashboard');
        }
    }

}