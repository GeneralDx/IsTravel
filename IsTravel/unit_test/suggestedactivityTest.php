<?php
  use PHPUnit\Framework\TestCase;

  class suggestedactivityTest extends TestCase {

    public function test_connec(){
      $db = new PDO("mysql:host=mysql-istravel.alwaysdata.net;dbname=istravel_db", "istravel", "IsTravel.555");
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $this->assertTrue(\suggested_activity_test\suggested_activity::change_stat('4', 'Accepted', $db), "Status updated");
      $this->assertFalse(\suggested_activity_test\suggested_activity::change_stat('6', '', $db), "Status not updated");
    }
  }

?>
