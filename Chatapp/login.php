<?php include_once("header.php")?>
  <body>
    <div class="wrapper">
      <section class="form login">
        <header>LOC8 Login</header>
        <form action="#">
          <div class="error-txt"></div>
          <div class="field input">
            <label for="">Email Address</label>
            <input type="email" placeholder="Enter your email" name="email" id="" />
          </div>
          <div class="field input">
            <label for="">Password</label>
            <input type="password" placeholder="Enter your password" name="password" />
            <i class="fas fa-eye"></i>
          </div>
          <div class="field button">
            <input type="submit" value="Continue to Chat" />
            <div class="link">Not signed up? <a href="registration.php">Signup now</a></div>
          </div>
        </form>
      </section>
    </div>
    <script src="./Javascript/pass-show-hide.js"></script>
    <script src="./Javascript/login.js"></script>
  </body>
</html>
