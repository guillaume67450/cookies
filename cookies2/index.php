<?php 
session_start(); //gets session id from cookies
require 'inc/data/products.php';
require 'inc/head.php';

$cookie2='';


if (!empty($_GET['add_to_cart'])) {
    switch ($_GET['add_to_cart']) { 
    case 46 : 
        $cookie2='pecanNuts';
        break;
    case 36 : 
        $cookie2='chocolateChips';
        break;
    case 58 : 
        $cookie2='fullChocolateCookie';
        break;
    case 32 : 
        $cookie2='mMsCookies';
        break;  
    } 
}
if (empty($compteurPecanNuts) && (empty($_COOKIE["monCookie"][compteurPecanNuts]))) {
    $compteurPecanNuts=0;
} else {
    $compteurPecanNuts = $_COOKIE["monCookie"][compteurPecanNuts];
}

if (empty($compteurChocolateChips) && 
    (empty($_COOKIE["monCookie"][compteurChocolateChips]))
) {
    $compteurChocolateChips=0;
} else {
    $compteurChocolateChips = $_COOKIE["monCookie"][compteurChocolateChips];
}

if (empty($compteurFullChocolateCookie) && 
    (empty($_COOKIE["monCookie"][compteurFullChocolateCookie]))
) {
    $compteurFullChocolateCookie=0;
} else {
    $compteurFullChocolateCookie = 
    $_COOKIE["monCookie"][compteurFullChocolateCookie];
}

if (empty($compteurMMsCookies) && (empty($_COOKIE["monCookie"][compteurMMsCookies]))
) {
    $compteurMMsCookies=0;
} else {
    $compteurMMsCookies = $_COOKIE["monCookie"][compteurMMsCookies];
}

if ($cookie2=='pecanNuts') {
    $compteurPecanNuts++;
    setcookie('monCookie[compteurPecanNuts]', 
        $compteurPecanNuts, (time() + 360000)
    );
}
if ($cookie2=='chocolateChips') {
    $compteurChocolateChips++;
    setcookie('monCookie[compteurChocolateChips]', 
        $compteurChocolateChips, (time() + 360000)
    );
}
if ($cookie2=='fullChocolateCookie') {
    $compteurFullChocolateCookie++;
    setcookie('monCookie[compteurFullChocolateCookie]', 
        $compteurFullChocolateCookie, (time() + 360000)
    );
}
if ($cookie2=='mMsCookies') {
    $compteurMMsCookies++;
    setcookie('monCookie[compteurMMsCookies]', 
        $compteurMMsCookies, (time() + 360000)
    );
}


?>

<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                        <form method="post" action="?add_to_cart=<?= $id; ?>">
                            <a href="?add_to_cart=<?= $id; ?>" class="btn btn-primary">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                            </a>
                            <input type="hidden" name="compteurPecanNuts" value="$compteurPecanNuts">
                            <input type="hidden" name="chocolateChips" value="$compteurChocolateChips"> 
                            <input type="hidden" name="chocolateChips" value="$compteurChocolateChips"> 
                            <input type="hidden" name="mMsCookies" value="$compteurMMsCookies"> 
                        </form>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
    </div>
</section>

<?php //var_dump($_COOKIE);
require 'inc/foot.php'; ?>
