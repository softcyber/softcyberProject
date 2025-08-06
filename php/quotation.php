<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit_quote"])) {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $service = htmlspecialchars($_POST["options"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "chifuniromtambalika23@gmail.com"; // 🔁 Change this to your email
    $subject = "New Quotation Request from $name";
    $body = "You have received a new quotation request:\n\n" .
            "Name/Organization: $name\n" .
            "Email: $email\n" .
            "Phone: $phone\n" .
            "Service Selected: $service\n" .
            "Message:\n$message";

    $headers = "From: $email\r\n" .
               "Reply-To: $email\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $body, $headers)) {
        $success = "Quotation sent successfully!";
    } else {
        $error = "Failed to send quotation. Please try again later.";
    }
}

if (isset($_POST['go_back'])) {
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Quotation</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<section class="quotation">
  <div class="head-qoutation">
    <h1>QUOTE</h1>
  </div>

  <div class="form">
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
</section>

</body>
</html>
