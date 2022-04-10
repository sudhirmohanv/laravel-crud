<?php

define('DB_HOST','localhost');
define('DB_NAME','simple_crud');
define('DB_USER','root');
define('DB_PORT','3308');
define('DB_PASS','');

$conn = mysqli_connect(DB_HOST.':'.DB_PORT,DB_USER,DB_PASS,DB_NAME);
if(!$conn){
    die('connection error');
}



?>