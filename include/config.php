<?php
define('DB_SERVER','www.db4free.net');
define('DB_USER','hospitalmgmnt');
define('DB_PASS' ,'Test@1234');
define('DB_NAME', 'hospital0705');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>