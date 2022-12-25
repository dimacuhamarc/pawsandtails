<?php
    session_start();
    require_once('connection.php');
    require_once('query.php');
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
    <link rel="stylesheet" href="shop.css">
    <title>Shop | Paws & Tails Co.</title>
</head>

<body>
    <div class="nav-container">
        <img src="img/brand_assets/WIDE.png" alt="Logo">
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

        <div class="product-section pets">
            <h1><i class="fas fa-paw"></i>  Our Furbabies looking for a new home!</h1>
            <div class="products">
                <div class="row">
                <?php foreach ($pet_r as $product_pets) { ?>
                    <div class="items">
                        <h2><?= $product_pets['name']; ?></h2>
                        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($product_pets['pimage']); ?>" />
                        <form method="GET" action="add-to-cart.php">
                            <?php echo '<input type="hidden" name="item_id" value="'. $product_pets['pid'] .'">' ?>
                            <?php echo '<input type="hidden" name="item_price" value="'. $product_pets['price'] .'">' ?>
                            <?php echo '<input id="add_cart" type="submit" value="Add '. $product_pets['name'] .' to Cart">' ?>
                        </form>
                        <h2>₱<?= $product_pets['price']; ?></h2>
                        <p><?= $product_pets['pdesc']; ?></p>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>

        <div class="product-section toys">
            <h1><i class="fa-solid fa-bone"></i>  Toys for your lil furbabies!</h1>
            <div class="products">
                <div class="row">
                <?php foreach ($toys_r as $product_toys) { ?>
                    <div class="items">
                        <h2><?= $product_toys['name']; ?></h2>
                        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($product_toys['pimage']); ?>" />
                        <form method="GET" action="add-to-cart.php">
                            <?php echo '<input type="hidden" name="item_id" value="'. $product_toys['pid'] .'">' ?>
                            <?php echo '<input type="hidden" name="item_price" value="'. $product_toys['price'] .'">' ?>
                            <?php echo '<input id="add_cart" type="submit" value="Add '. $product_toys['name'] .' to Cart">' ?>
                        </form>
                        <h2>₱<?= $product_toys['price']; ?></h2>
                        <p><?= $product_toys['pdesc']; ?></p>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
        
        <div class="product-section food">
            <h1><i class="fas fa-fish"></i>  Foodies and Goodies</h1>
            <div class="products">
                <div class="row">
                <?php foreach ($food_r as $product_food) { ?>
                    <div class="items">
                        <h2><?= $product_food['name']; ?></h2>
                        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($product_food['pimage']); ?>" />
                        <form method="GET" action="add-to-cart.php">
                            <?php echo '<input type="hidden" name="item_id" value="'. $product_food['pid'] .'">' ?>
                            <?php echo '<input type="hidden" name="item_price" value="'. $product_food['price'] .'">' ?>
                            <?php echo '<input id="add_cart" type="submit" value="Add '. $product_food['name'] .' to Cart">' ?>
                        </form>
                        <h2>₱<?= $product_food['price']; ?></h2>
                        <p><?= $product_food['pdesc']; ?></p>
                    </div>
                <?php } ?>
                </div>
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