<?php
@session_start();
require("includes/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!--css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="home.html" class="logo"> <i class="fas fa-graduation-cap"></i>Learn Easy Academy </a>

    <div id="menu-btn" class="fas fa-bars"></div>

    <nav class="navbar">
        <ul>
            <li><a href="home.html">home</a></li>
            <li><a href="about.html">about</a></li>
            <li><a href="#">courses +</a>
                <ul>
                    <li><a href="course-1.html">course 01</a></li>
                    <li><a href="course-2.html">course 02</a></li>
                   
                </ul>
            </li>
            <li><a href="#">pages +</a>
                <ul>
                    <li><a href="teachers.html">teachers</a></li>
                    <li><a href="blog.html">blogs</a></li>
                </ul>
            </li>
            <li><a href="contact.php">contact</a></li>
            <li><a href="feedback.php">feedback</a></li>
        </ul>
    </nav>

</header>

<!-- header section ends -->

<section class="heading">
    <h3>contact us</h3>
    <p> <a href="home.html">home >></a> contact </p>
</section>

<section class="contact">

    <div class="icons-container">

        <div class="icons">
            <i class="fas fa-phone"></i>
            <h3>Our Number</h3>
            <p>111-111-1112</p>
            <p>222-222-2223</p>
        </div>

        <div class="icons">
            <i class="fas fa-envelope"></i>
            <h3>Our e-mail</h3>
            <p>abc@gmail.com</p>
            <p>xyz@gmail.com</p>
        </div>

        <div class="icons">
            <i class="fas fa-map-marker-alt"></i>
            <h3>Our Address</h3>
            <p>Nadiad, India - 387001</p>
        </div>

    </div>

    <div class="row">

        <form action="<?php echo $sitepath;?>save_contact.php" method="post" name="keep_in_touch" id="keep_in_touch">
            <h3>Get In Touch</h3>
            <input type="name" name="name" placeholder="your name" >
            <input type="number" name="number" placeholder="your number" class="box">
            <input type="email" name="email" placeholder="your email" class="box">
            <textarea name="message" placeholder="your message" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3681.251064542263!2d72.876406714217!3d22.68169588512674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e5b2080473887%3A0xf836f1866200533!2sCollege%20Rd%2C%20Akshar%20Twp%2C%20Nadiad%2C%20Gujarat%20387001!5e0!3m2!1sen!2sin!4v1648312031189!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

</section>


<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>explore</h3>
            <a href="home.html"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="about.html"> <i class="fas fa-arrow-right"></i> about </a>
            <a href="course-1.html"> <i class="fas fa-arrow-right"></i> course-1 </a>
            <a href="course-2.html"> <i class="fas fa-arrow-right"></i>course-2 </a>
            
            <a href="teachers.html"> <i class="fas fa-arrow-right"></i> teachers </a>
            <a href="blog.html"> <i class="fas fa-arrow-right"></i> blog </a>
            <a href="contact.html"> <i class="fas fa-arrow-right"></i> contact </a>
        </div>

        
        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> my account </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> feedback </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> help center </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> certificates </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> newsletter </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
            <a href="#"> <i class="fab fa-github"></i> github </a>
        </div>

    </div>

    <div class="credit"> created by <span>The NVD Team</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->

<!-- custom js file link  -->
<!-- <script src="js/script.js"></script> -->

</body>
</html> 