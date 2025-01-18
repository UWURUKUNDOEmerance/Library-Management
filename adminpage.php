<!DOCTYPE html>
<html>
<head>
	<title>welcome admin</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="icon" type="text/css" href="capture3.png">
	<style type="text/css">
		a{
  	text-decoration: none;
color: white;
  	 	
  	}
  h1{
  	padding:20px;
  }
  nav-link{
  	/*margin-right:20px;*/ 
    font-size:50%;
  }
  li.nav-item{
    font-size:70%;
  }
	</style>
</head>
<body>
	
	
	<body class=" navbar navbar-expand-xxl">
<nav class="navbar navbar-expand-sm  navbar-dark ">
  <div class="container-fluid  bg-secondary">
    <ul class="navbar-nav">
      <li class="nav-item">
       <a href="" ><img src="capture7.png" width="100" height="80"></a>
      </li>	
      <li class="nav-item">
        <a class="nav-link" href="library.php"><h2 class="mb-3">overview</h2></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="book.php"><h2 class="mb-3">manage book</h2></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="addcategory.php"><h2 class="mb-3">manage category</h2></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="issuedbook.php"><h2 class="mb-3"> issue request</h2></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="user.php"><h2 class="mb-3">manage user</h2></a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="location.php"><h2 class="mb-3 ">manage place</h2></a>
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
<nav class="navbar navbar-expand-sm navbar-dark ">
  <div class="container-fluid ">
    <ul class="navbar-nav">
      <li class="nav-item">
<h2 class="text-center text-primary"> welcome,admin to  Library Management System</h2>
</li></ul></div></nav>

 <nav class="navbar navbar-expand-sm bg-light navbar-dark col-sm-12">
 <div class="container-fluid ">
 <ul class="navbar-nav">	

 

	<li class="nav-item bg-warning   col-sm-4">
    <a href="book.php"> <h1 class="titles">Totalbooks</h1></a>
<center>
    <?php
    session_start();
      $conn=mysqli_connect("localhost","root","","x");
  
    $select_book=mysqli_query($conn,"SELECT count(*) from books");
$total_book=mysqli_fetch_row($select_book);
?>
<strong class="amount"><?php echo $total_book['0'];?></strong><br></center>
</li>

 <li class="nav-item bg-primary  col-sm-4">
<a href="return.php"><h1 class="titles">Returnedbook</h1></a>
<center>
    <?php
  
      $conn=mysqli_connect("localhost","root","","x");
  
    $select_rebook=mysqli_query($conn,"SELECT count(*) from Returnedbook");
$total_rebook=mysqli_fetch_row($select_rebook);
?>
<strong class="amount"><?php echo $total_rebook['0'];?></strong><br></center>
 
</li>
   <li class="nav-item bg-info col-sm-4">
  	<a href="book.php"><h1>avairable book</h1></a>
    <center>
   <?php
    
      $conn=mysqli_connect("localhost","root","","x");
  
    $select_availbook=mysqli_query($conn,"SELECT count(*) from books");
$total_availbook=mysqli_fetch_row($select_availbook);
?>
<strong class="amount"><?php echo  $total_availbook['0'];?></strong><br></center>  	
  </li>
</ul></div></nav>
  <nav class="navbar navbar-expand-sm bg-light navbar-dark col-sm-12">
 <div class="container-fluid ">
 <ul class="navbar-nav">
    <li class="nav-item bg-secondary col-sm-6">
  	<a href=""><h1>Issued book</h1>	</a>
<center>
    <?php
   
      $conn=mysqli_connect("localhost","root","","x");
  
    $select_bookissue=mysqli_query($conn,"SELECT count(*) from issue");
$total_bookissue=mysqli_fetch_row($select_bookissue);
?>
  	<strong class="amount"><?php echo $total_bookissue['0'];?></strong><br></center>
  </li>
    <li class="nav-item bg-success col-sm-6">
      <i class='fas fa-stamp' style='font-size:24px'></i>
      <i class='fas fa-address-card' style='font-size:24px'></i>
  	<a href="user.php"><h1>TOTAL USERS</h1></a>
    <center>
      <?php
   
      $conn=mysqli_connect("localhost","root","","x");
  
    $select_user=mysqli_query($conn,"SELECT count(*) from users");
$total_user=mysqli_fetch_row($select_user);
?>
<strong class="amount"><?php echo $total_user['0'];?></strong><br></center>
  	 </li>
  </div>
</nav>
<!-- <div class="col-sm-4">
      <section class="panel panel-featured-left panel-feature-primary">
        <div class="panel-body-total">
          <div class="widget-summary">
          <div class="widget-summary-col widget-sammary-col-icon">
          <div class="summary-icon bg-secondary">
            <i class='fas fa-address-book' style='font-size:48px;color:red'></i>
          <i class="fa fa-book"></i>      
          </div>  
          </div>
          <div class="wedget-summary-col">
            <div class="summary">
          <h4 class="titles">total books</h4>
          <div class="info">
          <strong class="amount"><!-- <?php echo $total_book['0'];?> --></strong><br> 
         <!--  </div>
            </div>
          <div class="summary-footer">
          <a class="text-muted text-upercase"></a>  
          </div>  
          </div>  
          </div>
          </div>
        </section>
      </div> -->
  
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
       <a href=""><img src="y.png"></a>
       <a href=""><img src="youtube.png"></a>
       <a href=""><img src="f.png"></a>
      </li>
      <li class="nav-item col-sm-2 ">
      	<!-- <h1 style="text-decoration:underline;">more</h1>
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