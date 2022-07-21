<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<style>
		body{
			background-image: url('back1.jpeg');
			background-size: cover;
		}
		form{
			background-color: white;
		margin-top:6em;
		margin-left: 20em;
		margin-right: 10em;
		padding:30px;
		box-shadow: 10px 10px 8px 10px #888888;	
		}
	</style>
	
	<title>login</title>
	
</head>

<body>
	<form methid="POST">
	<div class="container">
	<div class="forms">
	<div class="mb-3 row">
   <!-- <label for="staticEmail" class="col-sm-2 col-form-label" name="email">Email</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value ="email@example.com">
    </div>
  </div>-->

  <div class="mb-3 row">
    <label for="inputemail" class="col-sm-2 col-form-label" name="email">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputemail">
    </div>
    <div id="emailHelp" class="form-text"><b>We'll never share your email with anyone else.</b></div>
  </div>

  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label" name="password">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword">
    </div>
  </div>
 <a href="index.php"> <button type="submit" class="btn btn-primary" name="login"><b>Submit</b></button></a>
</div>
</div>
<center><h5>New User?</h5></center>
<center><h5>Create Account</h5></center>
<center><h4><a href="register.php">Sign Up</a></h4></center>
</form>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
