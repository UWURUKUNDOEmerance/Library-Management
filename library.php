<?php
$conn=mysqli_connect("localhost","root","","x");
if (isset($_POST['sub'])) {
$a=$_POST['email'];
$b=$_POST['pwd'];
$sel=mysqli_query($conn,"SELECT*FROM users where emailid='$a'AND password='$b'");
$fetch=mysqli_fetch_array($sel);
if ($fetch) {
header("location:index1.php");
   // echo '<script>location:href="adminpage.php"</script>';

// echo "continue";}
}

 else{
 echo "invalid credentials ";
}
}
?>

<?php
$conn=mysqli_connect("localhost","root","","x");
if (isset($_POST['sub'])) {
$a=$_POST['email'];
$b=$_POST['pwd'];
$sel=mysqli_query($conn,"SELECT*FROM adminlogin where email='$a'AND password='$b'");
$fetch=mysqli_fetch_array($sel);
if ($fetch) {
header("location:adminpage.php");
   // echo '<script>location:href="adminpage.php"</script>';

// echo "continue";}
}

 else{
 echo "invalid credentials ";
}
}
?>
<!-- <?php
  $connect=mysqli_connect("localhost","root","","x") or die("not well connected");

  if (isset($_POST['sub'])) {

    $a=$_POST['email'];
    $b=$_POST['pwd'];
    $sel1=mysqli_query($conn,"SELECT*FROM users where emailid='$a'AND password='$b'");
    $fetch1=mysqli_fetch_array($sel1);

$sel2=mysqli_query($conn,"SELECT*FROM adminlogin where emailid='$a'AND password='$b'");
$fetch2=mysqli_fetch_array($sel2);

  // $sel="SELECT*FROM regt WHERE username='$user' AND password='$pass'";
  // $select=mysqli_query($connect,$sel);
  // $fet=mysqli_fetch_array($select);


  // $sel1="SELECT*FROM regtable WHERE username='$user' and password='$pass'";
  // $select1=mysqli_query($connect,$sel1);
  // $fet1=mysqli_fetch_array($select1);

  if ($fetch1) {
  
  header("location:homeuser.php");
    // echo "<script>alert(hello);location.href='welcom.php'</script>";
  }


  elseif ($fetch2){
      // $_SESSION['username']=$fet1['username'];

      header("location:adminpage.php");

      }
      else{
        echo "invalid credentials ";
      }
         
      }
  
    
  
  ?>
  -->
<!DOCTYPE html>
<html>
<head>
	<title>library online system</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="icon" type="text/css" href="capture3.png">
</head>
<style >
li.nav-item{
 
 

}
  	a{
  	text-decoration: none;
    font-size: 50%;
  	 	
  	}
  	li{
  	margin-right:20px;	
  	}
  	img{
  	margin-right:500px; 	
  	}
  	p{
  	font-size: 150%;
  
  }
  h1.text-center{
  	color: black;
  	font-family: bold;
  }
  form{
  	padding: 50px;
  }
 
   
    
  }
  </style>
<body class=" navbar navbar-expand-xxl">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
  <div class="container-fluid ">
    <ul class="navbar-nav">
      <li class="nav-item">
       <a href="" ><img src="capture7.png" width="100" height="80"></a>
      </li>	
      <li class="nav-item"">
        <a class="nav-link text-white-90" href="library.php"><h2>Home</h2></a>
      </li>
      <li class="nav-item" style="color: white;">
        <a class="nav-link" href="library.php"><h2>About</h2></a>
      </li>
      <li class="nav-item" style="color: white;">
        <a class="nav-link" href="library.php"><h2>Services</h2></a>
      </li>
      <li class="nav-item" style="color: white;">
        <a class="nav-link" href="library.php"><h2>Contact </h2></a>
      </li>
      <li class="nav-item" style="color: white;">
        <a class="nav-link" href="user.php"><h2>Register</h2></a>
      </li>
       <!--  <li class="nav-item">
        <a class="nav-link" href="adminpage.php"><h2> adminlogin</h2></a>
      </li> -->
     <!--     <li class="nav-item">
        <input type="text" name="search" placeholder="Search" class="form-control">
        
      </li>
        <li class="nav-item">
        <button type="submit" name="sub" value="" class="bg-danger form-control">Search</button>
      </li> -->
    </ul>
  </div>
</nav>
 
 		
 	<h1 class="text-center  col-sm-8"  style=" background-color: #e0e0e0;">Library Management System</h1>

</div></nav>
 <nav class="navbar navbar-expand-sm bg-light navbar-dark col-sm-12">
 <div class="container-fluid ">	
 <div class="container-fluid ">	
 	<ul class="navbar-nav">
 	<li class="nav-item">	
<!-- Carousel -->
<div id="demo" class="carousel slide bg-primary " data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators ">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="capture10.png" alt="library" class="d-block" >
    </div>
    <div class="carousel-item">
      <img src="capture6.png" alt="advertizement" class="d-block" >
    </div>
    <div class="carousel-item">
      <img src="capture8.png" alt="New York" class="d-block" width="100%">
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
</div></nav>

 <nav class="navbar navbar-expand-sm bg-light navbar-dark col-sm-12">
 <div class="container-fluid ">
 <ul class="navbar-nav">	
	<li class="nav-item bg-danger col-sm-3">
    <h1>About LMS</h1>
  <!-- <img src="capture1.png" > -->  
