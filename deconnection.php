<!-- deconnection -->

    <form method="post">
      <input type="submit" name="deconnection" id="deconnection" value="Log out"> <br>
    </form>

    <?php
      if (isset($_POST['deconnection']))
      {
        $a = $db->prepare("SELECT * FROM user WHERE email = :email");
        $a->execute([
          'email' => $_SESSION['Mail']
        ]);

        $result = $a->fetch();

        $q= $db->prepare("DELETE FROM cart WHERE Id_user = :Id_user");
        $q->execute([
          'Id_user' => $result['Id']
        ]);

        session_unset();
        session_destroy();
        ?>
        <meta http-equiv="refresh" content="0.00001;URL=/IsTravel/homepage.php">
        <?php
      }
    ?>
