<?php
require_once '../require.php';

$conn = new Connect();

$admin = R::find('admin','login = ?',array(md5($_POST['login'])));
foreach ($admin as $item) {
    if (!empty($item)){
        if ($item->password == md5($_POST['password'])){
            session_start();
            $_SESSION['user']= md5($_POST['login']);
            $_SESSION['admin'] = true;
        }
    }
}

header('Location: /');
