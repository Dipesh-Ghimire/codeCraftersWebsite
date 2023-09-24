<?php 
if (!isset($_SESSION)) {session_start();}
// either loggedin is not set or loggedin is not true
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: signup.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="A Website for Booking Futsals in Nepal with few clicks" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Futsal Nepal-Online Futsal Booking</title>
  <link rel="stylesheet" href="./CSS/cards.css" />
  <link rel="stylesheet" href="./CSS/style.css" />
  <link rel="stylesheet" href="./CSS/media.queries.navbar.css" />
  <script defer src="./script.js"></script>
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDd4BaTvvC-tqaaTh-fw6HF_CJvvvlUbyo&libraries=places"></script> -->
</head>

<body>

  <?php include "./navbar.php" ?>

  <!-- Big-Search-Bar Section -->
  <section class="bsb-section container">
    <div class="big-search-bar flex"><?php //echo $_SESSION['FULLNAME'];?></div>
  </section>

  <?php include "./cards.php" ?>

  <!-- To-Top Button -->
  <a href="#" class="to-top flex-center">
    <i class="fas fa-chevron-up"></i>
  </a>

  <!-- Temporary div  (can be removed when website has contents) -->
  <!-- <div class="temporary"></div> -->

  <?php include "./footer.php" ?>

  <script src="https://kit.fontawesome.com/5bab80a2b0.js" crossorigin="anonymous"></script>
</body>

</html>