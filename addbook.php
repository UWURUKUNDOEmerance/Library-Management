<!DOCTYPE html>
<html>
<head>
	<title>addbook</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container col-sm-6 bg-success">
<form  method="POST">
	<h1>Insert Book In Batabase</h1>
<input type="text" name="bookname" class="form-control mb-2 form-control-lg" placeholder="bookname" required>	
<input type="text" name="category" class="form-control mb-2 form-control-lg" placeholder="book category" required>
<input type="number" name="ISBN" class="form-control mb-2 form-control-lg" placeholder="enter ISBN" required>
<input type="text" name="authorname" class="form-control mb-2 form-control-lg" placeholder="authorname" required>
<input type="text" name="publisher" class="form-control mb-2 form-control-lg" placeholder="publisher" required>
<input type="number" name="price" class="form-control mb-2 form-control-lg" placeholder="price" required>
<input type="number" name="quantity" class="form-control mb-2 form-control-lg" placeholder="quantity" required>
<input type="text" name="location" class="form-control mb-2 form-control-lg" placeholder="location" required>
<input type="text" name="availability" class="form-control mb-2 form-control-lg" placeholder="availability" required>
<center>
<input type="submit" name="sub" class="btn btn-primary"></center>
</form>  
</div>
<?php
if (isset($_POST['sub'])) {
 $bookname=$_POST['bookname'];
$category=$_POST['category'];
$ISBN=$_POST['ISBN'];
 $authorname=$_POST['authorname'];
$pub=$_POST['publisher'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$location=$_POST['location'];
$avail=$_POST['availability'];
echo"$bookname,$category,$ISBN,$authorname,$pub,$price,$quantity,$location,$avail";
$conn=mysqli_connect("localhost","root","","a");
if ($conn) {
	# code...
	echo "connect";
}
else{
	echo "not connect";
}
$insert=mysqli_query($conn,"INSERT INTO tbl_book(bookname,category,ISBN,author,publisher,price ,quantity,location,availability)VALUES('$bookname','$category','$ISBN','$authorname','$pub','$price','$quantity','$location','$avail',)");
// $insert=mysqli_query($conn,"INSERT INTO books(bookname,category,ISBN,author,publisher,price,quantity,location,availability) VALUES(' $bookname','$category','$ISBN','$authorname','$pub','$price','$quantity','$location','$avail',)");
if ($insert) {
echo "good";
}
else{
	echo "not good";
}
}
?>
</body>
</html>