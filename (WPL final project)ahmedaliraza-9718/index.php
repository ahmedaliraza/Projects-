<? php  include('server.php');
include();

?>
<!doctype html>

<html>

<head>



<title>C#@P-PAK(Form)</title>
<meta charset="utf-8">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>

$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel100").slideToggle("slow");
        
    });
});

</script>
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
	background:#FF1493;
}
.navigation{
 background:lightpink;
 }
.navigation li{
	padding: 55px 35px; 
	font-size: 20px;
	list-style: none;
}
.navigation li a{
	text-transform: uppercase; 	
	color:black;
	border-style: solid dotted;
background-color:#C0C0C0 ;
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
	background: #FF1493;
}
footer li a{

color: black;
}
form{
width:70% ;
margin:50px auto ;
text-align:left ;
padding:100px ;
border:1px solid #123 ;
border-radius:5px ;
background-color: darkgrey;	
color:black;
}
.input-panel{
margin: 10px 0px 10px 0px;
}
.input-panel label{
display: block;
text-align:left;
margin: 3px;
}

.input-panel input{
height:30px ;
width:93% ;
padding:5px 10px ;
font-size:16px ;
border-radius:5px ;
border:5px solid grey;

}
</style> 
</head>
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
</div>


</header>
<hr>
<div id="flip"><h2>Share Your Experience:</h2></div>
      <hr>
<!-- 			<div class="row col-md-12 banner" style="display: ruby-base; align-content: center;>

<img class="mySlides" src="https://c.tribune.com.pk/2011/06/Institutue-of-Medical-science-PHOTO-FILE-189544-191243-640x480.jpg" width="1350px" height="500px">
<img class="mySlides" src="https://d1aueex22ha5si.cloudfront.net/Conference/824/Highlight/Cancer%20Ribbons%201-1533036539106.jpg" width="1350px" height="300px">
<img class="mySlides" src="http://www.cpwsgujranwala.com/front7.jpg" width="1350px" height="300px">

<img class="mySlides" src="https://www.shifa.com.pk/ip-files/sih-dubai.jpg" width="1350px" height="300px">


<img class="mySlides" src="http://i.dawn.com/primary/2015/10/560d5b6aeb2f7.jpg?r=991219237" width="1350px" height="300px" >

<img class="mySlides" src="https://c.tribune.com.pk/2016/07/1149234-image-1469471315-335-640x480.JPG" width="1350px" height="300px" >

<img class="mySlides" src="https://lh3.googleusercontent.com/bLQnRuwVqgLcpnTuJHNTHbtmg1yVuvyCRMicrQ1u0Ydt-hz5gsGX0p6MrWxZ6Pu6F2c
" width="1350px" height="300px" >

<img class="mySlides" src="http://www.lnh.edu.pk/images/Logo_Slides.jpg
" width="1350px" height="300px" >
<img class="mySlides" src="https://www.thenews.com.pk/assets/uploads/akhbar/2017-12-30/l_262257_072316_updates.jpg" width="1350px" height="300px">
<img class="mySlides" src="https://www.pancare.org.au/wp-content/uploads/2016/08/Coping-with-Chemotherapy-Pancare.jpg
" width="1350px" height="300px">
<img class="mySlides" src="https://comps.canstockphoto.com/radiation-therapy-background-concept-clipart_csp6894881.jpg" width="1350px" height="300px" >
<img class="mySlides" src="http://www.pvhomed.com/wp-content/uploads/2015/09/pvhomed-phoenix-cyberknife.jpg
" width="1350px" height="300px" >
</div>
 -->      <hr>
<form id="panel100" method="post" action="server.php" align="center">
	<h2 align="center" style="background-color:#FF1493;border: double; "><b>Register Form:</b></h2>
	<hr>
	<div class="input_panel"><label>First-name:</label>
<input type="text" name="fname" required="" placeholder="Enter First-name">		
	</div>
	
	<div class="input_panel"><label>Last-name:</label>
