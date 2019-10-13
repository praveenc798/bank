<html>
<head>
<style>
body{   
    background-image: url('images/basa.jpg'); 
    background-repeat: no-repeat;
    background-size: 130%; 
    background-position: center center;
}
.dropbtn {
    background-color: #504caf;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #504caf;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #f1f1f1}

.show {display:block;}
</style>
</head>
<body>
<body background="1444282908_banner2.jpg">
<h1 align=center ><B><font color="lavender">BANK OF INDIA</h1>
<div class="Dropdown">
<button onclick="myFunction()" class="dropbtn">Menu</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="home.php">Home</a>
</div>
</div>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script><!Contact html>
<html>
  <head>
    <title>Contact us!</title>
  </head>
  <body>
   <h1 align="center"><u><font color="white">ABOUT US</font></u></font></h1>
<p><h2><font color="LightGoldenRodYellow ">Bank of Inida is one of the leading private bank's in India. We offer class leading customer service and support and all our customer details are 256-bit encrypted and stored in our own servers. We are one of the 1st commercial bank to offer Biometric athutecation to our user's. We also offer various Loans, Credit cards, and many more.......</font></h2></p>
  </body>
</html>