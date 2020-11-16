<?php 
	$con = mysqli_connect('127.0.0.1', 'root','','instagram');
	$query = mysqli_query($con, "INSERT INTO  users (email,name,username,password) VALUES ('{$_POST["email"]}','{$_POST["name"]}','{$_POST["username"]}','{$_POST["password"]}')");
	 header("Location: posts.php");
 	 
 ?>
 