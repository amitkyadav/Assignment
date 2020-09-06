<?php
	session_start();
	$con=mysqli_connect("localhost","root","","account") or die("Connection was not established");
	$username = $_POST['username'];
	$password = $_POST['password'];

	$q = "select * from account_holder where Email = '$username' and password = '$password' ";
	$result = mysqli_query($con,$q);

	$num = mysqli_num_rows($result);
	if($num==1){
		$_SESSION['username'] = $username;
		echo "<script>alert('login successful');</script>";
		echo "<script>window.open('transaction.php','_self');</script>";
	}
	else{
		echo "<script>alert('login unsuccessful');</script>";
		echo "<script>window.open('slogin.php','_self');</script>";
	}

?>