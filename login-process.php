<?php 
    session_start();
    $_SESSION['username'] = $_GET['uname'];
    $_SESSION['petname'] = $_GET['pname'];
    $_SESSION['cart'] = array();
    $_SESSION['subtotal'] = 0;
    
    if(isset($_SESSION['username']) && isset($_SESSION['petname']) && strcmp($_SESSION['username'], '') !== 0 && strcmp($_SESSION['petname'], '') !== 0){
        header('Location: home.php');
    }
    if (strcmp($_SESSION['username'], '') == 0 && strcmp($_SESSION['petname'], '') == 0) {
        header('Location: index.php');
    }   
?>