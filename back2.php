<?php
	$user_name="root";
	$servername="localhost";
	$password = "";
	$dbname="ishar1";
	$conn = mysqli_connect($servername,$user_name,$password,$dbname);
	if(!$conn){
		die("Error1 ". mysqli_connect_error($conn));
	}
	else{
		$sql = "CREATE TABLE details_stud_final1(name VARCHAR(30),fname VARCHAR(30),mname VARCHAR(30),age INT(5),dob DATE,emailid VARCHAR(50),phone INT(20),pphone INT(20),sem INT(2),branch VARCHAR(10),
				address VARCHAR(200),lgname VARCHAR(30),lgage INT(5),lgdob DATE,lgphone INT(20),lgaddress VARCHAR(200),block VARCHAR(20),floor INT(5),room INT(10))";
		if(mysqli_query($conn,$sql)){
			echo "success table created";
		}
		else{
			echo "Error2 ".mysqli_error($conn);
		}		
	}
?>