<?php
session_start();
$con=mysqli_connect("localhost","root","","account") or die("Connection was not established");
if(isset($_SESSION['username'])){
	echo "<script>window.open('transaction.php','_self');</script>";
}
else{
?>

<!DOCTYPE HTML>
<html>
<!-- student login -->
<head>
  <title>Assignment</title>
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <h1>Assignment</h1>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <li class="selected"><a href="index.php">Home</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
    
    <div id="site_content">
      <div id="content">
        <!-- insert the page content here -->
        <h1>Please login Here !</h1>
        <h1></h1>
        <h1></h1>
        <form action="slogin.php" method="post">
          <div class="form_settings">
            <p><span><strong>user id</strong></span><input type="text" name="username" value="" /></p><br><br>
            <p><span><strong>Password</strong></span><input type="password" name="password" value="" /></p><br><br>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="name" value="submit" /></p>
          </div>
        </form><br><br>
        <a href="signup.php">Signup Here !</a>
      </div>
    </div>
    <br><br><br><br><br><br>
    <div id="content_footer"></div>
    <div id="footer">
      <p>Copyright &copy; 2020 </p>
    </div>
  </div>
</body>
</html>

<?php } ?>