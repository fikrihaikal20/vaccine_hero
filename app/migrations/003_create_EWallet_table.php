<?php
class CreateEWalletTable
{
  public function up()
  {
    try {
      $db = Database::getInstance();
      $sql = "CREATE TABLE IF NOT EXISTS EWallet (
                        id INT AUTO_INCREMENT PRIMARY KEY,
                        MethodName VARCHAR(255) NOT NULL
                    )";
      $db->exec($sql);
    } catch (PDOException $e) {
      echo "Error creating EWallet table: " . $e->getMessage() . PHP_EOL;
      exit(1);
    }
  }

  public function down()
  {
    try {
      $db = Database::getInstance();
      $sql = "DROP TABLE IF EXISTS EWallet";
      $db->exec($sql);
    } catch (PDOException $e) {
      echo "Error dropping EWallet table: " . $e->getMessage() . PHP_EOL;
      exit(1);
    }
  }
}
