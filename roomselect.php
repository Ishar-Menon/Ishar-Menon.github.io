<html>
<head>
	<title>ROOMSELECT</title>
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
			height:140px;
			background-color: white;
			text-align: center;
			font-family: Agency FB;
			font-size:100px;
			padding-top: 20px;
		}
		#selectroom{
			height: 1000px;
			background-color:#202123; 
			font-family: Agency FB;
		}
		#block{
			height:400px;
			width:70%;
			background-color: #202123;
			margin-top: 0px;
			margin-left: 15%;
		}
		#first{
			height: 49.84%;
			width: 49.84%;
			background-color: white;
			border-right: 3px grey solid;
			border-bottom: 3px grey solid;
			float: left; 
		}
		#second{
			height: 49.84%;
			width: 49.84%;
			background-color: white;
			border-bottom: 3px grey solid;
			float: left;
		}
		#third{
			height: 49.84%;
			width: 49.84%;
			background-color: white;
			border-right: 3px grey solid;
			float: left;
		}
		#fourth{
			height:49.84%;
			width: 49.84%;
			background-color: white;
			float: left;
		}
		.tblock1{
			height: 50%;
			width: 49.84%;
			background-color: white;
			border-right: 3px grey solid;
			float: left;
		}
		.tblock2{
			height:50%;
			width: 49.84%;
			background-color: white;
			float: left;
		}
		#block div:hover{
			opacity: 0.8;
		}
		#floorselect{
			margin-left :20px;height: 40px;border-radius: 10px;width: 200px;font-size: 25px;
			position: relative;
			top:-10px;
		}
		#roomselect{
			margin-left :30px;height: 40px;border-radius: 10px;width: 200px;font-size: 25px;
			position: relative;
			top:-10px;
		}
		#submitbt{
			margin-left: 600px;
			height: 60px;
			border-radius: 10px;
			width: 80px;
			font-family: Agency FB;
			font-size: 30px;
			color: black;
			background-color: white;
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
			ROOM PREFERENCE
	</div>
	<div id="selectroom">
		<br>
		<h1 style="color: white; margin-left: 15%;font-size: 50px;margin-bottom: 10px;">BLOCK :</h1>
		<div id="block">
			<div id="first">
					<h1 align="center" style="margin-top: 80px;">NEW BLOCK</h1>
					<h2 align="center">3 SHARING</h2>
			</div>
			<div id="second">
					<h1 align="center" style="margin-top: 80px;">IH BLOCK</h1>
					<h2 align="center">SINGLE ROOM</h2>
			</div>
			<div id="third">
					<h1 align="center" style="margin-top: 80px;">MM BLOCK</h1>
					<h2 align="center">2 SHARING</h2>
			</div>
			<div id="fourth">
					<h1 align="center" style="margin-top: 80px;">IT BLOCK</h1>
					<h2 align="center">3 SHARING</h2>
			</div>
		</div>
		<br>
		<div id="floor">
			<h1 style="color: white; margin-left: 15%;font-size: 50px;margin-bottom: 10px;display: inline-block;">CHOOSE THE PREFERRED FLOOR :</h1>
			<select id="floorselect" onchange="selectfunc()"></select>
		</div>
		<div id="roomno">
			<h1 style="color: white; margin-left: 15%;font-size: 50px;margin-bottom: 10px;display: inline-block;">CHOOSE THE PREFERRED ROOM :</h1>
			<select id="roomselect" onchange="roomfunc()"></select>
		</div>
		<br>
		<form action = "back3.php" method="post">
			<input type="text" name="name" style ="display: none" id = "namebx">
			<input type="text" name="block" style ="display: none" id="blockbx" >
			<input type="text" name="floor" style ="display: none" id="floorbx">
			<input type="text" name="room" style ="display: none" id="roombx">
			<input type="submit" name="submit"  id="submitbt">
		</form>
	</div>
	<script type="text/javascript">
		var name1 = localStorage.getItem("name");
		var nmEl = document.querySelector("#namebx");
		nmEl.value = name1;
		var blockname ="";
		var check = 0;
		var divEl1 = document.querySelector("#first");
		var divEl2 = document.querySelector("#second");
		var divEl3 = document.querySelector("#third");
		var divEl4 = document.querySelector("#fourth");
		var nbEl0 = document.querySelector("#nb0");
		var nbEl1 = document.querySelector("#nb1");
		var nbEl2 = document.querySelector("#nb2");
		var nbEl3 = document.querySelector("#nb3");
		var nbEl4 = document.querySelector("#nb4");
		var nbEl5 = document.querySelector("#nb5");
		var nbEl6 = document.querySelector("#nb6");
		var nbEl7 = document.querySelector("#nb7");
		var nbEl8 = document.querySelector("#nb8");
		var flroEl =document.querySelector("#floorselect");
		var maindiv = document.querySelector("#selectroom");
		divEl1.addEventListener('click',handler1,false);
		divEl2.addEventListener('click',handler2,false);
		divEl3.addEventListener('click',handler3,false);
		divEl4.addEventListener('click',handler4,false);
		function handler1(){
			blockname = "NEW BLOCK";
			localStorage.setItem("block",blockname);
			var bkEl = document.querySelector("#blockbx");
			bkEl.value = blockname;
			divEl2.style.opacity = 1;
			divEl3.style.opacity = 1;
			divEl4.style.opacity = 1;
			divEl1.style.opacity = 0.6;
			flrEl = document.querySelector("#floorselect");
			while (flrEl.hasChildNodes()) {   
 				flrEl.removeChild(flrEl.firstChild);
			}
			optEl0 = document.createElement("option");		
			optEl1 = document.createElement("option");
			optEl2 = document.createElement("option");
			optEl3 = document.createElement("option");
			optEl4 = document.createElement("option");
			optEl5 = document.createElement("option");
			optEl6 = document.createElement("option");
			optEl7 = document.createElement("option");
			optEl8 = document.createElement("option");
			optEl9 = document.createElement("option");
			optEl0.textContent = "floor";
			optEl1.textContent = "0";
			optEl2.textContent = "1";
			optEl3.textContent = "2";
			optEl4.textContent = "3";
			optEl5.textContent = "4";
			optEl6.textContent = "5";
			optEl7.textContent = "6";
			optEl8.textContent = "7";
			optEl9.textContent = "8";
			optEl1.setAttribute("id","nb"+optEl1.textContent);
			optEl2.setAttribute("id","nb"+optEl2.textContent);
			optEl3.setAttribute("id","nb"+optEl3.textContent);
			optEl4.setAttribute("id","nb"+optEl4.textContent);
			optEl5.setAttribute("id","nb"+optEl5.textContent);
			optEl6.setAttribute("id","nb"+optEl6.textContent);
			optEl7.setAttribute("id","nb"+optEl7.textContent);
			optEl8.setAttribute("id","nb"+optEl8.textContent);
			optEl9.setAttribute("id","nb"+optEl9.textContent);
			flrEl.appendChild(optEl0);
			flrEl.appendChild(optEl1);
			flrEl.appendChild(optEl2);
			flrEl.appendChild(optEl3);
			flrEl.appendChild(optEl4);
			flrEl.appendChild(optEl5);
			flrEl.appendChild(optEl6);
			flrEl.appendChild(optEl7);
			flrEl.appendChild(optEl8);
			flrEl.appendChild(optEl9);		
		}
		function handler2(){
			blockname = "IH BLOCK";
			localStorage.setItem("block",blockname);
			var bkEl = document.querySelector("#blockbx");
			bkEl.value = blockname;
			divEl1.style.opacity = 1;
			divEl3.style.opacity = 1;
			divEl4.style.opacity = 1;
			divEl2.style.opacity = 0.6;
			flrEl = document.querySelector("#floorselect");
			while (flrEl.hasChildNodes()) {   
 				flrEl.removeChild(flrEl.firstChild);
			}
			optEl0 = document.createElement("option");
			optEl1 = document.createElement("option");
			optEl2 = document.createElement("option");
			optEl3 = document.createElement("option");
			optEl4 = document.createElement("option");
			optEl0.textContent = "floor";	
			optEl1.textContent = "1";
			optEl2.textContent = "2";
			optEl3.textContent = "3";
			optEl4.textContent = "4";
			flrEl.appendChild(optEl0);
			flrEl.appendChild(optEl1);
			flrEl.appendChild(optEl2);
			flrEl.appendChild(optEl3);
			flrEl.appendChild(optEl4);
		}
		function handler3(){
			blockname = "MM BLOCK";
			localStorage.setItem("block",blockname);
			var bkEl = document.querySelector("#blockbx");
			bkEl.value = blockname;
			divEl2.style.opacity = 1;
			divEl1.style.opacity = 1;
			divEl4.style.opacity = 1;
			divEl3.style.opacity = 0.6;
			flrEl = document.querySelector("#floorselect");
			while (flrEl.hasChildNodes()) {   
 				flrEl.removeChild(flrEl.firstChild);
			}
			optEl0 = document.createElement("option");
			optEl1 = document.createElement("option");
			optEl2 = document.createElement("option");
			optEl3 = document.createElement("option");
			optEl4 = document.createElement("option");
			optEl0.textContent = "floor";	
			optEl1.textContent = "0";
			optEl2.textContent = "1";
			optEl3.textContent = "2";
			optEl4.textContent = "3";
			flrEl.appendChild(optEl0);
			flrEl.appendChild(optEl1);
			flrEl.appendChild(optEl2);
			flrEl.appendChild(optEl3);
			flrEl.appendChild(optEl4);
		}
		function handler4(){
			blockname = "IT BLOCK";
			localStorage.setItem("block",blockname);
			var bkEl = document.querySelector("#blockbx");
			bkEl.value = blockname;
			divEl2.style.opacity = 1;
			divEl3.style.opacity = 1;
			divEl1.style.opacity = 1;
			divEl4.style.opacity = 0.6;
			flrEl = document.querySelector("#floorselect");
			while (flrEl.hasChildNodes()) {   
 				flrEl.removeChild(flrEl.firstChild);
			}
			optEl0 = document.createElement("option");
			optEl1 = document.createElement("option");
			optEl2 = document.createElement("option");
			optEl3 = document.createElement("option");
			optEl0.textContent = "floor";
			optEl1.textContent = "0";
			optEl2.textContent = "1";
			optEl3.textContent = "2";
			flrEl.appendChild(optEl0);
			flrEl.appendChild(optEl1);
			flrEl.appendChild(optEl2);
			flrEl.appendChild(optEl3);
		}
		function selectfunc(){
			var floorno = document.querySelector("#floorselect").value;
			localStorage.setItem("floor",floorno);
			var floorEl = document.querySelector("#floorbx");
			floorEl.value = floorno;
			var blk_name="";
			blk_name =localStorage.getItem("block");
			if(blk_name != ""){
				flrEl = document.querySelector("#roomselect");
				while (flrEl.hasChildNodes()) {   
 					flrEl.removeChild(flrEl.firstChild);
				}
				optEl0 = document.createElement("option");		
				optEl1 = document.createElement("option");
				optEl2 = document.createElement("option");
				optEl3 = document.createElement("option");
				optEl4 = document.createElement("option");
				optEl5 = document.createElement("option");
				optEl6 = document.createElement("option");
				optEl7 = document.createElement("option");
				optEl8 = document.createElement("option");
				optEl9 = document.createElement("option");
				optEl10 = document.createElement("option");
				optEl0.textContent = "roomno";
				optEl1.textContent = floorno + "01";
				optEl2.textContent = floorno + "02";
				optEl3.textContent = floorno + "03";
				optEl4.textContent = floorno + "04";
				optEl5.textContent = floorno + "05";
				optEl6.textContent = floorno + "06";
				optEl7.textContent = floorno + "07";
				optEl8.textContent = floorno + "08";
				optEl9.textContent = floorno + "09";
				optEl10.textContent = floorno + "10";
				flrEl.appendChild(optEl0);
				flrEl.appendChild(optEl1);
				flrEl.appendChild(optEl2);
				flrEl.appendChild(optEl3);
				flrEl.appendChild(optEl4);
				flrEl.appendChild(optEl5);
				flrEl.appendChild(optEl6);
				flrEl.appendChild(optEl7);
				flrEl.appendChild(optEl8);
				flrEl.appendChild(optEl9);
				flrEl.appendChild(optEl10);
			}
		}
		function roomfunc(){
				var roomno = document.querySelector("#roomselect").value;
				localStorage.setItem("room",roomno);
				var roomEl = document.querySelector("#roombx");
				roomEl.value = roomno;
		}

	</script>
</body>
</html>