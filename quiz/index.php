<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<title>Quiz Mania</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
  height: 100%;
  color: #777;
  line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1 {
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
  background-image: url('geometric1.jpg');
  min-height: 100%;
}



.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1600px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
    min-height: 400px;
  }
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button">HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small"><!-- <i class="fa fa-user"></i> --> QUIZ</a>
    <a href="index.php?logout='1'" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">
      LOGOUT
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">QUIZ</a>
    <a href="index.php?logout='1'" class="w3-bar-item w3-button">LOGOUT</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">QUIZ MANIA</span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">Choose Your Category</h3>


<div class="w3-row">
    <div class="w3-card-4 w3-margin w3-white">
      <img src="gk.jpg" alt="Nature" style="width:100%">
    <div class="w3-container">
      <h3><b>General Knowledge</b></h3>
      <h5>Do you know what's going around the world?</h5>
    </div>

    <div class="w3-container">
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><a href="general.php" class="w3-button w3-padding-large w3-white w3-border w3-hover-red">Start Quiz »</a></p>
        </div>
        
      </div>
    </div>
    </div>


    

  <div class="w3-card-4 w3-margin w3-white">
      <img src="avengers.jpg" alt="Nature" style="width:100%">
    <div class="w3-container">
      <h3><b>Avengers</b></h3>
      <h5>How much do you know about Earth's Mightiest Heroes?</h5>
    </div>

    <div class="w3-container">
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><a href="quiz.php" class="w3-button w3-padding-large w3-white w3-border w3-hover-red">Start Quiz »</a></p>
        </div>
        
      </div>
    </div>
  </div>


</div>





  <div class="w3-row">
    <div class="w3-card-4 w3-margin w3-white">
    <img src="harrypotter.jpg" alt="Nature" style="width:100%">
    <div class="w3-container">
      <h3><b>Harry Potter</b></h3>
      <h5>Do you know about greatest wizards of all time. Let's Check out!</h5>
    </div>

    <div class="w3-container">
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><a href="harry.php" class="w3-button w3-padding-large w3-white w3-border w3-hover-red">Start Quiz »</a></p>
        </div>
        
      </div>
    </div>
  </div>




    <!-- Hide this text on small devices -->
  <div class="w3-card-4 w3-margin w3-white">
    <img src="football.jpg" alt="Nature" style="width:100%">
    <div class="w3-container">
      <h3><b>Football</b></h3>
      <h5>Do you have, what it needs, to be a greatest football fan of all time!</h5>
    </div>

    <div class="w3-container">
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><a href="football.php" class="w3-button w3-padding-large w3-white w3-border w3-hover-red">Start Quiz »</a></p>
        </div>
        
      </div>
    </div>
  </div>

</div>






<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off w3-margin">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;  
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>