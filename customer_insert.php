<html>
<head>
<style>
body{   
    background-image: url('images/cut.jpg'); 
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
$b_id=$_POST['b_id'];
$c_name=$_POST['c_name'];
$c_address=$_POST['c_address'];
$c_pno=$_POST['c_pno'];
$c_dob=$_POST['c_dob'];
$c_gender=$_POST['c_gender'];




$dbh=mysqli_connect("localhost","root","","test") or die("could not connect to mysql".mysql_error());

$sql="insert into customer(b_id,c_name,c_address,c_pno,c_dob,c_gender) values($b_id,'$c_name','$c_address','$c_pno','$c_dob','$c_gender')";
$res=mysqli_query($dbh,$sql);
if(!$res)
{
die('Could not insert ');
} 

echo "New customer added";
mysqli_close($dbh);
}
?>
<h1 align=center><font color="black">Enter new customer details...</font></h1>
<form method="POST" action="">
<table border=1 align=center>
<tr><td>Branch ID</td><td> <input type=text name=b_id> </td></tr>
<tr><td>Customer Name</td><td> <input type=text name=c_name> </td></tr>
<tr><td>Customer Address </td><td> <input type=text name=c_address> </td></tr>
<tr><td>Customer Pno</td><td> <input type=text name=c_pno> </td></tr>
<tr><td>Customer DOB </td><td> <input type=text name=c_dob> </td></tr>
<tr><td>Customer Gender </td><td> <input type=text name=c_gender> </td></tr>



<tr><td align=right><input type=submit name=submit value="Submit"></td><td><input type=reset Value="Reset"></td></tr>
</table>
</form>
<a href="home2.php" align="right">Home</a>

</body>
</html>
