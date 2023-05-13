<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" href="CSS/login2.css">
</head>
<body>
    <div class="full-page">
        <div class="navbar">
            <div>
                <a class="logo" href='website.html'><img src="plnlogo.png" alt=""></a>
            </div>
            <nav>
                <ul id='MenuItems'>
                    <li><a href='#'>Home</a></li>
                    <li><a href='#'>About Us</a></li>
                    <li><a href='#'>Services</a></li>
                    <li><a href='#'>Contact</a></li>
                    <li><button class='loginbtn' onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Login</button></li>
                </ul>
            </nav>
        </div>
        <div id='login-form'class='login-page'>
            <div class="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button' onclick='login()' class='toggle-btn'>Log In</button>
                    <button type='button' onclick='register()' class='toggle-btn'>Register</button>
                </div>
                <form id='login' class='input-group-login' action="login.php" method="POST">
                    <input type='text' class='input-field' placeholder='Email' required >
                    <input type='password' class='input-field' placeholder='Enter Password' required>
                    <input type='checkbox' class='check-box'><span>Remember Password</span>
                    <button type='submit' name="login" class='submit-btn'>Log in</button>
		        </form>
                <form id='register' class='input-group-register' action="login.php" method="POST">
                    <input type='text' class='input-field' placeholder='First Name' name="fName" required>
                    <input type='text' class='input-field' placeholder='Last Name' name="lName" required>
                    <input type='email' class='input-field' placeholder='Email' name="email" required>
                    <input type='password' class='input-field' placeholder='Enter Password' name="password1" required>
                    <input type='password' class='input-field'placeholder='Confirm Password' name="password2" required>
                    <input type='checkbox' class='check-box'><span>I agree to the terms and conditions</span>
                    <button type='submit' name="register" class='submit-btn'>Register</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        //This code is to transition between the two opions of logging in and signing up
        var x=document.getElementById('login');
		var y=document.getElementById('register');
		var z=document.getElementById('btn');
		function register()
		{
			x.style.left='-400px';
			y.style.left='50px';
			z.style.left='110px';
		}
		function login()
		{
			x.style.left='50px';
			y.style.left='450px';
			z.style.left='0px';
		}
	</script>

</body>
</html>
<?php
    
?>