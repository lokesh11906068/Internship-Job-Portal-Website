
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
    body{
      background-image: url('back2.jpeg');
      background-size: cover;
    }
    form{
      background-color: white;
    margin-top:15em;
    margin-left: 30em;
    margin-right: 20em;
    padding:30px;
    box-shadow: 10px 10px 8px 10px #888888; 
    }
    a{
      font-size: 25px;
    }
    
  </style>
  
  <title>Register</title>
  

</head>
<body>
  
<form method="POST">
  <div class="mb-3">
    <label for="exampleInputName" class="form-label"><b>Full Name</b></label>
    <input type="text" class="form-control" id="exampleInputName" name="name">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><b>Email address</b></label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"><b>We'll never share your email with anyone else.</b></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputNumber" class="form-label"><b>Phone Number</b></label>
    <input type="Number" class="form-control" id="exampleInputNumber" name="phone_no">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"><b>Password</b></label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword2" class="form-label"><b>Confirm Password</b></label>
    <input type="password" class="form-control" id="exampleInputPassword2">
  </div>
  <button type="submit" class="btn btn-primary" name="submit"><b>Submit</b></button>

<br>
<p style="color:black;
  font-size: 20px"><b>Already Registered?</b>
<a href="login.php">Login</a></p>
</form>

</body>
</html>