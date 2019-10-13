<html>
<head>
<style>
body{   
    background-image: url('images/timon2.jpg'); 
    background-repeat: repeat-x;
    background-size: 100%; 
    background-position:center center;
}
</style>

</head>
<body background="f.jpg">
<?php 





$dbh=mysqli_connect("localhost","root","","test") or die("could not connect to mysql".mysql_error());

$sql="select * from customer";
$res=mysqli_query($dbh,$sql);
if(!$res)
{
die('Could not insert ');
} 

$count=mysqli_num_rows($res);
if($count>0)
{
echo "<table border=1 bg colour=DarkSlateGray align=center><tr><td> Branch ID </td><td> Customer Id </td><td>Customer Name</td><td>Customer Address</td><td>Customer Phno</td><td>Customer DOB</td><td>Customer Gender</td></tr>";

while($row=mysqli_fetch_assoc($res))
{
echo "<tr><td>".$row['b_id']."</td><td>".$row['c_id']."</td><td>".$row['c_name']."</td><td>".$row['c_address']."</td><td>".$row['c_pno']."</td><td>".$row['c_dob']."</td><td>".$row['c_gender']."</td></tr>";
}
echo "</table>";
}
else
{
echo " No results found for ";
}

mysqli_close($dbh);

?>
<a href="home2.php" align="right">Home</a>
</html>
