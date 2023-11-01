<?php 


class ManageUser extends Controller{
    public function index()
    {
        $data['judul'] = 'Manage User';
        $data['activeItem'] = 'active-item';

        $this->view('tamplates/header', $data);
        $this->view('manageuser/index', $data);
        $this->view('tamplates/footer');

        $_SESSION['status'] = [];

        session_start();

        if (empty($_SESSION['status'])){
            header('location: '. BASEURL . '/login');
        }

        // if (!empty($_SESSION['status'])){

        //     if($_SESSION['status'] == 1){
        //         header('location: '. BASEURL . '/manageuser');

        //     }else if($_SESSION['status'] == 2){
        //         header('location: '. BASEURL . '/manageuser/useredit');

        //     }
        // } 
        // else {
        //     header('location: '. BASEURL . '/login');
        // } 
    }
    public function useredit()
    {
        $data['judul'] = 'Manage User';
        $data['activeItem'] = 'active-item';

        $this->view('tamplates/header', $data);
        $this->view('manageuser/useredit', $data);
        $this->view('tamplates/footer');

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
    }
}