<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style>
      body{
        background-image: url("/IsTravel/img/wallpaper.jpg");
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
}
#deconnection:hover{
  background-color: white;
  color: #0148ba;
}

#profile_settings{
  margin-left: 48px;
  margin-right: 48px;
}
#profile_settings:hover{
  background-color: white;
  color: #0148ba;
}

.logo{
  float: left;
    width: 70px;
    height: 70px;
}
.profile_img{
    float: right;
    width: 75px;
    height: 57.5px;
    padding: 7.5px;
    margin-right:25px;
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
#name{
  color: black;
  background-color: white;
  border-radius: 5px;
  margin: 10px;
  padding: 5px;
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
            <a href="/IsTravel/homepage.php"><img src="/IsTravel/img/logo.jpeg" class="logo"></a>
  			<?php
          if (isset($_SESSION['Type'])) {
            if ($_SESSION['Type'] == 'admin') {
              ?>
              <li class="nav_li"><a href="">Trip in Israel</a></li>
              <li class="nav_li"><a href="">Food & Drink</a></li>
              <li class="nav_li"><a href="">Activities</a></li>
              <li class="nav_li"><a href="">Activities proposition</a></li>
              <?php
            } else if ($_SESSION['Type'] == 'manager') {
              ?>
              <li class="nav_li"><a href="">Trip in Israel</a></li>
              <li class="nav_li"><a href="">Food & Drink</a></li>
              <li class="nav_li"><a href="">Activities</a></li>
              <li class="nav_li"><a href="">Propose an activity</a></li>
              <li class="nav_li"><a href="">Contact us</a></li>
              <?php
            } else {
              ?>
              <li class="nav_li"><a href="">Trip in Israel</a></li>
              <li class="nav_li"><a href="">Food & Drink</a></li>
              <li class="nav_li"><a href="">Activities</a></li>
              <li class="nav_li"><a href="">Contact us</a></li>
              <?php
            }
          } else {
            ?>
            <li class="nav_li"><a href="">Trip in Israel</a></li>
            <li class="nav_li"><a href="">Food & Drink</a></li>
            <li class="nav_li"><a href="">Activities</a></li>
            <li class="nav_li"><a href="">Contact us</a></li>
            <?php
          }
        ?>

        <?php
        if (isset($_SESSION['Mail'])) {
          ?>
          <ul>
            <li class="dropdown2">
              <img src="/IsTravel/img/128-1280585_user-icon-fa-fa-user-circle.png" class="profile_img">
              <div class="dropdown-user">
                <?php $q = $db->query("SELECT * FROM user WHERE email ='".$_SESSION['Mail']."' ");
                $result = $q->fetch();
                ?>
                  <p id="name"><?php echo $result['first_name']." ".$result['last_name'];?></p>
                <a href="" id="profile_settings">Profile</a>
                <?php require_once 'deconnection.php'; ?>
              </div>
            </li>
          </ul>
          <?php
        } else {
      ?>
        <ul>
          <li class="dropdown2">
            <img src="/IsTravel/img/128-1280585_user-icon-fa-fa-user-circle.png" class="profile_img">
            <div class="dropdown-user">
              <a href="/IsTravel/connection_page.php">Sign in</a>
              <a href="/IsTravel/registration_page.php">Sign up</a>
            </div>
          </li>
        </ul>
      <?php
        }
      ?>

    </ul>
  	</nav><br><br>

  </body>
</html>
