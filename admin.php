<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta charset="utf-8">
	
</head>
<body>
	<form action="insert.php" method="GET">
		
		<div class="row bg-light col-10 mx-auto" >
			<div class="col-5 mx-auto row">
				
				<div class="col-10 row mt-3">
					<h2 class="">Название</h2>
					<input type="" name="text" placeholder="Название поста" class="form-control">
				</div>
				<div class="col-10 row mt-3">
					<h2 class="">Фото</h2>
					
					<p class="mt-2 ml-2"><input type="file" name="img" multiple accept="image/*,image/jpeg,image/png" >
				</div>
				<div class="col-10 row mt-1">
					<h2 class="">Имя</h2>
					<input type="" name="user" placeholder="Nickname"  class="form-control">
				</div>
				<div class="col-4 row mt-3">
					<button class="btn   " >Создать пост</button>
				</div>
			</div>
			<div class="col-3">
				<img src="insta.jpg" class="w-100">
			</div>
		</div>
	</form>
</body>
</html>