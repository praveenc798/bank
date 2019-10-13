<html>
<head>
<style>
body{   
    background-image: url('images/niels.jpg'); 
    background-repeat: repeat-x;
    background-size: 100%; 
    background-position:center center;
}
</style></head>
<body>
<?php 


if($_SERVER["REQUEST_METHOD"]=="POST")

{
$l_id=$_POST['l_id'];


$dbh=mysqli_connect("localhost","root","","test") or die("could not connect to mysql".mysql_error());

$sql="select * from loan where l_id=$l_id";
$res=mysqli_query($dbh,$sql);
if(!$res)
{
die('Could not insert ');
} 
$count=mysqli_num_rows($res);
if($count>0)
{
$sql1="delete from loan where l_id=$l_id";
$res1=mysqli_query($dbh,$sql1);
echo "Loan paid succesfully";
} 

else
{
  echo "Loan already paid";
}

mysqli_close($dbh);
}
?>
<h1 align=center><font color="white">Search Details</font></h1>
<form method="POST" action="">
<table border=1 align=center>
<tr><td>Loan ID</td><td> <input type=text name=l_id> </td></tr>

<tr><td align=right><input type=submit name=submit value="Submit"></td><td><input type=reset Value="Reset"></td></tr>
</table>
</form>
<a href="home2.php" align="right">Home</a>
</body>
</html>