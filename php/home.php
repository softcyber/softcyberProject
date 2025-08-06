<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Home</title>
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
      <li><a href="home.php" class="active">Home</a></li>

      <li class="dropdown">
        <a href="about us.php">About ▾</a>
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


  <section class="hero">
    <div class="hero-text">
      <h2>Elevate your business with us<br><span>—where your vision meets our technology</span></h2>
      <p>We transform your vision into reality through innovative, reliable software solutions designed for excellence. Let's innovate, grow, and succeed together.</p>
        <a href="solution.php">
          <button>Explore More</button>
        </a>
    </div>

    <div class="offer-box">
      <h3>What we Offer</h3>
        <p>At SoftCyber, we exist to bridge the gap between your ambitions and technological reality. We provide tailored, end-to-end solutions that secure your operations and drive growth. With a focus on excellence, we deliver confidence, empowerment, and success.</p>
    </div>

  </section>



 <section class="main_sec">

  <section class="hero2">

      <div class="offer-box2">
      <h3>MEET OUR<br> BRILLIANT<br> TEEM</h3>
        <a href="team.php">
            <button>Learn More</button>
        </a>
    </div>

    <div class="hero-text2">
      <h2><b>Undesrtanding the terms for your Businesss</b></h2>
     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.</p> 
     <p>Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget</p> 
     <p>Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget</p> 
    </div>

  </section>

  <div class="sec2">
<h2>Interested in <br> our Services?</h2>
        <a href="contact.php">
          <button>Contact Us</button>
        </a>
  </div>
  </section>








 <section class="black">
  <section class="black-sec">
<!------------------------->
      <div class="black-left">
        <h2><b>Our Vision</b></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor.</p>     
    </div>
<!------------------------->
    <div class="black-right">
      <h2><b>Our Mission</b></h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor.</p>
        </div>
<!------------------------->
  </section>
</section>




 <section class="sky-blue">
  <section class="sky-blue-sec">
<!------------------------->
      <div class="sky-blue-left">
        <h1>Let's build something great together</h1>
        <p><a href="quotation.php"><button>Get Quotation</button></a></p>
    </div>
<!------------------------->
  </section>
</section>





   <div class="container">
    <h1>The Solutions <br> <span>we provide?</span></h1>

    <div class="solutions">

      <div class="solution">
        <img src="img8.jpg" alt="Agriculture">
        <h3>Agriculture</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida.</p>
      </div>

      <div class="solution">
        <img src="img8.jpg" alt="Mental Health">
        <h3>Mental Healthy</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida.</p>
      </div>

      <div class="solution">
        <img src="img8.jpg" alt="Finance">
        <h3>Finance</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida.</p>
      </div>

      <div class="solution">
        <img src="img8.jpg" alt="Finance">
        <h3>Education</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida.</p>
      </div>

    </div>
  </div>







 <div class="container-technic">
    <h1>The technics <br> <span>we use?</span></h1>

    <div class="technics">

      <div class="technic">
        <img src="images/mobile.png" alt="Agriculture">
        <h3>Agriculture</h3>
      </div>

      <div class="technic">
        <img src="images/ntwk.png" alt="Mental Health">
        <h3>Mental Healthy</h3>
      </div>

      <div class="technic">
        <img src="images/osd.png" alt="Finance">
        <h3>Finance</h3>
      </div>

      <div class="technic">
        <img src="images/web.png" alt="Finance">
        <h3>Education</h3>
      </div>

    </div>
  </div>



    <?php
    include('footer.php')
    ?>
    
</body>
</html>

