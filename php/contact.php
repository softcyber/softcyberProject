<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us</title>
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
      <li><a href="contact.php" class="active">Contact us</a></li>
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



 <div class="contact-banner">
  <div class="banner-contact">
  <h1>CONTACT US</h1>
  </div>
</div>

  <section class="contact-sec">
    <h2>Get in Touch with SoftCyber</h2>
          <p>We'd love to discuss your  project, development needs, or answer any questions you might<br> have about our services</p>
  </section>





<section class = "web-info-contact">
    <!-- basic website  -->
<div class="prices-contact">

    <div class="details-contact">

    <!-- hhhhhhhhhte  -->
     <div class="part1-contact">
    <!-- Contact Info -->
      <div class="contact-info">


        <p><span class="label-bold">📧 Email</span><br/>
          <a href="mailto:softcyber606@gmail.com">softcyber606@gmail.com</a></p>

        <p><span class="label-bold">📞 Phone</span><br/>
          +265 993 857 016<br/>
          Or +265 992 247 334<br/>
          Or +265 888 415 774</p>

        <p><span class="label-bold">🕒 Open Hours</span><br/>
          Monday–Saturday: 9:30 AM – 6:00 PM<br/>
          Saturday: 7:30 AM – 12:00 AM<br/>
          Sunday: By appointment</p>

        <h4><span class="label-bold">Follow us on:</span></h4>
        <div class="social-icons">
          <img src="https://img.icons8.com/ios-filled/50/facebook-new.png" alt="Facebook"/>
          <img src="https://img.icons8.com/ios-filled/50/whatsapp.png" alt="WhatsApp"/>
          <img src="https://img.icons8.com/ios-filled/50/twitter--v1.png" alt="Twitter"/>
        </div>
        <p>SoftCyber Inc</p>
      </div>
     </div>

    <!-- hhhhhhh  -->

</div>

    <div class="Quotation-app">

      <div class="form-contact">
         <div class="head-app">
            <h1>Send Message</h1>
        </div>
        <form action="https://api.web3forms.com/submit" method="POST">
          <input type="hidden" name="access_key" value="edadcd1f-7afe-42e8-a3a9-1eca6eef0a52">
              <label>Your Name / Organisation's Name</label>
              <input type="text" name="name" required>

              <label>Email</label>
              <input type="email" name="email" required>

              <label>Phone Number</label>
              <input type="tel" name="phone" required>

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
              <textarea name="message" required></textarea>

              <div class="btn-app">
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

