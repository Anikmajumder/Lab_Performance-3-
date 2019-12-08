
<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>

	<h1>Add New User</h1> 
	
	<a href="home.php">Back</a> |  
	<a href="logout.php">logout</a>

	<form method="post" action="regCheck.php">
		<table>
			<tr>
				<td>Name:</td>
				<td><input type="text" name="uname"></td>
			</tr>
			<tr>
				<td>contactNo:</td>
				<td><input type="text" name="contact"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>username:</td>
				<td><input type="password" name="username"></td>
			</tr>
			<tr>
				<td>company:</td>
				<td><input type="password" name="company"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Save"></td>
			</tr>
		</table>
	</form>


</body>	
</html>





