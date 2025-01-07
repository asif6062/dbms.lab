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
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>
<body>

<?php include 'menu.php'; ?>


<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    
    
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/ca12.jpg"  width="1100" height="500">
      <div class="carousel-caption">
        <p>Advancing equality and improving lives with technology</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/ca13.jpg"  width="1100" height="500">
      <div class="carousel-caption">
        <p>A journey through Design Thinking and innovation</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/ca11.JPG"  width="1100" height="500">
      <div class="carousel-caption">
        <p>A journey through Design Thinking and innovation</p>
      </div>   
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<section  class="my-5">
	<div class="py-5">
		<h2 class="text-center">About Us</h2>
	</div>
	<div class="container-fluid">
	  <div class="row">
		  <div class="col-lg-6 col-md-6 col-12">
			  <img src="image/cc.jpg" class="img-fluid" aboutimg> 
		  </div>
		  <div class="col-lg-6 col-md-6 col-12">
			  <h2 class="display-5">IT Institute</h2>
			  <p class="py-4">We are committed to providing all with a platform where superiority is the mantra. We nurture the young talent by sharing knowledge, providing supports in learning techniques, co-operating them for international standard projects, making successful freelancers and driving our youth towards a world of entrepreneurship and thus reducing inequalities. Our culture is important to us and our team of experts drives our culture. The skilled human resource make our deliverables valuable that really helps us to set our standard internationally.</p>
			  <a href="about.php" class="btn-success">Check more</a>
		  </div>
	  </div>
	</div>
</section>

<section  class="my-5">
	<div class="py-5">
		<h2 class="text-center">Course we offer</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
					<img class="card-img-top" src="image/wd.jpeg" alt="Card image">
					<div class="card-body">
						<h4 class="card-title">Web design</h4>
						<p>If You Think Math is Hard Try Web Design</p>
						<a href="services.php" class="btn-success">Check more</a>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
					<img class="card-img-top" src="image/gd.jpg" alt="Card image">
					<div class="card-body">
						<h4 class="card-title">Graphic design</h4>
						<p>Design is intelligence made visible.</p>
						<a href="services.php" class="btn-success">Check more</a>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
					<img class="card-img-top" src="image/mgd.jpg" alt="Card image">
					<div class="card-body">
						<h4 class="card-title">Motion graphic design</h4>
						<p>Design creates culture. Culture shapes values. Values determine the future</p>
						<a href="services.php" class="btn-success">Check more</a>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>




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


<section  class="my-5">
	<div class="py-5">
		<h2 class="text-center">Contuct us</h2>
	</div>

	<div class="w-50 m-auto">
     <ul>
     	 <i class="material-icons" style="font-size:36px">location_on</i>
       <li>Address</li>
       <p>Sherpur, Mymensingh, Bangladesh</p>
       <i class="material-icons" style="font-size:36px">email</i>
       <li>E-mail</li>
       <p>itinstitute1199@gmail.com</p>
       <i class="material-icons" style="font-size:36px">call</i>
       <li>Phone</li>
       <p>016********</p>
     </ul>
</div>


<div class="py-5">
		<h2 class="text-center">Follow us</h2>
	</div>

<div class="w-50 m-auto">
      <ul>
         <i class="fa fa-facebook-square" style="font-size:36px"></i>
         <br>
         <i class="fa fa-twitter" style="font-size:36px"></i>
         <br>
         <i class="fa fa-instagram" style="font-size:36px"></i>
         <br>
         <i class="fa fa-youtube-play" style="font-size:36px"></i>
      </ul>
</div>
</section>



<footer>
  <p class="p-3 bg-dark text-white text-center">@it_institute</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>



</body>
</html>