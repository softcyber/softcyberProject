<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact | SoftCyber</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #fff;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 1100px;
      margin: 40px auto;
      padding: 20px;
    }

    h2 {
      text-align: center;
    }

    .desc {
      text-align: center;
      margin-bottom: 40px;
      color: #555;
    }

    .contact-box {
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      justify-content: space-between;
    }

    .contact-info, .contact-form {
      flex: 1;
      min-width: 300px;
      border: 1px solid #ddd;
      padding: 20px;
      border-radius: 8px;
    }

    .contact-info h4 {
      margin-top: 20px;
    }

    .contact-info a {
      color: #0077cc;
      text-decoration: none;
    }

    .contact-info i {
      margin-right: 10px;
    }

    .contact-form input,
    .contact-form select,
    .contact-form textarea {
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .contact-form button {
      padding: 10px 20px;
      background: #333;
      color: white;
      border: none;
      cursor: pointer;
      border-radius: 4px;
    }

    .social-icons {
      margin-top: 20px;
    }

    .social-icons img {
      width: 30px;
      margin-right: 10px;
      cursor: pointer;
    }

    .label-bold {
      font-weight: bold;
    }

    @media (max-width: 768px) {
      .contact-box {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>Get in Touch with SoftCyber</h2>
    <p class="desc">We’d love to discuss your project, development needs, or answer any questions you might have about our services.</p>

    <div class="contact-box">
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

        <p><span class="label-bold">Follow us on:</span></p>
        <div class="social-icons">
          <img src="https://img.icons8.com/ios-filled/50/facebook-new.png" alt="Facebook"/>
          <img src="https://img.icons8.com/ios-filled/50/whatsapp.png" alt="WhatsApp"/>
          <img src="https://img.icons8.com/ios-filled/50/twitter--v1.png" alt="Twitter"/>
        </div>
        <p>SoftCyber Inc</p>
      </div>

      <!-- Contact Form -->
      <div class="contact-form">
        <form>
          <label>Your Name / Organisation's Name</label>
          <input type="text" placeholder="someone@emailme.com" required />

          <label>Email</label>
          <input type="email" placeholder="someone@emailme.com" required />

          <label>Phone Number</label>
          <input type="tel" placeholder="+265..." required />

          <label>Service Needed</label>
          <select required>
            <option>Select the Needed Service</option>
            <option>Web Development</option>
            <option>IT Support</option>
            <option>Consulting</option>
          </select>

          <label>Details of your Service</label>
          <textarea rows="5" placeholder="Please provide details of your project, including goals, timeline, and any specific requirements..."></textarea>

          <button type="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>

</body>
</html>
