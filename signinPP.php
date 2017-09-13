<?php
    session_start();
	$servername="localhost";
	$username="root";
	$password="";
	
	
	$p=$_POST['email'];
	$r=$_POST['password'];
	
	
	
	$conn=mysqli_connect("localhost","root","","projcust");
	
	if (!$conn)
	{ echo "not established";
	}
    $query1="select * from custdetail where email='$p' and password='$r'";
    $result1=mysqli_query($conn,$query1);
    if(mysqli_num_rows($result1)>0)
	{
		while($row=mysqli_fetch_assoc($result1))
		{
			// enter page to be displayed after correct login details
		 
		$_SESSION['email']=$p;
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
			     <?php echo "welcome".$_SESSION['email']; ?>
			       <p><a href="reglink.html">Register</a></p>
			   </div>
			   </div>
			
			<div id="menu">
			     <ul>
				  
				 <li><a href="#">HOME</a></li>
				<li><a href="#">ABOUT US</a></li>
				<li><a href="#">RATE CARD</a></li>
				<li><a href="#">CONTACT US</a></li>
				<li><a href="#">SERVICE</a></li>
					
				</ul>
				</div>
			<div id="outerbox">
				<img src="new-cloth.jpg" height="400" width="100%"/>
				</div>
				
			<div id="middle">
			        <p>How Its Work!!</p>
					
			</div>
			<div id="middleimg">
			        <img src="works1.png" height="400" width="100%"/>
			</div>
			<div id="chart">
			     <div id="chartname">
			          <h4>RATE CHART</h4>
			     </div>
			     <div id="chart1">
			            <p>Washing Without Iron</p>
			        <table >
			            <tr>
			            <th>KG</th>
			            <th>Rs In KG</th>
			            </tr>
				<div id="t01">		
			   <tr>
			   <td>0-2kg</td><td>&#8377 89</td>
			   </tr>
			   <tr>
			   <td>2-4kg</td><td>&#8377 180</td>
			   </tr>
			   <tr>
			   <td>4-6kg</td><td>&#8377 270</td>
			   </tr>
			   <tr>
			   <td>6-8kg</td><td>&#8377 360</td>
			   </tr>
			   </div>
			   </table>
			   </div>
			    
				<div id="chart2">
			   <p>Washing And Iron</p>
			   <table >
			   <tr>
			   <th>KG</th>
			   <th>Rs In KG</th>
			   </tr>
			   <div id="t01">
			   <tr>
			   
			   <td>0-2kg</td><td>&#8377 109</td>
			   </tr>
			   <tr>
			   <td>2-4kg</td><td>&#8377 218</td>
			   </tr>
			   <tr>
			   <td>4-6kg</td><td>&#8377 326</td>
			   </tr>
			   <tr>
			   <td>6-8kg</td><td>&#8377 434</td>
			   </tr>
			   </div>
			   </table>
			   </div>
			</div>
			<div id="footer">
			    <p>thid</p>
			</div>	
			
		</body>
      </html>
	 <?php
    }
  }
  else
   {
       //enter the page for display wrong details
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
				  
				 <li><a href="#">HOME</a></li>
				<li><a href="#">ABOUT US</a></li>
				<li><a href="#">RATE CARD</a></li>
				<li><a href="#">CONTACT US</a></li>
				<li><a href="#">SERVICE</a></li>
					
				</ul>
				</div>
		<div id="middle123">
		        <p color="red">*please enter correct details</p>
              <form action="signinPP.php" method="post">
                 EMAIL:<input type="text" name="email" ><br>
				 PASS:<input type="text" name="password" ><br>
				 <input type="submit" value="signin"/>
			  </form>
       </body>
</html>
  <?php
   }
?>   