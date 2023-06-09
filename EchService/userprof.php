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
    <title>Profile</title>
    <link rel="shortcut icon" href="../favicon/plnlogo.ico" type="image/x-icon" />
    <!-- ===== ===== Custom Css ===== ===== -->
    <link rel="stylesheet" href="usrstyle.css" />
    <link rel="stylesheet" href="responsive.css" />
    <!-- ===== ===== Remix Font Icons Cdn ===== ===== -->
    <link rel="stylesheet" href="fonts/remixicon.css" />
  </head>
  <body>
    <!-- ===== ===== Body Main-Background ===== ===== -->
    <span class="main_bg"></span>
    <!-- ===== ===== Main-Container ===== ===== -->
    <div class="container">
      <!-- ===== ===== Header/Navbar ===== ===== -->
      <header>
        <div class="brandLogo">
          <a href="../landing page/landing.php"
            ><figure>
              <img
                src="../About Us/logo+txt.png"
                alt="logo"
                width="150px"
                height="150px"
              /></figure
          ></a>
          <span>MarqueTech</span>
        </div>
      </header>
      <!-- ===== ===== User Main-Profile ===== ===== -->
      <section class="userProfile card">
        <div class="profile">
          <figure>
            <img
              src="https://images.unsplash.com/photo-1444011283387-7b0f76371f12?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ"
              alt="profile"
              width="250px"
              height="250px"
            />
          </figure>
        </div>
      </section>
      <!-- ===== ===== Work & Skills Section ===== ===== -->
      <section class="work_skills card">
        <!-- ===== ===== Work Contaienr ===== ===== -->
        <div class="work">
          <h1 class="heading">work</h1>
          <div class="primary">
            <h1>Mechanic</h1>
            <span>Primary</span>
            <p>
              S34 E 65th Street <br />
              Pretoria, PTA 2094
            </p>
          </div>

          <div class="secondary">
            <h1>Plumber</h1>
            <span>Secondary</span>
            <p>
              S34 E 65th Street <br />
              Pretoria, PTA 204
            </p>
          </div>
        </div>

        <!-- ===== ===== Skills Contaienr ===== ===== -->
        <div class="skills">
          <h1 class="heading">Skills</h1>
          <ul>
            <li style="--i: 0">Fixing</li>
            <li style="--i: 1">Welding</li>
            <li style="--i: 2">Screwing</li>
            <li style="--i: 3">Bilingual</li>
          </ul>
        </div>
      </section>

      <!-- ===== ===== User Details Sections ===== ===== -->
      <section class="userDetails card">
        <div class="userName">
          <a href="../EchService/echservice.php">
            <h1 class="name">Jeremy Rose</h1></a
          >
          <div class="map">
            <i class="ri-map-pin-fill ri"></i>
            <span>Pretoria, PTA</span>
          </div>
          <p>Mechanic</p>
        </div>

        <div class="rank">
          <h1 class="heading">Rankings</h1>
          <span>8,6</span>
          <div class="rating">
            <i class="ri-star-fill rate"></i>
            <i class="ri-star-fill rate"></i>
            <i class="ri-star-fill rate"></i>
            <i class="ri-star-fill rate"></i>
            <i class="ri-star-fill rate underrate"></i>
          </div>
        </div>

        <div class="btns">
          <ul>
            <li class="sendMsg">
              <i class="ri-chat-4-fill ri"></i>
              <a href="../Chatapp/users.php">Send Message</a>
            </li>

            <li class="sendMsg active">
              <i class="ri-check-fill ri"></i>
              <a href="#">Contacts</a>
            </li>

            <li class="sendMsg">
              <a href="#">Report User</a>
            </li>
          </ul>
        </div>
      </section>

      <!-- ===== ===== Timeline & About Sections ===== ===== -->
      <section class="timeline_about card">
        <div class="tabs">
          <ul>
            <li class="timeline">
              <i class="ri-eye-fill ri"></i>
              <span>Timeline</span>
            </li>

            <li class="about active">
              <i class="ri-user-3-fill ri"></i>
              <span>About</span>
            </li>
          </ul>
        </div>

        <div class="contact_Info">
          <h1 class="heading">Contact Information</h1>
          <ul>
            <li class="phone">
              <h1 class="label">Phone:</h1>
              <span class="info">+27 11 321 5871</span>
            </li>

            <li class="address">
              <h1 class="label">Address:</h1>
              <span class="info"
                >S34 E 65th Street <br />
                Pretoria, PTA 2094</span
              >
            </li>

            <li class="email">
              <h1 class="label">E-mail:</h1>
              <span class="info">gucci@gmail.com</span>
            </li>

            <li class="site">
              <h1 class="label">Site:</h1>
              <span class="info">www.LOC8.com</span>
            </li>
          </ul>
        </div>

        <div class="basic_info">
          <h1 class="heading">Basic Information</h1>
          <ul>
            <li class="birthday">
              <h1 class="label">Birthday:</h1>
              <span class="info">Dec 28, 20**</span>
            </li>

            <li class="sex">
              <h1 class="label">Gender:</h1>
              <span class="info">Male</span>
            </li>
          </ul>
        </div>
      </section>
    </div>
  </body>
</html>
