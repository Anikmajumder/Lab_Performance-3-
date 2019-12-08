<?php
include("db.php");
$query="SELECT * FROM users  ";
$conn = getConnection();
$data= mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['se'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>

	</script>
	<form method="post"> 
  
   	<input type="text" name="se" id="myInput" placeholder="name..." onkeyup="showCustomer(this.value)">
     <input type="submit">
  </select>
</form>
<br>
<div id="txtHint">Customer info will be listed here...</div>

<script>
function showCustomer(str) {
  var xhttp;  
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "getcustomer1.php?q="+str, true);
  xhttp.send();
}
</script>
</body>
</html>