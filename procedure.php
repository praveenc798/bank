<html>
<head>
<style>
body{   
    background-image: url('images/h.jpg'); 
    background-repeat: repeat-x;
    background-size: 100%; 
    background-position:center center;
}
</style></head>
<body>
<?php 


if($_SERVER["REQUEST_METHOD"]=="POST")

{
$l_id=$_POST['l_id'];


$dbh=mysqli_connect("localhost","root","","test") or die("could not connect to mysql".mysql_error());

$sql="select * from loan where l_id=$l_id";
$res=mysqli_query($dbh,$sql);
if(!$res)
{
die('Could not insert ');
} 

$count=mysqli_num_rows($res);
if($count>0)
{
echo "<table border=1 align=center><tr><td> customer id </td><td>loan id </td><td>loan type</td><td>loan amount</td><td>loan interest</td><td>loan due date</td></tr>";

while($row=mysqli_fetch_assoc($res))
{
echo "<tr><td>".$row['c_id']."</td><td>".$row['l_id']."</td><td>".$row['l_type']."</td><td>".$row['l_amt']."</td><td>".$row['l_int']."</td><td>".$row['l_duedate']."</td></tr>";
}
echo "</table>";
}

else
{
echo " No results found for ";
}
$sql="call statusupdate($l_id)";
$res=mysqli_query($dbh,$sql);
if(!$res)
{
die('Could not insert ');
} 

$sql="select * from loan where l_id=$l_id";
$res=mysqli_query($dbh,$sql);
if(!$res)
{
die('Could not insert ');
} 

$count=mysqli_num_rows($res);
if($count>0)
{
echo "<table border=1 align=center><tr><td> customer id </td><td>loan id </td><td>loan type</td><td>loan amount</td><td>loan interest</td><td>status</td></tr>";

while($row=mysqli_fetch_assoc($res))
{
echo "<tr><td>".$row['c_id']."</td><td>".$row['l_id']."</td><td>".$row['l_type']."</td><td>".$row['l_amt']."</td><td>".$row['l_int']."</td><td>".$row['status']."</td></tr>";
}
echo "</table>";
}

else
{
echo " No results found for ";
}



mysqli_close($dbh);
}
?>
<h1 align=center><font color="white">Search Details</font></h1>
<form method="POST" action="">
<table border=1 align=center>
<tr><td>Loan ID</td><td> <input type=text name=l_id> </td></tr>


<tr><td align=right><input type=submit name=submit value="Submit"></td><td><input type=reset Value="Reset"></td></tr>
</table>
</form>
<a href="home2.php" align="right">Home</a>
</body>
</html>