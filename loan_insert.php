<html>
<head>
<style>
body{   
    background-image: url('images/shar.jpg'); 
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
$l_type=$_POST['l_type'];
$l_amt=$_POST['l_amt'];
$l_int=$_POST['l_int'];
$l_duedate=$_POST['l_duedate'];

$dbh=mysqli_connect("localhost","root","","test") or die("could not connect to mysql".mysql_error());

$sql="insert into loan(c_id,l_type,l_amt,l_int,l_duedate) values($c_id,'$l_type',$l_amt,$l_int,'$l_duedate')";
$res=mysqli_query($dbh,$sql);
if(!$res)
{
die('Could not apply ');
} 

echo "Loan applied sucessfully.";
mysqli_close($dbh);
}
?>
<h1 align=center><font color="white">Please fill up the loan form...</font></h1>
<form method="POST" action="">
<table border=1 align=center>
<tr><td><font color="white">Customer ID </td><td> <input type=text name=c_id> </td></tr>
<tr><td><font color="white">Loan Type</td><td> <input type=text name=l_type> </td></tr>
<tr><td><font color="white">Loan Amount</td><td> <input type=text name=l_amt> </td></tr>
<tr><td><font color="white">Loan Interest</td><td> <input type=text name=l_int> </td></tr>
<tr><td><font color="white">Loan Repayment Date</td><td> <input type=text name=l_duedate> </td></tr>


<tr><td align=right><input type=submit name=submit value="Submit"></td><td><input type=reset Value="Reset"></td></tr>
</table>
</form>

<a href="home1.php" align="right"><font color="white">Home</a>
</body>
</html>
