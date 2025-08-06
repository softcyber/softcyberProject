<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
 

<div class="footer">
  <p>
    <a href="http://facebook.com/dcodeyt"><ion-icon name="logo-facebook"></ion-icon></a>
    <a href="http://whatsapp.com/dcodeyt"><ion-icon name="logo-whatsapp"></ion-icon></a>
    <a href="http://twitter.com/dcodeyt"><ion-icon name="logo-twitter"></ion-icon></a>
    <a href="http://instagram.com/dcodeyt"><ion-icon name="logo-instagram"></ion-icon></a>
  </p>

  <hr>

  <p id="copyright"></p>
</div>

<script>
  const year = new Date().getFullYear();
  document.getElementById('copyright').innerHTML = `&copy; ${year}. Powered by SoftCyber`;
</script>




</body>
</html>
