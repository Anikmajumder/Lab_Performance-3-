<?php

	function getConnection(){
		$conn = mysqli_connect('localhost', 'root', '', 'web');
		return $conn;
	}
?>