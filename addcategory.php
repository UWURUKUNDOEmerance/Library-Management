<!DOCTYPE html>
<html>
<head>
	<title>addcategory</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style >
  	a{
  		text-decoration: none;
  		color: white;
  	}
  </style> 
</head>
<body>
<div class="container col-sm-6 bg-success">
<form  method="POST">
  <h1 class="text-bg-light"> addBook category <button class="btn btn-primary"><a href="viewcategory.php">view</a></button></h1>

	<label class="label-control mb-2">category</label>
<input type="text" name="category"  class="form-control mb-2 form-control-lg" >
<label class="label-control mb-2">status</label>	
<input type="text" name="status"  class="form-control mb-2 form-control-lg" >
<center>
<button type="submit" name="sub" class="btn btn-dark mb-2">add</button>
</center>
</form>
</div>
<?php
if (isset($_POST['sub'])) {
	# code...
$cat=$_POST['category'];
$status=$_POST['status'];
$conn=mysqli_connect("localhost","root","","x");
$add=mysqli_query($conn,"INSERT INTO category(categoryname,status)VALUES('$cat','$status')");
if ($add) {
	# code...
	echo "add succefull";
}
else{
	echo "not add";
}
}
?>
</body>
</html>