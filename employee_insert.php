<html>
<head>

<style>
body{   
    background-image: url('images/hunter.jpg'); 
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
$e_name=$_POST['e_name'];
$e_position=$_POST['e_position'];
$e_pno=$_POST['e_pno'];
$e_sal=$_POST['e_sal'];
$e_bid=$_POST['e_bid'];


$dbh=mysqli_connect("localhost","root","","test") or die("could not connect to mysql".mysql_error());

$sql="insert into employees(e_name,e_position,e_pno,e_sal,e_bid) values('$e_name','$e_position','$e_pno',$e_sal,$e_bid)";
$res=mysqli_query($dbh,$sql);
if(!$res)
{
die('Could not insert ');
} 

echo "New employe data created ";
mysqli_close($dbh);
}
?>
<h1 align=center><font color="white">Enter new employe details....</font></h1>
<form method="POST" action="">
<table border=1 align=center>
<tr><td><font color="blue">Employee Name </td><td> <input type=text name=e_name> </td></tr>
<tr><td><font color="blue">Employee Position</td><td> <input type=text name=e_position> </td></tr>
<tr><td><font color="blue">Employee Phno </td><td> <input type=text name=e_pno> </td></tr>
<tr><td><font color="blue">Employee Salary</td><td> <input type=text name=e_sal> </td></tr>
<tr><td><font color="blue">Branch ID</td><td> <input type=text name=e_bid> </td></tr>


<tr><td align=right><input type=submit name=submit value="Submit"></td><td><input type=reset Value="Reset"></td></tr>
</table>
</form>
<a href="home2.php" align="right">Home</a>
</body>
</html>
