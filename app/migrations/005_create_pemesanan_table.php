<?php
class CreatePemesananTable
{
	public function up()
	{
		try {
			$db = Database::getInstance();
			$sql = "CREATE TABLE IF NOT EXISTS Pemesanan (
                        id INT AUTO_INCREMENT PRIMARY KEY,
                        UserID INT,
                        VaksinID INT,
                        Schedule DATETIME,
                        Location VARCHAR(255),
                        EWalletID INT,
                        IsConfirm BOOLEAN DEFAULT FALSE,
                        FOREIGN KEY (UserID) REFERENCES User(id),
                        FOREIGN KEY (VaksinID) REFERENCES Vaksin(id),
                        FOREIGN KEY (EWalletID) REFERENCES EWallet(id)
                    )";
			$db->exec($sql);
		} catch (PDOException $e) {
			echo "Error creating Pemesanan table: " . $e->getMessage() . PHP_EOL;
			exit(1);
		}
	}

	public function down()
	{
		try {
			$db = Database::getInstance();
			$sql = "DROP TABLE IF EXISTS Pemesanan";
			$db->exec($sql);
		} catch (PDOException $e) {
			echo "Error dropping Pemesanan table: " . $e->getMessage() . PHP_EOL;
			exit(1);
		}
	}
}
