<?php
	$con = mysqli_connect('127.0.0.1', 'root','','instagram');
	$query = mysqli_query($con, "SELECT * FROM users WHERE email = '".$_POST['email']."' AND password = '".$_POST['password']."'");
	$result = $query->fetch_assoc();
	if(mysqli_num_rows($query)==0){
		header("Location:auto.php?nothing=Такого пользователя нет");
	}else{
		header("Location: posts.php?name={$result["name"]}");
	}
?>
