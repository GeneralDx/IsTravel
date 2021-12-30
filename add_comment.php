<?php
  namespace add_comment_test;

  class add_comment {
    function add_co($Id_activity, $comment, $date, $name, $db) {
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
  }

  if(isset($_POST['formsend_activity_comment'])) {
    extract($_POST);

    $name = $_SESSION['First_name'].' '.$_SESSION['Last_name'];
    $add_comment = new add_comment();
    $add_comment->add_co($Id_activity, $comment, $date, $name, $db);
  }
?>
