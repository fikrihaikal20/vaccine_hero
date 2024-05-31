<?php

require_once '../app/models/Vaksin.php';

class VaksinController extends Controller {
    public function index() {
        $vaksins = Vaksin::all();
        $this->view('Vaksin/index', ['vaksins' => $vaksins]);
    }

    public function create() {
        $this->view('vaksin/create');
    }

    public function store() {
        $errors = [];

        if (empty($_POST['name'])) {
            $errors[] = 'Name is required';
        }

        if (!empty($errors)) {
            $this->view('vaksin/create', ['errors' => $errors]);
            return;
        }

        $vaksin = new Vaksin();
        $vaksin->Name = $_POST['name'];
        $vaksin->Description = $_POST['description'];
        $vaksin->Manufacturer = $_POST['manufacturer'];
        $vaksin->save();

        header('Location: ' . BASE_URL . 'vaksin');
    }

    public function edit($id) {
        $vaksin = Vaksin::find($id);
        $this->view('vaksin/edit', ['vaksin' => $vaksin]);
    }

    public function update($id) {
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

        header('Location: ' . BASE_URL . 'vaksin');
    }

    public function delete($id) {
        Vaksin::delete($id);
        header('Location: ' . BASE_URL . 'vaksin');
    }
}
