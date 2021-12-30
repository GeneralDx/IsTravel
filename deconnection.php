<!-- deconnection -->

    <form method="post">
      <input type="submit" name="deconnection" id="deconnection" value="Log out"> <br>
    </form>

    <?php
      if (isset($_POST['deconnection']))
      {
        session_unset();
        session_destroy();
        ?>
        <meta http-equiv="refresh" content="0.00001;URL=/IsTravel/homepage.php">
        <?php
      }
    ?>
