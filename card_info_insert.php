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
$acc_no=$_POST['acc_no'];
$c_type=$_POST['c_type'];

$dbh=mysqli_connect("localhost","root","","test") or die("could not connect to mysql".mysql_error());

$sql="insert into card_info(acc_no,c_type) values($acc_no,'$c_type')";
$res=mysqli_query($dbh,$sql);
if(!$res)
{
die('Could not insert ');
} 

echo "New card created";
mysqli_close($dbh);
}
?>
<h1 align=center><font color="white">Enter new card details...</font></h1>
<form method="POST" action="">
<table border=1 align=center>
<tr><td>Account Number</td><td> <input type=text name=acc_no> </td></tr>
<tr><td>Card Type</td><td> <input type=text name=c_type> </td></tr>

<tr><td align=right><input type=submit name=submit value="Submit"></td><td><input type=reset Value="Reset"></td></tr>
</table>
</form>

<a href="home2.php" align="right">Home</a>
</body>
</html>
