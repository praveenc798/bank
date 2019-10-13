<html>
<head>
<style>
body{   
    background-image: url('images/bpp.jpg'); 
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
$to_acc_no=$_POST['to_acc_no'];
$w_amount=$_POST['w_amount'];

$dbh=mysqli_connect("localhost","root","","test") or die("could not connect to mysql".mysql_error());

$sql="insert into withdrawl(acc_no,w_amount) values($acc_no,$w_amount)";
$res=mysqli_query($dbh,$sql);
if(!$res)
{
die('Could not insert ');
} 

echo "inserted";
$a="update account set acc_bal=(acc_bal-$w_amount) where acc_no=$acc_no";

$re=mysqli_query($dbh,$a);
if(!$re)
{
die('Could not insert ');
} 

echo "Product Details Updated ";



$sql="insert into deposit(acc_no,d_amount) values($to_acc_no,$w_amount)";
$res=mysqli_query($dbh,$sql);
if(!$res)
{
die('Could not insert ');
} 

echo "Inserted";
$a="update account set acc_bal=(acc_bal+$w_amount) where acc_no=$to_acc_no";

$re=mysqli_query($dbh,$a);
if(!$re)
{
die('Could not tranfer the money ');
} 

echo "Tranfer sucessful ";






mysqli_close($dbh);
}
?>
<h1 align=center><font color="white">Enter details for money transfer....</font></h1>
<form method="POST" action="">
<table border=1 align=center>
<tr><td><font color="white">Account Number</td><td> <input type=text name=acc_no> </td></tr>
<tr><td><font color="white">Transfer Person Account Number</td><td> <input type=text name=to_acc_no> </td></tr>
<tr><td><font color="white">Transfer Amount</td><td> <input type=text name=w_amount> </td></tr>

<tr><td align=right><input type=submit name=submit value="Submit"></td><td><input type=reset Value="Reset"></td></tr>



</table>
</form>
<a href="home1.php" align="right"><font color="white">Home</a>
</body>
</html>
