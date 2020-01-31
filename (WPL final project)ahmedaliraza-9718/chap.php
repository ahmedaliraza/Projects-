<? php include('server.php'); 
$query="select * from user";
$result=mysql_query($query);
?>
<!DOCTYPE html>
<html>
<head>
<!-- 		<link rel="stylesheet" type="text/css" href="style.css">
 -->
	<title>C#@P-PAK</title>
</head>
<body>
<table align="center" border="1px" style="width: 600px; line-height: 40px">
		<tr>
			<th>first-name:</th>
			<th>Comments:</th>
     		<th>Age:</th>
			<th>Country:</th>
		    <th colspan="4"><h2>Action</h2></th>

		</tr>
		<? php while ($row= mysql_fetch_assoc($result)) { ?>
		<tr>
			<td><? php echo $row['fname']; ?></td>			
			<td><? php echo $row['lname']; ?></td>
			<td><? php echo $row['Age']; ?></td>
			<td><? php echo $row['Country']; ?></td>
			<td><? php echo $row['Comments']; ?></td>

			<td>
				<a href="#"></a>
			</td>
			<td>
				<a href="#"></a>
			</td>
		</tr>
		<? php } ?>
	
</table>

</body>
</html>