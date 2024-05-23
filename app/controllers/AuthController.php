<?php
require_once '../app/models/User.php';

class AuthController extends Controller
{
  public function daftar()
  {
    $this->view('register');
  }
  public function register()
  {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
        $this->view('auth/register', ['errors' => $errors]);
        return;
      }

      $existingUser = User::findByEmail($_POST['email']);
      if ($existingUser) {
        $errors[] = 'Email already registered';
        var_dump($errors);
        $this->view('auth/register', ['errors' => $errors]);
        return;
      }

      $user = new User();
      $user->Name = $_POST['name'];
      $user->Email = $_POST['email'];
      $user->Password = password_hash($_POST['password'], PASSWORD_DEFAULT);
      $user->PhoneNumber = $_POST['phone'];

      if ($user->save()) {
        header('Location: /public/index.php?url=auth/login');
        exit;
      } else {
        $errors[] = 'Failed to register user';
        $this->view('auth/register', ['errors' => $errors]);
      }
    } else {
      $this->view('auth/register');
    }
  }

  public function login()
  {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $errors = [];

      if (empty($_POST['email'])) {
        $errors[] = 'Email is required';
      } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid email format';
      }

      if (empty($_POST['password'])) {
        $errors[] = 'Password is required';
      }

      if (!empty($errors)) {
        $this->view('auth/login', ['errors' => $errors]);
        return;
      }

      $user = User::findByEmail($_POST['email']);
      if ($user && password_verify($_POST['password'], $user->Password)) {
        session_start();
        $_SESSION['user_id'] = $user->UserID;
        $_SESSION['user_name'] = $user->Name;
        $_SESSION['is_admin'] = $user->IsAdmin;
        header('Location: /public/index.php?url=dashboard');
        exit;
      } else {
        $errors[] = 'Invalid email or password';
        $this->view('auth/login', ['errors' => $errors]);
      }
    } else {
      $this->view('auth/login');
    }
  }

  public function logout()
  {
    session_start();
    session_destroy();
    header('Location: /public/index.php?url=auth/login');
    exit;
  }
}
