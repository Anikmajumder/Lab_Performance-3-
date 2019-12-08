<?php
	require_once('db.php');
	function validate($uname, $password){
		$conn = getConnection();
		$sql = "select * from em where name='{$uname}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);
		return count($user);
	}



	function register($uname, $password,$company,$username, $contact)
{

		$conn = getConnection();
		$sql = "insert into em values('', '{$uname}','{$password}', '{$company}','{$username}','{$contact}',0)";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}

	}

?>