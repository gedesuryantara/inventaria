<?php 

class Flasher {

    public static function setFlasherMassage($pesan, $aksiPesan, $tipe)
    {
        $_SESSION['flash'] = [
            'pesan' =>$pesan,
            'aksi' => $aksiPesan,
            'tipe' => $tipe
        ];
    }

    public static function setMassage()
    {
        if ( isset($_SESSION['flash']) ) {
            echo '
            <div class="alert p-3 alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">
                Data Barang <strong>' . $_SESSION['flash']['pesan'] . '</strong> ' . $_SESSION['flash']['aksi'] .'
            </div>         
            ';
            unset($_SESSION['flash']);
        }
    }

}