<input type="text" name="lname" required="" placeholder="Enter Last-name">		
	</div>
	
	<div class="input_panel"><label>Age:</label>
    <input type="number" name="Age" required="" placeholder="Enter Age">		
	</div>
	

	     <div class="input_panel"><label>Province:</label>
         <select id="Province" name="Province" required="">
         <option value="--">--</option>
         <option value="SINDH">SINDH</option>
         <option value="PUNJAB">PUNJAB</option>
         <option value="KPK">KPK</option>
         <option value="BALOCHISTAN">BALOCHISTAN</option> 
         <option value="GILGIT-BALTISTAN">GILGIT-BALTISTAN</option> 
         <option value="AZAD-KASHMIR">AZAD-KASHMIR</option>
         <option value="FATA">FATA</option>
         </select>
        </div>

	  <div class="input_panel"><label>City:</label>
      <select id="City" name="City" required="">
      <option value="--">--</option>
      <option value="KARACHI">KARACHI</option>
      <option value="LAHORE">LAHORE</option>
      <option value="PESHAWAR">PESHAWAR</option>
      <option value="Balochistan">RAWALPINDI</option> 
      <option value="QUETTA">QUETTA</option> 
      <option value="MUZAFFARABAD">MUZAFFARABAD</option>
      <option value="FATA">FATA</option>
  </select>

	</div>

	<div class="input_panel"><label>TypeofCancer:</label>
    <select id="country" name="TypeofCancer">
      <option value="--">--</option>
      <option value="Acute granulocytic leukemia (Leukemia)">Acute granulocytic leukemia (Leukemia)</option>
      <option value="Acute lymphocytic leukemia (ALL) (Leukemia)">Acute lymphocytic leukemia (ALL) (Leukemia)</option>
      <option value="Acute myelogenous leukemia (AML) (Leukemia)">Acute myelogenous leukemia (AML) (Leukemia)</option>
      <option value="Adenocarcinoma (Lung cancer)">Adenocarcinoma (Lung cancer)</option> 
      <option value="Adrenal cancer">Adrenal cancer</option> 
      <option value="Adrenocortical carcinoma (Adrenal cancer)">Adrenocortical carcinoma (Adrenal cancer)</option>
      <option value="Anal cancer">Anal cancer</option>
      <option value="Anaplastic astrocytoma (Brain cancer)">Anaplastic astrocytoma (Brain cancer)</option>
      <option value="Angiosarcoma (Soft tissue sarcoma)">Angiosarcoma (Soft tissue sarcoma)</option>
      <option value="Appendix cancer">Appendix cancer</option> 
      <option value="Astrocytoma (Brain cancer)">Astrocytoma (Brain cancer)</option>
      <option value="Basal cell carcinoma (Skin cancer)">Basal cell carcinoma (Skin cancer)</option>
      <option value="B-Cell lymphoma (Non-Hodgkin lymphoma)">B-Cell lymphoma (Non-Hodgkin lymphoma)</option>
      <option value="Bile duct cancer">Bile duct cancer</option>
      <option value="Bladder cancer">Bladder cancer</option>
      <option value="Bone cancer">Bone cancer</option>
      <option value="Bone marrow cancer (Multiple myeloma)">Bone marrow cancer (Multiple myeloma)</option>
      <option value="Bowel cancer (Colorectal cancer)">Bowel cancer (Colorectal cancer)</option>
      <option value="Brain cancer">Brain cancer</option>
      <option value="Brain stem glioma (Brain cancer)">Brain stem glioma (Brain cancer)</option>
      <option value="Brain tumor (Brain cancer)">Brain tumor (Brain cancer)</option> 
      <option value="Breast cancer">Breast cancer</option> 
      <option value="Carcinoid tumors (Stomach cancer)">Carcinoid tumors (Stomach cancer)</option>
      <option value="Cervical cancer">Cervical cancer</option>
      <option value="Cholangiocarcinoma (Bile duct cancer)">Cholangiocarcinoma (Bile duct cancer)</option>
      <option value="Chondrosarcoma (Bone cancer)">Chondrosarcoma (Bone cancer)</option>
      <option value="Chronic lymphocytic leukemia (CLL) (Leukemia)">Chronic lymphocytic leukemia (CLL) (Leukemia)</option>
      <option value="Chronic myelogenous leukemia (CML) (Leukemia)">Chronic myelogenous leukemia (CML) (Leukemia)</option>
      <option value="Colon cancer (Colorectal cancer)">Colon cancer (Colorectal cancer)</option>
      <option value="Colorectal cancer">Colorectal cancer</option>
      <option value="Craniopharyngioma (Brain cancer)">Craniopharyngioma (Brain cancer)</option>
      <option value="Cutaneous lymphoma (Skin cancer)">Cutaneous lymphoma (Skin cancer)</option>
      <option value="Cutaneous melanoma (Melanoma)">Cutaneous melanoma (Melanoma)</option>
      <option value="Diffuse astrocytoma (Brain cancer)">Diffuse astrocytoma (Brain cancer)</option>
      <option value="Ductal carcinoma in situ (DCIS) (Breast cancer)">Ductal carcinoma in situ (DCIS) (Breast cancer)</option>
      <option value="Endometrial cancer (Uterine cancer)">Endometrial cancer (Uterine cancer)</option>
      <option value="Ependymoma (Brain cancer)">Ependymoma (Brain cancer)</option>
      <option value="Epithelioid sarcoma (Soft tissue sarcoma)">Epithelioid sarcoma (Soft tissue sarcoma)</option>
      <option value="Esophageal cancer">Esophageal cancer</option>
      <option value="Ewing sarcoma (Bone cancer)">Ewing sarcoma (Bone cancer)</option>
      <option value="Extrahepatic bile duct cancer (Bile duct cancer)">Extrahepatic bile duct cancer (Bile duct cancer)</option>
      <option value="Eye cancer">Eye cancer</option>
      <option value="Fallopian tube cancer (Ovarian cancer)">Fallopian tube cancer (Ovarian cancer)</option>
      <option value="Fibrosarcoma (Soft tissue sarcoma)">Fibrosarcoma (Soft tissue sarcoma)</option>
      <option value="Gallbladder cancer">Gallbladder cancer</option>
      <option value="Gastric cancer (Stomach cancer)">Gastric cancer (Stomach cancer)</option>
      <option value="Gastrointestinal cancer">Gastrointestinal cancer</option>
      <option value="Gastrointestinal carcinoid cancer">Gastrointestinal carcinoid cancer</option>
      <option value="Gastrointestinal stromal tumors (GIST)">Gastrointestinal stromal tumors (GIST)</option>
      <option value="Germ cell tumor (Brain cancer)">Germ cell tumor (Brain cancer)</option>
      <option value="Gestational Trophoblastic Disease (GTD)">Gestational Trophoblastic Disease (GTD)</option>
      <option value="Glioblastoma multiforme (GBM) (Brain cancer)">Glioblastoma multiforme (GBM) (Brain cancer)</option>
      <option value="Glioma (Brain cancer)">Glioma (Brain cancer)</option>
      <option value="Hairy cell leukemia (Leukemia)">Hairy cell leukemia (Leukemia)</option>
      <option value="Head and neck cancer">Head and neck cancer</option>
      <option value="Hemangioendothelioma">Hemangioendothelioma</option>
      <option value="Hodgkin lymphoma">Hodgkin lymphoma</option>
      <option value="Hodgkin lymphoma (Hodgkin lymphoma )">Hodgkin lymphoma (Hodgkin lymphoma )</option>
      <option value="Hodgkin's disease (Hodgkin lymphoma )">Hodgkin's disease (Hodgkin lymphoma )</option>
      <option value="Hypopharyngeal cancer (Throat cancer)">Hypopharyngeal cancer (Throat cancer)</option>
      <option value="Infiltrating ductal carcinoma (IDC) (Breast cancer)">Infiltrating ductal carcinoma (IDC) (Breast cancer)</option>
      <option value="Infiltrating lobular carcinoma (ILC) (Breast cancer)">Infiltrating lobular carcinoma (ILC) (Breast cancer)</option>
      <option value="Inflammatory breast cancer (IBC) (Breast cancer)">Inflammatory breast cancer (IBC) (Breast cancer)</option>
      <option value="Intestinal Cancer">Intestinal Cancer</option>
      <option value="Intrahepatic bile duct cancer (Bile duct cancer)">Intrahepatic bile duct cancer (Bile duct cancer)</option>
      <option value="Invasive / infiltrating breast cancer (Breast cancer)">Invasive / infiltrating breast cancer (Breast cancer)</option>
      <option value="Islet cell cancer (Pancreatic cancer)">Islet cell cancer (Pancreatic cancer)</option>
      <option value="Jaw cancer (Oral cancer)">Jaw cancer (Oral cancer)</option>
      <option value="Kaposi sarcoma (Oral cancer)">Kaposi sarcoma (Oral cancer)</option>
      <option value="Kidney cancer">Kidney cancer</option>
      <option value="Laryngeal cancer (Throat cancer)">Laryngeal cancer (Throat cancer)</option>
      <option value="Leiomyosarcoma (Soft tissue sarcoma)">Leiomyosarcoma (Soft tissue sarcoma)</option>
      <option value="Leptomeningeal metastases">Leptomeningeal metastases</option>
      <option value="Leukemia">Leukemia</option>
      <option value="Lip cancer (Oral cancer)">Lip cancer (Oral cancer)</option>
      <option value="Liposarcoma (Soft tissue sarcoma)">Liposarcoma (Soft tissue sarcoma)</option>
      <option value="Liver cancer">Liver cancer</option>
      <option value="Lobular carcinoma in situ (Breast cancer)">Lobular carcinoma in situ (Breast cancer)</option>
      <option value="Low-grade astrocytoma (Brain cancer)">Low-grade astrocytoma (Brain cancer)</option>
      <option value="Lung cancer">Lung cancer</option>
      <option value="Lymph node cancer (Non-Hodgkin lymphoma)">Lymph node cancer (Non-Hodgkin lymphoma)</option>
      <option value="Lymphoma (Non-Hodgkin lymphoma)">Lymphoma (Non-Hodgkin lymphoma)</option>
      <option value="Male breast cancer (Breast cancer)">Male breast cancer (Breast cancer)</option>
      <option value="Medullary carcinoma (Breast cancer)">Medullary carcinoma (Breast cancer)</option>
      <option value="Medulloblastoma (Brain cancer)">Medulloblastoma (Brain cancer)</option>
      <option value="Melanoma">Melanoma</option>
      <option value="Meningioma (Brain cancer)">Meningioma (Brain cancer)</option>
      <option value="Merkel cell carcinoma (Skin cancer)">Merkel cell carcinoma (Skin cancer)</option>
      <option value="Mesenchymal chondrosarcoma (Bone cancer)">Mesenchymal chondrosarcoma (Bone cancer)</option>
      <option value="Mesenchymous">Mesenchymous</option>
      <option value="Mesothelioma">Mesothelioma</option>
      <option value="Metastatic breast cancer (Breast cancer)">Metastatic breast cancer (Breast cancer)</option>
      <option value="Metastatic melanoma (Melanoma)">Metastatic melanoma (Melanoma)</option>
      <option value="Metastatic squamous neck cancer">Metastatic squamous neck cancer</option>
      <option value="Mixed gliomas (Brain cancer)">Mixed gliomas (Brain cancer)</option>
      <option value="Mouth cancer (Oral cancer)">Mouth cancer (Oral cancer)</option>
      <option value="Mucinous carcinoma (Breast cancer)">Mucinous carcinoma (Breast cancer)</option>
      <option value="Mucosal melanoma (Oral cancer)">Mucosal melanoma (Oral cancer)</option>
      <option value="Multiple myeloma">Multiple myeloma</option>
      <option value="Mycosis Fungoides (Non-Hodgkin lymphoma)">Mycosis Fungoides (Non-Hodgkin lymphoma)</option>
      <option value="Myelodysplastic Syndrome (Leukemia)">Myelodysplastic Syndrome (Leukemia)</option>
      <option value="Nasal cavity cancer (Throat cancer)">Nasal cavity cancer (Throat cancer)</option>      
      <option value="Nasopharyngeal cancer (Throat cancer)">Nasopharyngeal cancer (Throat cancer)</option> 
      <option value="Neck cancer (Head and neck cancer)">Neck cancer (Head and neck cancer)</option> 
      <option value="Neuroblastoma">Neuroblastoma</option> 
      <option value="Neuroendocrine tumors (NETs)">Neuroendocrine tumors (NETs)</option> 
      <option value="Non-Hodgkin lymphoma">Non-Hodgkin lymphoma</option> 
      <option value="Non-Hodgkin's lymphoma (Non-Hodgkin lymphoma)">Non-Hodgkin's lymphoma (Non-Hodgkin lymphoma)</option> 
      <option value="Non-small cell lung cancer (NSCLC) (Lung cancer)">Non-small cell lung cancer (NSCLC) (Lung cancer)</option> 
      <option value="Oat cell cancer (Lung cancer)">Oat cell cancer (Lung cancer)</option> 
      <option value="Ocular cancer">Ocular cancer</option> 
      <option value="Ocular melanoma">Ocular melanoma</option>
      <option value="Oligodendroglioma (Brain cancer)">Oligodendroglioma (Brain cancer)</option>
      <option value="Oral cancer">Oral cancer</option>
      <option value="Oral cavity cancer (Oral cancer)">Oral cavity cancer (Oral cancer)</option>
      <option value="Oropharyngeal cancer (Throat cancer)">Oropharyngeal cancer (Throat cancer)</option>
      <option value="Osteogenic sarcoma (Bone cancer)">Osteogenic sarcoma (Bone cancer)</option>
      <option value="Osteosarcoma (Bone cancer)">Osteosarcoma (Bone cancer)</option>
      <option value="Ovarian cancer">Ovarian cancer</option>
      <option value="Ovarian epithelial cancer (Ovarian cancer)">Ovarian epithelial cancer (Ovarian cancer)</option>
      <option value="Ovarian germ cell tumor (Ovarian cancer)">Ovarian germ cell tumor (Ovarian cancer)</option>
      <option value="Ovarian primary peritoneal carcinoma (Ovarian cancer)">Ovarian primary peritoneal carcinoma (Ovarian cancer)</option>
      <option value="Ovarian sex cord stromal tumor (Ovarian cancer)">Ovarian sex cord stromal tumor (Ovarian cancer)</option>
      <option value="Paget's disease ( Breast cancer)">Paget's disease ( Breast cancer)</option>
      <option value="Pancreatic cancer">Pancreatic cancer</option>
      <option value="Papillary carcinoma ( Breast cancer)">Papillary carcinoma ( Breast cancer)</option>
      <option value="Paranasal sinus cancer">Paranasal sinus cancer</option>
      <option value="Parathyroid cancer ( Thyroid cancer)">Parathyroid cancer ( Thyroid cancer)</option>
      <option value="Pelvic cancer">Pelvic cancer</option>
      <option value="Penile cancer">Penile cancer</option>
