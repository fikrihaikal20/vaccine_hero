<?php
require_once '../app/models/User.php';
class UserController extends Controller {
    public function index() {
        $users = User::all();
        $this->view('user/index', ['users' => $users]);
    }

    public function create() {
        $this->view('user/create');
    }

    public function store() {
        $errors = [];

        if (empty($_POST['name'])) {
            $errors[] = 'Name is required';
        }

        if (empty($_POST['email'])) {
            $errors[] = 'Email is required';
        } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Invalid email format';
        }

        if (empty($_POST['password'])) {
            $errors[] = 'Password is required';
        }

        if (!empty($errors)) {
            // Jika ada kesalahan, kembali ke formulir dengan pesan kesalahan
            $this->view('user/create', ['errors' => $errors]);
            return;
        }
        $user = new User();
        $user->Name = $_POST['name'];
        $user->Email = $_POST['email'];
        $user->Password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $user->PhoneNumber = $_POST['phone'];
        $user->EWalletBalance = 0;
        $user->save();
        header('Location: ' . BASE_URL . 'user');
    }
}