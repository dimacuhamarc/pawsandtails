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
    <link rel="stylesheet" href="tables.css">
    <title>Success! | Paws & Tails Co.</title>
</head>

<body>
    <div class="nav-container">
        <h1>Thank you for shopping at Paws & Tails Co.!</h1>
        <div class="right-nav">
            <div class="rn-label">
                <h1><?= $_SESSION['username'] ?>!</h1>
                <a href="index.php">Logout</a>
            </div>
        </div>
    </div>
    <div class="main-container">
        <table class="order-table">
            <tr>
                <th>Product</th>
                <th>Product Name</th>
                <th>Price</th>
            </tr>
            <?php foreach ($_SESSION['cart'] as $key => $item) { ?>
            <tr class="table-items">
                <?php foreach ($allproducts as $product) { ?>
                    <?php if ($product['pid'] == $item) { ?>
                        <td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($product['pimage']); ?>" /></td>
                        <td><?= $product['name']?></td>
                        <td>₱ <?= $product['price']?></td>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        </table>

        <div class="summary-item">
            <div class="label">
                <h1>Total</h1>
                <p>( plus Tax & Shipping Fee )</p>
            </div>
            <div class="value">
                <h2>₱<?=$_SESSION['total']?></h2>
            </div>
        </div>
        
        <div class="go-back">
        <a href="shop.php"><i class="fas fa-arrow-left"></i> Go Back to Shop</a>
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
</body>
</html>

<?php 
unset($_SESSION['cart']);
unset($_SESSION['subtotal']);
unset($_SESSION['total']);
$_SESSION['cart'] = array();
$_SESSION['subtotal'] = 0;
$_SESSION['total'] = 0;

?>