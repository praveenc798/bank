<html>

<head>
<style>
body{   
    background-image: url('images/robert.jpg'); 
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
$b_name=$_POST['b_name'];
$b_address=$_POST['b_address'];

$dbh=mysqli_connect("localhost","root","","test") or die("could not connect to mysql".mysql_error());

$sql="insert into branch(b_id,b_name,b_address) values($b_id,'$b_name','$b_address')";
$res=mysqli_query($dbh,$sql);
if(!$res)
{
die('Could not insert ');
} 

echo "New branch data created";
mysqli_close($dbh);
}
?>
<h1 align=center><font color="white">Enter new bramch details...</font></h1>
<form method="POST" action="">
<table border=1 align=center>
<tr><td>Branch ID </td><td> <input type=text name=b_id> </td></tr>
<tr><td>Branch Name</td><td> <input type=text name=b_name> </td></tr>
<tr><td>Branch Address</td><td> <input type=text name=b_address> </td></tr>


<tr><td align=right><input type=submit name=submit value="Submit"></td><td><input type=reset Value="Reset"></td></tr>
</table>
</form>

<a href="home2.php" align="right">Home</a>
</body>
</html>
