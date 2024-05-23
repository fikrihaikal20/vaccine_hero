<?php

require_once '../app/models/Pemesanan.php';
require_once '../app/models/User.php';
require_once '../app/models/Vaksin.php';
require_once '../app/models/EWallet.php';

class PemesananController extends Controller {
    public function index() {
        $pemesanan = Pemesanan::all();
        $this->view('pemesanan/index', ['pemesanan' => $pemesanan]);
    }

    public function create() {
        $users = User::all();
        $vaksins = Vaksin::all();
        $ewallets = EWallet::all();
        $this->view('pemesanan/create', ['users' => $users, 'vaksins' => $vaksins, 'ewallets' => $ewallets]);
    }

    public function store() {
        $errors = [];

        if (empty($_POST['user_id'])) {
            $errors[] = 'User is required';
        }
        if (empty($_POST['vaksin_id'])) {
            $errors[] = 'Vaksin is required';
        }
        if (empty($_POST['schedule'])) {
            $errors[] = 'Schedule is required';
        }
        if (empty($_POST['location'])) {
            $errors[] = 'Location is required';
        }
        if (empty($_POST['ewallet_id'])) {
            $errors[] = 'E-Wallet is required';
        }

        if (!empty($errors)) {
            $users = User::all();
            $vaksins = Vaksin::all();
            $ewallets = EWallet::all();
            $this->view('pemesanan/create', ['errors' => $errors, 'users' => $users, 'vaksins' => $vaksins, 'ewallets' => $ewallets]);
            return;
        }

        $pemesanan = new Pemesanan();
        $pemesanan->UserID = $_POST['user_id'];
        $pemesanan->VaksinID = $_POST['vaksin_id'];
        $pemesanan->Schedule = $_POST['schedule'];
        $pemesanan->Location = $_POST['location'];
        $pemesanan->EWalletID = $_POST['ewallet_id'];
        $pemesanan->IsConfirm = false;
        $pemesanan->save();

        header('Location: ' . BASE_URL . 'pemesanan');
    }

    public function edit($id) {
        $pemesanan = Pemesanan::find($id);
        $users = User::all();
        $vaksins = Vaksin::all();
        $ewallets = EWallet::all();
        $this->view('pemesanan/edit', ['pemesanan' => $pemesanan, 'users' => $users, 'vaksins' => $vaksins, 'ewallets' => $ewallets]);
    }

    public function update($id) {
        $errors = [];

        if (empty($_POST['user_id'])) {
            $errors[] = 'User is required';
        }
        if (empty($_POST['vaksin_id'])) {
            $errors[] = 'Vaksin is required';
        }
        if (empty($_POST['schedule'])) {
            $errors[] = 'Schedule is required';
        }
        if (empty($_POST['location'])) {
            $errors[] = 'Location is required';
        }
        if (empty($_POST['ewallet_id'])) {
            $errors[] = 'E-Wallet is required';
        }

        if (!empty($errors)) {
            $pemesanan = Pemesanan::find($id);
            $users = User::all();
            $vaksins = Vaksin::all();
            $ewallets = EWallet::all();
            $this->view('pemesanan/edit', ['errors' => $errors, 'pemesanan' => $pemesanan, 'users' => $users, 'vaksins' => $vaksins, 'ewallets' => $ewallets]);
            return;
        }

        $pemesanan = Pemesanan::find($id);
        $pemesanan->UserID = $_POST['user_id'];
        $pemesanan->VaksinID = $_POST['vaksin_id'];
        $pemesanan->Schedule = $_POST['schedule'];
        $pemesanan->Location = $_POST['location'];
        $pemesanan->EWalletID = $_POST['ewallet_id'];
        $pemesanan->IsConfirm = isset($_POST['is_confirm']);
        $pemesanan->save();

        header('Location: ' . BASE_URL . 'pemesanan');
    }

    public function delete($id) {
        Pemesanan::delete($id);
        header('Location: ' . BASE_URL . 'pemesanan');
    }
}
