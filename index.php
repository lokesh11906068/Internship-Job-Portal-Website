<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Dashboard</title>	

</head>
<body>
	<div>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Admin Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!--<div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>-->
  </div>
</nav>
</div>
<!-- The sidebar -->
<div class="sidebar">
  <a class="" href="jobs.php">Jobs</a>
  <a href="jobs.php">Candidates Applied</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>

<!-- Page content -->


<div class="content">
  <p>
 <!-- <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
    Link with href
  </button>-->
   <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
    Post Job
  </button>
</p>

<div style="min-height: 120px;">
  <div class="collapse collapse-horizontal" id="collapseWidthExample">
    <div class="card card-body" style="width: 300px;">

     <form action=""method="POST">
  <div class="mb-3">
    <label for="Company Name" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="cname">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPosition" class="form-label">Position</label>
    <input type="text" class="form-control" id="exampleInputPosition" name="position">
  </div>
  <div class="mb-3">
    <label for="exampleInputJobdesc" class="form-label">Job Description</label>
    <input type="text" class="form-control" id="jobdesc" name="jdesc">
  </div>
  <div class="mb-3">
    <label for="exampleInputskillsc" class="form-label">skills required</label>
    <input type="text" class="form-control" id="skills" name="skills">
  </div>
  
  <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>
    <input type="text" class="form-control" id="CTC" name="ctc">
  </div>
  <button type="submit" class="btn btn-primary" name="job">Submit</button>
</form>
    </div>
  </div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company NAme</th>
      <th scope="col">Position</th>
      <th scope="col">CTc</th>
    </tr>
</thead>      
       <?php  $sql="SELECT 'cname','position','ctc' FROM 'jobs'";
        $result=mysql_query($conn,$sql);
        $i=0;
        if($result->num_rows>0){
            //output data of each row
       while($rows=$result->fetch_assoc()){
           echo"
           <tbody>
           <tr>
        <td>".++$i."</td>
       <td>".$rows['cname']."</td>
       <td>".$rows['position']."</td>
       <td>".$rows['ctc']."</td>
       </tr>";
        }
        }
        else{
            echo "";
        }
        ?>
</tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>