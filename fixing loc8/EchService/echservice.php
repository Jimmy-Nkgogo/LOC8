<?php 
  session_start();
  if (!isset($_SESSION["unique_id"])) {
    header("location: ../Chatapp/login.php");
  }
?>
<?php include_once("../Chatapp/php/config.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="echservie.css" />
    <link rel="shortcut icon" href="../favicon/plnlogo.ico type="image/x-icon"/>
    <title>Services</title>
    <link rel="shortcut icon" href="../favicon/plnlogo.ico" type="image/x-icon">
  </head>
  <body>
    <header>
      <div class="navbar">
        <div>
          <a class="logo" href="index.php"><img src="plnlogo.png" alt="" /></a>
        </div>
        <nav>
          <ul id="MenuItems">
            <li><a href="../landing page/landing.php">Home</a></li>
            <li><a href="../About Us/aboutus.php">About Us</a></li>
            <li><a href="../Services/Services.php">Services</a></li>
            <li><a href="../Contact/contact.php">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <div class="wrapper-grid">
        <?php
          $userTypes = array('Developer','Electrician','Carpenter','Gardener', 'Tutor', 'Transport',
                            'Construction','Plumbing', 'Hygiene','Personal trainer','Welding','Painter',
                            'Event planner','Photography');

          $sql = "SELECT * FROM users WHERE user_type IN ('" . implode("','", $userTypes) . "')";
          $result = $conn->query($sql);

          // Check if any users were found
          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                  echo '<div class="container">';
                  echo '<div class="banner-img"></div>';
                  echo '<img src="../Chatapp/php/Images/'.$row["image"].'" alt="profile image" class="profile-img" />';
                  echo '<h1 class="name">'.$row["first_name"].' '.$row["last_name"].'</h1>';
                  echo '<p class="description">Title: '.$row["user_type"].'</p>';
                  echo '<a href="./userprof.php"><button class="btn">Hire</button></a>';
                  echo '</div>';
              }
          } else {
              echo "No users found.";
          }
        ?>
      </div>


    <footer class="footer">
      <div class="waves">
        <div class="wave" id="wave1"></div>
        <div class="wave" id="wave2"></div>
        <div class="wave" id="wave3"></div>
        <div class="wave" id="wave4"></div>
      </div>
      <ul class="social-icon">
        <li class="social-icon__item">
          <a class="social-icon__link" href="#">
            <ion-icon name="logo-linkedin"></ion-icon>
          </a>
        </li>
        <li class="social-icon__item">
          <a class="social-icon__link" href="#">
            <ion-icon name="logo-github"></ion-icon>
          </a>
        </li>
      </ul>
      <ul class="menu">
        <li class="menu__item">
          <a class="menu__link" href="../landing page/landing.php">Home</a>
        </li>
        <li class="menu__item">
          <a class="menu__link" href="../About Us/aboutus.php">About</a>
        </li>
        <li class="menu__item">
          <a class="menu__link" href="../Services/Services.php">Services</a>
        </li>
        <li class="menu__item">
          <a class="menu__link" href="../Contact/contact.php">Team</a>
        </li>
      </ul>
      <p>&copy;2023 LOC8|The A Team| All Rights Reserved</p>
    </footer>
  </body>
</html>
