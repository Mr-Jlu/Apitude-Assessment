<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<br>
<div class="container">
<div class="row">
<div class="col-sm-12">
    <div class="panel panel-danger">
      <div class="panel-heading">online quiz system in php</div>
      <div class="panel-body">Quiz in php</div>
    </div>
	 </div>
	  </div>
	  </div>
	  
<div class="container">
<div class="row"><br>
<br>
<div class="col-sm-6">
  <div class="panel panel-info">
    <div class="panel-heading">signin Form</div>
	 <div class="panel-body">
	 <?php
	 if(isset($_GET['run']) && $_GET['run']=="failed")
	 {
		 echo "your email or password is incorrect";
	 }
		 ?>
  <form role="form" action="signin_sub.php" method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="e" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter password">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  </div>
   </div>
   </div>
   
   <div class="col-sm-6">
    <div class="panel panel-info">
	
    <div class="panel-heading">signup Form</div>
	 <div class="panel-body">
	 <?php if(isset($_GET['run'])&& $_GET['run']=="success") 
	 {
		 echo "<mark>your registeration successfully done</mark>";
		 }	
		 ?>
  <form role="form" method="post" action="signup_sub.php" enctype="multipart/form-data">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="n" id="name" placeholder="Enter name">
    </div>
	 <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="e" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter password">
    </div>
	 <div class="form-group">
      <label for="file">upload your image</label>
      <input type="file" class="form-control" name="img">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  </div>
   </div>
      </div>
</div>
</div>
</body>
</html>


