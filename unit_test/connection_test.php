<?php
  use PHPUnit\Framework\TestCase;

  class ConnectionTest extends TestCase {

    public function setUp(){
      require_once 'connection.php';
    }

    public function connec_test(){
      $this->assertTrue(connec('sabagsh@ac.sce.ac.il', 'Azertyuio01234567', $db), "Not connected");
      $this->assertFalse(connec('saba@ac.sce.ac.il', 'Azertyuio012', $db), "Connected");
    }
  }


?>
