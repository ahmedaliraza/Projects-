<? php include('CHAP(table).php');

$sql="SELECT * FROM user";
$result = mysqli_connect("localhost","root","","chap1") or die("Error in connecting") ;

    echo "<table  align='center' border='1px'>";
	echo "<tr><td>.{$row['fname']}</td></tr>";
	echo "<tr><td>{$row['lname']}</td></tr>";
	echo "<tr><td>{$row['Age']}</td></tr>";
	echo "<tr><td>{$row['Province']}</td></tr>";
	echo "<tr><td>{$row['City']}</td></tr>";
	echo "<tr><td>{$row['TypeofCancer']}</td></tr>";

while ($row=mysqli_fetch_array($result)) {
 }
 echo "</table>"; 

// $db = mysqli_connect("localhost","root","","chap1") or die("Error in connecting") ;
// mysql_select_db('chap1');
// $output='';
// //if save button is clicked
// if(isset($_POST['search'])){
	
// 	$searchq=$_POST['search'];
// 	$searchq=preg_replace("#[^0-9a-z]#i","",$searchq)

// $query=mysql_query("SELECT FROM user WHERE fname LIKE '%searchq%' OR lname LIKE '%searchq%'");
// $count=mysql_num_rows($query);
// if ($count==0) {
// 	$output='there was no result!';
// }
// else{
// 	while ($row=mysqli_fetch_array($query)) {
// 		$fname=$row['fname'];
// 		$lname=$row['lname'];
// 		$Age=$row['Age'];
// 		$TypeofCancer=$row['TypeofCancer'];

//     $output='<div>'.$fname.''.$lname.''.$Age.''.$TypeofCancer.'</div>';

// 	}

// }
// }

?>