<?php
  namespace add_comment_test;

  class add_comment {
    function add_co_activity($Id_activity, $comment, $date, $name, $db) {
      $q = $db->prepare("INSERT INTO activity_comment(Id_activity, comment, date, name) VALUES(:Id_activity, :comment, :date, :name)");
      $q->execute([
        'Id_activity' =>$Id_activity,
        'comment' => $comment,
        'date' => $date,
        'name' => $name
      ]);
      echo "Your comment was sent !";
      ?>
        <meta http-equiv="refresh" content="0.0001;URL=/IsTravel/destination_activities_page.php">
      <?php
      return true;
    }

    function add_co_trip($Id_trip, $comment, $date, $name, $db) {
      $q = $db->prepare("INSERT INTO trip_comment(Id_trip, comment, date, name) VALUES(:Id_trip, :comment, :date, :name)");
      $q->execute([
        'Id_trip' =>$Id_trip,
        'comment' => $comment,
        'date' => $date,
        'name' => $name
      ]);
      echo "Your comment was sent !";
      ?>
        <meta http-equiv="refresh" content="0.0001;URL=/IsTravel/destination_page.php">
      <?php
      return true;
    }
  }

  if(isset($_POST['formsend_activity_comment'])) {
    extract($_POST);
    $add_comment = new add_comment();
    $add_comment->add_co_activity($Id_activity, $comment, $date, $_SESSION['First_name'], $db);
  }

  if(isset($_POST['formsend_trip_comment'])) {
    extract($_POST);
    $add_comment = new add_comment();
    $add_comment->add_co_trip($Id_trip, $comment, $date, $_SESSION['First_name'], $db);
  }
?>
