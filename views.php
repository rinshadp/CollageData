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
        <div class="row">
        <div class="col-md-2 col-md-offset-5">
        <?php
        $connection = mysqli_connect("localhost", "root", "", "nitc");

        $sql = "SELECT id, name , contact, department  FROM student";
        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result) > 0) {
        								echo '<table border=".1" align="middle" cellspacing="5"
        							      cellpadding="8" >
        								   <tr ><td class="row" align = "left"><b>TEACHER_ID</b></td>
        								   <td class="row" align = "left"><b>NAME</b></td>
        								   <td class="row" align = "left"><b>DEPARTMENT</b></td>
        								   <td class="row" align = "left"><b>PHONE_NO</b></td></tr>';

        							while($row = mysqli_fetch_assoc($result)){
        							 echo '<tr><td align="left">'.$row['id'].
        							     '</td><td align ="left">'.$row['name'].
        								 '</td><td align ="left">'.$row['department'].
        								 '</td><td align ="left">'.$row['contact'].'</tr>';
        							}
                    }

        mysqli_close($connection);
        ?>
      </div>
    </div>

<h3>
 <a href="adminpage.php" > back </a> <br>
 </h3>
 </head>
</html>
