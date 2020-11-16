<?php 

	$con = mysqli_connect('127.0.0.1', 'root','','instagram');
	$query = mysqli_query($con, "UPDATE posts SET text='{$_GET['text']}',img='{$_GET['img']}' WHERE id='{$_GET['id']}'");
	header("location:index.php");
 ?>
