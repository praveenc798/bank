<html>
<head>
<style>
body{   
    background-image: url('images/rawp.jpg'); 
    background-repeat: repeat-x;
    background-size: 100%; 
    background-position:center center;
}
</style>

</head>
<body background="b.jpg">
<?php 


if($_SERVER["REQUEST_METHOD"]=="POST")

{
$c_no=$_POST['c_no'];
$acc_no=$_POST['acc_no'];

$dbh=mysqli_connect("localhost","root","","test") or die("could not connect to mysql".mysql_error());

$sql="select * from card_info where c_no=$c_no and acc_no=$acc_no";
$res=mysqli_query($dbh,$sql);
if(!$res)
{
die('Could not insert ');
} 

$count=mysqli_num_rows($res);
if($count>0)
{
echo "<table border=1 align=center><tr><td> Account Number </td><td> Card Number </td><td>Card Type</td></tr>";

while($row=mysqli_fetch_assoc($res))
{
echo "<tr><td>".$row['acc_no']."</td><td>".$row['c_no']."</td><td>".$row['c_type']."</td></tr>";
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
<tr><td><font color="yellow">Card Number</td><td> <input type=text name=c_no> </td></tr>
<tr><td><font color="yellow">Account Number</td><td> <input type=text name=acc_no> </td></tr>

<tr><td align=right><input type=submit name=submit value="Submit"></td><td><input type=reset Value="Reset"></td></tr>
</table>
</form>
<a href="home1.php" align="center"><font color="white">Home</a>
</body>
</html>