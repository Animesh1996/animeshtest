<html>
<head></head>
<body>
<form>
Email:<input type="text" name="email">
<input type="submit" value="signIn">
</form>
<body>
</html>
<?php
	$search1=$_POST['email'];
	$conn=mysqli_connect("localhost","root","","projcust");
	if(!$conn)
	echo "not connected";
	else
	echo "Connected";
	$query="Select * from custdetail where  email LIKE '%$search1%' ";
	$result=mysqli_query($conn,$query);
	if(!$result)
		echo "not getting<br/>";
	else
		echo "getting<br/>";
	while($row=mysqli_fetch_array($result))
	{
		echo "NAME:" .$row['name']."</br>";
		echo "email:" .$row['email'];
		}
		
		?>