<html>
<head>

<style>
body{   
    background-image: url('images/dep.jpg'); 
    background-repeat: repeat-x;
    background-size: 100%; 
    background-position:center center;
}
</style>
</head>
<body background="e.jpg">
<?php 


if($_SERVER["REQUEST_METHOD"]=="POST")

{
$acc_no=$_POST['acc_no'];
$d_id=$_POST['d_id'];

$dbh=mysqli_connect("localhost","root","","test") or die("could not connect to mysql".mysql_error());

$sql="select d.*,c.c_name from deposit d,customer c,account a where d.acc_no=$acc_no and c.c_id=a.c_id and a.acc_no=d.acc_no and d.d_id=$d_id";
$res=mysqli_query($dbh,$sql);
if(!$res)
{
die('Could not insert ');
} 

$count=mysqli_num_rows($res);
if($count>0)
{
echo "<table border=1 align=center><tr><td> Account Number </td><td> Deposit Amount </td><td>Deposit Id</td><td>Customer Name</td></tr>";

while($row=mysqli_fetch_assoc($res))
{
echo "<tr><td>".$row['acc_no']."</td><td>".$row['d_amount']."</td><td>".$row['d_id']."</td><td>".$row['c_name']."</td></tr>";
}
echo "</table>";
}

else
{
echo " No results found for the given details";
}

mysqli_close($dbh);
}
?>
<h1 align=center><font color="blue">Search Details</font></h1>
<form method="POST" action="">
<table border=1 align=center>
<tr><td>Account Number</td><td> <input type=text name=acc_no> </td></tr>
<tr><td>Deposit ID</td><td> <input type=text name=d_id> </td></tr>

<tr><td align=right><input type=submit name=submit value="Submit"></td><td><input type=reset Value="Reset"></td></tr>
</table>
</form>
<a href="home1.php" align="right"><font color="white">Home</a>
</body>
</html>