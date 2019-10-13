<html>
<head><style>
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
$acc_no=$_POST['acc_no'];
$c_id=$_POST['c_id'];

$dbh=mysqli_connect("localhost","root","","test") or die("could not connect to mysql".mysql_error());

$sql="select * from account where acc_no=$acc_no and c_id=$c_id";
$res=mysqli_query($dbh,$sql);
if(!$res)
{
die('Could not insert ');
} 

$count=mysqli_num_rows($res);
if($count>0)
{
echo "<table border=1 align=center><tr><td> Account Number</td><td> Customer ID </td><td>Account Type</td><td>Account Bal</td></tr>";

while($row=mysqli_fetch_assoc($res))
{
echo "<tr><td>".$row['acc_no']."</td><td>".$row['c_id']."</td><td>".$row['acc_type']."</td><td>".$row['acc_bal']."</td></tr>";
}
echo "</table>";
}
else
{
echo " No results found for the given details ";
}

mysqli_close($dbh);
}
?>
<h1 align=center><font color="white">Search Details</font></h1>
<form method="POST" action="">
<table border=1 align=center>
<tr><td><font color="white">Account Number</td><td> <input type=text name=acc_no> </td></tr>
<tr><td><font color="white">Customer ID</td><td> <input type=text name=c_id> </td></tr>

<tr><td align=right><input type=submit name=submit value="Submit"></td><td><input type=reset Value="Reset"></td></tr>
</table>
</form>

<a href="home1.php" align="right"><font color="white">Home</a>
</body>
</html>

