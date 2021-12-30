<?php
  use PHPUnit\Framework\TestCase;

  class registrationTest extends TestCase {

    public function test_register(){
      $db = new PDO("mysql:host=mysql-istravel.alwaysdata.net;dbname=istravel_db", "istravel", "IsTravel.555");
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $this->assertTrue(\regist_test\registration::register('Jean', 'Michel', 'jean.michel@gmail.com', 'Qsdf0123', 'Qsdf0123', 'customer', $db), "Not register");
      $this->assertFalse(\regist_test\registration::register('Samuel', 'Sebag', 'sabagsh@ac.sce.ac.il', 'Azertyuio01234567', 'Azertyuio01234567', 'admin', $db), "Register");
      $this->assertFalse(\regist_test\registration::register('', 'Sebag', 'sabagsh@ac.sce.ac.il', 'Azertyuio01234567', 'Azertyuio01234567', 'admin', $db), "Register");
      $this->assertFalse(\regist_test\registration::register('Samuel', 'Sebag', 'sabagsh@ac.sce.ac.il', 'Azertyuio01234567', 'Azertyuio01234', 'admin', $db), "Register");
    }
  }


?>
