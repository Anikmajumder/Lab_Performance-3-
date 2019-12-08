


<br><br><input type="text" name="text" id="name" list="datalist1" onchange="showCustomer(this.value)"  >


<div id="txtHint">Customer info will be listed here...</div>
<datalist  id="datalist1">



<?php
$name="";
$conn = new mysqli('localhost', 'root', '', 'webtech1')
or die ('Cannot connect to db');

    $result = $conn->query("select username from users");

 
   
    while ($row = $result->fetch_assoc()) {

                  //unset($id, $uname);
                  //$id = $row['id'];
                  $username = $row['username']; 
                  echo '<option>'.$username.'</option>';
}



  
?> 

</datalist>

<script>


function showCustomer(str) {
  var xhttp;  
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "Not Found";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "search.php?q="+str, true);
  xhttp.send();
}
</script>

</body>
</html>