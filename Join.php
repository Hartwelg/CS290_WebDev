<!Doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>
Join us
</title>
<link rel="stylesheet" href="css/CookieCutter.css">
<script type="text/javascript" src="Join.js"></script>
</head>

<body>
 <header>
  <div id='topLeft'>
   <img src="images/cookieLogo.gif" alt="Nature's source logo" width="90" height="90">
  </div>
  <div id='topRight'>
   <div id="head">
   <h4>Welcome to cookie cutter.com</h4>
   <span id="belowTitle">"Cookie Cutter.com is dedicated to our customers unique cookie cutting needs."</span>
   </div>
  </div>
</header>
 <div id='bottomBox'>
  <div id='bottomLeft'>
   Site Menu:
   <p><a href="cookieCutter.php">Home</a>
   <p><a href="aboutUS.php">About US</a>
   <p><a href="FAQ.php">FAQ's</a>
   <p><a href="Join.php">Join Today!</a>
   <p><a href="Login.php">Login</a>
  </div>
  <div id='JoinbottomRight'>
   <div id="JoinSignUp">Sign up today for member only offers!</div>
   <form name="SignUp" id="SignUp" method="post" onsubmit="return submit(this)" action="Join.php">
   <p><div id="textField"><label>Username: <input name="userName" type="text" id="userName"></label></div></p>
   <p><div id="textField"><label>Password: <input name="password" type="password" id="password"></label></div></p>
   <p><div id="textField"><label>Confirm Password: <input name="confirmPassword" type="password" id="confirmPassword"></label></p></div>
   <p><div id="textField"><label>Email Address: <input name="email" type="email" id="email"></label></p></div>
   <p><input type="checkbox"><label>Yes, i would like to be informed of site updates via an occasional newsletter</label></p>
   <p><input type="submit" value="Submit"></p>
   </form>
 </div>
 </div>
</body>
</html>