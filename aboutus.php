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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/aboutus.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>About Us </title>
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
        </div>
        <div class="social text-gray">
          <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
          <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
          <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
    </nav>
<section id="color">

    <div class="container">
        <div class="header">
        <h1>Our Team  </h1>
    </div>
    <div class="sub-container">
    <div class="team">
        <img src="./assets/kushagra.jpeg" alt="kushagra chahuan">
        <div class="name">Kushagra Chauhan</div>
        <div class="design">Designer and content creator </div>
        <div class="about">Electronics and Communication engineer
            First year,college student of Indian Institute of technology, Surat
            
           
            <br>
            Eager to educate people  regarding the tricks of the world and how modern 
            technology is affecting the mental health of an individual .  
             Web Devloper
            </br>   
        </div>
    
    <div class="serial-links">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-twitter "></i></a>
        <a href="#"><i class="fa fa-github"></i></a>
    </div> 

    </div>

    <div class="team">
        <img src="./assets/harsiv.jpeg"  alt="Harshiv Thakkar">
        <div class="name">Harshiv Thakkar </div>
        <div class="design">Designer and content creator </div>
        <div class="about">Electronics and Communication engineer
            First year,college student of Indian Institute of technology, Surat
            
           
            <br>
            Passion for making internet a  kinder place.   
             Web Devloper
            </br>   
        
        </div>
   
    <div class="serial-links">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-twitter "></i></a>
        <a href="#"><i class="fa fa-github"></i></a>

    </div> 
    </div>

    <div class="team">
        <img src="./assets/aman.jpg"  alt="Aman Yadav">
        <div class="name">Aman Yadav</div>
        <div class="design">Designer and Devloper  </div>
        <div class="about"> Electronics and Communication engineer
            First year,college student of Indian Institute of technology, Surat
            
           
            <br>
            Enthusiast for spreading awareness regarding the highly confused mental health issues    
             Web Devloper
            </br>   
        
        </div>
   
    <div class="serial-links">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-twitter "></i></a>
        <a href="#"><i class="fa fa-github"></i></a>
    </div> 
    </div>
</div>
   
</div>

</section>
</body>
</html>