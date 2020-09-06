<?php
	$con=mysqli_connect("localhost","root","","account") or die("Connection was not established");
	$Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Dob = $_POST['Dob'];
    $Password = $_POST['Password'];

	$q = " insert into account_holder (Name, Email, Salary, Dob, Password) values ('$Name', '$Email', 1000, '$Dob', '$Password') ";
	$result = mysqli_query($con, $q);

	if($result){
		echo "<script>alert('Signup successful');</script>";
		echo "<script>window.open('index.php','_self');</script>";
	}
	else{
		echo "<script>alert('login unsuccessful');</script>";
		echo "<script>window.open('ssignup.php','_self');</script>";
	}

?>