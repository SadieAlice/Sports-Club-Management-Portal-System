<?php
session_start();
echo $_SESSION['Email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports club homepage</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style1.css">

</head>
<body>
  
 
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo">
        <img src="images/try.png" alt="">
    </a>

    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#menu">Clubs</a>
		 <a href="#blogs">Coaches</a>
		<a href="#review">Reviews</a>
        <a href="#contact">Contact</a>
		<a href="Request.php">Join A Club?</a>
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <div>
        <p style="color:white; font-size:1.5rem;" ><?php echo "Welcome...".  $_SESSION['Email']; ?></p>
    </div>
 <div>
		<a href="Logout.php">
		<img style="height:30; width:30" src="images/logout.jpg"/>
        </a>
		</div>
   



</header>

<!-- header section ends -->

<!-- home section starts  -->


<div class="row">

<section class="home" id="home">
<div class="col">
<div class="leftside">
    <div class="content">
        <h3>BOTHO UNIVERSITY SPORTS CLUB PORTAL</h3>
        <p>We are delighted and excited about working as a team starting from today. Congratulations on chosing to be a part of one of our dynamic clubs! We love to form a team, work with enthusiastic and have a great learning attitude.</p>
        <a href="#menu" class="btn">Join Now</a>
    </div>
	</div>
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class="wrapper">
<div class="col">
<div class="rightside">
<img src="images/Balls2.jpg" alt="">
</div>
</div>
</div>
</section>
</div>

<!-- home section ends -->

<!-- about section starts  -->

<section style="height:650px;" class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div style="height:400px;" class="row">

        <div class="image">
            <img src="images/sports.jpg" alt="" width="600px"height="400px">
        </div>

        <div class="content">
            <h3>What Makes Our Sports Club Facility Special?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus qui ea ullam, enim tempora ipsum fuga alias quae ratione a officiis id temporibus autem? Quod nemo facilis cupiditate. Ex, vel?</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit amet enim quod veritatis, nihil voluptas culpa! Neque consectetur obcaecati sapiente?</p>
            <a href="about.php" class="btn">Learn More</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- menu section starts  -->

<section class="menu" id="menu">

    <h1 class="heading"> our <span>CLUBS</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/basketball.jpg" alt="">
            <h3>BasketBall</h3>
            <h5> Club Available</h5>
            <a href="ClubAuthenticate.php" class="btn">Access Club</a>
        </div>

        <div class="box">
            <img src="images/tennis.jpg" alt="">
            <h3>Tennis Club</h3>
          <h5> Club Available</h5>
            <a href="ClubAuthenticate.php" class="btn">Access Club</a>
        </div>

        <div class="box">
            <img src="images/volleyball.jpg" alt="">
            <h3>Volley Ball</h3>
           <h5> Club Available</h5>
            <a href="ClubAuthenticate.php" class="btn">Access Club</a>
        </div>

        <div class="box">
            <img src="images/soccer.jpg" alt="">
            <h3>Football Club</h3>
            <h5> Club Available</h5>
            <a href="ClubAuthenticate.php" class="btn">Access Club</a>
        </div>

        <div class="box">
            <img src="images/swim.jpg" alt="">
            <h3>Swimming Club</h3>
           <h5> Club Not Available</h5>
            <a href="ClubAuthenticate.php" class="btn">Access Club</a>
        </div>

        <div class="box">
            <img src="images/chesss.jpg" alt="">
            <h3>Chess Club</h3>
            <h5> Club Not Available</h5>
            <a href="ClubAuthenticate.php" class="btn">Access Club</a>
        </div>

    </div>

</section>

<!-- clubs section ends -->


<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>coaches</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/coach 1.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Tennis Club Coach</a>
                <span>Josephine Maryan</span>
                <p>Skilled and Qualified coach ready to train, nurture and develop the best team players there ever was in the school club. Meet your Coach and let the games begin!</p>
                <a href="#" class="btn">Read More</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/coach 2.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">BasketBall Club Coach</a>
                <span>Jonathan McReynolds</span>
               <p>Skilled and Qualified coach ready to train, nurture and develop the best team players there ever was in the school club. Meet your Coach and let the games begin!</p>
                 <a href="#" class="btn">Read More</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/coach 3.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Chess Club Coach</a>
                <span>David Ransom</span>
               <p>Skilled and Qualified coach ready to train, nurture and develop the best team players there ever was in the school club. Meet your Coach and let the games begin!</p>
                 <a href="#" class="btn">Read More</a>
            </div>
        </div>

    </div>

</section>

<!-- blogs section ends -->


<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> student's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/quote.png" alt="" class="quote">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus vel? Nemo.</p>
            <img src="images/student review 4.jpg" class="user" alt="">
            <h3>Katlego Moreri</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="images/quote.png" alt="" class="quote">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus vel? Nemo.</p>
            <img src="images/student review.jpg" class="user" alt="">
            <h3>Mary Setlhare</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        
        <div class="box">
            <img src="images/quote.png" alt="" class="quote">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus vel? Nemo.</p>
            <img src="images/student review 3.jpg" class="user" alt="">
            <h3>John Murray</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <div class="row">

        <iframe class="map" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Botho University Botswana&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" allowfullscreen="" loading="lazy"></iframe>

        <form action="feedback_code.php" method="post">
            <h3>get in touch</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" name="name" placeholder="Name" required>
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input type="number" name="phone" placeholder="Number" required>
            </div>
			<div class="inputBox">
                <span class="fas fa-comments"></span>
                <input type="text" name="msg" placeholder="Your message here" required>
            </div>
            <input type="submit" value="Contact Now" class="btn">
        </form>

    </div>

</section>

<!-- contact section ends -->



<!-- footer section starts  -->

<section class="footer">

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="links">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#menu">Clubs</a>
        <a href="#blogs">Coaches</a>
        <a href="#review">Reviews</a>
        <a href="#contact">Contact</a>
    </div>

    <div class="credit">created by <span>Ms. Keneilwe Alice Makoba</span> | all rights reserved</div>

</section>

<!-- footer section ends -->

















<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>