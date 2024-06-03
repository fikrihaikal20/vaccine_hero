<?php

require_once '../app/models/EWallet.php';
require_once '../app/models/Pemesanan.php';
require_once '../app/models/User.php';
require_once '../app/models/Vaksin.php';
require_once '../app/models/SertifikatVaksin.php';

class AdminController extends Controller
{
  public function index()
  {
    $ewallets = EWallet::all();
    $this->view('admin/index');
  }

  public function order()
  {
    $orders = Pemesanan::all();
    $this->view('admin/orders', ['orders' => $orders]);
  }

  // ewallet
  public function ewallet()
  {
    $ewallet = EWallet::all();
    $this->view('admin/ewallet', ['wallets' => $ewallet]);
  }

  public function edit_ewallet()
  {
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $ewallet = EWallet::find($id);
      $this->view('admin/ewallet/edit', ['ewallet' => $ewallet]);
    } else {
      header('Location: ' . BASE_URL . '?url=admin/ewallet');
    }

  }

  public function create_ewallet()
  {
    $this->view('admin/ewallet/create');
  }

  public function store_ewallet()
  {
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

  public function update_ewallet($id)
  {
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

  public function delete_ewallet($id)
  {
    EWallet::delete($id);
    header('Location: ' . BASE_URL . '?url=admin/ewallet');
  }

  // Vaksin

  // view
  public function vaksin()
  {
    $vaksins = Vaksin::all();
    $this->view('admin/products', ['vaksins' => $vaksins]);
  }

  public function create_vaksin()
  {
    $this->view('admin/product/create');
  }

  public function edit_vaksin()
  {
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $vaksin = Vaksin::find($id);
      $this->view('admin/product/edit', ['vaksin' => $vaksin]);
    } else {
      header('Location: ' . BASE_URL . '?url=admin/vaksin');
    }
  }

  public function store_vaksin()
  {
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

  public function update_vaksin($id)
  {
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

  public function delete_vaksin($id)
  {
    Vaksin::delete($id);
    header('Location: ' . BASE_URL . '?url=admin/vaksin');
  }


  // sertif vaksin
  public function sertif()
  {
    $sertifikatVaksin = SertifikatVaksin::all();
    $this->view('admin/sertif', ['sertifikatVaksin' => $sertifikatVaksin]);
  }

  public function create_sertif()
  {
    $pemesanan = Pemesanan::all();
    $this->view('admin/sertif/create', ['pemesanan' => $pemesanan]);
  }

  public function store_sertif()
  {
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
    // Check if a file was uploaded
    if (!isset($_FILES['file']) || $_FILES['file']['error'] !== UPLOAD_ERR_OK) {
      $errors[] = 'File upload is required';
    }

    if (!empty($errors)) {
      $pemesanan = Pemesanan::all();
      $this->view('admin/sertif/create', ['errors' => $errors, 'pemesanan' => $pemesanan]);
      return;
    }

    // Handle file upload
    $uploadDir = 'uploads/';
    $uploadedFile = $_FILES['file'];
    $fileName = basename($uploadedFile['name']);
    $targetFilePath = $uploadDir . $fileName;

    // Ensure the upload directory exists
    if (!is_dir($uploadDir)) {
      mkdir($uploadDir, 0777, true);
    }

    if (move_uploaded_file($uploadedFile['tmp_name'], $targetFilePath)) {
      $fileUrl = BASE_URL . '/' . $targetFilePath;

      $sertifikatVaksin = new SertifikatVaksin();
      $sertifikatVaksin->PemesananID = $_POST['pemesanan_id'];
      $sertifikatVaksin->IssuedDate = $_POST['issued_date'];
      $sertifikatVaksin->ExpiryDate = $_POST['expiry_date'];
      $sertifikatVaksin->VerificationStatus = false;
      $sertifikatVaksin->Url = $fileUrl;
      $sertifikatVaksin->save();

      header('Location: ' . BASE_URL . '?url=admin/sertif/');
    } else {
      $errors[] = 'There was an error uploading the file';
      $pemesanan = Pemesanan::all();
      $this->view('admin/sertif/create', ['errors' => $errors, 'pemesanan' => $pemesanan]);
    }
  }


  public function edit_sertif()
  {
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $sertifikatVaksin = SertifikatVaksin::find($id);
      $pemesanan = Pemesanan::all();
      $this->view('admin/sertif/edit', ['sertifikatVaksin' => $sertifikatVaksin, 'pemesanan' => $pemesanan]);
    } else {
      header('Location: ' . BASE_URL . '?url=admin/sertif');
    }
  }

  public function update_sertif()
  {
    $errors = [];

    $id = $_POST['sertif_id'];

    if (empty($_POST['sertif_id'])) {
      $errors[] = 'Sertif Id is required';
    }
    if (empty($_POST['pemesanan_id'])) {
      $errors[] = 'Pemesanan is required';
    }
    if (empty($_POST['issued_date'])) {
      $errors[] = 'Issued Date is required';
    }
    if (empty($_POST['expiry_date'])) {
      $errors[] = 'Expiry Date is required';
    }
    if (empty($_FILES['file']['name'])) {
      $sertifikatVaksin = SertifikatVaksin::find($id);
      $sertifikatVaksin->PemesananID = $_POST['pemesanan_id'];
      $sertifikatVaksin->IssuedDate = $_POST['issued_date'];
      $sertifikatVaksin->ExpiryDate = $_POST['expiry_date'];
      $sertifikatVaksin->VerificationStatus = false;
      $sertifikatVaksin->save();

      header('Location: ' . BASE_URL . '?url=admin/sertif/');
    } else {
      // Handle file upload
      $uploadDir = 'uploads/';
      $uploadedFile = $_FILES['file'];
      $fileName = basename($uploadedFile['name']);
      $targetFilePath = $uploadDir . $fileName;

      // Ensure the upload directory exists
      if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
      }

      if (move_uploaded_file($uploadedFile['tmp_name'], $targetFilePath)) {
        $fileUrl = BASE_URL . $targetFilePath;

        $sertifikatVaksin = SertifikatVaksin::find($id);
        $sertifikatVaksin->PemesananID = $_POST['pemesanan_id'];
        $sertifikatVaksin->IssuedDate = $_POST['issued_date'];
        $sertifikatVaksin->ExpiryDate = $_POST['expiry_date'];
        $sertifikatVaksin->VerificationStatus = false;
        $sertifikatVaksin->Url = $fileUrl;
        $sertifikatVaksin->save();

        header('Location: ' . BASE_URL . '?url=admin/sertif/');
      } else {
        $errors[] = 'There was an error uploading the file';
        $pemesanan = Pemesanan::all();
        $this->view('admin/sertif/create', ['errors' => $errors, 'pemesanan' => $pemesanan]);
      }
    }

    if (!empty($errors)) {
      $sertifikatVaksin = SertifikatVaksin::find($id);
      $pemesanan = Pemesanan::all();
      $this->view('admin/sertif/edit', ['errors' => $errors, 'sertifikatVaksin' => $sertifikatVaksin, 'pemesanan' => $pemesanan]);
      return;
    }


  }

  public function delete_sertif($id)
  {
    SertifikatVaksin::delete($id);
    header('Location: ' . BASE_URL . '?url=admin/sertif');
  }
}
