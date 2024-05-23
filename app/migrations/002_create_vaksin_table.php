<?php
class CreateVaksinTable
{
	public function up()
	{
		try {
			$db = Database::getInstance();
			$sql = "CREATE TABLE IF NOT EXISTS Vaksin (
                        id INT AUTO_INCREMENT PRIMARY KEY,
                        Name VARCHAR(255) NOT NULL,
                        Description TEXT,
                        Manufacturer VARCHAR(255)
                    )";
			$db->exec($sql);
		} catch (PDOException $e) {
			echo "Error creating Vaksin table: " . $e->getMessage() . PHP_EOL;
			exit(1);
		}
	}

	public function down()
	{
		try {
			$db = Database::getInstance();
			$sql = "DROP TABLE IF EXISTS Vaksin";
			$db->exec($sql);
		} catch (PDOException $e) {
			echo "Error dropping Vaksin table: " . $e->getMessage() . PHP_EOL;
			exit(1);
		}
	}
}
