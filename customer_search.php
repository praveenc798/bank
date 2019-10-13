<html>
<head>
<style>
body{   
    background-image: url('images/cre.jpg'); 
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


$dbh=mysqli_connect("localhost","root","","test") or die("could not connect to mysql".mysql_error());

$sql="select * from customer where c_id=$c_id";
$res=mysqli_query($dbh,$sql);
if(!$res)
{
die('Could not insert ');
} 

$count=mysqli_num_rows($res);
if($count>0)
{
echo "<table border=1 align=center><tr><td> branch id </td><td> Customer ID </td><td>Customer Name</td><td>Customer Address</td><td>Customer Phno</td><td>Customer DOB</td><td>Customer Gender</td></tr>";

while($row=mysqli_fetch_assoc($res))
{
echo "<tr><td>".$row['b_id']."</td><td>".$row['c_id']."</td><td>".$row['c_name']."</td><td>".$row['c_address']."</td><td>".$row['c_pno']."</td><td>".$row['c_dob']."</td><td>".$row['c_gender']."</td></tr>";
}
echo "</table>";
}

else
{
echo " No results found for the given detials ";
}

mysqli_close($dbh);
}
?>
<h1 align=center><font color="white">Search Details</font></h1>
<form method="POST" action="">
<table border=1 align=center>
<tr><td>Customer ID</td><td> <input type=text name=c_id> </td></tr>


<tr><td align=right><input type=submit name=submit value="Submit"></td><td><input type=reset Value="Reset"></td></tr>
</table>
</form>
<a href="home2.php" align="right">Home</a>
</body>
</html>