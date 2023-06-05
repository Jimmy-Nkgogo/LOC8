<<<<<<< HEAD
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link rel="stylesheet" href="./landing.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap"
      rel="stylesheet"
    />
    <link
      rel="shortcut icon"
      href="../favicon/plnlogo.ico"
      type="image/x-icon"
    />
    <script
      defer
      src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.11.0/lottie.min.js"
      integrity="sha512-XCthc/WzPfa+oa49Z3TI6MUK/zlqd67KwyRL9/R19z6uMqBNuv8iEnJ8FWHUFAjC6srr8w3FMZA91Tfn60T/9Q=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <title>HOME PAGE</title>
  </head>
  <body>
    <!-- This code is for the navbar -->

    <header>
      <h1 class="logo"><img src="../logo/plnlogo.png" alt="" /></h1>

      <section class="menu">
        <nav>
          <?php include_once("../navbar/navbar.php");?>
        </nav>

        <!-- <button>
                <i class="fas fa-times"></i>
                <i class="fas fa-bars"></i>
            </button> -->
      </section>
    </header>

    <!-- This code is for the welcome section -->
    <section class="main">
      <section class="left">
        <p class="title">A trusted provider of skilled labour</p>

        <p class="msg">
          Simplify your process and find <b>skilled</b> laborers for your
          projects with ease. Get started today and unlock a world of
          possibilities for your needs. you just have to <b>LOC8</b> them.
        </p>

        <button class="truck-button">
          <span class="default">Pick A Service</span>

          <!-- this code was to show a message after the truck loads i must delete it -->
          <!-- <span class="success">
                    Pick A Service
                    <svg viewbox="0 0 12 10">
                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                    </svg>
                </span> -->

          <div class="truck">
            <div class="wheel"></div>
            <div class="back"></div>
            <div class="front"></div>
            <div class="box"></div>
          </div>
        </button>
      </section>

      <section class="right">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player
          src="https://assets6.lottiefiles.com/packages/lf20_teqtg9.json"
          background="transparent"
          speed="1"
          style="width: 500px; height: 400px"
          loop
          autoplay
        ></lottie-player>
      </section>
    </section>

    <!-- This code is for before and after section -->
    <div class="splitview skewed">
      <div class="panel bottom">
        <div class="content">
          <div class="description">
            <h1>The World</h1>
            <h1>Before Using LOC8</h1>
            <br />
            <br />
            <p>Limited employment opportunities</p>
            <br />
            <p>Low-quality housing</p>
            <br />
            <p>Unrestricted Informal Labor Market</p>
            <br />
          </div>

          <img
            src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/original-image.jpg"
            alt="Original"
          />
        </div>
      </div>

      <div class="panel top">
        <div class="content">
          <div class="description">
            <h1>The World</h1>
            <h1>After Using Loc8</h1>
            <br />
            <br />
            <p>More Jobs</p>
            <br />
            <p>Less Crime</p>
            <br />
            <p>Flexibility</p>
            <br />
          </div>

          <img
            src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/duotone-image.jpg"
            alt="Duotone"
          />
        </div>
      </div>

      <div class="handle"></div>
    </div>

    <!-- this code is for the last section befor ethe waves -->
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
            <span style="color: black">..............</span>
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
      </ul> -->
      <ul class="menu">
        <li class="menu__item">
          <a class="menu__link" href="../landing page/landing.php">Home</a>
        </li>
        <li>
          <a class="menu__link" href="../About Us/aboutus.php">About Us</a>
        </li>
        <li class="menu__item">
          <a class="menu__link" href="../Services/Services.php">Services</a>
        </li>
        <li class="menu__item">
          <a class="menu__link" href="../Contact/contact.php">Contact</a>
        </li>
      </ul>
      <p>&copy;2023 LOC8|The A Team| All Rights Reserved</p>
    </footer>

    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>

    <script src="https://cdn.jsdelivr.net/npm/gsap@3.0.1/dist/gsap.min.js"></script>
    <script src="script.js"></script>
    <script src="index.js"></script>
  </body>
