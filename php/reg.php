<?php
require_once '../require.php';

$con = new Connect();
$reg = new Registration();
$upload = new Upload();
$reg->registration_users();
$upload->upload_files();
header("Location: /?page=authorisation");