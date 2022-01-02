<?php
  use PHPUnit\Framework\TestCase;

  class addcartTest extends TestCase {

    public function test_connec(){
      $db = new PDO("mysql:host=mysql-istravel.alwaysdata.net;dbname=istravel_db", "istravel", "IsTravel.555");
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $this->assertTrue(\add_cart_test\add_cart::add_crt('sabagsh@sce.ac.il', '18', '3', $db), "Trip not added to the cart");
    }
  }

?>
