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

<section class="heading">
    <h3>feedback</h3>
    <p> <a href="home.html">home >></a> feedback </p>
</section>

<div class="feedback">
<form action="<?php echo $sitepath;?>save_feedback.php" method="post" name="feedback" id="feedback">
    <label for="fullName"><b>Your Name</b></label> 
    <input type="text" name="fullName" placeholder="your name" ><br><br>

    <label for="gender"><b>Your Gender</b></label> 
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female<br><br>

    <label for="email"><b>Your E-mail</b></label> 
    <input type="text" name="email"><br>
    <br>

    <label for="comments"><b>Your Comments</b></label>
    <textarea name="message"></textarea><br><br>

    <input type="submit" value="Submit">
    <input type="reset" value="Clear" class="btn">
</form>
</div>
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


</body>
</html>