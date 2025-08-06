<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Our Team</title>
  <link rel="stylesheet" href="style.css">
  <script defer src="script.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

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
      <li><a href="about us.php">About</a></li>
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




<div class="team-banner">
  <div class="banner-team">
    <h1>TEAM</h1>
  </div>
</div>

 
 <div class="team-head">
    <h1>SOFTCYBER TEAM</h1>
  </div>

  <section class="intro">
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. 
      Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar 
      tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
      Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc 
      eget odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit...
    </p>
  </section>

  <section class="team">
    <div class="card">
      <img src="img8.jpg" alt="Team member">
      <h3>Bon Sakala <i class="fab fa-facebook-square"></i> <i class="fab fa-twitter-square"></i></h3>
      <h4>Software engineerer</h4>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. 
        Proin gravida dolor sit amet lacus accumsan et viverra justo commodo...
      </p>
    </div>
    <div class="card">
      <img src="img8.jpg" alt="Team member">
      <h3>Caleb Namvula <i class="fab fa-facebook-square"></i> <i class="fab fa-twitter-square"></i></h3>
      <h4>Software engineerer</h4>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. 
        Proin gravida dolor sit amet lacus accumsan et viverra justo commodo...
      </p>
    </div>
    <div class="card">
      <img src="img8.jpg" alt="Team member">
      <h3>Chifuniro Mtambalika <i class="fab fa-facebook-square"></i> <i class="fab fa-twitter-square"></i></h3>
      <h4>Software engineerer</h4>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. 
        Proin gravida dolor sit amet lacus accumsan et viverra justo commodo...
      </p>
    </div>
  </section>


    <?php
    include('footer.php')
    ?>
    
</body>
</html>

