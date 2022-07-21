<?php
$server='locahost';
$server='root';
$password='';
$database='jobs';

$conn=mysquli_connect($server,$username,$password,$datbase);

if($conn->connect_error){
	die("Connection Failed:".$conn->connect_error);
}
echo"";

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$number=$_POST['phone_no'];
	$password=$_POST['password'];

	$sql="INSERT INTO `users`(`id`, `name`, `email`, `password`,'phone_no') VALUES ('$name','$email','$password','$number')";
	if(mysql_query($conn,$sql)){
		echo "Records inserted Successfully.";
	}
	else{
		echo "ERROR:Could not able to execute"$sql.mysql_error($conn);
	}
	
}
session_start();
if(isset($_POST['login'])){
	$email=$_POST['email'];
	$password=$_POST['password'];

	$query="SELECT * FROM users WHERE 'email'='$email' AND 'password'='$password'";
	$result=mysql_query($conn,$query);
	$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
	if(mysqli_fetch_row($result)==1){
		header("location:index.php");
	}
	else
	{
		error='email id or password is incorrect';
	}
}

if(isset($_POST['jpb'])){
	$cname=$_POST['cname'];
	$position=$_POST['position'];
	$jdesc=$_POST['jdesc'];
	$skills=$_POST['skills'];
	$ctc=$_POST['ctc'];

	$sql="INSERT INTO `jobs`(`id`, `cname`, `position`, `jdesc`, `skills`, `ctc`) VALUES ('$cname','$position','$jdesc','$skills','$ctc')";
	if(mysql_query($conn,$sql)){
		echo "New Job Hosted";
	}
	else{
		echo "ERROR:Failed to post the job."$sql.mysql_error($conn);
	}


mysql_close($conn);
?>