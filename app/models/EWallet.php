<?php

require_once '../core/Database.php';

class EWallet {
    public $id;
    public $MethodName;

    public static function all() {
        $db = Database::getInstance();
        $stmt = $db->query("SELECT * FROM EWallet");
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'EWallet');
    }

    public function save() {
        $db = Database::getInstance();
        if (isset($this->id)) {
            $stmt = $db->prepare("UPDATE EWallet SET MethodName = ? WHERE id = ?");
            return $stmt->execute([$this->MethodName, $this->id]);
        } else {
            $stmt = $db->prepare("INSERT INTO EWallet (MethodName) VALUES (?)");
            return $stmt->execute([$this->MethodName]);
        }
    }

    public static function find($id) {
        $db = Database::getInstance();
        $stmt = $db->prepare("SELECT * FROM EWallet WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetchObject('EWallet');
    }

    public static function delete($id) {
        $db = Database::getInstance();
        $stmt = $db->prepare("DELETE FROM EWallet WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