<h1>library Management System</h1>
<p class="">It is an easy software system that helps within the sleek functioning of the library management system. It keeps track of the books issued and returned from the library. LMS involves maintaining info of existing books yet as new books are added within the library.
 <center> <button type="submit" class="btn btn-light">learnmore</button></center>
 </p> 

 
</li>
 <li class="nav-item bg-light col-sm-3">
<h1>About Libray</h1>
     <img src="capture.png" class="">
<p class="">library is  a building or room containing collections of books, periodicals, and sometimes films and recorded music for use or borrowing by the public or the members of an institution
<center><button type="submit" class="btn btn-primary">learnmore</button></center>
</p>
  	 </li>
   <li class="nav-item bg-success col-sm-3">
  	<h1>About libray</h1>	
  	 <img src="capture2.png" >
  	 <p >library is  a building or room containing collections of books, periodicals, and sometimes films and recorded music for use or borrowing by the public or the members of an institution
  <center><button type="submit" class="btn btn-light ">learnmore</button></center>
  	</p>
  </li>
  </div>
</nav>
<!-- this is form user login -->

<nav class="navbar navbar-expand-sm  navbar-dark col-sm-12">
<div class="container-fluid ">
	<ul class="navbar-nav">
		<li class="nav-item col-sm-6 bg-info">
        <form action="#" method="POST">
    <h1> user login</h1>
    <input type="email" name="email" placeholder="email" required class="form-control form-control-lg"><br>
      <input type="password" name="pwd" placeholder="password" required class="form-control form-control-lg"><br>
      <center>
    <input type="submit" name="sub" class="btn btn-primary" value="login">
</center>


</form></li>

  
  <!-- this is form of admin login -->
 <!--  <?php
$conn=mysqli_connect("localhost","root","","x");
if (isset($_POST['sub'])) {
$email=$_POST['email'];
$password=$_POST['pwd'];
$sel=mysqli_query($conn,"SELECT*FROM adminlogin where emailid='$email'AND password='$password'");
$fetch=mysqli_fetch_array($sel);
if ($fetch) {
header("location:adminpage.php");
  // echo '<script>location:href="adminpage.php"</script>';

// echo "continue";}
}

else{
  echo "notgood";
}
}
?>  -->


     <li class="nav-item col-sm-6 bg-dark">
        <form action="#" method="POST">
    <h2><center style="color: coral;">adimin login</center></h2>  
 
    <input type="email" name="email" placeholder="email" required class="form-control form-control-lg"><br>
      <input type="password" name="pwd" placeholder="password" required class="form-control form-control-lg"><br>
      <center>
    <input type="submit" name="sub" class="btn btn-primary" value="login">
</center>

</form></li> 
   <!--  <li>
    <div class="container col-sm-6 bg-dark">
  <div class="card card-login mx-outo mt-5">
  <div card-header>
  <h2><center style="color: coral;">adimin login</center></h2>  
  </div>
  <div class="card-bordy">
  <form name="login" method="POST" action="">
  <div class="form-groupe">
  <div class="form-label-groupe">
    <label for="inputEmail" class=" mb-2">Email address</label>
  <input type="email=" id="inputEmail" class="form-control form-control-bg mb-3" name="email" placeholder="email address" required="required" autofocus="autofocus">
  
  </div>  
  </div>  
    <div class="card-bordy ">
  <form name="login" method="POST" action="">
  <div class="form-groupe">
  <div class="form-label-groupe">
    <label for="inputPassword"  class=" mb-2">password</label>
  <input type="password" id="inputPassword" class="form-control form-control-bg mb-3" name="pwd" placeholder="password" required="required" autofocus="autofocus">
  
  </div>  
  </div>
  <input type="submit" class="btn btn-primary btn-block mb-3" name="login_btn" value="login">
  </form> 
  </div> 
  </li> 
  </div>  
  </div>
	</ul> -->
	</ul>
</div>	
</nav>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark col-sm-12 footer">
  <div class="container-fluid ">
    <ul class="navbar-nav">
      <li class="nav-item col-sm-3;" ">     
<h1>Library <br>Management<br>
System</h1>
      </li>
      
      <li class="nav-item mb-3 col-sm-3 " style="color: white;">
      	<H1>library OFFICE</H1>
        <h3>library House,<br> kacyiru Sector,<br>
         P.O Box 644,<br> Kigali-Rwanda</h3>
         <h4>read@library.rw</h4>
           <h4>info@library.rw</h4>
       </li>
          <li class="nav-item col-sm-3;" style="color: white;" >
      	 <h1>BUGESERA OFFICE</h1>
      	 <H2>P.O Box 21, BUGESERA-Rwanda</H2>
        <h2> Info@library.rw</h2>
       <h2>Sales@library.rw</h2>
       
       <!--  <a href="#"><img src="y.png"></a>
       <a href="#"><img src="youtube.png"></a>
       <a href="#"><img src="f.png"></a> -->
      </li>
      <li class="nav-item col-sm-2 " style="color: white;">
      
        <h1>Contact us</h1>
Dial: +250 798260555/3222
      </li>
         
    </ul>
  </div>
</nav>	

</body>
</html>