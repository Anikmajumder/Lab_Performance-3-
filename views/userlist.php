<?php
include("db.php");
$query="SELECT * FROM em ";
$conn = getConnection();
$data= mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
?>

<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>

<body>

	<h2>User List</h2>
	<a href="home.php">Back</a> |
	<a href="logout.php">logout</a>

	<br>
	<br>
	<input type="text" name="" id="myInput" placeholder="name..." onkeyup="searchFun()">

	<table id="customers" border="1"  >
		<tr class="header" >
		     <th>ID</th>
			<th>UserName</th>
			
			<th>Password</th>
			<th>companyname</th>
			
			<th>contact</th> 
			<th>username</th> 
			<th>type</th> 
			<th>action</th> 
		</tr>
		
		<?php
		while($result=mysqli_fetch_assoc($data))
		{
			echo "<tr>
		     <td>".$result['id']."</td>
			<td> ".$result['name']."</td>
			<td>".$result['password']."</td>
			<td>".$result['companyname']."</td>
			<td>".$result['contact']."</td>
			
			<td>".$result['username']."</td>
			<td>".$result['type']."</td>
			<td><a href='edit.php?id=$result[id]&ur=$result[name]&ps=$result[password]&cn=$result[contact]&cm=$result[companyname]&un=$result[username]&tp=$result[type]'>EDIT</a></td>
			<td><a href='delete.php?id=$result[id] 'onclick='checkdelete()'>DELETE</a></td>
			
			</tr>";
				
		}
				?>
			<script>
	function checkdelete()
	{
		return confirm('Are you sure to delete this data??');
	}
	</script>
		</tr>
		
	

	
	</table>
	<script>
	function searchFun(){
		let filter = document.getElementById('myInput').value.toUpperCase();
		
		let myTable=document.getElementById('customers');
		
		let tr=myTable.getElementsByTagName('tr');
		
		for(var i=0; i<tr.length;i++){
			let td = tr[i].getElementsByTagName('td')[1];
			
			if(td){
				let textvalue= td.textContent||td.innerHTML;
				if(textvalue.toUpperCase().indexOf(filter)>-1){
					tr[i].style.display="";
					
				}else{
					
					tr[i].style.display="none";
					//alert("Not found!");
				}
				
			}
			
			
		}
		
		
	}
	</script>
	</body>
</html>