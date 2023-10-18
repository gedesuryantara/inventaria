<?php 
class Admindashboard extends Controller{
    public function index()
    {
        $data['judul'] = 'Manage User';

        $this->view('tamplates/header', $data);
        $this->view('Admindashboard/index');
        $this->view('tamplates/footer');
    }
    public function useredit()
    {
        $data['judul'] = 'Manage User';

        $this->view('tamplates/header', $data);
        $this->view('Admindashboard/useredit');
        $this->view('tamplates/footer');
    }

    public function adduser() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Handle form submission
            $username = $_POST['username'];
            $password = $_POST['password'];

            require_once __DIR__ . '/../model/Adduser_model.php';
            $model = new Adduser_model();
            $success = $model->addUser($username, $password);

            if ($success) {
                // User added successfully, you can redirect or show a success message here
                echo "User added successfully!";
            } else {
                // Handle errors
                echo "Failed to add user.";
            }
        }
    }
    
}