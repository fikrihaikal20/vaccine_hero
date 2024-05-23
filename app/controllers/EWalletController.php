<?php

require_once '../app/models/EWallet.php';

class EWalletController extends Controller {
    public function index() {
        $ewallets = EWallet::all();
        $this->view('ewallet/index', ['ewallets' => $ewallets]);
    }

    public function create() {
        $this->view('ewallet/create');
    }

    public function store() {
        $errors = [];

        if (empty($_POST['method_name'])) {
            $errors[] = 'Method name is required';
        }

        if (!empty($errors)) {
            $this->view('ewallet/create', ['errors' => $errors]);
            return;
        }

        $ewallet = new EWallet();
        $ewallet->MethodName = $_POST['method_name'];
        $ewallet->save();

        header('Location: ' . BASE_URL . 'ewallet');
    }

    public function edit($id) {
        $ewallet = EWallet::find($id);
        $this->view('ewallet/edit', ['ewallet' => $ewallet]);
    }

    public function update($id) {
        $errors = [];

        if (empty($_POST['method_name'])) {
            $errors[] = 'Method name is required';
        }

        if (!empty($errors)) {
            $ewallet = EWallet::find($id);
            $this->view('ewallet/edit', ['ewallet' => $ewallet, 'errors' => $errors]);
            return;
        }

        $ewallet = EWallet::find($id);
        $ewallet->MethodName = $_POST['method_name'];
        $ewallet->save();

        header('Location: ' . BASE_URL . 'ewallet');
    }

    public function delete($id) {
        EWallet::delete($id);
        header('Location: ' . BASE_URL . 'ewallet');
    }
}
