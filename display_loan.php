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

$sql="select * from loan";
$res=mysqli_query($dbh,$sql);
if(!$res)
{
die('Could not insert ');
} 

$count=mysqli_num_rows($res);
if($count>0)
{
echo "<table border=1 align=center><tr><td> Customer ID</td><td> Loan ID </td><td>Loan Type</td><td>Loan Amount</td><td>Loan Interest</td><td>Loan Due Date</td></tr>";

while($row=mysqli_fetch_assoc($res))
{
echo "<tr><td>".$row['c_id']."</td><td>".$row['l_id']."</td><td>".$row['l_type']."</td><td>".$row['l_amt']."</td><td>".$row['l_int']."</td><td>".$row['l_duedate']."</td></tr>";
}
echo "</table>";
}
else
{
echo " No results found for the give details ";
}

mysqli_close($dbh);

?>
<a href="home2.php" align="right">Home</a>
</html>
