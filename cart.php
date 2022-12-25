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
    <link rel="stylesheet" href="cart.css">
    <title>My Cart | Paws & Tails Co.</title>
</head>

<body>
    <div class="main-container">
        <div class="left">
            <div class="header">
                <a href="shop.php"><i class="fas fa-arrow-left"></i> Go Back to Shop</a>
                <h1><?= $_SESSION['username'] ?>'s Shopping Cart</h1>
                <h2>Total Cart Items : (<?= count($_SESSION['cart']) ?>)</h2>
            </div>
            <table class="order-table">
                <?php if (count($_SESSION['cart']) == 0) { ?>
                    <tr>
                        <td>
                            <h1 style="color:var(--primary);">Cart is Empty :(</h1>
                        </td>
                    </tr>
                <?php } else { ?>
                <tr>
                    <th>Product</th>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                <?php }?>
                <?php foreach ($_SESSION['cart'] as $key => $item) { ?>
                <tr class="table-items">
                    <?php foreach ($allproducts as $product) { ?>
                        <?php if ($product['pid'] == $item) { ?>
                            <td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($product['pimage']); ?>" /></td>
                            <td><?= $product['name']?></td>
                            <td class='truncate'><?= $product['pdesc']?></td>
                            <td>₱ <?= $product['price']?></td>
                            <td>
                            <form method="GET" action="delete-from-cart.php">
                                <?php echo '<input type="hidden" name="key" value="'. $key .'">' ?>
                                <?php echo '<input type="hidden" name="item_price" value="'. $product['price'] .'">' ?>
                                <?php echo '<input id="del_cart" type="submit" value="Delete">' ?>
                            </form>
                            </td>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
            </table>
        </div>
        <div class="right"> 
            <div class="centered">
                <?php if (count($_SESSION['cart']) == 0) {?>
                <div class="header">
                    <h1>You have no items to checkout :(</h1>
                </div> 
                <?php } else { ?>
                <div class="header">
                    <h1>Checkout Summary</h1>
                </div>
                <div class="summary">
                    <div class="summary-item">
                        <h1>Subtotal</h1>
                        <h2>₱ <?=$_SESSION['subtotal']?></h2>
                    </div>
                    <div class="summary-item">
                        <h1>Shipping</h1>
                        <h2>₱ 1200</h2>
                    </div>
                    <div class="summary-item">
                        <h1>Tax</h1>
                        <h2>₱ 300</h2>
                    </div>
                    <div class="summary-item">
                        <h1>Total</h1>
                        <h2>₱<?=$_SESSION['total']?></h2>
                    </div>
                </div>
                <form method="" action="success.php">
                    <?php echo '<input id="confirm_purchase" type="submit" value="Confirm Purchase">' ?>
                </form>
                <?php }?>
            </div>    
        </div>
    </div>
</body>

</html>