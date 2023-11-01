<?php 


class ManageUser extends Controller{
    public function index()
    {
        $_SESSION['status'] = [];

        session_start();

        if (!empty($_SESSION['status'])){

            // if($_SESSION['status'] == 1){
            //     header('location: '. BASEURL . '/manageuser');

            // }else if($_SESSION['status'] == 2){
            //     header('location: '. BASEURL . '/manageuser/useredit');

            // }
        } 
        else {
            header('location: '. BASEURL . '/login');
        } 

        $data['judul'] = 'Manage User';
        $data['activeItem'] = 'active-item';

        $this->view('tamplates/header', $data);
        $this->view('manageuser/index', $data);
        $this->view('tamplates/footer');

    }
    public function useredit()
    {
        $_SESSION['status'] = [];

        session_start();

        if (!empty($_SESSION['status'])){

            // if($_SESSION['status'] == 1){
            //     header('location: '. BASEURL . '/manageuser');

            // }else if($_SESSION['status'] == 2){
            //     header('location: '. BASEURL . '/manageuser/useredit');

            // }
        } 
        else {
            header('location: '. BASEURL . '/login');
        } 
        $data['judul'] = 'Manage User';
        $data['activeItem'] = 'active-item';

        $this->view('tamplates/header', $data);
        $this->view('manageuser/useredit', $data);
        $this->view('tamplates/footer');

    }
}