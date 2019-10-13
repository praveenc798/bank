<?php

session_start();
if($_GET['logout']=1){unset($_SESSION['username']);}
if(isset($_POST['login_sub'])){
$dbh=mysqli_connect("localhost","root","","test")
or die("could not connect to mysql".mysql_error());

$username=$_POST['username'];
$password=$_POST['password'];
$sql="select * from users where username='$username' and password='$password'";
$res=mysqli_query($dbh,$sql);
$count=mysqli_num_rows($res);

if($count>0 && $res)
{
echo "Hi";
$_SESSION['user_name']="$username";
header("Location:home1.php");} else {echo "Invalid Username or Password";}
}
?>

<html>
<body>
<style>
body{   
    background-image: url('images/fancy.jpg'); 
    background-repeat: repeat-x;
    background-size: 95%; 
    background-position:center center;
}
</style>
</body>


<head>



</head>
<body>

<div id="user login" align="center"><h2><font color="white">User Login</h2>

<form method="post" action="login.php">
        <table>
          <tr>
            <td><font color="white">Username:</td>
            <td><input type="text" name="username" id="username"/></td>
          </tr>
          <tr>
            <td><font color="white">Password:</td>
            <td><input type="password" name="password" id="password"  /></td>
          </tr>
          <tr>
            <td align="right"></td>
            <td><input type="submit" name="login_sub" value="Login" onClick="return login_val()"/>
              <input type="reset" name="Reset" value="Reset"/></td>
          </tr>
           
        </table>
      </form>
	  <a href="home.php" align="center"><font color="white">Home</a>
</div>
</body>
</head>