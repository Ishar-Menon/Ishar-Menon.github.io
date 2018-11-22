<?php
	$user_name = "root";
	$password="";
	$servername="localhost";
	$database ="ishar1";
	$temp=0;
	$loc=0;
	if(isset($_POST['name'])){
	$temp = 1;
	$name =$_POST['name'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$age=$_POST['age'];
	$dob=$_POST['dob'];
	$emailid=$_POST['emailid'];
	$phone=$_POST['phone'];
	$pphone=$_POST['pphone'];
	$sem=$_POST['sem'];
	$branch=$_POST['branch'];
	$address=$_POST['address'];
	$lgname=$_POST['lgname'];
	$lgage=$_POST['lgage'];
	$lgdob=$_POST['lgdob'];
	$lgphone=$_POST['lgphone'];
	$lgaddress=$_POST['lgaddress'];
	$conn = mysqli_connect($servername,$user_name,$password,$database);
	if(!$conn){
		die("connection failed: " . mysqli_connect_error());
	}
	else{
		if($name != NULL){
				$sql = "INSERT INTO details_stud_final1(name,fname,mname,age,dob,emailid,phone,pphone,sem ,branch,address,lgname,lgage,lgdob,lgphone,lgaddress)VALUES('$name','$fname','$mname','$age','$dob','$emailid','$phone','$pphone','$sem','$branch','$address','$lgname','$lgage','$lgdob','$lgphone','$lgaddress')";
				
				if(!mysqli_query($conn,$sql)){
					header("Location: test2.php");
					}
				else{
					//header("Location: roomselect.php");
					$loc=1;


				}	
				
			}		
	}
	}
	
?>
<script type="text/javascript">
	var check = <?php echo $temp ?>;
	var name = "<?php echo $name ?>";
	var loc =<?php echo $loc ?>;
	if(check){
		localStorage.setItem("name",name);
		if(loc){
			location.href = 'roomselect.php';
		}
	}
	else{
		alert("no");
	}
</script>
<?php
	
	
?>