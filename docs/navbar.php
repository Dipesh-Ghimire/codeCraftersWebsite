<?php 
if (!isset($_SESSION)) {session_start();}
$login = false;
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $login = true;
}
?>
<!-- Top Banner -->
<div class="top-banner">
      <div class="container">
        <div class="banner-text">
          <a href="./index.php"> Book your Futsal Pitch Online and Play like a PRO !</a>
        </div>
      </div>
    </div>
<!-- Navbar -->
<div class="navbar flex background">
      <div class="flex-center logo-outer">
        <div class="flex">
          <div id="logo">
            <a href="./index.php">
              <img
                src="./Futsal_images/logo_main2.png"
                alt="Futsal Nepal Logo"
              />
            </a>
          </div>
          <div class="navbar-container flex container">
            <div class="search-bar-container">
              <div class="search-bar">
                <button
                  type="button"
                  class="location-button"
                  aria-label="Location"
                >
                  <i class="i-location fa-solid fa-location-dot fa-lg"></i>
                </button>
                <input
                  class="search-input"
                  type="text"
                  name="search"
                  placeholder="Enter a Location"
                  maxlength="20"
                  size="20"
                  id="searchInput"
                />
                <button type="submit" class="search-button" aria-label="Search">
                  <i class="i-search fa-solid fa-location-crosshairs fa-lg"></i>
                </button>
              </div>
            </div>
            <div class="navbar-links">
              <div>
                <a class="nl hover-link" href="./mybookings.php"
                  >My Bookings</a
                >
              </div>
              <div><a class="nl hover-link" href="./about.php">About</a></div>
              <div>
                <a class="nl hover-link" href="./contact.php">Contact</a>
              </div>
              <div>
                <a class="nl hover-link secondary-button" href="<?php if(!$login){echo './login.php';}else{echo './logout.php';}?>"
                  ><?php if($login){echo "Logout";}else{echo "Login";}?></a
                >
              </div>
              <?php 
              if(!$login) { echo '<div>
                <a class="nl hover-link primary-button" href="./signup.php"
                  >SignUp</a
                >
              </div>';}?>
              <?php 
              if($login) { 
                echo "<div><a class='nl hover-link primary-button' href='./profile.php'>".$_SESSION['FULLNAME']."!</a></div>";
                  }?>
            </div>
            <div id="toggle-button">
              <i class="fa-solid fa-bars fa-2xl"></i>
            </div>
          </div>
        </div>
      </div>
    </div>