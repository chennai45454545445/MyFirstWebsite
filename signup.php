
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Book</title>
<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<div class="container">
  <a class="navbar-brand" href="/operation/signup.php"><i class="fa fa-address-book"></i> ContactBook</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="/operation/signup.php">Home <span class="sr-only">(current)</span></a>
      </li>
            <li class="nav-item"  active>
        <a class="nav-link" href="/operation/signup.php">Signup</a>
      </li>
      <li class="nav-item" >
        <a class="nav-link" href="/operation/login.php">Login</a>
      </li>
          </ul>
  </div>
  </div>
</nav>
<main role="main" class="container"><style>
.wrapper { padding-top:30px; }
</style>
<div class="row justify-content-center wrapper">
<div class="col-md-6">

<div class="card">
<header class="card-header">
	<h4 class="card-title mt-2">Sign up</h4>
</header>
<article class="card-body">
<form method="POST" action="/operation/register.php">
	<div class="form-row">
		<div class="col form-group">
			<label>First name </label>   
		  	<input type="text" name="fname" class="form-control" placeholder="First Name">
		</div> <!-- form-group end.// -->
		<div class="col form-group">
			<label>Last name</label>
		  	<input type="text" name="lname" class="form-control" placeholder="Last Name">
		</div> <!-- form-group end.// -->
	</div> <!-- form-row end.// -->
	<div class="form-group">
		<label>Email address</label>
		<input type="text" name="email" class="form-control" placeholder="">
		<small class="form-text text-muted">We'll never share your email with anyone else.</small>
	</div>
	<div class="form-group">
		<label>Password</label>
	    <input class="form-control" type="password" name="password">
	</div>  
	<div class="form-group">
		<label>Confirm Password</label>
	    <input class="form-control" type="password" name="cpassword">
	</div>  
    <div class="form-group">
        <button type="submit" name="register" class="btn btn-primary btn-block"> Register</button>
    </div>   
                                         
</form>
</article> 
<div class="border-top card-body text-center">Have an account? <a href="/operation/login.php">Log In</a></div>
</div> 
</div> 

</div>

</main>
<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
