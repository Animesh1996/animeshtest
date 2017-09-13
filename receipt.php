<?php
	session_start();
	
	?>
	<html>
	<head>
		<title>Washing</title>
		<link rel="stylesheet" type="text/css" href="projectF.css" >
		</head>
		<body>
		   <div id="header1">
		      
			  <div id="header23">
			     <img src="index111.jpg" height="100" width="130">
			   </div>
			  <div id="header24">
			       <p><a href="reglink.html">Register</a></p>
			   </div>
			   </div>
			
			<div id="menu">
			     <ul>
				  
				 <li><a href="projectF.html">HOME</a></li>
				<li><a href="#">ABOUT US</a></li>
				<li><a href="#">RATE CARD</a></li>
				<li><a href="#">CONTACT US</a></li>
				<li><a href="booking.html">SERVICE</a></li>
					
				</ul>
				</div>
				</body>
		</html>
	
		<?php
		echo "Receiptno:" .$_SESSION['receiptno']."<br>"; 
		echo "NAME:" .$_SESSION['name']."<br>"; 
			echo "email:" .$_SESSION['email']."<br>"; 
			echo "phone:" .$_SESSION['phone']."<br>"; 
			echo "address:" .$_SESSION['address']."<br>"; 
			echo "pincode:" .$_SESSION['pin']."<br>";
			echo "Category:" .$_SESSION['category']."<br>";
			echo "Category1:" .$_SESSION['category1']."<br>";
			echo "timing:" .$_SESSION['time1']."<br>";
			$price=0;
			$_SESSION['price']=$price;
			$price1=0;
			$_SESSION['price1']=$price1;
			
			if(($_SESSION['category']>0))
			{
				if($_SESSION['category']=="1-2kg")
				{
					$_SESSION['price']=100;
				echo $_SESSION['price'];
			    }
				else if($_SESSION['category']=="2-4kg")
				{
				    $price=200;
				     echo $price;
				}
				else if($_SESSION['category']=="4-6kg")
				{ 
			   $price=300;
			   echo $price;
				}
				else
				{
				    $price=400;
				echo $price;
				}
			}
		if(($_SESSION['category1']>0))
		{
				if($_SESSION['category1']=="1-2kg")
				{
					$_SESSION['price1']=100;
				echo $_SESSION['price1'];
			    }
				else if($_SESSION['category1']=="2-4kg")
				{
				    $price1=200;
				     echo $price1;
				}
				else if($_SESSION['category1']=="4-6kg")
				{ 
			   $price1=300;
			   echo $price1;
				}
				
			   else 
				{
				    $price1=400;
				echo $price1;
				}
			}
	
			echo "<br>";
			$total_price=0;
			$_SESSION['totalprice']=$total_price;
			$_SESSION['totalprice']=($_SESSION['price']+$_SESSION['price1']);
			$_SESSION['totalprice'] +=(($_SESSION['totalprice']*18)/100);
			echo "total price".$_SESSION['totalprice'];
			
			
			
	       $conn=mysqli_connect("localhost","root","","projcust");
	       if(!$conn)
	          echo mysqli_error();
			
			$verify="Insert into booking (price,price1,totalprice) values ('$price','$price1','$total_price')";
              $verify1=mysqli_query($conn,$verify);			
		?>
		
		
		
		
		
		
		