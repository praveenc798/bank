<html>
<head>

<style>
body{   
    background-image: url('images/atm.jpg'); 
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
$acc_no=$_POST['acc_no'];
$w_id=$_POST['w_id'];

$dbh=mysqli_connect("localhost","root","","test") or die("could not connect to mysql".mysql_error());

$sql="select w.*,c.c_name from withdrawl w,customer c,account a where w.acc_no=$acc_no and c.c_id=a.c_id and a.acc_no=w.acc_no and w.w_id=$w_id";
$res=mysqli_query($dbh,$sql);
if(!$res)
{
die('Could not insert ');
} 

$count=mysqli_num_rows($res);
if($count>0)
{
echo "<table border=1 align=center><tr><td> Account Number </td><td> Withdrawl Amount </td><td>withdrawl id</td><td>Customer Name</td></tr>";

while($row=mysqli_fetch_assoc($res))
{
echo "<tr><td>".$row['acc_no']."</td><td>".$row['w_amount']."</td><td>".$row['w_id']."</td><td>".$row['c_name']."</td</tr>";
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
<h1 align=center><font color="white">Search Details</font></h1>
<form method="POST" action="">
<table border=1 align=center>
<tr><td><font color="white">Account Number</td><td> <input type=text name=acc_no> </td></tr>
<tr><td><font color="white">Withdrawl ID</td><td> <input type=text name=w_id> </td></tr>

<tr><td align=right><input type=submit name=submit value="Submit"></td><td><input type=reset Value="Reset"></td></tr>
</table>
</form>
<a href="home1.php" align="right"><font color="white">Home</a>
</body>
</html>