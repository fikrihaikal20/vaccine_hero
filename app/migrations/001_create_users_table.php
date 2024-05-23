<?php
class CreateUsersTable {
    public function up() {
        try {
            $db = Database::getInstance();
            $sql = "CREATE TABLE IF NOT EXISTS User (
                        id INT AUTO_INCREMENT PRIMARY KEY,
                        Name VARCHAR(255) NOT NULL,
                        Email VARCHAR(255) NOT NULL UNIQUE,
                        Password VARCHAR(255) NOT NULL,
                        PhoneNumber VARCHAR(20),
                        IsAdmin BOOLEAN DEFAULT FALSE
                    )";
            $db->exec($sql);
        } catch (PDOException $e) {
            echo "Error creating User table: " . $e->getMessage() . PHP_EOL;
            exit(1);
        }
    }

    public function down() {
        try {
            $db = Database::getInstance();
            $sql = "DROP TABLE IF EXISTS User";
            $db->exec($sql);
        } catch (PDOException $e) {
            echo "Error dropping User table: " . $e->getMessage() . PHP_EOL;
            exit(1);
        }
    }
}
