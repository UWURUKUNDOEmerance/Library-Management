<!DOCTYPE html>
<html>
<head>
	<title>adduser</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="icon" type="text/css" href="capture3.png">
  <style type="text/css">
  	a{
  		text-decoration: none;
  		color: white;
  	}
    body{
      text-align: center;
    }
  	</style>
</head>
<body>
  <body class=" navbar navbar-expand-xxl">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
  <div class="container-fluid ">
    <ul class="navbar-nav">
      <li class="nav-item">
       <a href="" ><img src="capture7.png" width="100" height="80"></a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="library.php"><h2 class="mb-3">overview</h2></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="user.php"><h2 class="mb-3"> book</h2></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="user.php"><h2 class="mb-3">category</h2></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="user.php"><h2 class="mb-3"> request</h2></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="user.php"><h2 class="mb-3">user</h2></a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="user.php"><h2 class="mb-3 "> place</h2></a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="library.php"><h2 class="mb-3 ">login</h2></a>
      </li>
         <li class="nav-item">
        <input type="text" name="search" placeholder="Search" class="form-control">
        
      </li>
        <li class="nav-item">
        <button type="submit" name="sub" value="" class="bg-danger form-control">Search</button>
      </li>
    </ul>
  </div>
</nav>

 <nav class="navbar navbar-expand-sm bg-secondary navbar-dark ">
  <div class="container-fluid ">
    <ul class="navbar-nav">
      <li class="nav-item col-sm-6"> 
<div class="jambotron text-center bg-success col-sm- ">
<h1 class="text-bg-light"> user registration form<button class="btn btn-primary"><a href="readuser.php">viewusers</a></button></h1>
<form class="form-inline m-4 " action="#" method="POST">
	 
      <!-- <label class="control-label " for="name">Username:</label> -->
    <input type="text" class="form-control mb-1" name="user" placeholder="Enter your fullname" required >
   
	  
     <!--  <label class="control-label " for="email">Email:</label> -->
       <input type="email" class="form-control mb-1" name="email" placeholder="Enter your email" required >

        <!--  <label class="control-label " for="pwd">Password:</label> -->
      <input type="password" class="form-control mb-1" name="pwd" placeholder="Enter your password" required >
 <input type="text" class="form-control mb-1" name="role"   placeholder="Enter your type" required>
  <input type="text" class="form-control mb-1" name="status"  placeholder="Enter your status" required>
      
     <input type="text" class="form-control mb-1" name="province" placeholder="enter your province" required>
     <!--  <label class="control-label " for="district">district:</label> -->
     <input type="text" class="form-control mb-1" name="dis" placeholder="enter your district" required>
      
     <input type="text" class="form-control mb-1" name="sec" placeholder="enter your sector" required>

       
     <input type="text" class="form-control mb-1" name="cell" placeholder="enter your cell" required>
      
     <input type="text" class="form-control mb-1" name="village" placeholder="enter your village" required>

     <button type="submit" name="sub" class="btn text-bg-light">register</button>
</form>
</div>
<?php
if (isset($_POST['sub'])) {
$a=$_POST['user'];
$b=$_POST['email'];
$c=$_POST['pwd'];

$pro=$_POST['province'];
$f=$_POST['dis'];
$sector=$_POST['sec'];
$cell=$_POST['cell'];
$vill=$_POST['village'];
$conn=mysqli_connect("localhost","root","","x");
$insert=mysqli_query($conn,"INSERT INTO users(username,emailid,password,province,district,sector,cell,village)VALUES('$a','$b','$c','$pro','$f','$sector','$cell','$vill')");
if ($insert) {
echo "good";
}
else{
	echo "not good";
}
}
?> 
</li>
<li class="nav-item col-sm-6">
  <h2 class="text-center bg-primary col-sm-12"> welcome,we have many different books</h2>
  
  <img src="gen2.png">
  
    <img src="gen2.png">
</li>
</ul></div></nav>
<nav class="navbar navbar-expand-sm bg-success navbar-dark col-sm-12 footer">
  <div class="container-fluid ">
    <ul class="navbar-nav">
      <li class="nav-item col-sm-3">     
<h1>Library <br>Management<br>
System</h1>
      </li>
      
      <li class="nav-item mb-3 col-sm-3">
        <H1>library OFFICE</H1>
        <h3>library House,<br> kacyiru Sector,<br>
         P.O Box 644,<br> Kigali-Rwanda</h3>
         <h4>read@library.rw</h4>
           <h4>info@library.rw</h4>
       </li>
          <li class="nav-item col-sm-3">
         <h1>BUGESERA OFFICE</h1>
         <H2>P.O Box 21, BUGESERA-Rwanda</H2>
        <h2> Info@library.rw</h2>
       <h2>Sales@library.rw</h2>
      <!--  <a href=""><img src="y.png"></a>
       <a href=""><img src="youtube.png"></a>
       <a href=""><img src="f.png"></a> -->
      </li>
      <li class="nav-item col-sm-2 ">
     <!--    <h1 style="text-decoration:underline;">more</h1>
        <a href="home.php" ><h3 class="bg-primary">overview</h3></a>
        <a href="home.php "><h3 class="bg-primary">aboutus</h3></a>
        <a href="home.php"><h3 class="bg-primary">service</h3></a>
        <a href="home.php"><h3 class="bg-primary">adminlogin</h3></a>
        <a href="home.php"><h3 class="bg-primary">register</h3></a> -->
        <h1>Contact us</h1>
Dial: +250 798260555/3222
      </li>
         
    </ul>
  </div>
</nav>
</body>
</html>