<?php

require_once 'require.php';
$ob = new Connect();

$products = R::findAll('products');

?>
<section class="productsList">
    <?php
    foreach ($products as $product) {
        ?>
        <div class="product">
            <div class="productImage">
                <img src="img/prod/<?php echo ($product->image != null) ? $product->image : "Vernut_nekachestvennii_tovar__kuplennii_v_internet_magazine.jpg";?>">
            </div>
            <div class="productName">
                <p><?php echo $product->name; ?></p>
            </div>
            <div class="orderProduct">
                <span class="productCost">Цена:
                <p class="cost"><?php echo $product->cost;?></p> руб.</span>
                <button id="<?php echo $product->id;?>" class="orderProductButton">Купить</button>
            </div>
        </div>
        <?php
    }
    ?>
</section>