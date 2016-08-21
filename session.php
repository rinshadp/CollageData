<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("nitc", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select name , department from teacher where name='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['name'];
$_SESSION['dpt']=$row['department'];
//echo $_SESSION['dpt'];
mysql_close($connection);
if(!isset($login_session)){
 // Closing Connection
header('Location: login1.php'); // Redirecting To Home Page
}
?>
