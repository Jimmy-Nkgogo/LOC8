<?php 
  session_start();
  if (!isset($_SESSION["unique_id"])) {
    header("location: ../Chatapp/login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    />
    <link
      rel="stylesheet"
      href="http://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="Services.css" />
    <link
      rel="shortcut icon"
      href="../favicon/plnlogo.ico"
      type="image/x-icon"
    />
    <title>Services</title>
  </head>
  <body>
    <header>
      <div class="navbar">
        <div>
          <a class="logo" href="../landing page/landing.php"><img style="height:50px;" src="../logo/plnlogo.png" alt="" /></a>
        </div>
        <nav>
          <?php include_once("../navbar/navbar.php"); ?> 
        </nav>
      </div>
    </header>

    <div class="cat">
      <div class="catergories">
        <a href="../EchService/echservice.php" name="developer">
          <div class="catergory">
            <div id="developer" onclick="redirectToPage()"></div>
            <h2>Developer</h2>
          </div>
        </a>

        <a href="../EchService/echservice.php" name="eletrician">
          <div class="catergory">
            <div id="eletrician"></div>
            <h2>Eletrician</h2>
          </div>
        </a>

        <a href="../EchService/echservice.php" name="carpentry">
          <div class="catergory">
            <div id="carpentry"></div>
            <h2>Carpentry</h2>
          </div>
        </a>

        <a href="../EchService/echservice.php" nmae="gardener">
          <div class="catergory">
            <div id="gardener"></div>
            <h2>Gardener</h2>
          </div>
        </a>

        <a href="../EchService/echservice.php" name="tutor">
          <div class="catergory">
            <div id="tutor"></div>
            <h2>Tutor</h2>
          </div>
        </a>

        <a href="../EchService/echservice.php" name="transport">
          <div class="catergory">
            <div id="transport"></div>
            <h2>Transport</h2>
          </div>
        </a>

        <a href="../EchService/echservice.php" name="builder">
          <div class="catergory">
            <div id="builder"></div>
            <h2>Construction</h2>
          </div>
        </a>

        <a href="../EchService/echservice.php" name="plumbing">
          <div class="catergory">
            <div id="plumbing"></div>
            <h2>plumbing</h2>
          </div>
        </a>

        <a href="../EchService/echservice.php" name="hygiene">
          <div class="catergory">
            <div id="hygiene"></div>
            <h2>hygiene</h2>
          </div>
        </a>

        <a href="../EchService/echservice.php" name="sport">
          <div class="catergory">
            <div id="sport"></div>
            <h2>Personal Trainer</h2>
          </div>
        </a>

        <a href="../EchService/echservice.php" name="welding">
          <div class="catergory">
            <div id="welding"></div>
            <h2>Welding</h2>
          </div>
        </a>

        <a href="../EchService/echservice.php" name="painter">
          <div class="catergory">
            <div id="painter"></div>
            <h2>Painter</h2>
          </div>
        </a>

        <a href="../EchService/echservice.php" name="event">
          <div class="catergory">
            <div id="event"></div>
            <h2>Event Planner</h2>
          </div>
        </a>

        <a href="../EchService/echservice.php" name="camera">
          <div class="catergory">
            <div id="camera"></div>
            <h2>Photography</h2>
          </div>
        </a>

        <a href="../EchService/echservice.php"> </a>
      </div>
    </div>

    <div class="container">
      <section class="left2">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player
          src="https://assets6.lottiefiles.com/packages/lf20_jtbfg2nb.json"
          background="transparent"
          speed="1"
          style="width: 500px; height: 500px"
          loop
          autoplay
        ></lottie-player>
      </section>

      <section class="right2">
        <div class="tt">
          <h2>Why choose us</h2>
          <br />
          <p>
            We've got you covered in all ways possible, with Loc8 we serve
            everyone in a personalised manner.
          </p>
          <p>Skilled✅</p>
          <p>Efficient✅</p>
          <p>Flexible✅</p>
          <p>Realiable✅</p>
        </div>
      </section>
    </div>

    <footer class="footer">
      <div class="waves">
        <div class="wave" id="wave1"></div>
        <div class="wave" id="wave2"></div>
        <div class="wave" id="wave3"></div>
        <div class="wave" id="wave4"></div>
      </div>
      <!-- <ul class="social-icon">
            <li class="social-icon__item"><a class="social-icon__link" href="#">
                <ion-icon name="logo-linkedin"></ion-icon>
                </a></li>
            <li class="social-icon__item"><a class="social-icon__link" href="#">
                <ion-icon name="logo-github"></ion-icon>
                </a></li>
            </ul> -->
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.5/lottie.min.js"></script>
    <script src="Services.js"></script>
  </body>
</html>
