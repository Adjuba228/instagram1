<?php 
	$con = mysqli_connect('127.0.0.1', 'root','','instagram');
	$query = mysqli_query($con, "INSERT INTO  posts (text,img,user) VALUES ('{$_GET["text"]}','{$_GET["img"]}','{$_GET["user"]}')");
	
?>
<?php
  	 header("Location: posts.php");
 	 exit();
?>