<option value="Peripheral nerve cancer (Brain cancer)">Peripheral nerve cancer (Brain cancer)</option>
<option value="Peritoneal cancer (Ovarian cancer)">Peritoneal cancer (Ovarian cancer)</option>
<option value="Pharyngeal cancer ( Throat cancer)">Pharyngeal cancer ( Throat cancer)</option>
<option value="Pheochromocytoma (Adrenal cancer)">Pheochromocytoma (Adrenal cancer)</option>
<option value="Pilocytic astrocytoma ( Brain cancer)">Pilocytic astrocytoma ( Brain cancer)</option>
<option value="Pineal region tumor (Brain cancer)">Pineal region tumor (Brain cancer)</option>
<option value="Pineoblastoma">Pineoblastoma</option>
<option value="Pituitary tumors ( Brain cancer)">Pituitary tumors ( Brain cancer)</option>
<option value="Primary central nervous system (CNS) lymphoma">Primary central nervous system (CNS) lymphoma</option>
<option value="Prostate cancer">Prostate cancer</option>
<option value="Rectal cancer (Colorectal cancer)">Rectal cancer (Colorectal cancer)</option>
<option value="Renal cell carcinoma (Kidney cancer)">Renal cell carcinoma (Kidney cancer)</option>
<option value="Renal pelvis cancer ( Kidney cancer)">Renal pelvis cancer ( Kidney cancer)</option>
<option value="Rhabdomyosarcoma ( Soft tissue sarcoma)">Rhabdomyosarcoma ( Soft tissue sarcoma)</option> 
<option value="Salivary gland cancer ( Oral cancer)">Salivary gland cancer ( Oral cancer)</option>
<option value="Sarcoma (Soft tissue sarcoma)">Sarcoma (Soft tissue sarcoma)</option>
<option value="Sarcoma, bone ( Bone cancer)">Sarcoma, bone ( Bone cancer)</option>
<option value="Sarcoma, soft tissue">Sarcoma, soft tissue</option>
<option value="Sarcoma, uterine ( Uterine cancer)">Sarcoma, uterine ( Uterine cancer)</option>
<option value="Sinus cancer">Sinus cancer</option>
<option value="Skin cancer">Skin cancer</option>
<option value="Small cell lung cancer (SCLC) ( Lung cancer)">Small cell lung cancer (SCLC) ( Lung cancer)</option>
<option value="Small intestine cancer">Small intestine cancer</option>
<option value="Soft tissue sarcoma">Soft tissue sarcoma</option>
<option value="Spinal cancer">Spinal cancer</option>
<option value="Spinal column cancer ( Spinal cancer)">Spinal column cancer ( Spinal cancer)</option>
<option value="Spinal cord cancer ( Spinal cancer)">Spinal cord cancer ( Spinal cancer)</option>
<option value="Spinal tumor (Spinal cancer)">Spinal tumor (Spinal cancer)</option>
<option value="Squamous cell carcinoma (Skin cancer)">Squamous cell carcinoma (Skin cancer)</option>
<option value="Stomach cancer">Stomach cancer</option>
<option value="Synovial sarcoma ( Soft tissue sarcoma)">Synovial sarcoma ( Soft tissue sarcoma)</option>
<option value="T-cell lymphoma ( Non-Hodgkin lymphoma)">T-cell lymphoma ( Non-Hodgkin lymphoma)</option>
<option value="Testicular cancer">Testicular cancer</option>
<option value="Throat cancer">Throat cancer</option>
<option value="Thymoma / thymic carcinoma">Thymoma / thymic carcinoma</option>
<option value="Thyroid cancer">Thyroid cancer</option>
<option value="Tongue cancer ( Oral cancer)">Tongue cancer ( Oral cancer)</option>
<option value="Tonsil cancer ( Head and neck cancer)">Tonsil cancer ( Head and neck cancer)</option>
<option value="Transitional cell cancer ( Bladder cancer)">Transitional cell cancer ( Bladder cancer)</option>
<option value="Transitional cell cancer ( Kidney cancer)">Transitional cell cancer ( Kidney cancer)</option>
<option value="Transitional cell cancer ( Ovarian cancer)">Transitional cell cancer ( Ovarian cancer)</option>
<option value="Triple-negative breast cancer ( Breast cancer)">Triple-negative breast cancer ( Breast cancer)</option>
<option value="Tubal cancer">Tubal cancer</option>
<option value="Tubular carcinoma ( Breast cancer)">Tubular carcinoma ( Breast cancer)</option>
<option value="Undiagnosed Cancer">Undiagnosed Cancer</option>
<option value="Ureteral cancer (Bladder cancer)">Ureteral cancer (Bladder cancer)</option>
<option value="Ureteral cancer ( Kidney cancer)">Ureteral cancer ( Kidney cancer)</option>
<option value="Urethral cancer">Urethral cancer</option>
<option value="Uterine adenocarcinoma ( Uterine cancer)">Uterine adenocarcinoma ( Uterine cancer)</option>
<option value="Uterine cancer">Uterine cancer</option>
<option value="Uterine sarcoma ( Uterine cancer)">Uterine sarcoma ( Uterine cancer)</option>
<option value="Vaginal cancer">Vaginal cancer</option> 
<option value="Vulvar cancer">Vulvar cancer</option>
</select>
</div>

	<div class="input_panel"><label> Cancer-Stage:</label>
    <input type="number" name="stage" required="" placeholder="Enter stage">		
	</div>


	<div class="input_panel"><label>email:</label>
    <input type="text" name="email" required="" placeholder="Enter email">		
	</div>


<hr>

	<button type="submit" class="btn" name="save">Save:</button>
	
 	<? php if(isset($_SESSION['msg'])) ?>
	<div class="msg">
		<? php 
		    echo $_SESSION['msg'];
        	unset($_SESSION['msg']);
		 ?>
	</div>
	<? php endif ?>
<? php print("$output"); ?>

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