<?php
include('login.php'); // Includes Login Script
//session_start();
if(isset($_SESSION['admin_name'])){
header("location: adminpage.php");
}

if(isset($_SESSION['login_user'])){
header("location: profile.php");
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
              <a class="navbar-brand" href="index.html"><img style="padding-left: 90;" src="images/nitc.png" height="100"></a>
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

        <div clas="container">
          <form class="form-2" action="" method="post">
              <h1><span class="log-in">Log in</span> </h1>
              <p class="float">
                <label for="login"><i class="icon-user"></i>Username</label>
                <input type="text" name="username" placeholder="Username">
              </p>
              <p class="float">
                <label for="password"><i class="icon-lock"></i>Password</label>
                <input type="password" name="password" placeholder="Password" class="showpassword">
              </p>
              <?php echo '<p style="color:red">' . $error . "</p>"; ?>
              <p class="clearfix">
                <input type="submit" name="submit" value="Log in">
              </p>
    <script>
  $(function(){
	$(".showpassword").each(function(index,input) {
		var $input = $(input);
		$("<p class='opt'/>").append(
			$("<input type='checkbox' class='showpasswordcheckbox' id='showPassword' />").click(function() {
				var change = $(this).is(":checked") ? "text" : "password";
				var rep = $("<input placeholder='Password' type='" + change + "' />")
					.attr("id", $input.attr("id"))
					.attr("name", $input.attr("name"))
					.attr('class', $input.attr('class'))
					.val($input.val())
					.insertBefore($input);
				$input.remove();
				$input = rep;
			 })
		).append($("<label for='showPassword'/>").text("Show password")).insertAfter($input.parent());
	});
});

$('#showPassword').click(function(){
	if($("#showPassword").is(":checked")) {
		$('.icon-lock').addClass('icon-unlock');
		$('.icon-unlock').removeClass('icon-lock');
	} else {
		$('.icon-unlock').addClass('icon-lock');
		$('.icon-lock').removeClass('icon-unlock');
	}
});
</script>
      </form>
        </div>
        <div style="padding-left: 33%;">
          <p class="clearfix">
            <a href="admin.php" class="log-admin">Log in as Admin</a>
          </p>
        </div>


  </body>
  </html>
