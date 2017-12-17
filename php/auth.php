<?php
require_once '../require.php';

$con = new Connect();
$auth = new Auth();
if($auth->valid($_POST['login'],$_POST['password'])){
    session_start();
    $_SESSION['user'] = $_POST['login'];
}
header('Location: /');