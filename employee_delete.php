<html>
<head>
<style>
body{   
    background-image: url('images/roy.jpg'); 
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
$e_id=$_POST['e_id'];


$dbh=mysqli_connect("localhost","root","","test") or die("could not connect to mysql".mysql_error());

$sql="select * from employees where e_id=$e_id";
$res=mysqli_query($dbh,$sql);
if(!$res)
{
die('Could not insert ');
} 

$count=mysqli_num_rows($res);
if($count>0)
{
$sql1="delete from employees where e_id=$e_id";
$res1=mysqli_query($dbh,$sql1);
echo "Removed succesfully";
}

else
{
echo " No results found for the given details";
}

mysqli_close($dbh);
}
?>
<h1 align=center><font color="white">Search Details</font></h1>
<form method="POST" action="">
<table border=1 align=center>
<tr><td>Employee ID</td><td> <input type=text name=e_id> </td></tr>


<tr><td align=right><input type=submit name=submit value="Submit"></td><td><input type=reset Value="Reset"></td></tr>
</table>
</form>
<a href="home2.php" align="right">Home</a>
</body>
</html>