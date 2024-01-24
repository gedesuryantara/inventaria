<?php 
class Admindashboard extends Controller{

    public function index()
    {
        $url = $this->parseURL();
        $getactivePage = isset($url[1]) ? $url[1] : null;
        $limitdata = 4;
        $jumlahDataUser = $this->model('ManageUser_model')->countallUsername();
        $jumlahHalaman = ceil($jumlahDataUser / $limitdata);
        $activePage = (isset($getactivePage) && is_numeric($getactivePage)) ? $getactivePage : 1;
        $awalData = ($activePage - 1) * $limitdata;

        $data['UserName'] = $this->model('ManageUser_model')->getAllUser($awalData, $limitdata);
        $data['judul'] = 'Manage User';
        $data['activepage'] = $activePage;
        $data['jumlahHalaman'] = $jumlahHalaman;
        $data['activeItem'] = 'active-item';
        $this->view('tamplates/header', $data);
        $this->view('Admindashboard/index', $data);
        $this->view('tamplates/footer');
    }
    public function useredit()
    {
        $url = $this->parseURL();
        $id_user = $url[2];
        $data['UserName'] = $this->model('ManageUser_model')->getUserbyId($id_user);
        $data['judul'] = 'Manage User';

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $username = $_POST['Username'];
            $Password = $_POST['Password'];
            $RePassword = $_POST['RePassword'];  
            $url = $this->parseURL();
            $id_user = $url[2];           
            if($Password == $RePassword){
                var_dump($username,$Password,$RePassword,$id_user);
                require_once __DIR__ . '/../model/ManageUser_model.php';
                $model = new ManageUser_model();
                $success = $model->updateUser($username, $Password, $id_user);

                
                if ($success) {
                    // User added successfully, you can redirect or show a success message here
                    echo "<script>
                    alert('User Update successfully!');
                    window.location.href = '/inventaria/public/Admindashboard/';
                    </script>
                    ";
                } else {
                    // Handle errors
                    echo "<script>
                    alert('Failed to update user');
                    window.location.href = '/inventaria/public/Admindashboard/';
    
                    </script>
                    ";
                }
            } else {
                echo "<script>
                alert('Failed to update user password and repassword are not match');
                window.location.href = '/inventaria/public/Admindashboard/';

                </script>
                ";
            }
        }
        $data['activeItem'] = 'active-item';

        $this->view('tamplates/header', $data);
        $this->view('Admindashboard/useredit', $data);
        $this->view('tamplates/footer');
    }
    public function parseURL()
    {
        if( isset($_GET['url']) ) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
    public function deleteuser(){
        $url = $this->parseURL();
        $id_user = $url[2];
        $success = $this->model('ManageUser_model')->deleteUser($id_user);
        if ($success) {
            echo "<script>
            alert('User deleted successfully!');
            window.location.href = '/inventaria/public/Admindashboard/';
            </script>
            ";
        } else {
            // Handle errors
            echo "<script>
            alert('Failed to delete user');
            </script>
            ";
        }
    }

    public function adduser()
    {
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
                window.location.href = '/inventaria/public/Admindashboard/';
                </script>";
            } else {
                // Handle errors
                echo "<script>
                alert('Failed to add user');
                window.location.href = '/inventaria/public/Admindashboard/';
                </script>";
            }
        } else {
            // Menangani halaman awal (tanpa form submission)
            $data['judul'] = 'Manage User';
            $data['UserName'] = $this->model('ManageUser_model')->getAllUser(0, 10); // Ganti nilai parameter sesuai kebutuhan
            $this->view('tamplates/header', $data);
            $this->view('Admindashboard/index', $data);
            $this->view('tamplates/footer');
        }
    }
    public function search()
    {
        $data['judul'] = 'Manage User';
    
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $getusername = $_POST['username'];
    
            if (!empty($getusername)) {
                $getactivePage = isset($url[1]) ? $url[1] : null;
                $limitdata = 4;
                $jumlahDataUser = $this->model('ManageUser_model')->countSearchUsername($getusername);
                $jumlahHalaman = ceil($jumlahDataUser / $limitdata);
                $activePage = (isset($getactivePage) && is_numeric($getactivePage)) ? $getactivePage : 1;
                $awalData = ($activePage - 1) * $limitdata;
        
                $data['UserName'] = $this->model('ManageUser_model')->searchUser($getusername, $awalData, $limitdata);
                $data['judul'] = 'Manage User';
                $data['activepage'] = $activePage;
                $data['jumlahHalaman'] = $jumlahHalaman;
                $data['activeItem'] = 'active-item';

            } else {
                $data['UserName'] = $this->model('ManageUser_model')->getAllUser(0, 10);
            }
        } else {
            header('Location: /inventaria/public/Admindashboard/');
        }
    
        // Gunakan nilai dari properti kelas
        $data['activepage'] = $this->activePage ?? 1;
        $data['jumlahHalaman'] = $this->jumlahHalaman ?? 1;
    
        $this->view('tamplates/header', $data);
        $this->view('Admindashboard/index', $data);
        $this->view('tamplates/footer');
    }
}