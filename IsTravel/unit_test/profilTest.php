<?php
  use PHPUnit\Framework\TestCase;

  class profilTest extends TestCase {

    public function test_connec(){
      $db = new PDO("mysql:host=mysql-istravel.alwaysdata.net;dbname=istravel_db", "istravel", "IsTravel.555");
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $this->assertTrue(\profil_test\profil::prof('Elianor', 'Zanzouri', 'elianza@ac.sce.ac.il', 'Azertyuio01234567', 'Azertyuio01234567', 'manager', $db), "Not modified");
      $this->assertFalse(\profil_test\profil::prof('', 'Zanzouri', 'elianza@ac.sce.ac.il', 'Azertyuio01234567', 'Azertyuio01234567', 'manager', $db), "Modified");
      $this->assertFalse(\profil_test\profil::prof('Elianor', 'Zanzouri', 'elianza@ac.sce.ac.il', 'Azertyuio01234567', 'Azertyuio01234', 'manager', $db), "Modified");
    }
  }

?>
