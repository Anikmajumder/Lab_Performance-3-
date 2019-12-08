 <?php
$mysqli = new mysqli('localhost', 'root', '', 'webtech1');
if($mysqli->connect_error) {
  exit('Could not connect');
}
	

$sql = "SELECT * FROM users WHERE username = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($cid, $cname, $name, $adr, $city);
$stmt->fetch();
$stmt->close();
?> 


<?php
echo "<tr>



<td>" . $name . "</td>

</tr>";
?> 
</body>
</table>
