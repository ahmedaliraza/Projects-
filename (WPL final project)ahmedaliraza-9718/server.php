<?php 
session_start();
//initialize variables
$fname="";
$lname="";
$Age="";
$Province="";
$City="";
$TypeofCancer="";
$stage="";
$email="";
$id=0;
//connect to database
$db = mysqli_connect("localhost","root","","chap") or die("Error in connecting") ;
mysql_select_db('chap');

//if save button is clicked
if(isset($_POST['save'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$Age=$_POST['Age'];
	$Province=$_POST['Province'];
	$City=$_POST['City'];
	$TypeofCancer=$_POST['TypeofCancer'];
	$stage=$_POST['stage'];
	$email=$_POST['email'];


	
$sql = "INSERT INTO user (fname,lname,Age,Province,City,TypeofCancer,stage,email) VALUES ('$fname','$lname','$Age','$Province','$City','$TypeofCancer','$stage','$email')";
$query = mysqli_query($db,$sql);
$_SESSION['msg']="Saved!";
header('location:index.php');//redirect to index.php after inserting
}


// if(isset($_POST['search'])){
// 	$fname=$_POST['fname'];
// 	$lname=$_POST['lname'];
// 	$Age=$_POST['Age'];
// 	$Province=$_POST['Province'];
// 	$City=$_POST['City'];
// 	$TypeofCancer=$_POST['TypeofCancer'];


	
// $sql = "INSERT INTO user (fname,lname,Age,Province,City,TypeofCancer) VALUES ('$fname','$lname','$Age','$Province','$City','$TypeofCancer')";
// $query = mysqli_query($db,$sql);
// $_SESSION['msg']="Saved!";
// header('location:index.php');//redirect to index.php after inserting
// }

// retrieve data
// $query="SELECT * FROM user";
// $result=mysqli_query($db,$query);
// while ($row=mysqli_fetch_array($result)) {
// 	echo "<tr>";
// 	echo "<td>".$row['fname']."</td>";
// 	echo "<td>".$row['lname']."</td>";
// 	echo "<td>".$row['Age']."</td>";
// 	echo "<td>".$row['Province']."</td>";
// 	echo "<td>".$row['City']."</td>";
// 	echo "<td>".$row['TypeofCancer']."</td>";
// 	echo "</tr>";
// }

?> 