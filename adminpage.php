<?php
session_start();
if(!isset($_SESSION['admin_name'])){
header("location: admin.php");
}
?>

<html>
<head>
  <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
  <link href="css/style.css" type="text/css" rel="stylesheet">
  <script src="./js/jquery-1.11.1.min.js"></script>
</head>
<body>
  <div class="header">
  		<div class="container">
        <div class="row">
          <div class="col-md-2">
              <a class="navbar-brand" href="index.html"><img style="padding-left: 90px;" src="images/nitc.png" height="100"></a>
          </div>
          <div class="col-md-9">
            <h1 class="nat">National Institute of Technology, Calicut</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="contaier">
  				<div class="navbar navbar-default">
  					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
  						<ul class="nav navbar-nav navbar-right">
              <li><a class="hvr-overline-from-center " href="index.html">Home</a></li>
							<li><a class="hvr-overline-from-center " href="about.html">About</a></li>
							<li><a class="hvr-overline-from-center " href="academics.html">Academics</a></li>
							<li><a class="hvr-overline-from-center " href="login1.php">Login</a></li>
							<li><a class="hvr-overline-from-center " href="contact.html">Contact</a></li>
  						</ul>
  					</div>
  				</div>
  			</div>

<div style="padding-left: 50%;" >
<h3> <br>
<a href="viewt.php" > View Teacher</a> <br>
<a href="addt.php" > Add Teacher </a> <br>
<a href="deletet.php" >Delete Teacher </a> <br>
<a href="change.php" >Change Password </a> <br>
<br><br>
<a href="views.php" > View Student</a> <br>
<a href="adds.php" > Add Student </a> <br>
<a href="deletes.php" >Delete Student </a> <br>
<br>
<a href="logout.php" > logout </a> <br></h3>
</div>

</head>
</html>