</html>
=======
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link rel="stylesheet" href="./landing.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap"
      rel="stylesheet"
    />
    <link
      rel="shortcut icon"
      href="../favicon/plnlogo.ico"
      type="image/x-icon"
    />
    <script
      defer
      src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.11.0/lottie.min.js"
      integrity="sha512-XCthc/WzPfa+oa49Z3TI6MUK/zlqd67KwyRL9/R19z6uMqBNuv8iEnJ8FWHUFAjC6srr8w3FMZA91Tfn60T/9Q=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <title>HOME PAGE</title>
  </head>
  <body>
    <!-- This code is for the navbar -->

    <header>
      <h1 class="logo"><img src="../logo/plnlogo.png" alt="" /></h1>

      <section class="menu">
        <nav>
          <?php include_once("../navbar/navbar.php");?>
        </nav>

        <!-- <button>
                <i class="fas fa-times"></i>
                <i class="fas fa-bars"></i>
            </button> -->
      </section>
    </header>

    <!-- This code is for the welcome section -->
    <section class="main">
      <section class="left">
        <p class="title">A trusted provider of skilled labour</p>

        <p class="msg">
          Simplify your process and find <b>skilled</b> laborers for your
          projects with ease. Get started today and unlock a world of
          possibilities for your needs. you just have to <b>LOC8</b> them.
        </p>

        <button class="truck-button">
          <span class="default">Pick A Service</span>

          <!-- this code was to show a message after the truck loads i must delete it -->
          <!-- <span class="success">
                    Pick A Service
                    <svg viewbox="0 0 12 10">
                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                    </svg>
                </span> -->

          <div class="truck">
            <div class="wheel"></div>
            <div class="back"></div>
            <div class="front"></div>
            <div class="box"></div>
          </div>
        </button>
      </section>

      <section class="right">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player
          src="https://assets6.lottiefiles.com/packages/lf20_teqtg9.json"
          background="transparent"
          speed="1"
          style="width: 500px; height: 400px"
          loop
          autoplay
        ></lottie-player>
      </section>
    </section>

    <!-- This code is for before and after section -->
    <div class="splitview skewed">
      <div class="panel bottom">
        <div class="content">
          <div class="description">
            <h1>The World</h1>
            <h1>Before Using LOC8</h1>
            <br />
            <br />
            <p>Limited employment opportunities</p>
            <br />
            <p>Low-quality housing</p>
            <br />
            <p>Unrestricted Informal Labor Market</p>
            <br />
          </div>

          <img
            src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/original-image.jpg"
            alt="Original"
          />
        </div>
      </div>

      <div class="panel top">
        <div class="content">
          <div class="description">
            <h1>The World</h1>
            <h1>After Using Loc8</h1>
            <br />
            <br />
            <p>More Jobs</p>
            <br />
            <p>Less Crime</p>
            <br />
            <p>Flexibility</p>
            <br />
          </div>

          <img
            src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/duotone-image.jpg"
            alt="Duotone"
          />
        </div>
      </div>

      <div class="handle"></div>
    </div>

    <!-- this code is for the last section befor ethe waves -->
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
            <span style="color: black">..............</span>
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
      </ul> -->
      <ul class="menu">
        <li class="menu__item">
          <a class="menu__link" href="../landing page/landing.php">Home</a>
        </li>
        <li>
          <a class="menu__link" href="../About Us/aboutus.php">About Us</a>
        </li>
        <li class="menu__item">
          <a class="menu__link" href="../Services/Services.php">Services</a>
        </li>
        <li class="menu__item">
          <a class="menu__link" href="../Contact/contact.php">Contact</a>
        </li>
      </ul>
      <p>&copy;2023 LOC8|The A Team| All Rights Reserved</p>
    </footer>

    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>

    <script src="https://cdn.jsdelivr.net/npm/gsap@3.0.1/dist/gsap.min.js"></script>
    <script src="script.js"></script>
    <script src="index.js"></script>
  </body>
</html>
>>>>>>> 2928505ab68a17710076151682971b16729dfe8b
