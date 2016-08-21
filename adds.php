<?php
session_start();
if(!isset($_SESSION['admin_name'])){
header("location: admin.php");
}

$error = "";

if(isset($_POST['submit'])){
  $connection = mysql_connect("localhost", "root", "");
  $db = mysql_select_db("nitc", $connection);
  $query = mysql_query("INSERT INTO `student` (`id`, `name`, `contact`, `department`) VALUES (NULL, '$_POST[name]', '$_POST[contact]', '$_POST[dep]')
", $connection);
  //$rows = mysql_num_rows($query);
  if ($query == 1) {
    $error = "added";
  } else {
    $error = "something went wrong";
  }

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
<div style="text-align: center;">
<form name = "myform" action=""   method="post">
  <br>
  <input type="text" name="name" placeholder="Name" required> <br>
  <input type="number" name="contact" min="1000000000" max="9999999999" placeholder="Phone NO" required> <br>
  <input type="text" name="dep" placeholder="Department" required ><br>

  <input type="submit" name="submit" value="add">
<?php echo $error ?>
</form>
<h3>
 <a href="adminpage.php" > back </a> <br>
 <h3>
</div>


 </head>
</html>
