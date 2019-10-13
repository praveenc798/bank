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
<body>
<?php 





$dbh=mysqli_connect("localhost","root","","test") or die("could not connect to mysql".mysql_error());

$sql="select * from withdrawl";
$res=mysqli_query($dbh,$sql);
if(!$res)
{
die('Could not insert ');
} 

$count=mysqli_num_rows($res);
if($count>0)
{
echo "<table border=1 align=center><tr><td> Account Number</td><td> Amount</td><td>Withdrawl ID</td></tr>";

while($row=mysqli_fetch_assoc($res))
{
echo "<tr><td>".$row['acc_no']."</td><td>".$row['w_amount']."</td><td>".$row['w_id']."</td</tr>";
}
echo "</table>";
}
else
{
echo " No results found for the given details";
}

mysqli_close($dbh);

?>
<a href="home2.php" align="right">Home</a>
</html>
