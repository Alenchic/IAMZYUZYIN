<?php
$dir_name = str_replace('\\','/',dirname(__FILE__));
define('PATH',$dir_name);

require_once PATH.'/lib/rb.php';
require_once PATH.'/classes/connect.class.php';
require_once PATH.'/classes/auth.class.php';
require_once PATH.'/classes/registration.class.php';
require_once PATH.'/classes/upload_files.class.php';

?>