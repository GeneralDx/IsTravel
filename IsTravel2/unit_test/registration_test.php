<?php
  use PHPUnit\Framework\TestCase;

  class RegistrationTest extends TestCase {

    public function setUp(){
      require_once 'registration.php';
    }

    public function connec_test(){
      $this->assertTrue(connec('Jean', 'Michel', 'jean.michel@gmail.com', 'Qsdf0123', 'Qsdf0123', 'customer', $db), "Not register");
      $this->assertFalse(connec('Samuel', 'Sebag', 'sabagsh@ac.sce.ac.il', 'Azertyuio01234567', 'Azertyuio01234567', 'admin', $db), "Register");
    }
  }


?>
