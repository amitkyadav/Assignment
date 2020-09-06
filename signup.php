<!DOCTYPE HTML>
<html>
<!-- Signup -->
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
        <h1>Please Signup Here !</h1>
        <h1></h1>
        <h1></h1>
        <form action="ssignup.php" method="post">
          <div class="form_settings">
            <p><span><strong>Name</strong></span><input type="text" name="Name" value="" /></p><br><br>
            <p><span><strong>Email</strong></span><input type="text" name="Email" value="" /></p><br><br>
            <p><span><strong>Dob</strong></span><input type="date" name="Dob" value="" /></p><br><br>
            <p><span><strong>Password</strong></span><input type="password" name="Password" value="" /></p><br><br>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="name" value="submit" /></p>
          </div>
        </form><br><br>
        <a href="index.php">Login Here !</a>
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
