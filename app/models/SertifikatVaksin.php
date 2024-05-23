<?php

require_once '../core/Database.php';

class SertifikatVaksin {
    public $id;
    public $PemesananID;
    public $IssuedDate;
    public $ExpiryDate;
    public $VerificationStatus;
    public $Url;

    public static function all() {
        $db = Database::getInstance();
        $stmt = $db->query("SELECT * FROM SertifikatVaksin");
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'SertifikatVaksin');
    }

    public function save() {
        $db = Database::getInstance();
        if (isset($this->id)) {
            $stmt = $db->prepare("UPDATE SertifikatVaksin SET PemesananID = ?, IssuedDate = ?, ExpiryDate = ?, VerificationStatus = ?, Url = ? WHERE id = ?");
            return $stmt->execute([$this->PemesananID, $this->IssuedDate, $this->ExpiryDate, $this->VerificationStatus, $this->Url, $this->id]);
        } else {
            $stmt = $db->prepare("INSERT INTO SertifikatVaksin (PemesananID, IssuedDate, ExpiryDate, VerificationStatus, Url) VALUES (?, ?, ?, ?, ?)");
            return $stmt->execute([$this->PemesananID, $this->IssuedDate, $this->ExpiryDate, $this->VerificationStatus, $this->Url]);
        }
    }

    public static function find($id) {
        $db = Database::getInstance();
        $stmt = $db->prepare("SELECT * FROM SertifikatVaksin WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetchObject('SertifikatVaksin');
    }

    public static function delete($id) {
        $db = Database::getInstance();
        $stmt = $db->prepare("DELETE FROM SertifikatVaksin WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
