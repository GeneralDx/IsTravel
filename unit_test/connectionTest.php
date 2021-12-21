<?php
  use PHPUnit\Framework\TestCase;

  class connectionTest extends TestCase {

    public function test_connec(){
      $db = new PDO("mysql:host=mysql-istravel.alwaysdata.net;dbname=istravel_db", "istravel", "IsTravel.555");
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $this->assertTrue(\connec_test\connection::connec('sabagsh@ac.sce.ac.il', 'Azertyuio01234567', $db), "Not connected");
      $this->assertFalse(\connec_test\connection::connec('saba@ac.sce.ac.il', 'Azertyuio012', $db), "Connected");
    }
  }

?>
