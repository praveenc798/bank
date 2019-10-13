<html>
<head>
<style>
body{   
    background-image: url('images/cre.jpg'); 
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
echo "<table border=1 align=center><tr><td> employee id </td><td>employee name </td><td>employee position</td><td>employee phno</td><td>employee salary</td><td>employee branch id</td></tr>";

while($row=mysqli_fetch_assoc($res))
{
echo "<tr><td>".$row['e_id']."</td><td>".$row['e_name']."</td><td>".$row['e_position']."</td><td>".$row['e_pno']."</td><td>".$row['e_sal']."</td><td>".$row['e_bid']."</td></tr>";
}
echo "</table>";
}

else
{
echo " No results found for the give details";
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