<?php 
session_start(); //gets session id from cookies
require 'inc/head.php';
require 'inc/data/products.php';

var_dump($_COOKIE);

?>

<section class="cookies container-fluid">
    <div class="row">
        
        TODO : Display shopping cart items from $_COOKIES here.
        <?php foreach ($catalog as $id => $cookie) { ?>
            <h3><?php echo $cookie['name']; ?></h3>
            <p><?php echo $cookie['description']; ?></p>
            <p><?php echo "quantité ddée : " . $cookie['number']; ?></p>    
    </div>
</section>
<?php require 'inc/foot.php'; ?>
