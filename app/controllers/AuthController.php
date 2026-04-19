<?php
class AuthController extends Controller {
    public function index() {
        if (isset($_SESSION['user_id'])) {
            $this->redirect('dashboard');
        }
        $this->view('auth/login');
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';

            $userModel = $this->model('User');
            $user = $userModel->findUserByUsername($username);

            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id_user'];
                $_SESSION['role'] = $user['role'];
                $_SESSION['username'] = $user['username'];
                $this->redirect('dashboard');
            } else {
                $this->view('auth/login', ['error' => 'Username atau password salah!']);
            }
        } else {
            $this->redirect('auth');
        }
    }

    public function logout() {
        session_destroy();
        $this->redirect('auth');
    }
}
