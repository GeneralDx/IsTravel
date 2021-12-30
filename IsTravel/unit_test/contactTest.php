<?php
  use PHPUnit\Framework\TestCase;

  class contactTest extends TestCase {

    public function test_connec(){
      $db = new PDO("mysql:host=mysql-istravel.alwaysdata.net;dbname=istravel_db", "istravel", "IsTravel.555");
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $this->assertTrue(\contact_test\contact::cont('Samuel', 'Sebag', 'sabagsh@ac.sce.ac.il', 'Hello, I would know if there will be a trip for yom yeroushalaim this year ?', $db), "Message not send");
    }
  }

?>
