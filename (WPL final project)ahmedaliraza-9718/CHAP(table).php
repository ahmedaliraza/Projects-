<!DOCTYPE html>
<html>
<head>
	<title>C#@P-PAK(table)</title>
	<meta charset="utf-8">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>

$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel101").slideToggle("slow");
        
    });
});

</script>
</head>
<style>
#flip, #panel{
    padding: 5px;
    text-align:center;
    background-color: #e5eecc;
    border: solid 10px #c3c3c3;
}

#panel{
    padding: 50px;
    display:none;
}
body{
	margin:0; 
	padding: 0;
	background:#ccc; 
}

li{
	list-style: ;
}
header{
    border: solid 10px #c3c3c3;
	background: darkgrey;
}
.navigation{
 background:lightgrey;
 }
.navigation li{
	padding: 55px 35px; 
	font-size: 20px;
	list-style: none;
}
.navigation li a{
	text-transform: uppercase; 	
	color:black;
	border-style:solid dotted;
background-color:lightpink ;
}
.logo{
width:275px;
	}
.banner img{
	width:100%;

}
.banner{
	overflow: hidden;
	height: 300px;
}
footer{
  list-style:none;
	line-height:10px;
	color: white;
	font-size: 20px;
	background:#555555;
}
footer li a{

color: black;
}

</style> 
<body>
<header>
	<div class="container">
		<div class="row">
			<div class="logo col-md-3">
				<img src="CHP.jpg" width="150" height="150" align="left">
			</div>
			<div class="nav navbar col-md-9">
				<nav align="center">
					<ul class="navbar-nav navigation  pull-right">
						<li><a href="Home.html">Home</a></li>
						<li><a href="About.html">About</a></li>
						<li><a href="radiation.html" href="chemotherapy.html" href="cyberknife.html">Cancers Treatments</a></li>
						<li><a href="TOC.html">TOC</a></li>

					</ul>

				</nav>
			</div>
		</div>
	</div>
      </header>
      <hr>
			<div id="flip" class="row col-md-12 banner" style="display: ruby-base; align-content: center;>

<img class="mySlides src="https://c.tribune.com.pk/2011/06/Institutue-of-Medical-science-PHOTO-FILE-189544-191243-640x480.jpg" width="1350px" height="500px">
<img class="mySlides" src="https://d1aueex22ha5si.cloudfront.net/Conference/824/Highlight/Cancer%20Ribbons%201-1533036539106.jpg" width="1350px" height="300px">

<img class="mySlides" src="https://www.shifa.com.pk/images/banner/banner1.jpg" width="1350px" height="300px">


<img class="mySlides" src="http://i.dawn.com/primary/2015/10/560d5b6aeb2f7.jpg?r=991219237" width="1350px" height="300px" >

<img class="mySlides" src="https://c.tribune.com.pk/2016/07/1149234-image-1469471315-335-640x480.JPG" width="1350px" height="300px" >

<img class="mySlides" src="https://lh3.googleusercontent.com/bLQnRuwVqgLcpnTuJHNTHbtmg1yVuvyCRMicrQ1u0Ydt-hz5gsGX0p6MrWxZ6Pu6F2c
" width="1350px" height="300px" >
<img class="mySlides" src="http://www.cpwsgujranwala.com/front7.jpg" width="1350px" height="300px">

<img class="mySlides" src="http://www.lnh.edu.pk/images/Logo_Slides.jpg
" width="1350px" height="300px" >
<img class="mySlides" src="https://www.thenews.com.pk/assets/uploads/akhbar/2017-12-30/l_262257_072316_updates.jpg" width="1350px" height="300px">
<img class="mySlides" src="https://www.pancare.org.au/wp-content/uploads/2016/08/Coping-with-Chemotherapy-Pancare.jpg
" width="1350px" height="300px">
<img class="mySlides" src="https://comps.canstockphoto.com/radiation-therapy-background-concept-clipart_csp6894881.jpg" width="1350px" height="300px" >
<img class="mySlides" src="http://www.pvhomed.com/wp-content/uploads/2015/09/pvhomed-phoenix-cyberknife.jpg
" width="1350px" height="300px" >
</div>
      <hr>
        <form id="panel101" method="post" action="server1.php" align="center">
        <!-- 	      <input type="text" name="search" placeholder="search here"></input>
	<input type="submit" name="search" value=">>">
 -->
<table  align="center" border="5px" style="width: 1000px">
		<tr><th colspan="6"><h1 align="center">C#@P(PAK)</h1></th>
			<tr>
			<td><b>First-name:</b></td>
			<td><b>Typeofcancer:</b></td>
			<td><b>Stage:</b></td>
     		<td><b>Age:</b></td>
			<td><b>City:</b></td>
			<td><b>Email:</b></td>
		</tr>	
			<tr>
			<td>ahmed</td>
			<td>lymphoma(Non-Hodgkin's)</td>
			<td>2</td>
     		<td>22</td>
			<td>KARACHI</td>
			<td>iuammu22@gmail.com</td>
		</tr>
			<tr>
			<td>anis</td>
			<td>Pancreatic cancer</td>
     		<td>3</td>
			<td>54</td>
			<td>KARACHI</td>
			<td>anishasan29@gmail.com</td>
		</tr>
			<tr>
			<td>chaudry</td>
			<td>Neck cancer(Head and neck cancer)</td>
     		<td>1</td>
			<td>55</td>
			<td>LAHORE</td>
			<td>Ciqbal@393@gmail.com</td>
		</tr>
			<tr>
			<td>zafar</td>
			<td>Brain cancer</td>
     		<td>4</td>
			<td>34</td>
			<td>PESHAWAR</td>
			<td>gharZ@gmail.com</td>
		</tr>
			<tr>
			<td>dildar</td>
			<td>Kidney cancer</td>
     		<td>3</td>
			<td>38</td>
			<td>QUETTA</td>
			<td>dildarkhn123@gmail.com</td>
		</tr>
			<tr>
	<!-- 		<td>jamal</td>
			<td>kamal</td>
     		<td>44</td>
			<td>SINDH</td>
			<td>KARACHI</td>
			<td>Blood cancer</td>
	 -->	</tr>
			<tr>
<!-- 			<td>komal</td>
			<td>rizwan</td>
     		<td>43</td>
			<td>AZAD-KASHMIR</td>
			<td>MUZAFFARABAD</td>
			<td>Throat cancer</td>
 -->		</tr>
 			<tr>
 			<td>wazir</td>
			<td>Throat cancer</td>
     		<td>4</td>
			<td>60</td>
			<td>KARACHI</td>
			<td>whasan16@gmil.com</td>
		</tr>
		 			<tr>
 			<td>marina</td>
			<td>Acute granulocytic leukemia (Leukemia)</td>
     		<td>2</td>
			<td>34</td>
			<td>KARACHI</td>
			<td>marinah@gmail.com</td>
		</tr>


</table>
      </form>
 <hr>
	<footer>
		<nav>

<div class="text-center"> 
<ul class="text-left">
<img src="CHP.jpg" width="100" height="100" align="right">
<li><a href="Home.html"> Home</a></li><br>
<li><a href="About.html"> About</a></li><br>
<li><a href="Home.html"> Cancers Treatment</a></li><br>
<li><a href="radiation(side-effects).html" href="chemo(side-effects).html" href="cyberknife.html"> Side-Effects</a></li><br>
<li><a href="index.php" style="border: dashed;color:gold">Share your Experience</a><br></li>

</ul>

<hr>
@Copyright 2018.
  -All Rights Reserved by C#@P-PAK.. 
</div>
</nav></footer>
</body>
</html>
<script>
		var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>