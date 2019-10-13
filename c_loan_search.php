<html>
<head>
<style>
body{   
    background-image: url('images/art.jpg'); 
    background-repeat: repeat-x;
    background-size: 100%; 
    background-position:center center;
}
</style></head>
<body>
<?php 


if($_SERVER["REQUEST_METHOD"]=="POST")

{
$c_id=$_POST['c_id'];
$l_id=$_POST['l_id'];

$dbh=mysqli_connect("localhost","root","","test") or die("could not connect to mysql".mysql_error());

$sql="select * from loan where c_id=$c_id and l_id=$l_id";
$res=mysqli_query($dbh,$sql);
if(!$res)
{
die('Could not insert ');
} 

$count=mysqli_num_rows($res);
if($count>0)
{
echo "<table border=1 align=center><tr><td> Customer ID </td><td>Loan ID</td><td>Loan Type</td><td>Loan Amount</td><td>Loan Interest</td><td>Loan Due Date</td></tr>";

while($row=mysqli_fetch_assoc($res))
{
echo "<tr><td>".$row['c_id']."</td><td>".$row['l_id']."</td><td>".$row['l_type']."</td><td>".$row['l_amt']."</td><td>".$row['l_int']."</td><td>".$row['l_duedate']."</td></tr>";
}
echo "</table>";
}

else
{
echo " No results found for the given details";
}

mysqli_close($dbh);
}
?>
<h1 align=center><font color="white">Search Details</font></h1>
<form method="POST" action="">
<table border=1 align=center>
<tr><td>Customer ID</td><td> <input type=text name=c_id> </td></tr>
<tr><td>LOAN ID</td><td> <input type=text name=l_id> </td></tr>

<tr><td align=right><input type=submit name=submit value="Submit"></td><td><input type=reset Value="Reset"></td></tr>
</table>
</form>
<a href="home1.php" align="right"><font color="white">Home</a>
</body>
</html>