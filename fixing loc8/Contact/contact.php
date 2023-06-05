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
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    />
    <link rel="stylesheet" href="styles.css" />
    <link
      rel="shortcut icon"
      href="../favicon/plnlogo.ico"
      type="image/x-icon"
    />
    <title>The A Team</title>
  </head>
  <body>
    <div class="wrapper">
      <div class="navbar">
        <div>
          <a class="logo" href="../landing page/landing.php"><img src="../logo/plnlogo.png" alt="" /></a>
        </div>
        <nav>
          <?php include_once("../navbar/navbar.php");?>
        </nav>
      </div>

      <div></div>
      <h1>THE A TEAM</h1>
      <div class="our_team">
        <div class="team_member">
          <div class="member_img">
            <img class="icon" src="./Images/caleb.jpg" alt="our_team" />
            <div class="social_media">
              <div class="facebook item">
                <a
                  href="https://www.linkedin.com/in/caleb-diba-098729239/?trk=public_profile_browsemap&originalSubdomain=za"
                  class="fab fa-linkedin"
                ></a>
              </div>
              
            </div>
          </div>
          <h3>CALEB DIBA</h3>
          <span>Front-End Developer</span>
          <p>
            Caleb Diba is a Talented young man <br>
            who has passion in front end development <br>
            and graphics. He is the youngest game changer.
          </p>
        </div>
        <div class="team_member">
          <div class="member_img">
            <img class="icon" src="./Images/sabelo.png" alt="our_team" />
            <div class="social_media">
              <div class="facebook item">
                <a
                  href="https://za.linkedin.com/in/sabelo-ndlovu-222806208"
                  class="fab fa-linkedin"
                ></a>
              </div>
            </div>
          </div>
          <h3>SABELO Ndlovu</h3>
          <span>Fullstack Developer</span>
          <p>
            Sabelo Ndlovu Famously known as the future is <br>
            a multi Talented 2x hackathon winner and <br>
            the founder of The Future Initiative.
          </p>
        </div>
        <div class="team_member">
          <div class="member_img">
            <img class="icon" src="./Images/jimmy.jpeg" alt="our_team" />
            <div class="social_media">
              <div class="facebook item">
                <a
                  href="https://www.linkedin.com/in/jimmy-nkgogo-163a68215/?originalSubdomain=za"
                  class="fab fa-linkedin"
                ></a>
              </div>
            </div>
          </div>
          <h3>JIMMY NKGOGO</h3>
          <span>Back-End Developer</span>
          <p>
            Jimmy Famously known as jimmy boy <br>
            is a hardworking award winning student <br>
            and chairman of the stingy men association
          </p>
        </div>
        <div class="team_member">
          <div class="member_img">
            <img class="icon" src="./Images/yoliswa.png" alt="our_team" />
            <div class="social_media">
              <div class="facebook item">
                <a
                  href="https://za.linkedin.com/in/yoliswa-mthethwa-488b44250"
                  class="fab fa-linkedin"
                ></a>
              </div>
            </div>
          </div>
          <h3>YOLISWA MTHETHWA</h3>
          <span>Back-End Developer</span>
          <p>
            Yoliswa is a sophisticated young <br>
            entrepreneur and business women Famously <br>
            known for her business and inteligence.
          </p>
        </div>
        <div class="team_member">
          <div class="member_img">
            <img class="icon" src="./Images/promise.png" alt="our_team" />
            <div class="social_media">
              <div class="facebook item">
                <a
                  href="https://za.linkedin.com/in/promise-maila-281b09241?original_referer=https%3A%2F%2Fwww.google.com%2F"
                  class="fab fa-linkedin"
                ></a>
              </div>
            </div>
          </div>
          <h3>Promise Maila</h3>
          <span>Business Analyst</span>
          <p>
            Promise is a young determined women <br>
            whose currently doing her second year <br>
            for Business Information Technolong at UJ.
          </p>
        </div>
        <div class="team_member">
          <div class="member_img">
            <img class="icon" src="./Images/sinalo.png" alt="our_team" />
            <div class="social_media">
              <div class="facebook item">
                <a href="https://www.linkedin.com/in/sinalo-ntuli-0994b9256" class="fab fa-linkedin"></a>
              </div>
            </div>
          </div>
          <h3>SINALO NTULI</h3>
          <span>Product Manager</span>
          <p>
            Sinalo is a dedicated young women <br>
            who dedicates her life to Soft life <br>
            shes the chair person of table for 2 association.
          </p>
        </div>
      </div>
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
