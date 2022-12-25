<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/562334cb93.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.typekit.net/sin2fpm.css">
    <link rel="stylesheet" href="default.css">
    <link rel="stylesheet" href="primary.css">
    <title>Paws & Tails Co.</title>
</head>

<body>
    <div class="nav-container">
        <img src="img/brand_assets/WIDE.png" alt="Logo">
        <div class="nav">
            <ul>
                <li><a href="home.php">HOME</a></li>
                <li><a href="#about-us">ABOUT</a></li>
                <li><a href="home.php#our-services">SERVICES</a></li>
                <li><a id="shop-link" href="shop.php">SHOP</a></li>
            </ul>
        </div>
        <div class="right-nav">
            <div class="rn-label">
                <h1>Greetings, <?= $_SESSION['username'] ?>!</h1>
                <a href="index.php">Logout</a>
            </div>
            <div class="rn-icon">
                <a href="cart.php"><i class="fas fa-shopping-cart"></i></a>
            </div>
        </div>
    </div>

    <div class="main-container">
        <div class="jumbotron">
            <div class="jumbotron-content">
                <h1>Welcome to Paws & Tails Co. </h1>
                <h2>the premier destination for all of your pet-related needs!</h2>
                <p>.</p>
                <a class="primary shop" href="shop.php">SHOP NOW!</a>
                <a class="primary contact" href="home.php#contact-us">CONTACT US</a>
            </div>
            <img src="img/brand_assets/jumbo-box-1.png">
        </div>

        <div id="about-us" class="about">
            <h1>Hi, I'm Coco! it's about time for you to know something about us.</h1>
            <div class="about-content">
                <img src="img/brand_assets/jumbo-box-2.png">
                <div>
                    <p>We are a locally owned and operated pet shop based in Pasig, Philippines. We have been serving the community for over 10 years. At Paws & Tails Co., we are passionate about animals and dedicated to providing the highest quality products and services for your furry friends.</p>

                    <p>From the finest quality products to top-notch services, we have everything you need to keep your furry family members happy, healthy, and well-cared for. Our team of experienced and knowledgeable pet professionals is here to help you find the purrfect products and services for your furry friends.</p>

                    <p>Whether you're looking for the latest and greatest pet toys, comfortable beds and carriers, or grooming and training services, we've got you covered. We also offer a wide range of food, treats, and other supplies to ensure that your pets have everything they need to thrive.</p>
                </div>
            </div>
        </div>

        <div id="our-services" class="services">
            <h1>Our Services</h1>
            <div class="row">
                <div class="service">
                    <i class="fas fa-paw"></i>
                    <h2>Pet Shop</h2>
                    <p>We find our furbabies their new home.</p>
                </div>
                <div class="service">
                    <i class="fas fa-fish"></i>
                    <h2>Pet Food</h2>
                    <p>We sell the best food for your pets.</p>
                </div>          
                <div class="service">
                    <i class="fas fa-shirt"></i>
                    <h2>Pet Accessories</h2>
                    <p>We offer a wide variety of pet accessories & clothing.</p>
                </div>   
                <div class="service">
                    <i class="fas fa-shower"></i>
                    <h2>Grooming & Make Overs</h2>
                    <p>Our pet professionals are here to give your furbaby the best and neat look in town</p>
                </div>
            </div>
        </div>

        <div id="contact-us" class="footer">
            
            <div class="contacts">
                <img src="img/brand_assets/BRANDING.png" style="width: 50%;" alt="Logo">
                <h1>Contact us!</h1>
                <div class="contacts-line">
                    <i class="fas fa-map-marker"></i>
                    <p>1234 Pasig City, Philippines</p>
                </div>
                <div class="contacts-line">
                    <i class="fas fa-phone-square-alt"></i>
                    <p>+63 912 345 6789 or 02 638 1234</p>
                </div>
                <div class="contacts-line">
                    <i class="fas fa-envelope"></i>
                    <p>inquiry@pawsandtails.co</p>
                </div>
            </div>
            <div class="mini-about">
                <p>the premier destination for all of your pet-related needs! From the finest quality products to top-notch services, we have everything you need to keep your furbabies happy.</p>
            </div>
            <div class="copyright">
                <p>© 2021 Paws & Tails Co. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</body>
</html>