<?php
require_once 'require.php';
$ob = new Connect();
session_start();
if (isset($_SESSION['user'])) {

    $users = R::find('users', 'login = ?', array($_SESSION['user']));
    foreach ($users as $user) {

        ?>
        <aside class="basketSection">
        <section class="info">
            <div class="userPhoto">
                <img src="img/avatar/<?php echo $user->avatar; ?>" width="150px">
            </div>
            <div class="userInfo">

            </div>
        </section>
        <section class="basket">

        <?php
        break;
    }


    $basket = R::find('basket', 'login = ?', array($_SESSION['user']));
    foreach ($basket as $item) {
        $product = R::find('products', 'id = ?', array($item->product_id));
        foreach ($product as $value) {
            ?>

            <div class="basketProduct">
                <div class="basketProduct_Photo">
                    <img src="img/prod/<?php echo $value->image; ?>" width="50px">
                </div>
                <div class="basketProduct_Info">
                    <span class=""><?php echo $value->name; ?>
                        <hr></span>
                    <span class=""><?php echo $value->description; ?></span>
                    <div class="productQuantity">
                        <span class="costBlock">
                            Цена:  <p class="cost"><?php echo $value->cost; ?> </p>
                            руб.
                        </span>
                        <span>
                            Количество:
                            <input type="number" class="col" id="<?php echo $item->id; ?>" min="1"
                                   value="<?php echo $item->col; ?>">
                        </span>
                    </div>
                </div>
            </div>
            <?php
        }
    }
    ?>

    <div class="orderBasket">
        <span class="all_cost">Стоимость: <span></span></span>
        <button>Принять заказ</button>
    </div>
    </section>
    </aside>
    <?php
}else{
    echo "Зарегистрируйтесь или авторизируйтесь";
}
    ?>