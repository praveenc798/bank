<html>
<head>
<style>
body{   
    background-image: url('images/raw.jpg'); 
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
<h1 align=center ><B>BANK OF INDIA</h1>
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
    <h1><font color="white">Email ID - customersupport@bankofindia</h1>
    <h1><font color="white">Phone - 9738263534/9449335832</h1>
    <h1><font color="white">Adress - BOI Head Office Gottigere Bangalore-560083</h1>
  </body>
</html>