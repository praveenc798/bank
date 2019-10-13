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
<body background="c.jpg">
<?php 





$dbh=mysqli_connect("localhost","root","","test") or die("could not connect to mysql".mysql_error());

$sql="select * from account";
$res=mysqli_query($dbh,$sql);
if(!$res)
{
die('Could not insert ');
} 

$count=mysqli_num_rows($res);
if($count>0)
{
echo "<table border=1 align=center><tr><td> Account Number</td><td> Customer ID </td><td>Account Type</td><td>Account Balance</td></tr>";

while($row=mysqli_fetch_assoc($res))
{
echo "<tr><td>".$row['acc_no']."</td><td>".$row['c_id']."</td><td>".$row['acc_type']."</td><td>".$row['acc_bal']."</td></tr>";
}
echo "</table>";
}
else
{
echo " No results found for the given details ";
}

mysqli_close($dbh);

?>
<a href="home2.php" align="right">Home</a>
</html>
