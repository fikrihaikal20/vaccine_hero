<?php

require_once '../core/Database.php';

class User {
    public $UserID;
    public $Name;
    public $Email;
    public $Password;
    public $PhoneNumber;
    public $IsAdmin;

    public function __construct() {
        // Koneksi database dapat diinisialisasi di sini
    }

    public static function all() {
        $db = Database::getInstance();
        $stmt = $db->query("SELECT * FROM User");
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'User');
    }

    public function save() {
        $db = Database::getInstance();
        $stmt = $db->prepare("INSERT INTO User (id, Name, Email, Password, PhoneNumber, IsAdmin) VALUES (UUID(), ?, ?, ?, ?, ?)");
        return $stmt->execute([$this->Name, $this->Email, $this->Password, $this->PhoneNumber, FALSE]);
    }

    public static function findByEmail($email) {
        $db = Database::getInstance();
        $stmt = $db->prepare("SELECT * FROM User WHERE Email = ?");
        $stmt->execute([$email]);
        return $stmt->fetchObject('User');
    }
}
