<?php
session_start();
if(!isset($_SESSION['admin_name'])){
header("location: admin.php");
}

$error = "";

if(isset($_POST['submit'])){
  $conn = new mysqli("localhost", "root", "", "nitc");
  $pass=$_POST['password'];

  $sql = "UPDATE teacher SET password='$pass' WHERE id=".$_POST['id'];

  $result=$conn->query($sql);
          if($conn->affected_rows > 0)
          {
              $error= "<br> Data deleted updated";
          }
          else
          {
              $error= "wrong input<br>";
          }

$conn->close();


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
        <div class="row">
        <div class="col-md-2 col-md-offset-5">
          <form name = "myform" action=""  onsubmit="return validateForm()" method="post">
            <br> <br>
            <input type="number" name="id" placeholder="id" required> <br>
            <input type="password" name="password" placeholder="new password" required> <br>
            <input type="password" name="password1" placeholder="confirm password" required> <br>
            <input type="submit" name="submit" value="change">
          <?php echo $error ?>
          <script>
          function validateForm() {
              var x = document.forms["myform"]["password"].value;
              var y = document.forms["myform"]["password1"].value;
              if (x != y) {
                  alert("both pasword shuld match");
                return false;
              }
          }
</script>
<h3>
 <a href="adminpage.php" > back </a> <br>
 </h3>
 </div>
 </div>
 </head>
</html>
