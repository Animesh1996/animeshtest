
<?php
	$conn=mysqli_connect("localhost","root","","projcust");
	if(!$conn)
	echo mysqli_error();
	

$n = (isset($_POST['name']) ? $_POST['name'] : '');
	$e = (isset($_POST['email']) ? $_POST['email'] : '');
	$p = (isset($_POST['password']) ? $_POST['password'] : '');
$query="Insert into custdetail (name,email,password) values ('$n','$e','$p')";
	$result=mysqli_query($conn,$query);
	if(!$result)
		echo "$result";
	
?> 