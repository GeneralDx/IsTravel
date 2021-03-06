<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style>
      /* body {
          background-image: url("/IsTravel/img/wallpaper.jpg");
          width: 100%;
          height: 100%;
      } */

      body {
        background-image: url("/IsTravel/img/wallpaper.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        }

      .div_nav{
        background-color: #FFFFFF;
        overflow: hidden;
        text-align: center;
        font-size: 15px;
        margin-top: 35px;
        margin-bottom: 35px;
      }

      #nav{
        list-style-type: none;
        margin-right: auto;
        margin-left: auto;
        height: min-content;
        margin-top: auto;
        margin-bottom: auto;
        overflow: hidden;
        padding: 0px;
        background-color: #FFFFFF;
      }

      .nav_li {
        float: left;
      }

      .nav_li a{
        display: block;
        color: #0148ba;
        text-align: center;
        padding: 27.5px 25px;
        text-decoration: none;
       }

      li a:hover {
        background-color: #0148ba;
        color: white;
      }

      #deconnection{
        background-color: #0148ba;
        border: none;
        color: white;
        text-decoration: none;
        margin-left: 33%;
        margin-right: 33%;
      }
      #deconnection:hover{
        background-color: white;
        color: #0148ba;
      }

      #profile_settings:hover{
        background-color: white;
        color: #0148ba;
      }

      #proposition_activity:hover{
        background-color: white;
        color: #0148ba;
      }

      #cart:hover{
        background-color: white;
        color: #0148ba;
      }

      #sign_in:hover{
        background-color: white;
        color: #0148ba;
      }

      #sign_up:hover{
        background-color: white;
        color: #0148ba;
      }

      .logo{
        float: left;
          width: 90px;
          height: 90px;
      }
      .profile_img{
        float: right;
        width: 60px;
        height: 60px;
        padding: 7.5px;
        margin-top: 20px;
      }

      .dropdown-user {
      left:84.3%;
      position: absolute;
      display: none;
      z-index: 1;
      padding: 10px;
      width: 150px;
      border-radius: 5px;
      border: 2px solid white;
      background-color:rgba(1, 72, 186);
      transition: all 0.2s;
      }
      .dropdown-user a {
      color: white;
      text-decoration: none;
      display: block;
      text-align: center;

      }
      .dropdown-user a:hover {
        color: #d6d6d6;
      }

      .dropdown2:hover .dropdown-user {
        display:block;
        cursor: pointer;
      }

      ul {
        list-style-type: none;
      }

      #name{
        color: black;
        background-color: white;
        border-radius: 5px;
        margin: 10px;
        padding: 5px;
        text-align: center;
      }

      .div_user {
        margin-right: auto;
        margin-left: auto;
        margin-top: 0px;
        margin-bottom: 10px;
      }

      .div_logo{
      	margin-right:auto;
      	margin-left: auto;
      	height:fit-content;
      	margin-top:20px;
      	margin-bottom:10px;
      }

      .menu_nav{
        display: flex;
      }


    </style>
  </head>
  <body>
    <?php
      include 'database.php';
      global $db;
    ?>
    <div class="menu_nav">


    <div class="div_logo">
        <a href="/IsTravel/homepage.php"><img src="/IsTravel/img/logo.png" class="logo"></a>
    </div>

    <div class="div_nav">
    	<ul id='nav'>

    		<?php
          if (isset($_SESSION['Type'])) {
            if ($_SESSION['Type'] == 'admin') {
              ?>
              <li class="nav_li"><a href="/IsTravel/destination_page.php">Trip in Israel</a></li>
              <li class="nav_li"><a href="/IsTravel/destination_activities_page.php">Activities</a></li>
              <li class="nav_li"><a href="/IsTravel/add_trip_page.php">Add a Trip</a></li>
              <li class="nav_li"><a href="/IsTravel/suggested_activity_page.php">Activities proposition</a></li>
            <?php
              } else if ($_SESSION['Type'] == 'manager') {
            ?>
              <li class="nav_li"><a href="/IsTravel/destination_page.php">Trip in Israel</a></li>
              <li class="nav_li"><a href="/IsTravel/destination_activities_page.php">Activities</a></li>
              <li class="nav_li"><a href="/IsTravel/activity_proposition_page.php">Propose an activity</a></li>
              <li class="nav_li"><a href="/IsTravel/contact_page.php">Contact us</a></li>
          <?php
            } else {
          ?>
              <li class="nav_li"><a href="/IsTravel/destination_page.php">Trip in Israel</a></li>
              <li class="nav_li"><a href="/IsTravel/destination_activities_page.php">Activities</a></li>
              <li class="nav_li"><a href="/IsTravel/contact_page.php">Contact us</a></li>
        <?php
            }
          } else {
        ?>
            <li class="nav_li"><a href="/IsTravel/destination_page.php">Trip in Israel</a></li>
            <li class="nav_li"><a href="/IsTravel/destination_activities_page.php">Activities</a></li>
            <li class="nav_li"><a href="/IsTravel/contact_page.php">Contact us</a></li>
        <?php
          }
        ?>
        </ul>
      </div>

      <div class="div_user">
        <?php
        if (isset($_SESSION['Mail'])) {
          ?>
          <ul>
            <li class="dropdown2">
              <img src="/IsTravel/img/profile_logo.png" class="profile_img">
              <div class="dropdown-user">
                  <p id="name"><?php echo $_SESSION['First_name']." ".$_SESSION['Last_name'];?></p>
                  <a href="/IsTravel/profil_page.php" id="profile_settings">Profile</a>
                  <a href="/IsTravel/cart_page.php" id="cart">Cart</a>

                <?php
                  if ($_SESSION['Type'] == 'manager'){
                    ?>
                      <a href="/IsTravel/my_activities_page.php" id="proposition_activity">My activities</a>
                    <?php
                  } elseif ($_SESSION['Type'] == 'admin') {
                    ?>
                      <a href="/IsTravel/select_modify_trip_page.php" id="proposition_activity">Modify trip</a>
                    <?php
                  }
                  require_once 'deconnection.php';
                ?>
              </div>
            </li>
          </ul>
          <?php
        } else {
      ?>
        <ul>
          <li class="dropdown2">
            <img src="/IsTravel/img/profile_logo.png" class="profile_img">
            <div class="dropdown-user">
              <a href="/IsTravel/connection_page.php" id="sign_in">Sign in</a>
              <a href="/IsTravel/registration_page.php" id="sign_up">Sign up</a>
            </div>
          </li>
        </ul>
      <?php
        }
      ?>
    </div>
    </div>
  </body>
</html>
