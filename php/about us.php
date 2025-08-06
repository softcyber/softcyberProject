<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About Us</title>
  <link rel="stylesheet" href="style.css">
  <script defer src="script.js"></script>
</head>
<body>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

 <header>
  <div class="logo">
    <img src="logo.jpeg" alt="SoftCyber Logo" class="logo-img">
    <span>SoftCyber</span>
  </div>

  <nav class="navbar"id="navbar">
    <ul class="nav-links">
      <li><a href="home.php">Home</a></li>

      <li class="dropdown">
        <a href="about us.php"class="active">About ▾</a>
        <ul class="dropdown-content">
          <li><a href="team.php">Our Team</a></li>
        </ul>
      </li>

      <li><a href="solution.php">Solutions</a></li>
      <li><a href="contact.php">Contact us</a></li>
    </ul>
  </nav>

  <div class="social-icons">
    <a href="http://facebook.com/dcodeyt"><ion-icon name="logo-facebook"></ion-icon></a>
    <a href="http://whatsapp.com/dcodeyt"><ion-icon name="logo-whatsapp"></ion-icon></a>
    <a href="http://twitter.com/dcodeyt"><ion-icon name="logo-twitter"></ion-icon></a>
  </div>

 <div class="menu-icon" id="menu-icon">
    <ion-icon name="menu-outline"></ion-icon>
  </div>

</header>

  <!-- JavaScript -->
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const menuIcon = document.getElementById("menu-icon");
      const navbar = document.getElementById("navbar");

      menuIcon.addEventListener("click", () => {
        navbar.classList.toggle("active");
      });
    });
  </script>



  <div class="about-banner">
  <div class="banner-about">
    <h1>ABOUT US</h1>
  </div>
</div>

<section class="contact-sec">
    <h2>Get in Touch with SoftCyber</h2>
          <p>We'd love to discuss your  project, development needs, or answer any questions you might<br> have about our services</p>
  </section>
      <!-- basic website  -->
<div class="about-us">

    <div class="about-left">
      <!-- ------------------  -->
        <div class="about-left-detail">
          <h2>A little bit about us;</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.</p><br>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p><br>
          <p>Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod</p>
       </div>
      <!-- ------------------  -->
  </div>

    <div class="about-right">
      <!-- ------------------  -->
        <div class="about-right-detail">
          <img src="images/img8.jpg" alt="image not supported">
       </div>
      <!-- ------------------  -->
  </div>

</div>


    <?php
    include('footer.php')
    ?>

</body>
</html>
