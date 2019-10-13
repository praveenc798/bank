<html>
<head>


<style>
body{   
    background-image: url('images/rea.jpg'); 
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
$c_id=$_POST['c_id'];
$acc_type=$_POST['acc_type'];
$acc_bal=$_POST['acc_bal'];


$dbh=mysqli_connect("localhost","root","","test") or die("could not connect to mysql".mysql_error());

$sql="insert into account(c_id,acc_type,acc_bal) values($c_id,'$acc_type',$acc_bal)";
$res=mysqli_query($dbh,$sql);
if(!$res)
{
die('Could not insert ');
} 

echo "New account created";
mysqli_close($dbh);
}
?>
<h1 align=center><font color="white">Enter new account details...</font></h1>
<form method="POST" action="">
<table border=1 align=center>
<tr><td>Customer ID</td><td> <input type=text name=c_id> </td></tr>
<tr><td>Account Type</td><td> <input type=text name=acc_type> </td></tr>
<tr><td>Account Balance </td><td> <input type=text name=acc_bal> </td></tr>


<tr><td align=right><input type=submit name=submit value="Submit"></td><td><input type=reset Value="Reset"></td></tr>
</table>
</form>

<a href="home2.php" align="right">Home</a>
</body>
</html>
