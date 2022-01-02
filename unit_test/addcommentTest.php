<?php
  use PHPUnit\Framework\TestCase;

  class addcommentTest extends TestCase {

    public function test_connec(){
      $db = new PDO("mysql:host=mysql-istravel.alwaysdata.net;dbname=istravel_db", "istravel", "IsTravel.555");
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $this->assertTrue(\add_comment_test\add_comment::add_co_activity('2', 'Really good activity', '1640879958', 'Samuel', $db), "Comment not added");
    }
  }

?>
