<?php 

class Buku extends Controller { 
    public function index()
    {
        $data['judul'] = 'Dafta Buku';
        $data['buku'] = $this->model('Buku_model')->getAllBuku();
        $this->view('tamplates/header', $data);
        $this->view('buku/index', $data);
        $this->view('tamplates/footer');
    }

    public function detail($id_buku)
    {
        $data['judul'] = 'Detail Buku';
        $data['buku'] = $this->model('Buku_model')->getBukuById($id_buku);
        $this->view('tamplates/header', $data);
        $this->view('buku/detail', $data);
        $this->view('tamplates/footer'); 
    }

    public function tambah()
    {
        if($this->model('Buku_model')->tambahDataBuku($_POST) > 0){ // jika method tambahDataBuku yang mengirimkan data $_POST itu menghasilkan nilai lebih besar dari 0 berarti ada baris baru yang ditambahkan, maka data berhasil masuk dan akan di redirect ke halaman utama buku
            Flasher::setFlash('berhasil', 'ditambahkan', 'success'); //mengeset flashMassage 
            header('Location: ' . BASEURL . '/buku');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger'); //mengeset flashMassage 
            header('Location: ' . BASEURL . '/buku');
            exit;
        }
    }
}