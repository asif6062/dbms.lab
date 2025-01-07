<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IT Institute</title>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Zen+Kurenaido&display=swap" rel="stylesheet">



</head>
<body>

<?php include'menu.php';  ?>  

<div class="jumbotron">
  <h1>IT Institute</h1>
  <p>Knowledge is power</p>
</div>



<section  class="my-5">
	<div class="py-5">
		<h2 class="text-center">Review Us</h2>
	</div>

	<div class="w-50 m-auto">
		<form action="userinfo.php" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>E-mail</label>
				<input type="text" name="E-mail" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Mobile</label>
				<input type="text" name="Mobile" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Comments</label>
				<textarea class="form-control" name="Comments"></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
			
		</form>
	</div>
</section>

<footer>
  <p class="p-3 bg-dark text-white text-center">@it_institute</p>
</footer>







</body>
</html>