public function user()
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) || !empty($password)) {

        if ($this->model('Login_model')->cekUserTrue($username) > 0) {

            $data = $this->model('Login_model')->ambilDataUser($username);
            $passwordDb = $data['password'];

            if (password_verify($password, $passwordDb)) {
                session_start();

                $_SESSION['status'] = $data['status'];

                if ($_SESSION['status'] == 1) {
                    header('location: ' . BASEURL . '/manageuser');
                } else {
                    header('location: ' . BASEURL . '/manageuser/useredit');
                }
            } else {
                echo 'password salah';
            }

        } else {
            echo 'gagal menemukan user';
        }

    } else {
        echo 'isikan data terlebih dahulu';
    }

    exit;
}
