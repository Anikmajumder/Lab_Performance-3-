<html>
<body>
<?php
$mysqli = new mysqli('localhost', 'root', '', 'test');
$query="SELECT * FROM users  ";

$data= mysqli_query($mysqli,$query);
$json_array=array();
while($row=mysqli_fetch_assoc($data))
{
	$json_array[]=$row;
	
}
/*
echo '<pre>';
prinnt_r($json_array);
echo '</pre>';

*/
$jsonobj=json_encode($json_array);

</body>
</html>