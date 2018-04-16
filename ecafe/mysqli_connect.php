<!--whitten by Anurag 1/25/2018-->
<?php 
DEFINE('DB_USER', 'root');
DEFINE('DB_PASSWORD', 'anuragtoor');
DEFINE('DB_HOST', '127.0.0.1');
DEFINE('DB_NAME', 'cafe');
$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die('can not connect to MySQL database '.mysqli_connect_error());
mysqli_set_charset($dbc,'utf8');    
?>
