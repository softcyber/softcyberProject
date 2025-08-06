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
  <h1>Web  and  Support</h1>
  </div>
</div>


  <section class="solution-section-web-sup">
    <p>We Develop,  Basic, Standard and premium  website for our valuied customers.<br> We aslso offer  web mentainous services    </p>
  </section>

<section class = "web-info">

    <!-- basic website  -->
<div class="price">

    <div class="details">

         <div class="info-head">
            <h1>Basic Website</h1>
        </div>

        <div class="info-detail">
            <ul>
            <li>Up to 4 pages (Home, About Us, Service, and Contact)</li>
            <li>Contact integration</li>
            <li>Hosting Negotiable</li>
            <li>Social media integration</li>
            <li>Responsive design</li>
            <li>Basic SEO</li>
        </ul>
        </div>
        
        <div class="info-detail2">
            <h2>Starts 145,000 up to 195,000</h2>
            <h2>50% advance, 50% before delivery</h2>
            <h2>2 Month of free support and maintenance after<br> Launch</h2>    
        </div>
        
    </div>

    <div class="Quotation">
        <a href="quotation.php"><button>Get Quotation</button></a>
    </div>

</div>



<!-- standard website  -->
<div class="price">

    <div class="Quotation-stand">
        <a href="quotation.php"><button>Get Quotation</button></a>
    </div>

    <div class="details-stand">

         <div class="info-head">
            <h1>standard Website</h1>
        </div>

        <div class="info-detail">
            <ul>
            <li>Up to 10 pages, including a photo gallery and Blog section</li>
            <li>Enhanced functionality</li>
            <li>Expanded content</li>
            <li>Contact integration</li>
            <li>Advanced contact form</li>
            <li>Social media integration</li>
            <li>SEO</li>
            <li>Responsive design</li>
        </ul>
        </div>
        
        <div class="info-detail2">
            <h2>Starts 210,000 up to 270,000</h2>
            <h2>50% advance, 50% before delivery</h2>
            <h2>3 Month of free support and maintenance after<br> Launch</h2>    
        </div>
        
    </div>
</div>

<!-- premium website  -->
<div class="price">

    <div class="details-prem">

         <div class="info-head">
            <h1>PremiuM Website</h1>
        </div>

        <div class="info-detail">
            <ul>
            <li>Content management systems (CMS)</li>
            <li>Training how to use CMS</li>
            <li>Unlimited features</li>
            <li>Dynamic features</li>
            <li>Expanded contents</li>
            <li>Contact integration</li>
            <li>Advance contact form</li>
            <li>Social media integration</li>
            <li>Advanced SEO</li>
            <li>Responsive design</li>
        </ul>   
        </div>
        
        <div class="info-detail2-prem">
            <h2>Starts 430,000 up to 800,000</h2>
            <h3>50% advance, 50% before delivery</h3>
            <h4>3 Month of free support and maintenance after<br> Launch</h4>    
        </div>
        
    </div>

    <div class="Quotation-prem">
        <a href="quotation.php"><button>Get Quotation</button></a>
    </div>

</div>

<!-- website maintanance -->
 <div class="price">

    <div class="Quotation-maint">
        <a href="quotation.php"><button>Get Quotation</button></a>
    </div>

    <div class="details-maint">
            <h2>web maintenance</h2>
        <div class="info-detail-maint">
            <p> We Develop,  Basic, Standard and premium  website for our valuied customers. We aslso offer  web mentainous services</p>
        </div>
        <h3>Price: Negotiable</h3>
        
    </div>
</div>

</section>


    <?php
    include('footer.php')
    ?>

</body>
</html>
