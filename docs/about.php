<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About</title>
    <link rel="stylesheet" href="./CSS/cards.css" />
    <link rel="stylesheet" href="./CSS/style.css" />
    <link rel="stylesheet" href="./CSS/media.queries.navbar.css" />
    <link rel="stylesheet" href="./CSS/aboutus.css" />
    <script defer src="./script.js"></script>
  </head>
  <body>
    <?php include "./navbar.php"?>

    <!-- Big-Search-Bar Section -->
    <!-- <section class="bsb-section container">
      <div class="big-search-bar flex"></div>
    </section> -->
    <h1 class="aboutus">About Us</h1>
    <div class="first">
      <p>
        Our company is dedicated to provide the ultimate futsal experience for
        both futsal companies and customers. We offer a comprehensive platform
        for futsal companies to sign up and customize their accounts, showcasing
        their facilities and services to a wider audience. Our user-friendly
        interface makes it easy for customers to create accounts and book futsal
        courts through our website.With our seamless booking process and
        extensive network of futsal companies, we make it easy for you to find
        and book the perfect futsal experience. Our commitment to providing
        top-notch services and exceptional customer support sets us apart from
        the rest. <a href="signup.php">Join us</a> and discover the best of
        futsal.
      </p>
      <img src="./Futsal_images/Form Images/formimg1.jpg" />
    </div>
    <!-- Footer -->
    <footer>
      <div class="row">
        <div class="col">
          <img
            src="./Futsal_images/logo_main2.png"
            class="logo-class"
            alt="LOGO"
          />
          <div>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.9846915929606!2d85.30831682497328!3d27.71775892773355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18e2bcf06be5%3A0xb3febee08a175fb7!2sAmrit%20Science%20Campus!5e0!3m2!1sen!2snp!4v1680176627926!5m2!1sen!2snp"
              width="400"
              class="maps"
              height="300"
              style="border: 2px solid white; border-radius: 25px"
              title="maps"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
          <!-- <p>Your go-to destination for booking futsal courts online.We are committed to providing a seamless and hassle-free experience for all our customers.</p> -->
        </div>
        <div class="col">
          <h3>
            Office
            <div class="underline"><span></span></div>
          </h3>
          <p>ASCOL, Lainchaur</p>
          <p>44600,Kathmandu,Nepal</p>
          <p class="email-id">futsalbooking123@gmail.com</p>
          <h4>+977-9869524854</h4>
        </div>
        <div class="col">
          <h3>
            Links
            <div class="underline"><span></span></div>
          </h3>
          <ul>
            <li><a class="hover-link" href="/">Home</a></li>
            <li>
              <a class="hover-link" href="/mybookings.php">My Bookings</a>
            </li>
            <li><a class="hover-link" href="/about.php">About Us</a></li>
            <li><a class="hover-link" href="/contact.php">Contact</a></li>
            <li><a class="hover-link" href="/login.php">Login</a></li>
            <li><a class="hover-link" href="/signup.php">Sign-Up</a></li>
          </ul>
        </div>
        <div class="col">
          <h3>
            Newsletter
            <div class="underline"><span></span></div>
          </h3>
          <form action="#">
            <i class="fa-regular envelope fa-envelope fa-2xl"></i>
            <input
              type="email"
              placeholder="Enter Your Email-Id"
              class="newsletter"
              required
            />
            <button type="submit" class="right-click" aria-label="Right Arrow">
              <i class="fa-solid fa-arrow-right fa-lg"></i>
            </button>
          </form>
          <div class="social-sites">
            <i class="fab fa-brands fa-facebook-f fa-2xl"></i>
            <i class="fab fa-brands fa-whatsapp fa-2xl"></i>
            <i class="fab fa-brands fa-instagram fa-2xl"></i>
            <i class="fab fa-brands fa-twitter fa-2xl"></i>
            <i class="fab fa-brands fa-square-github fa-2xl"></i>
          </div>
        </div>
      </div>
      <hr />
      <p class="copyright">
        Copyright © 2023 Book Futsal Nepal. All rights reserved.
      </p>
    </footer>
    <script
      src="https://kit.fontawesome.com/5bab80a2b0.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
