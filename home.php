<?php
session_start();
if($_GET['logout']=1){unset($_SESSION['username']);}

if(isset($_POST['login_sub'])){
$dbh=mysqli_connect("localhost","root","","test")
or die("could not connect to mysql".mysql_error());

$username=$_POST['username'];
$password=$_POST['password'];
$sql="select * from employeelogin where username='$username' and password='$password'";
$res=mysqli_query($dbh,$sql);
$count=mysqli_num_rows($res);
if($count>0)
{
$_SESSION['username']='$username';
echo " '$username'";
}

 else
{
echo "Invalid Username or Password";}
}
?>



<html>
<head>
<link rel="stylesheet" type="text/css" href="home.css" media="screen" />

</head>
<body >
</br>
</br>

<h1 class="main-head">BANK OF INDIA</h1>
<h2 class="main-head">The people's bank.......</h1>
<?php if(isset($_SESSION['username'])){

?>





<div  class="Dropdown">
<button onclick="myFunction()" class="dropbtn">Menu</button>

  <div id="myDropdown" class="dropdown-content">


 
<a href="display.php">Display Detials</a>
<a href="search.php">Search Detials</a>  
<a href="create.php">Create</a> 
<a href="delete.php">Delete</a> 
<a href="http://localhost/bank/home.php?logout=1">Logout</a> 


<?php }
else{ ?>

 </div>
</center>
  </div>





<div class="Dropdown">
<button onclick="myFunction()" class="dropbtn">Menu</button>

  <div id="myDropdown" class="dropdown-content">

<a href="login.php">User Login</a>

<a href="employeelogin.php">Employe login</a>


<a href="create_user.php">Add new user</a>

<a href="details.php">About us</a>

<a href="contact.php">Contact us</a>

</div>
</div>

<?php } ?>

<script src="script.js"></script>

</body>
</html>
