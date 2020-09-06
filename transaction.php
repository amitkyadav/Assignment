<?php
session_start();
$con=mysqli_connect("localhost","root","","account") or die("Connection was not established");
if(!isset($_SESSION['username'])){
	echo "<script>window.open('index.php','_self');</script>";
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

        <?php
        	$Email = $_SESSION['username'];
        	$q = "select * from account_holder where Email ='$Email' ";
            $run = mysqli_query($con, $q);
            $result = mysqli_fetch_array($run);
            $Name = $result['Name'];
            $Salary = $result['Salary'];
        ?>

        <h1>Welcome <?php echo $Name ?> !</h1>
        <h1>You have <?php echo $Salary ?> Inr.</h1>
        <h1>To begin transaction type email of the receiver and ammount and then submit.</h1>
        <h1></h1>
        <h1></h1>
        <form action="trans.php" method="post">
          <div class="form_settings">
            <p><span><strong>Email</strong></span><input type="text" name="username" value="" /></p><br><br>
            <p><span><strong>Ammount</strong></span><input type="text" name="amount" value="" /></p><br><br>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="name" value="submit" /></p>
          </div>
        </form><br><br>
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
