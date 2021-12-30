<?php
  use PHPUnit\Framework\TestCase;

  class modifyactivityTest extends TestCase {

    public function test_connec(){
      $db = new PDO("mysql:host=mysql-istravel.alwaysdata.net;dbname=istravel_db", "istravel", "IsTravel.555");
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $this->assertTrue(\modify_activity_test\modify_activity::modify_act('2', 'elianza@ac.sce.ac.il', 'Ice Skating', 'Beer Sheva', 'We propose you from 11:00 to 22:00 every day to come skating on ice for a price who begin at 45', $db), "Activity not modify");
    }
  }

?>
