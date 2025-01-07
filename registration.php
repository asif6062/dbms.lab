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


<?php include 'menu.php';  ?>   

<div class="jumbotron">
  <h1>IT Institute</h1>
  <p>Knowledge is power</p>
</div>



<div class="w-50 m-auto">
        <form action="checkregister.php" method="post">
            <div class="form-group">
                <label>First name</label>
                <input type="text" name="first" autocomplete="off" class="form-control">
                <label>Last name</label>
                <input type="text" name="last" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
               <label>E-mail</label>
                   <input name="email" type="email"autocomplete="off" class="form-control">
          </div>
            <div class="form-group">
               <label>Password</label>
                   <input name="pass" type="password"autocomplete="off" class="form-control">
              </div>
              <div class="form-group">
               <label>Confirm Password</label>
                   <input name="cpass" type="password"autocomplete="off" class="form-control">
              </div>
              <button type="submit" class="btn btn-primary">Register Now</button>
</form>
</div>

<footer>
  <p class="p-3 bg-dark text-white text-center">@it_institute</p>
</footer>


</body>
</html>