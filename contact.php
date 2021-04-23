<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="./css/all.min.css" />
    <link rel="stylesheet" href="./css/style.css" />
 </head>
 <body>
    <nav class="nav">
      <div class="nav-menu flex-row">
        <div class="nav-brand">
         
          <a href="./welcome.php" class="text-gray">Declutter</a>
        </div>
        <div class="toggle-collapse">
          <div class="toggle-icons">
            <i class="fas fa-bars"></i>
          </div>
        </div>
        <div>
          <ul class="nav-items">
            <li class="nav-link">
              <a href="./welcome.php">Home</a>
            </li>
            <li class="nav-link">
              <a href="#">Articles</a>
            </li>
            <li class="nav-link">
              <a href="./contact.php">Contact Us</a>
            </li>
            <li class="nav-link">
              <a href="./aboutus.php">About Us</a>
            </li>
          </ul>
          </ul>
        </div>
        <div class="social text-gray">
          <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
          <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
          <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
    </nav>

    <div class="contact-content font1 max-width-1 m-auto">
      <div class="max-width-1 m-auto mx-1">
        <h2>Feel Free to Contact Us</h2>
        <div class="contact-form">
          <div class="form-box">
            <input type="text" placeholder="Enter Your Name" />
          </div>
          <div class="form-box">
            <input type="text" placeholder="Enter Your Phone Number" />
          </div>
          <div class="form-box">
            <input type="text" placeholder="Enter Your Email Id" />
          </div>
          <div class="form-box">
            <textarea
              name=""
              id=""
              cols="30"
              rows="10"
              placeholder="How may we help you?"
            ></textarea>
          </div>
          <div class="form-box">
           <a href="./welcome.php"><button class="btn">Submit</button></a>
          </div>
        </div>
      </div>
    </div>

    
    <script src="./js/resp.js"></script>

  </body>
</html>
