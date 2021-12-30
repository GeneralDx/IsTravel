<?php
  use PHPUnit\Framework\TestCase;

  class addtripTest extends TestCase {

    public function test_connec(){
      $db = new PDO("mysql:host=mysql-istravel.alwaysdata.net;dbname=istravel_db", "istravel", "IsTravel.555");
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $this->assertTrue(\add_trip_test\add_trip::add_tr('Trip in Jerusalem', '2015-11-22_00002.jpg ', '2022-04-14', '2022-04-23', 'Jerusalem', '1500', 'Trip to visit the main monuments in Jerusalem with the atmosphere of passover', $db), "Trip not added");
    }
  }

?>
