<?php 

class Flasher {

    public static function setFlasherMassage($pesan, $aksiPesan, $tipe, $keterangan)
    {
        $_SESSION['flash'] = [
            'pesan' =>$pesan,
            'aksi' => $aksiPesan,
            'tipe' => $tipe,
            'keterangan' => $keterangan
        ];
    }

    public static function setMassage()
    {
        if ( isset($_SESSION['flash']) ) {
            echo '
            <div class="alert p-3 alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert"><strong>' . $_SESSION['flash']['aksi'] .'</strong> ' . $_SESSION['flash']['pesan'] . ' ' . $_SESSION['flash']['keterangan'] . '
            </div>         
            ';
            unset($_SESSION['flash']);
        }
    }

}