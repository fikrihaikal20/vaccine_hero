<?php
class CreateSertifikatVaksinTable
{
	public function up()
	{
		try {
			$db = Database::getInstance();
			$sql = "CREATE TABLE IF NOT EXISTS SertifikatVaksin (
                        id INT AUTO_INCREMENT PRIMARY KEY,
                        PemesananID INT,
                        IssuedDate DATETIME,
                        ExpiryDate DATETIME,
                        VerificationStatus BOOLEAN DEFAULT FALSE,
                        Url VARCHAR(255),
                        FOREIGN KEY (PemesananID) REFERENCES Pemesanan(id)
                    )";
			$db->exec($sql);
		} catch (PDOException $e) {
			echo "Error creating SertifikatVaksin table: " . $e->getMessage() . PHP_EOL;
			exit(1);
		}
	}

	public function down()
	{
		try {
			$db = Database::getInstance();
			$sql = "DROP TABLE IF EXISTS SertifikatVaksin";
			$db->exec($sql);
		} catch (PDOException $e) {
			echo "Error dropping SertifikatVaksin table: " . $e->getMessage() . PHP_EOL;
			exit(1);
		}
	}
}
