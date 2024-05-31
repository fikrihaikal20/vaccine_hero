<?php

require_once '../app/models/EWallet.php';
require_once '../app/models/Pemesanan.php';
require_once '../app/models/User.php';
require_once '../app/models/Vaksin.php';

class AdminController extends Controller {
    public function index() {
        $ewallets = EWallet::all();
        $this->view('admin/index');
    }

    public function order() {
        $orders = Pemesanan::all();
        $this->view('admin/orders', ['orders' => $orders]);
    }

    // ewallet
    public function ewallet() {
        $ewallet = EWallet::all();
        $this->view('admin/ewallet', ['wallets' => $ewallet]);
    }

    public function edit_ewallet() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $ewallet = EWallet::find($id);
            $this->view('admin/ewallet/edit', ['ewallet' => $ewallet]);
        } else {
            header('Location: ' . BASE_URL . '?url=admin/ewallet');
        }

    }

    public function create_ewallet() {
        $this->view('admin/ewallet/create');
    }

    public function store_ewallet() {
        $errors = [];

        if (empty($_POST['name'])) {
            $errors[] = 'Method name is required';
        }

        if (!empty($errors)) {
            $this->view('ewallet/create', ['errors' => $errors]);
            return;
        }

        $ewallet = new EWallet();
        $ewallet->MethodName = $_POST['name'];
        $ewallet->save();

        header('Location: ' . BASE_URL . '?url=admin/ewallet');
    }

    public function update_ewallet($id) {
        $errors = [];

        if (empty($_POST['name'])) {
            $errors[] = 'Method name is required';
        }

        if (!empty($errors)) {
            $ewallet = EWallet::find($id);
            $this->view('ewallet/edit', ['ewallet' => $ewallet, 'errors' => $errors]);
            return;
        }

        $ewallet = EWallet::find($id);
        $ewallet->MethodName = $_POST['name'];
        $ewallet->save();

        header('Location: ' . BASE_URL . '?url=admin/ewallet');
    }

    public function delete_ewallet($id) {
        EWallet::delete($id);
        header('Location: ' . BASE_URL . '?url=admin/ewallet');
    }

    // Vaksin

    // view
    public function vaksin() {
        $vaksins = Vaksin::all();
        $this->view('admin/products', ['vaksins' => $vaksins]);
    }

    public function create_vaksin() {
        $this->view('admin/product/create');
    }
    
    public function edit_vaksin() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $vaksin = Vaksin::find($id);
            $this->view('admin/product/edit', ['vaksin' => $vaksin]);
        } else {
            header('Location: ' . BASE_URL . '?url=admin/vaksin');
        }
    }

    public function store_vaksin() {
        $errors = [];

        if (empty($_POST['name'])) {
            $errors[] = 'Name is required';
        }

        if (!empty($errors)) {
            $this->view('admin/product/create', ['errors' => $errors]);
            return;
        }

        $vaksin = new Vaksin();
        $vaksin->Name = $_POST['name'];
        $vaksin->Description = $_POST['description'];
        $vaksin->Manufacturer = $_POST['manufacturer'];
        $vaksin->save();

        header('Location: ' . BASE_URL . '?url=admin/vaksin');
    }

    public function update_vaksin($id) {
        $errors = [];

        if (empty($_POST['name'])) {
            $errors[] = 'Name is required';
        }

        if (!empty($errors)) {
            $vaksin = Vaksin::find($id);
            $this->view('vaksin/edit', ['vaksin' => $vaksin, 'errors' => $errors]);
            return;
        }

        $vaksin = Vaksin::find($id);
        $vaksin->Name = $_POST['name'];
        $vaksin->Description = $_POST['description'];
        $vaksin->Manufacturer = $_POST['manufacturer'];
        $vaksin->save();

        header('Location: ' . BASE_URL . '?url=admin/vaksin');
    }

    public function delete_vaksin($id) {
        Vaksin::delete($id);
        header('Location: ' . BASE_URL . '?url=admin/vaksin');
    }
}
