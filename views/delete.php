<?php
include("db.php");
$id=$_GET['id'];
$query="DELETE FROM users WHERE id='$id'";
$conn=getConnection();

$data=mysqli_query($conn,$query);
if($data){
	echo "";
	//<script>alert('Record detelted')</script>
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL= http://localhost/per/views/userlist.php">
	<?php 
}
else{
	echo"something wrong";
}
?>