<?php
session_start();
require_once('includes/dbh.inc.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vimigo Tech</title>
    <link rel="logo icon" href="images/vimigo-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body>


    <nav class="navbar">
        <div class="logo">Vimigo Tech</div>
        <ul class="nav-links">  
        <div class="menu">
      <li><a href="#">Home</a></li>
        <li><a href="https://www.vimigoapp.com/about-us/">About</a></li>
        <li><a href="https://www.vimigoapp.com/packages/">Packages</a></li>
        <li><a href="faq.html">FAQ</a></li>
        <li><a href="https://www.vimigoapp.com/privacy-policy/">Privacy Policy</a></li>
        </div>
        </ul>
    </nav>


    <section class="hero-banner">
        <div class="display row">
            <div class="xx col-lg-6 col-sm-12">
                <h1 class="ad">
                    Leading in performance <br />
                    Reward system <br />
                    <span class="pink"> anytime </span>
                </h1>
        
            </div>
            <div class="col-lg-6 col-sm-12">
                <img class="picture" src="images/slider-img.png" alt="" />
            </div>
        </div>
    </section>

    <section class="details-section">
    <div class="details">
        <form action="includes/signup.inc.php" method="post"  class="center">
            <h2>FILL IN YOUR DETAILS!</h2>
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname" placeholder="Steve" required class="validation"><br>

            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname" placeholder="Jobs" required class="validation">

            <label for="phone">Phone number:</label><br>
            <input type="text" id="phone" name="phone" placeholder="0182670560" required class="validation">

            <label for="email">Email address:</label><br>
            <input type="email" id="email" name="email" placeholder="steve.jobs@gmail.com" required class="validation">

            <label for="introduce" id="introduce" name="introduce">Introduce yourself!</label>
            <input  type="text" name="introduce" placeholder="Write something about yourself!" required class="validation">
            <button type="submit" name="submit" onclick="location.href='questions.html'" class="button">Next</button>
        </form>
    </div>
</section>


<section class="footer">
    <div class="footer-basic">
        <footer>
            <div class="social"><a href="https://www.instagram.com/vimigoapp/?hl=en"><i class="icon ion-social-instagram"></i></a><a href="https://www.facebook.com/vimigoapp/"><i class="icon ion-social-facebook"></i></a><a href="https://www.linkedin.com/company/vimigoapp/?originalSubdomain=my"><i class="icon ion-social-linkedin"></i></a><a href="https://www.youtube.com/c/VIMIGO"><i class="icon ion-social-youtube"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="https://www.vimigoapp.com/packages/">Packages</a></li>
                <li class="list-inline-item"><a href="https://www.vimigoapp.com/about-us/">About</a></li>
                <li class="list-inline-item"><a href="faq.html">FAQ</a></li>
                <li class="list-inline-item"><a href="https://www.vimigoapp.com/privacy-policy/">Privacy Policy</a></li>
            </ul>
            <p class="copyright">Vimigo Tech © 2023 | Made by omar tarek.</p>
        </footer>
    </div>
</section>    
</body>
</html>

