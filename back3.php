<?php
	$chk =0;
	$fchk=0;
	if(isset($_POST['name']) and isset($_POST['block']) and isset($_POST['floor']) and isset($_POST['room']) ){
		$name = $_POST['name'];
		$block = $_POST['block'];
		$floor = $_POST['floor'];
		$room = $_POST['room']; 
		$user_name="root";
		$servername="localhost";
		$password = "";
		$dbname="ishar1";
		$conn = mysqli_connect($servername,$user_name,$password,$dbname);
		if(!$conn){
			die("Error1 ". mysqli_connect_error($conn));
		}
		else{
			$sql = "UPDATE details_stud_final1 
			SET block='$block',floor ='$floor',room='$room'
			WHERE name='$name'";
			if(mysqli_query($conn,$sql)){
				$chk =1;
				//echo $_POST['name'],$_POST['block'],$_POST['floor'],$_POST['room'] ;
			}
			else{
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
		}

	}
	if(isset($_POST['name']) and isset($_POST['block']) and isset($_POST['floor']) and isset($_POST['room']) and $chk ==1 ){
		$user_name="root";
		$servername="localhost";
		$password = "";
		$dbname="ishar1";
		$conn = mysqli_connect($servername,$user_name,$password,$dbname);
		if(!$conn){
			die("Error1 ". mysqli_connect_error($conn));
		}
		else{
			$sql = "select * from details_stud_final1 
			WHERE name='$name'";
			$result =mysqli_query($conn,$sql);
			if($result->num_rows > 0){
				$row = $result->fetch_assoc();
				//echo $row['name'],$row['fname'];
				$name =$row['name'];
				$fname=$row['fname'];
				$mname=$row['mname'];
				$age=$row['age'];
				$dob=$row['dob'];
				$emailid=$row['emailid'];
				$phone=$row['phone'];
				$pphone=$row['pphone'];
				$sem=$row['sem'];
				$branch=$row['branch'];
				$address=$row['address'];
				$lgname=$row['lgname'];
				$lgage=$row['lgage'];
				$lgdob=$row['lgdob'];
				$lgphone=$row['lgphone'];
				$lgaddress=$row['lgaddress'];
				$fchk = 1;
			}
			else{
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
		}
	}

?>
<html>
<head>
	<title>REGISTER</title>
	<style type="text/css">
		body{
			margin:0px;
			padding:0px;
		}
		#ss{
			height: 50px;
			color: #202123;
		}
		.fa {
    		padding: 10px;
    		font-size: 30px;
    		width: 30px;
    		text-align: center;
    		text-decoration: none;

		}


		.fa:hover {
    		opacity: 0.7;
		}


		.fa-facebook {
    	background: #3B5998;
    	color: white;
		}


		.fa-twitter {
    	background: #55ACEE;
    	color: white;
		}
		.fa-linkedin {
  		background: #007bb5;
  		color: white;
		}

		.fa-youtube {
  		background: #bb0000;
  		color: white;
		}

		.fa-instagram {
  		background: #125688;
  		color: white;
		}
		#social{
			float: right;
		
		}
		#searchbar{
			float: left;
		}
		.searchelem{
			overflow: hidden; /*Important*/
			background-color: #202123;
			height: 50px;
		}
		.searchelem a {
			height:50px;
    		float: left;
    		display: block;
    		color: white;
    		text-align: center;
    		padding: 14px 16px;
    		text-decoration: none;
    		font-size: 22px;
    		font-family:Agency FB;
		}
		#searchbar a:hover{
			background-color: #ddd;
			color: black;
		}
		#searchbar a.active{
			background-color: #fc3807;
			color: white;
		}
		.searchelem input[type=text] {
    		float: right;
    		padding: 6px;
    		border: none;
    		margin-top: 8px;
    		margin-right: 16px;
    		margin-left:10px;
    		font-size: 17px;
		}
		#header1{
			height:160px;
			background-color: white;
			text-align: center;
			font-family: Agency FB;
			font-size:100px;
			padding-top: 20px;
		}
		#mainform{
			height: 1800px;
			background-color: white;
			color: white;
			font-size: 40px;
			font-family: Agency FB;
		}
		#tabledt{
			border:2px solid grey;
			margin-left: 20%;
			font-size: 30px;
			width: 800px;
		}
		#payment{
			height: 60px;
			border-radius: 10px;
			width: 120px;
			font-family: Agency FB;
			font-size: 20px;
			color: white;
			background-color: black;
		}
		#editbt{
			height: 60px;
			border-radius: 10px;
			width: 80px;
			font-family: Agency FB;
			font-size: 20px;
			color: white;
			background-color: black;
		}
		#payment:hover{
			color: yellow;
		}
		#editbt:hover{
			color: yellow;
		}
	</style>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
		<div id ="ss" style="background-color: #202123">
				<div id = "social" >	
					<a href="#" class="fa fa-facebook"></a>
					<a href="#" class="fa fa-twitter"></a>
					<a href="#" class="fa fa-linkedin"></a>
					<a href="#" class="fa fa-youtube"></a>
					<a href="#" class="fa fa-instagram"></a>
				</div>
				<div id = "searchbar"class="searchelem"  >
  					<a class="active" href="main.html">Home</a>
  					<a href="#about">About</a>
  					<a href="#contact">Contact</a>
 			 		<input type="text" placeholder="Search..">
				</div>

		</div>
	<div id="header1">
			VERIFY
	</div>
	<hr style="height: 2px; background-color: #777;">
	<br>
	<div id="mainform">
		<table id="tabledt" >
			<tr align="center">
				<th>
					FIELD
				</th>
				<th>
					DETAILS
				</th>
			</tr>

			<tr align="center">
				<td>
					Name
				</td>
				<?php 
					if($fchk == 1){

						echo "<td> $name </td>";
					}
				 ?>
			</tr>
			<tr align="center">
				<td>
					Father's Name
				</td>
				<?php 
					if($fchk == 1){

						echo "<td> $fname </td>";
					}
				 ?>
			</tr>
			<tr align="center">
				<td>
					Mother's Name
				</td>
				<?php 
					if($fchk == 1){

						echo "<td> $mname </td>";
					}
				 ?>
			</tr>
			<tr align="center">
				<td>
					Age
				</td>
				<?php 
					if($fchk == 1){

						echo "<td> $age </td>";
					}
				 ?>
			</tr>
			<tr align="center">
				<td>
					Date of Birth
				</td>
				<?php 
					if($fchk == 1){

						echo "<td> $dob </td>";
					}
				 ?>
			</tr>
			<tr align="center">
				<td>
					Email id
				</td>
				<?php 
					if($fchk == 1){

						echo "<td> $emailid </td>";
					}
				 ?>
			</tr>
			<tr align="center">
				<td>
					Phone Number
				</td>
				<?php 
					if($fchk == 1){

						echo "<td> $phone </td>";
					}
				 ?>
			</tr>
			<tr align="center">
				<td>
					Parent's Phone Number
				</td>
				<?php 
					if($fchk == 1){

						echo "<td> $pphone </td>";
					}
				 ?>
			</tr>
			<tr align="center">
				<td>
					Semester
				</td>
				<?php 
					if($fchk == 1){

						echo "<td> $sem </td>";
					}
				 ?>
			</tr>
			<tr align="center">
				<td>
					Branch
				</td>
				<?php 
					if($fchk == 1){

						echo "<td> $branch </td>";
					}
				 ?>
			</tr>
			<tr align="center">
				<td>
					Address
				</td>
				<?php 
					if($fchk == 1){

						echo "<td> $address </td>";
					}
				 ?>
			</tr>
			<tr align="center">
				<td>
					LG Name
				</td>
				<?php 
					if($fchk == 1){

						echo "<td> $lgname </td>";
					}
				 ?>
			</tr>
			<tr align="center">
				<td>
					LG Age
				</td>
				<?php 
					if($fchk == 1){

						echo "<td> $lgage </td>";
					}
				 ?>
			</tr>
			<tr align="center">
				<td>
					LG Date of Birth
				</td>
				<?php 
					if($fchk == 1){

						echo "<td> $lgdob </td>";
					}
				 ?>
			</tr>
			<tr align="center">
				<td>
					LG Address
				</td>
				<?php 
					if($fchk == 1){

						echo "<td> $lgaddress </td>";
					}
				 ?>
			</tr>
			<tr align="center">
				<td>
					Block
				</td>
				<?php 
					if($fchk == 1){

						echo "<td> $block </td>";
					}
				 ?>
			</tr>
			<tr align="center">
				<td>
					Floor Number
				</td>
				<?php 
					if($fchk == 1){

						echo "<td> $floor </td>";
					}
				 ?>
			</tr>
			<tr align="center">
				<td>
					Room Number
				</td>
				<?php 
					if($fchk == 1){

						echo "<td> $room </td>";
					}
				 ?>
			</tr>
		</table>
		<br>
		<a href="bhak.html" style="display: inline-block;margin-left: 35%;">
			<input type="button" id="payment" value="Move to Payment">
		</a>
		<a href="register.php" style="display: inline-block;margin-left:17%;">
			<input type="button" id="editbt" value="Edit">
		</a>
	</div>
	
</body>
</html>