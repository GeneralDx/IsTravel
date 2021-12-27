<?php
  use PHPUnit\Framework\TestCase;

  class activitypropositionTest extends TestCase {

    public function test_connec(){
      $db = new PDO("mysql:host=mysql-istravel.alwaysdata.net;dbname=istravel_db", "istravel", "IsTravel.555");
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $this->assertTrue(\activity_proposition_test\activity_proposition::prop_activity('elianza@ac.sce.ac.il', 'Ice Skating', 'Beer Sheva', 'We propose you from 11:00 to 20:00 every day to come skating on ice for a price who begin at 50', '2015-11-22_00002.jpg ', $db), "Activiy not proposed");
    }
  }

?>
