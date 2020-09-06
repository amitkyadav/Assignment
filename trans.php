<?php
	session_start();
    $con=mysqli_connect("localhost","root","","account") or die("Connection was not established");
    $Email_Sender = $_SESSION['username'];
	$Email_Receiver = $_POST['username'];
	$Ammount_Receiver = $_POST['amount'];

    $q_sender = "select * from account_holder where Email = '$Email_Sender' ";
	$q_receiver = "select * from account_holder where Email = '$Email_Receiver' ";
    
    $run_sender = mysqli_query($con, $q_sender);
    $result_sender = mysqli_fetch_array($run_sender);

    $run_receiver = mysqli_query($con, $q_receiver);
    $num = mysqli_num_rows($run_receiver);
    $result_receiver = mysqli_fetch_array($run_receiver);
    if($num==0 || $result_sender['Email'] == $result_receiver['Email']){
       
        echo "<script>alert('Invalid Transaction');</script>";
        echo "<script>window.open('transaction.php','_self');</script>";
    }
    else{

    if($result_sender['Salary'] < $Ammount_Receiver){
        echo "<script>alert('You dont have sufficient balance');</script>";
        echo "<script>window.open('transaction.php','_self');</script>";
    }
    else{
        $Salary_Sender = $result_sender['Salary'] - $Ammount_Receiver;
        $Salary_Receiver = $result_receiver['Salary'] + $Ammount_Receiver;

       // echo $Salary_Receiver;

        $update_sender = "update account_holder set Salary = '$Salary_Sender' where Email = '$Email_Sender' ";
        $update_receiver = "update account_holder set Salary = '$Salary_Receiver' where Email = '$Email_Receiver' ";

        mysqli_query($con,$update_sender);
        mysqli_query($con,$update_receiver);

        echo "<script>alert('Transaction Successful');</script>";
        echo "<script>window.open('transaction.php','_self');</script>";
    }
    }
	

?>
