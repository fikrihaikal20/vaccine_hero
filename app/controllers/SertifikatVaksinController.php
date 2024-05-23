<?php

require_once '../app/models/SertifikatVaksin.php';
require_once '../app/models/Pemesanan.php';

class SertifikatVaksinController extends Controller {
    public function index() {
        $sertifikatVaksin = SertifikatVaksin::all();
        $this->view('sertifikat_vaksin/index', ['sertifikatVaksin' => $sertifikatVaksin]);
    }

    public function create() {
        $pemesanan = Pemesanan::all();
        $this->view('sertifikat_vaksin/create', ['pemesanan' => $pemesanan]);
    }

    public function store() {
        $errors = [];

        if (empty($_POST['pemesanan_id'])) {
            $errors[] = 'Pemesanan is required';
        }
        if (empty($_POST['issued_date'])) {
            $errors[] = 'Issued Date is required';
        }
        if (empty($_POST['expiry_date'])) {
            $errors[] = 'Expiry Date is required';
        }
        if (empty($_POST['url'])) {
            $errors[] = 'URL is required';
        }

        if (!empty($errors)) {
            $pemesanan = Pemesanan::all();
            $this->view('sertifikat_vaksin/create', ['errors' => $errors, 'pemesanan' => $pemesanan]);
            return;
        }

        $sertifikatVaksin = new SertifikatVaksin();
        $sertifikatVaksin->PemesananID = $_POST['pemesanan_id'];
        $sertifikatVaksin->IssuedDate = $_POST['issued_date'];
        $sertifikatVaksin->ExpiryDate = $_POST['expiry_date'];
        $sertifikatVaksin->VerificationStatus = false;
        $sertifikatVaksin->Url = $_POST['url'];
        $sertifikatVaksin->save();

        header('Location: ' . BASE_URL . 'sertifikat_vaksin');
    }

    public function edit($id) {
        $sertifikatVaksin = SertifikatVaksin::find($id);
        $pemesanan = Pemesanan::all();
        $this->view('sertifikat_vaksin/edit', ['sertifikatVaksin' => $sertifikatVaksin, 'pemesanan' => $pemesanan]);
    }

    public function update($id) {
        $errors = [];

        if (empty($_POST['pemesanan_id'])) {
            $errors[] = 'Pemesanan is required';
        }
        if (empty($_POST['issued_date'])) {
            $errors[] = 'Issued Date is required';
        }
        if (empty($_POST['expiry_date'])) {
            $errors[] = 'Expiry Date is required';
        }
        if (empty($_POST['url'])) {
            $errors[] = 'URL is required';
        }

        if (!empty($errors)) {
            $sertifikatVaksin = SertifikatVaksin::find($id);
            $pemesanan = Pemesanan::all();
            $this->view('sertifikat_vaksin/edit', ['errors' => $errors, 'sertifikatVaksin' => $sertifikatVaksin, 'pemesanan' => $pemesanan]);
            return;
        }

        $sertifikatVaksin = SertifikatVaksin::find($id);
        $sertifikatVaksin->PemesananID = $_POST['pemesanan_id'];
        $sertifikatVaksin->IssuedDate = $_POST['issued_date'];
        $sertifikatVaksin->ExpiryDate = $_POST['expiry_date'];
        $sertifikatVaksin->VerificationStatus = isset($_POST['verification_status']);
        $sertifikatVaksin->Url = $_POST['url'];
        $sertifikatVaksin->save();

        header('Location: ' . BASE_URL . 'sertifikat_vaksin');
    }

    public function delete($id) {
        SertifikatVaksin::delete($id);
        header('Location: ' . BASE_URL . 'sertifikat_vaksin');
    }
}
