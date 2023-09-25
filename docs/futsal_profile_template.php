<?php error_reporting(E_ALL);
ini_set('display_errors', 1); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Futsal Profile</title>
  <link rel="stylesheet" href="./CSS/cards.css" />
  <link rel="stylesheet" href="./CSS/style.css" />
  <link rel="stylesheet" href="./CSS/media.queries.navbar.css" />
  <script defer src="./script.js"></script>
  <style>
    .profile-background-section {
      font-weight: 700;
      background-image: url('components/uploads/<?= $futsalImgUrl ?>');
      background-size: cover;
      background-position: center center;
      /* background-size: 100vw auto; */
      background-repeat: no-repeat;
    }

    .profile-section {
      height: 75vh;
      width: 90vw;
      background-repeat: no-repeat;
      background-position: center;
      background-size: 80%;
      justify-content: space-between;
      flex-direction: row;
    }
  </style>
</head>

<body>
  <?php include "./navbar.php" ?>
  <!-- profile-section Section -->
  <section class="profile-background-section container">
    <div class="container">
      <!-- Add code here -->
      <h1>
        <?php echo $futsalName; ?>
      </h1>
      <!-- <img src="components/uploads/<? //= $futsalImgUrl ?>" alt="Image Not Available" width="600px" height="500px"> -->
      <p><strong>Location:</strong>
        <?php echo $futsalLocation; ?>
      </p>
      <p><strong>Description:</strong>
        <?php echo $futsalDescription; ?>
      </p>
    </div>
    <div class="profile-section flex"></div>
  </section>
  <div class="container">
  <p><strong>Price per Hour:</strong> Rs. 1999/-</p>
    <p><strong>Address:</strong> Thamel, Kathmandu</p>
    <p><strong>Description:</strong> Whether you're a seasoned football pro or just starting out, our futsal center offers a fun and engaging way to enjoy the beautiful game indoors.</p>

    <p><strong>Contact:</strong> Phone: 123-456-7890 | Email: info@djfutsal.com</p>

    <p><a href="booking.html">Book Now</a></p>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.7112283251247!2d85.30963051506008!3d27.71489073261756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwMDMnMTMuNCJOIDg1wrAzMic1Ni4zIkU!5e0!3m2!1sen!2sus!4v1632488676129!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    <h2>Facility Photos</h2>
    <img src="#" alt="Futsal Facility Photo 1">
    <img src="#" alt="Futsal Facility Photo 2">

    <h2>Reviews and Ratings</h2>
    <p><strong>Rating:</strong> 4.5/5</p>
    <p><strong>Reviews:</strong></p>
    <p>Excellent futsal facility! Clean and well-maintained.</p>
    <p>Great location in Thamel. I love playing here.</p>

    <h2>Additional Information</h2>
    <p><strong>Operating Hours:</strong> Monday to Sunday, 8:00 AM - 10:00 PM</p>
    <p><strong>Facilities:</strong> Free Parking, Changing Rooms, Snack Bar</p>
    <p><strong>Rules:</strong> No outdoor shoes allowed on the turf.</p>
  </div>

  <?php include "./footer.php" ?>
  <script src="https://kit.fontawesome.com/5bab80a2b0.js" crossorigin="anonymous"></script>
</body>

</html>