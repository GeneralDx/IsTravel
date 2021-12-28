<?php
  use PHPUnit\Framework\TestCase;

  class modifytripTest extends TestCase {

    public function test_connec(){
      $db = new PDO("mysql:host=mysql-istravel.alwaysdata.net;dbname=istravel_db", "istravel", "IsTravel.555");
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $this->assertTrue(\modify_trip_test\modify_trip::modify_tr('18', 'Tou Bishvat - Eilat', '2022-01-13', '2022-01-18', 'Eilat', '3500', 'Come celebrate the feast of Tou Bishvat to Eilat!

Stay from 13 January 2022 to 18 January 2022 (6 days / 5 nights)

Note that children count for a person.

This trip includes:
Flights O / I Transavia from Paris.
Outbound: HV3938 13/01/2022 Paris Orly ORY / David-Ben-Gurion International TLV
Departure 10:15 Arrival 16:00

Inbound: HV3939 18/01/22 David-Ben-Gurion International TLV / Paris Orly ORY
Departure 18:00 Arrival 22:10

Airport Transfers / Private Bus Hotel

Hotel Dan Panorama 4**** in the center of Eilat.

On the program: visit a dates field + picking dates, visit the Yotvata farm, breakfast on boat privatize with children activities (tobogan at sea), Eilat Aquarium ...


This price does not include:
- Airport transfers in France.
- Personal extras and expenses
- The excursions contracted on the spot, or directly at the hotel.
- Possible increases in airport taxes and fuel overload
- Usual tips to hotel staff (left at the customer discretion)
- Insurance Travel related to the stay', $db), "Trip not modified");
    }
  }

?>
