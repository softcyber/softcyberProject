<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Web & support</title>
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



<div class="web-sup-banner ">
  <div class="banner-web-sup">
  <h1>Cyber Security</h1>
  </div>
</div>


  <section class="solution-section-web-sup">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. <br>Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.<br> Proin sodales pulvinar    </p>
  </section>





<section class = "web-info-app">
    <!-- basic website  -->
<div class="prices">

    <div class="detailss">

    <!-- hhhhhhhhhte  -->
     <div class="part1">
      <div class="info-head-app">
          <img src="images/cyber.png" alt="">
            <h1>Cybersecurity</h1>
        </div>

        <div class="info-detail-app">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam error voluptates magni debitis possimus. Repellat?</p>
        </ul>
    </div>
        
        <div class="info-detail2-app">
            <h2>Starts 145,000 up to 195,000</h2>   
        </div>
     </div>

    <!-- hhhhhhh  -->

</div>

    <div class="Quotation-app">

      <div class="head-app">
            <h1>Get a Quotation</h1>
        </div>

      <div class="form-app">
         <form action="https://api.web3forms.com/submit" method="POST">
          <input type="hidden" name="access_key" value="edadcd1f-7afe-42e8-a3a9-1eca6eef0a52">
              <label>Your Name / Organisation's Name</label>
              <input type="text" name="name" required placeholder="Enter your name / Organisation's Name">

              <label>Email</label>
              <input type="email" name="email" required placeholder="someone@gmail.com">

              <label>Phone Number</label>
              <input type="tel" name="phone" required placeholder="+265 888 415 774">

              <label>Service</label>
              <select name="service" required>
                <option value="">Select Option</option>
                <option value="Cybersecurity">Cybersecurity</option>
                <option value="Office Solution Development">Office Solution Development</option>
                <option value="Information System Development">Information System Development</option>
                <option value="Network Development">Network Development</option>
                <option value="Apps & Support">Apps & Support</option>
                <option value="Database Solutions">Database Solutions</option>
                <option value="Webs & Support">Webs & Support</option>
              </select>

              <label>Project Details</label>
              <textarea name="message" required placeholder="Please provide details of your project, including goal, timeline, and any specific requirements"></textarea>

              <div class="btn-app">
                <button class = "btn1-app" type="button" onclick="history.back()">Back</button>
                <button class = "btn2-app" type="submit">Quote</button>
              </div>
        </form>
    </div>
    </div>

</div>


</section>

 

    <?php
    include('footer.php')
    ?>

</body>
</html>
