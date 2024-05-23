<?php

require_once '../core/Database.php';

class Pemesanan {
    public $id;
    public $UserID;
    public $VaksinID;
    public $Schedule;
    public $Location;
    public $EWalletID;
    public $IsConfirm;

    public static function all() {
        $db = Database::getInstance();
        $stmt = $db->query("SELECT * FROM Pemesanan");
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'Pemesanan');
    }

    public function save() {
        $db = Database::getInstance();
        if (isset($this->id)) {
            $stmt = $db->prepare("UPDATE Pemesanan SET UserID = ?, VaksinID = ?, Schedule = ?, Location = ?, EWalletID = ?, IsConfirm = ? WHERE id = ?");
            return $stmt->execute([$this->UserID, $this->VaksinID, $this->Schedule, $this->Location, $this->EWalletID, $this->IsConfirm, $this->id]);
        } else {
            $stmt = $db->prepare("INSERT INTO Pemesanan (UserID, VaksinID, Schedule, Location, EWalletID, IsConfirm) VALUES (?, ?, ?, ?, ?, ?)");
            return $stmt->execute([$this->UserID, $this->VaksinID, $this->Schedule, $this->Location, $this->EWalletID, $this->IsConfirm]);
        }
    }

    public static function find($id) {
        $db = Database::getInstance();
        $stmt = $db->prepare("SELECT * FROM Pemesanan WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetchObject('Pemesanan');
    }

    public static function delete($id) {
        $db = Database::getInstance();
        $stmt = $db->prepare("DELETE FROM Pemesanan WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
