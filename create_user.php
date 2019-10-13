<html>
<head>



<style>
body{   
    background-image: url('images/pixel.jpg'); 
    background-repeat: repeat-x;
    background-size: 100%; 
    background-position:center center;
}
</style>

</head>
<body>
<?php 
if($_SERVER["REQUEST_METHOD"]=="POST")

{
$username=$_POST['username'];
$password=$_POST['password'];


$dbh=mysqli_connect("localhost","root","","test") or die("could not connect to mysql".mysql_error());

$sql="insert into users values('$username','$password')";
$res=mysqli_query($dbh,$sql);
if(!$res)
{
die('Could not insert ');
} 

echo "user  inserted ";
mysqli_close($dbh);
}
?>
<h1 align=center><font color="white">New User</font></h1>
<form method="POST" action="">
<table border=1 align=center>
<tr><td>Username</td><td> <input type=text name=username> </td></tr>
<tr><td>Password</td><td> <input type=text name=password> </td></tr>



<tr><td align=right><input type=submit name=submit value="Submit"></td><td><input type=reset Value="Reset"></td></tr>
</table>
</form>
<a href="home.php" align="right">Home</a>
</body>
</html>
