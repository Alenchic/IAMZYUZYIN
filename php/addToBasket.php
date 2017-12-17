<?php
session_start();

require_once '../require.php';
$ob = new Connect();
$cheker = true;
$bean = R::find('basket','login = ?',array($_SESSION['user']));
foreach ($bean as $item){
    if ($item->product_id == $_POST['id']){
        $cheker = false;
        break;
    }
}

if ($cheker) {
    $product = R::dispense('basket');
    $product->product_id = $_POST['id'];
    $product->col = 1;
    $product->login = $_SESSION['user'];
    R::store($product);
}
unset($_POST['id']);