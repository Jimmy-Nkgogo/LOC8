<?php
  session_start();
  if(isset($_SESSION['unique_id'])) {
    header("location: users.php");
  }
?>
<?php include_once("header.php")?>
  <body>
    <div class="wrapper">
      <section class="form signup">
        <header>LOC8 Registration</header>
        <form action="#" enctype="multipart/form-data">
          <div class="error-txt"></div>
          <div class="name-details">
            <div class="field input">
              <label for="">First Name</label>
              <input type="text" placeholder="First Name" name="fName" id="" required/>
            </div>
            <div class="field input">
              <label for="">Last Name</label>
              <input type="text" placeholder="Last Name" name="lName" id="" required/>
            </div>
            </div>
            <div class="field input">
              <label for="">Email Address</label>
              <input type="email" placeholder="johndoe@gmail.com" name="email" id="" required/>
            </div>
            <div class="field input">
              <label for="">Password</label>
              <input type="password" placeholder="Enter your password" name="password" id="" required/>
            <i class="fas fa-eye"></i>
            </div>
            <div class="field image">
              <label for="">Select Image</label>
              <input type="file" name="image" required/>
            </div>
            <div class="field button">
                <input type="submit" value="Continue to Chat">
                <div class="link">Already signed up? <a href="login.php">Login now</a></div>
            </div>
          </div>
        </form>
      </section>
    </div>
    <script src="./Javascript/pass-show-hide.js"></script>
    <script src="./Javascript/signup.js"></script>
  </body>
</html>
