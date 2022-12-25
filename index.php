<?php
    session_start();
    $_SESSION['username'] = '';
    $_SESSION['petname'] = '';
    
    if(isset($_SESSION['cart'])) {
        unset($_SESSION['cart']);
        unset($_SESSION['subtotal']);
        unset($_SESSION['total']);
    } else {
        $_SESSION['cart'] = array();
        $_SESSION['subtotal'] = 0;
        $_SESSION['total'] = 0;
    }
        

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.typekit.net/sin2fpm.css">
    <link rel="stylesheet" href="default.css">
    <link rel="stylesheet" href="login.css">
    <title>Welcome to Paws & Tails Co.</title>
</head>

<body>
    <div class="main-container">
        <div class="split left">
            <img id="ptc_logo" src="img/brand_assets/BRANDING.png" alt="Logo">
            <div class="centered">
                <img id="ptc_coco" src="img/fur_models/coco-endogser.png" alt="Coco">
            </div>
        </div>

        <div class="split right">
            <div class="login-header">
                <h1>Welcome Back Fur Parent!</h1>
                <h2>Please login and type your Pet's Name for verification</h2>
            </div>
            <div class="login-form">
                <form action="login-process.php" method="GET">
                    <input type="text" id="uname" name="uname" placeholder="Username">
                    <input type="text" id="pname" name="pname" placeholder="Pet name">
                    <input id="login-submit" type="submit" value="Login">
                </form>
            </div>

            <div class="login-footer">
                <h1>CMSC 110 DP - MP2</h1>
                <h2>Dimacuha, Marc Angelo</h2>
                <h2>Hicban, Askia Mackenzie</h2>
                <p>some of the images are from pexels.com, the rest are individually owned by the developers</p>
            </div>
        </div>
    </div>
</body>

</html>