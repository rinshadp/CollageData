<?php
include('session.php');
?>
<!DOCTYPE html>

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
        <b >Welcome : <i><?php echo $login_session; ?></i></b><br>
        <b ><a href="logout.php">Log Out</a></b>
        </div>

        <div class="row">
      <div class="col-md-2 col-md-offset-5">
        <?php
					if(isset($_SESSION['dpt'])){
						$user = $login_session;
						$dpt=$_SESSION['dpt'];
                $connection = mysqli_connect("localhost", "root", "", "nitc");
	          			$query = "SELECT id,name,contact,department FROM student  WHERE department='$dpt'";
                  //echo $query;
	          			$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) > 0) {
								echo '<table border=".1" align="middle" cellspacing="5"
							      cellpadding="8" >
								   <tr ><td class="row" align = "left"><b>STUDENT_ID</b></td>
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
            }
        ?>
      </div>
  </div>

</body>
</html>
