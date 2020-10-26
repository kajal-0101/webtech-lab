<?php
session_start();
if(isset($_REQUEST['msg']) && $_REQUEST['msg'] == 'logout')
{
  session_unset();
  session_destroy();
}

?>


<!DOCTYPE html>
<html>
<head>
  <title>SPORTS WORLD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width",initial-scale=1.0>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="pic/sports.jfif" rel="icon">
</head>
<body>
  <header>
    <?php
    require "header.php";
    ?>
    
    <div class="title">
      <h1>Sports World</h1>
    </div>

    <div class="button">
      <a href="#" class="btn">DIVE IN</a>
      <a href="more.html" class="btn">EXPLORE</a>
    </div>

    <div class="para">
      <p>Sports is fun and interesting. If sports is your passion then let's dive into the world of sports.</p>
    </div>

    <div id = "sidebar">
      <div class="toggle-btn" onclick="toggleSideBar()">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <ul>
        <li><a href="#">Gallery</a></li>
        <li>Sports World Magazine</li>
        <li>Sports World Meet v20.19</li>
        <li class="location">Locate us
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d921.4822479495529!2d88.35102762917907!3d22.50684719907604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0270cfb41a674f%3A0xbf214f35ff338f89!2sC%2F27%2C%20Lake%20Gardens%2C%20Kolkata%2C%20West%20Bengal%20700033!5e0!3m2!1sen!2sin!4v1592835344165!5m2!1sen!2sin" width="340" height="250" frameborder="0" allowfullscreen="True" aria-hidden="false" tabindex="0"></iframe>
        </li>
      </ul>
      <div class="check">
        <p id="dem">Check connectivity</p>
        <button id="check" onclick="Check()">Check Connectivity!</button>
      </div>
      <div class="write">
        <span class="credit">Created by Kajal Chatterjee | Sports World</span>
        <span class="far fa-copyright"></span>
        <span> 2020 All rights reserved.</span>
      </div>
    </div>

  </header>
  <footer>
    <div class="main-content">
      <div class="left box">
        <h2>About Us</h2>
        <div class="content">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
          </p>
          <div class="social">
            <a href="#"><span class="fab fa-facebook"></span></a>
            <a href="#"><span class="fab fa-twitter"></span></a>
            <a href="#"><span class="fab fa-instagram"></span></a>
            <a href="#"><span class="fab fa-youtube"></span></a>
          </div>
        </div>
      </div>
      <div class="center box">
        <h2>Address</h2>
        <div class="content">
          <div class="place">
            <span class="fas fa-map-marker-alt"></span>
            <span class="text">Kolkata, WB, IN</span>
          </div>
          <div class="phone">
            <span class="fas fa-phone-alt"></span>
            <span class="text">+91 0000 000 000</span>
          </div>
          <div class="email">
            <span class="fas fa-map-marker-alt"></span>
            <span class="text">testing@test.com</span>
          </div>

        </div>
      </div>
      <div class="right box">
        <h2>Contact Us</h2>
        <div class="content">
          <form action="#">
            <div class="email">
              <div class="text">Email *</div>
              <input type="email" required>
            </div>
            <div class="msg">
              <div class="text">Message *</div>
              <textarea name="name" rows="2" cols="25" required></textarea>
            </div>
            <div class="butn">
              <button type="submit">Send</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="bottom">
      <center>
        <span class="credit">Created by Kajal Chatterjee | Sports World</span>
        <span class="far fa-copyright"></span>
        <span> 2020 All rights reserved.</span>
      </center>
    </div>
  </footer>
<script type="text/javascript" src="js/sidebar.js"></script>
<script type="text/javascript">
  function logout(){
      alert("Logging out")
      window.location.href = "index.php?msg=logout"
    }
</script>
</body>
</html>