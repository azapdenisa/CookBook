<?php 
  include('functions.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Tasty Therapy</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="../style.css">
<link rel="stylesheet" type="text/css" href="styleLogin.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
    height: 100%;
    line-height: 1.8;
}
/* Full height image header */
.bgimg-1 {
    background-position: center;
    background-size: cover;
    background-image: url("../images/bgimg3.jpg");
    min-height: 100%;
}
.w3-bar .w3-button {
    padding: 16px;
}
.a:hover, a:link{
  text-decoration: none;
}
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide" >HOME</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button"><i class="fas fa-question"></i> ABOUT</a>
      <a href="../recipes/recipes.php" class="w3-bar-item w3-button"><i class="fas fa-utensils"></i></i></i> RECIPES</a>
      <a href="#team" class="w3-bar-item w3-button"><i class="fas fa-concierge-bell"></i></i> CHEFS</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
      <?php if (isAdmin()==true) : ?>
        <a href="../login/home.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fas fa-clipboard-list"></i> ADMIN MENU</a>
        <?php endif ?>
      
      <a href="index.php?logout='1'"><button type="submit" class="w3-bar-item w3-button" name="logout_btn">
      <i class="fas fa-user-circle"></i>
	      <?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>
					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
					</small>
					<?php endif ?> 
	 
	        Logout</a></button>
      </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">RECIPES</a>
  <a href="../recipes/recipes.php" onclick="w3_close()" class="w3-bar-item w3-button">CHEFS</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
  <?php if (isAdmin()==true) : ?>
        <a href="../login/home.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fas fa-clipboard-list"></i> ADMIN MENU</a>
        <?php endif ?>
      
  <a href="index.php?logout='1'"><button type="submit" class="w3-bar-item w3-button" name="logout_btn">
      <i class="fas fa-user-circle"></i>
	      <?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>
					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
					</small>
					<?php endif ?> 
	 
	        Logout</a></button>
      
	 
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Ready for some cooking?</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Ready for come cooking?</span><br>
    <span class="w3-large">This planet of ours has some mind-blowing flavours and surprises and we have recipes from all the corners of it. </span>
    <p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Get to know us</a></p>
  </div> 
 
</header>

<!-- About Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="about">
  <h3 class="w3-center">ABOUT THE IDEA</h3>
  <p class="w3-center w3-large">Key features of our virtual CookBook</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-third">
      <i class="fa fa-lightbulb w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Innovation</p>
      <p>Our chefs are constantly coming up with new and unique ideas to make sure you never get bored in the kitchen!</p>
    </div>
    <div class="w3-third">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Passion</p>
      <p>We love the entire process. Everything from the conceptual stages of planning and preparation, to the actual cooking, and of course the ritual of sharing a meal are passions of ours. </p>
    </div>
    <div class="w3-third">
      <i class="fas fa-book-reader w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Accessibility</p>
      <p>There's no need for dozens of books in your cupboards anymore, you have all your ideas in one place, easy to access anywhere, at any time.</p>
    </div>
  </div>
</div>

<!-- Recipes -->
<br><br>
<div class="w3-container " style="padding:15px 25px">
  <h3 class="w3-center">THE RECIPES</h3>
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>Ready for some serious inspo?</h3>
      <p>Hundreds of recipes are waiting for you!</p>
      <p><a href="../recipes/recipes.php" class="w3-button w3-black"><i class="fa fa-th"> </i> Start browsing</a></p>
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="../images/bgimg.jpg" alt="Buildings" style="width:75%; float:left; margin:40px" >
    </div>
  </div>
</div>



<!-- Team Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="team">
  <h3 class="w3-center">THE CHEFS</h3>
  <p class="w3-center w3-large">The minds behind it all</p>
  <div class="w3-row-padding w3-grayscale-min" style="margin-top:64px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="../images/chef1.jpg" alt="John" style="width:100%">
        <div class="w3-container">
          <h3>Dan Avram</h3>
          <p class="w3-opacity">Fusion cuisine</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="../images/chef2.jpg" alt="Jane" style="width:100%">
        <div class="w3-container">
          <h3>Alexandra Pop</h3>
          <p class="w3-opacity">Haute cuisine</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="../images/chef3.jpg" alt="Mike" style="width:100%">
        <div class="w3-container">
          <h3>Mike Ross</h3>
          <p class="w3-opacity">Nouvelle cuisine</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="../images/chef4.jpg" alt="Dan" style="width:100%">
        <div class="w3-container">
          <h3>Oana Trif</h3>
          <p class="w3-opacity">Vegan cuisine</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
  </div>
</div>




<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>



<!-- Contact Section -->

<div class="w3-container w3-dark-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col m5">
      <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin"></i> Timisoara, RO</p>
      <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin"></i> Phone: +00 151515</p>
      <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin"> </i> Email: contact@cookbook.com</p>
      <br>
      </div>
      <div class="w3-col m6" >
      <form action="/action_page.php" target="_blank" >
        <p style="color: rgb(0,0,0)">Name<input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
        <p style="color: rgb(0,0,0)">Email<input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
        <p style="color: rgb(0,0,0)">Subject<input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
        <p style="color: rgb(0,0,0)">Message<input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
        <p>
          <button class="w3-button w3-black" type="submit">
            <i class="fa fa-paper-plane"></i> SEND MESSAGE
          </button>
        </p>
      </form>
    </div>
  </div>
</div> 




<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fab fa-facebook w3-hover-opacity"></i>
    <i class="fab fa-instagram w3-hover-opacity"></i>
    <i class="fab fa-snapchat w3-hover-opacity"></i>
    <i class="fab fa-pinterest-p w3-hover-opacity"></i>
    <i class="fab fa-twitter w3-hover-opacity"></i>
  </div>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>
 

<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
    } else {
        mySidebar.style.display = 'block';
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
