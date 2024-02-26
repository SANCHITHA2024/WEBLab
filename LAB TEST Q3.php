<?php
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];


      
      header('Location: thank-you.php');
      exit();
    }
  ?>
  <style>
body, h1, h2, h3, p, ul, li {
  margin: 0;
  padding: 0;
}


body {
  font-family: Arial, sans-serif;
  background-color: #f1f1f1;
}


header {
  background-color: #333;
  color: #fff;
  padding: 20px;
}

nav ul {
  list-style-type: none;
}

nav ul li {
  display: inline-block;
  margin-right: 10px;
}

nav ul li a {
  color:#fce93a ;
  text-decoration: none;
}

.banner {
  text-align: center;
  margin-top: 60px;
}

.banner h1 {
  font-size: 45px;
  margin-bottom: 20px;
  color: #9df05d;
}

.cta-btn {
  display: inline-block;
  padding: 10px 20px;
  background-color: #cfc5f0;
  color: #333;
  text-decoration: none;
  border-radius: 5px;
}


section {
  padding: 50px 0;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

h2 {
  font-size: 28px;
  margin-bottom: 20px;
}

p {
  font-size: 16px;
  line-height: 1.5;
  margin-bottom: 10px;
}

.destination {
  margin-bottom: 40px;
}

.destination img {
  width: 100%;
  max-width: 400px;
  height: auto;
}


footer {
  background-color: gray;
  color: white;
  padding: 20px;
}

.social-media img {
  width: 35px;
  height: 35px;
  margin-right: 15px;
}

.contact-info {
  margin-top: 20px;
}

.contact-info p {
  font-size: 14px;
  margin-bottom: 5px;
}
</style>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TRAVEL AGENCY SRI LANKA </title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="#">HOME </a></li>
        <li><a href="#">TOURS AND PACKAGES </a></li>
        <li><a href="#">DESTINATION </a></li>
        <li><a href="#">ABOUT US</a></li>
        <li><a href="#">CONTACT US</a></li>
      </ul>
    </nav>
    <div class="banner">
      <h1>WELCOME  to Travel Agencyes of Sri Lanka</h1>
      <a href="#" class="cta-btn">EXPLORE NOW </a>
    </div>
  </header>

  <section id="about">
    <div class="container">
      <h2>ABOUT US </h2>
      <p>Travel Agency Sri Lanka is a leading provider of personalized tours and travel experiences in the beautiful island country of Sri Lanka. With over 10 years of expertise, we offer unique itineraries, local guides, and exceptional customer service to ensure a memorable trip.</p>
    </div>
  </section>

  <section id="destinations">
    <div class="container">
      <h2>Popular Destinations</h2>
      <div class="destination">
        <img src="colombo.jpeg" alt="Destination 1">
        <h3>COLOMBO</h3>
        <p>Colombo is the capital city of Sri Lanka, located on the western coast of the island. It serves as the country's economic, administrative, and cultural center.
             With a rich history influenced by colonial powers,
             the city offers a blend of architectural styles and cultural attractions. 
             Colombo is known for its bustling markets, modern shopping malls, vibrant dining scene,
              and a range of tourist attractions, including historical sites, parks, and temples.
               It has a well-developed transportation system and contributes significantly to Sri Lanka's economy..</p>
      </div>
      <div class="destination">
        <img src="anu.jpeg" alt="Destination 2">
        <h3>ANURADHAPURA</h3>
        <p>Anuradhapura is an ancient city in Sri Lanka, located in the North Central Province. 
            It was once the capital of the country and is renowned for its historical and cultural significance.
             Anuradhapura served as the center of early Sri Lankan civilization and Buddhism. 
             The city is home to numerous well-preserved ruins, including ancient temples, palaces, and monastic complexes. 
             The sacred Bodhi Tree, a descendant of the original tree under which the Buddha attained enlightenment, can be found in Anuradhapura.
              It is a UNESCO World Heritage site and attracts visitors from around the world who come to explore its archaeological wonders and experience its spiritual ambiance.</p>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="social-media">
        <a href="https://www.facebook.com/travelagencysrilanka" target="_blank"><img src="fb.png" alt="Facebook"></a>
        <a href="https://www.youtube.com/travelagencysrilanka" target="_blank"><img src="yt.png" alt="YouTube"></a>
      </div>
      <div class="contact-info">
        <p>&copy; 2023 Travel Agency Sri Lanka. All rights reserved.</p>
        <p>101/58 Main Street, Colombo7, Sri Lanka</p>
        <p>Phone: +94 77569811| Email: inform@travelagencysrilanka.com</p>
      </div>
    </div>
  </footer>
</body>
</html>
