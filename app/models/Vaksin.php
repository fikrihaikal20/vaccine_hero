<?php

require_once '../core/Database.php';

class Vaksin {
    public $id;
    public $Name;
    public $Description;
    public $Manufacturer;

    public static function all() {
        $db = Database::getInstance();
        $stmt = $db->query("SELECT * FROM Vaksin");
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'Vaksin');
    }

    public function save() {
        $db = Database::getInstance();
        if (isset($this->id)) {
            $stmt = $db->prepare("UPDATE Vaksin SET Name = ?, Description = ?, Manufacturer = ? WHERE id = ?");
            return $stmt->execute([$this->Name, $this->Description, $this->Manufacturer, $this->id]);
        } else {
            $stmt = $db->prepare("INSERT INTO Vaksin (Name, Description, Manufacturer) VALUES (?, ?, ?)");
            return $stmt->execute([$this->Name, $this->Description, $this->Manufacturer]);
        }
    }

    public static function find($id) {
        $db = Database::getInstance();
        $stmt = $db->prepare("SELECT * FROM Vaksin WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetchObject('Vaksin');
    }

    public static function delete($id) {
        $db = Database::getInstance();
        $stmt = $db->prepare("DELETE FROM Vaksin WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
