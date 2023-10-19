<?php 
class Admindashboard extends Controller{
    public function index()
    {
        $data['judul'] = 'Manage User';
        $data['UserName'] = $this->model('ManageUser_model')->getAllUser();
        $this->view('tamplates/header', $data);
        $this->view('Admindashboard/index',$data);
        $this->view('tamplates/footer');
    }
    public function useredit()
    {
        $data['judul'] = 'Manage User';
        $data['activeItem'] = 'active-item';

        $this->view('tampla tes/header', $data);
        $this->view('manageuser/useredit', $data);
        $this->view('tamplates/footer');
    }

    public function adduser() {
        $data['judul'] = 'Manage User';

        $this->view('tamplates/header', $data);
        $this->view('Admindashboard/index');
        $this->view('tamplates/footer');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Handle form submission
            $username = $_POST['username'];
            $password = $_POST['password'];

            require_once __DIR__ . '/../model/ManageUser_model.php';
            $model = new ManageUser_model();
            $success = $model->addUser($username, $password);

            if ($success) {
                // User added successfully, you can redirect or show a success message here
                echo "<script>
                alert('User added successfully!');
                window.location.href = 'Admindashboard/index';
                </script>
                ";
            } else {
                // Handle errors
                echo "<script>
                alert('Failed to add user');
                </script>
                ";
            }
        }
    }
    
}