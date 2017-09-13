
<?php
	session_start();
	$conn=mysqli_connect("localhost","root","","projcust");
	if(!$conn)
	echo mysqli_error();
	

$n = (isset($_POST['name']) ? $_POST['name'] : '');
	$e = (isset($_POST['email']) ? $_POST['email'] : '');
	$p = (isset($_POST['phone']) ? $_POST['phone'] : '');
	$a = (isset($_POST['address']) ? $_POST['address'] : '');
	$p1 = (isset($_POST['pin']) ? $_POST['pin'] : '');
	$c = (isset($_POST['category']) ? $_POST['category'] : '');
	$c1 = (isset($_POST['category1']) ? $_POST['category1'] : '');
	$t1 = (isset($_POST['time1']) ? $_POST['time1'] : '');
	
	$verify="select * from custdetail where email='$e'";
	 $verify1=mysqli_query($conn,$verify);
	  if(mysqli_num_rows($verify1)>0)
	  {
$rno = rand().time();

$query="Insert into booking (name,email,phone,address,pin,category,category1,receiptno,time1) values ('$n','$e','$p','$a','$p1','$c','$c1','$rno','$t1')";

	$result=mysqli_query($conn,$query);
	$_SESSION['name']=$n;
	$_SESSION['email']=$e;
	$_SESSION['phone']=$p;
	$_SESSION['address']=$a;
	$_SESSION['pin']=$p1;
	$_SESSION['category']=$c;
	$_SESSION['category1']=$c1;
	$_SESSION['receiptno']=$rno;
	$_SESSION['time1']=$t1;
	if($result)
		header('location:receipt.php');
 }
 else
	 {
		 header('location:reglink.html');
	 }
?> 