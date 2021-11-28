<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style>
      body{
        background-image: url("wallpaper.jpg");
         }
      .menu_nav{
        background-color: #FFFFFF;
  overflow: hidden;
  text-align: center;
  font-size: 15px;
      }
      #nav{
         list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #FFFFFF;

      }
      .nav_li {
  float: left;
}
    .nav_li a{
       display: block;
  color: blue;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
    }
    li a:hover {
  background-color: #111;
}

#deconnection{
    background-color: #1E90FF;
  border: none;
  color: white;
  padding: 7px 18px;
  text-decoration: none;
  font-size: 16px;
  float: right;
}
.logo{
    width: 60px;
    height: 60px;
}


    </style>
  </head>
  <body>
    <?php
      include 'database.php';
      global $db;
    ?>
    <nav class="menu_nav">

  		<ul id='nav'>
            <img src="logo.jpeg" class="logo">
  			<?php
          if (isset($_SESSION['Type'])) {
            if ($_SESSION['Type'] == 'admin') {
              ?>
              <li class="nav_li"><a href="">Trip in Israel</a></li>
              <li class="nav_li"><a href="">Activities</a></li>
              <li class="nav_li"><a href="">Activities proposition</a></li>
              <li class="nav_li"><a href="">Contact us</a></li>
              <?php
            } else if ($_SESSION['Type'] == 'manager') {
              ?>
              <li class="nav_li"><a href="">Trip in Israel</a></li>
              <li class="nav_li"><a href="">Activities</a></li>
              <li class="nav_li"><a href="">Propose an activity</a></li>
              <li class="nav_li"><a href="">Contact us</a></li>
              <?php
            } else {
              ?>
              <li class="nav_li"><a href="">Trip in Israel</a></li>
              <li class="nav_li"><a href="">Activities</a></li>
              <li class="nav_li"><a href="">Contact us</a></li>
              <?php
            }
          } else {
            ?>
            <li class="nav_li"><a href="">Trip in Israel</a></li>
            <li class="nav_li"><a href="">Activities</a></li>
            <li class="nav_li"><a href="">Contact us</a></li>
            <?php
          }


        ?>
  		</ul>
      <?php
        if (!isset($_SESSION['Mail'])) {
      ?>

      <?php
        }
      ?>

      <?php
        if (isset($_SESSION['Mail'])) {
          require_once 'deconnection.php';
        } else {
      ?>
        <button type="submit" name="button_sign_up"><a href="/IsTravel/connection_page.php">Sign up</a></button>
        <button type="submit" name="button_sign_in"><a href="/IsTravel/registration_page.php">Sign in</a></button>
      <?php
        }
      ?>
  	</nav><br><br>

  </body>
</html>
