<?php
require 'inc/head.php';
require 'inc/data/products.php';

 if (!isset($_SESSION['loginname'])) {
     header('Location: login.php');
     exit();
 }

 if (!isset($_SESSION['cart'])) {
     $_SESSION['cart'] = [];
 }
 ?>

<section class="cookies container-fluid">
    <div class="row">
    <ul>
        <?php
        foreach ($_SESSION['cart'] as $idCookie => $quantity) {
            if (isset($catalog[$idCookie])) {
                ?>
        <li><?= $catalog[$idCookie]['name']; ?> : <?= $quantity ?></li>
        <?php
            }
       }
       ?>
    </ul>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
