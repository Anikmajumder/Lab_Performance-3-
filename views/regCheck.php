<?php
	
	require_once('functions.php');

	if(isset($_POST['submit'])){

		$uname = $_POST['uname'];
		$password = $_POST['password'];
		$contact = $_POST['contact'];
		$username = $_POST['username'];
		$company = $_POST['company'];

		if(empty($uname) == true || empty($password) == true || empty($contact) == true|| empty($username) == true|| empty($company) == true){
			echo "null submission!";
		}else{

			$status = register($uname, $password,$company,$username, $contact);
			if($status){

				header('location:adduser.php?msg=success');
			}else{
				header('location:adduser.php?msg=dberror');
			}
		}

	}else{
		header('location:adduser.php');
	}


?>