<?php

require_once '../require.php';
session_start();
$con - new Connect();
$message =  R::dispense('questions');
$message->login = $_SESSION['user'];
$message->message = $_POST['comment'];
R::store($message);

header("Location: /?page=questions");