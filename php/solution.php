<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Solutions</title>
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
        <a href="about us.php">About ▾</a>
        <ul class="dropdown-content">
          <li><a href="team.php">Our Team</a></li>
        </ul>
      </li>

      <li><a href="solution.php" class="active">Solutions</a></li>
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



<div class="solutions-banner">
  <div class="banner-solution">
  <h1>OUR SERVICES</h1>
  </div>
</div>


  <section class="solution-section">
    <p>     
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.
    </p>
  </section>


   <section class="services">
  <div class="service-item">
    <img src="images/web.png" alt="Web Support Icon">
    <div class="service-text">
      <a href="web&support.php">
      <h3>Web & Support</h3>
      <p>Basic, Standard and Premium Websites that are user friendly and reliable</p>
      </a> 
    </div>
  </div>

    <div class="service-item">
    <img src="images/mobile.png" alt="Web Support Icon">
    <div class="service-text">
       <a href="apps&support.php">
       <h3>Apps & Support</h3>
      <p>Affordable Desktop & Mobile Applications which are user friendly and Reliable.</p>
         </a> 
    </div>
  </div>

   <div class="service-item">
    <img src="images/cyber.png" alt="Web Support Icon">
    <div class="service-text">
      <a href="cyber-sec.php">
      <h3>Cybersecurity</h3>
      <p>Protect your digital assets from cyber threats with our robust cybersecurity</p>
      </a> 
    </div>
  </div>

   <div class="service-item">
    <img src="images/database.png" alt="Web Support Icon">
    <div class="service-text">
      <a href="database-sol.php">
       <h3>Database Solutions</h3>
      <p>Design and develop efficient database systems to manage your data effectively</p>
      </a> 
    </div>
  </div>

   <div class="service-item">
    <img src="images/info.png" alt="Web Support Icon">
    <div class="service-text">
      <a href="info-sys.php">
      <h3>Information System Development</h3>
      <p>Develop custom information systems to streamline your business processes and improve efficiency</p>
      </a> 
    </div>
  </div>
 
   <div class="service-item">
    <img src="images/ntwk.png" alt="Web Support Icon">
    <div class="service-text">
      <a href="ntwk-dev.php">
      <h3>Network Development</h3>
      <p>Plan, design, and deploy secure network infrastructure for your organization</p>
      </a> 
    </div>
  </div>

     <div class="service-item">
    <img src="images/osd.png" alt="Web Support Icon">
    <div class="service-text">
      <a href="office-solution.php">
      <h3>Office Solution</h3>
      <p>Set up and manage complete office software and system environments efficiently</p>
      </a> 
    </div>
  </div>

  </section>


    <?php
    include('footer.php')
    ?>

</body>
</html>
