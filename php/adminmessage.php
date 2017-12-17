<?php

require_once '../require.php';

$conn = new Connect();

$answer = R::getAll("UPDATE `questions` SET `answer` = ? WHERE `questions`.`id` = ?",array($_POST['adminmessage'],$_POST['id']));

header('Location: /?page=questions');