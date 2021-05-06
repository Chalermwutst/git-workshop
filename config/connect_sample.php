<?php

$hotst = 'localhost';
$user = 'user';
$pass = 'pass';
$dbname = 'your_db';

mysqli_connect($hotst,$user,$pass,$dbname);

echo "connect success";