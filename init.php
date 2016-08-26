<?php
$db_name = "webappdb";
$mysql_user = "adminSZuJWUS";
$mysql_pass = "ShN5udB5HJax";
$server_name = "php-beekeeperdomain.rhcloud.com";

$con = mysqli_connect($server_name, $mysql_user, $mysql_pass, $db_name);
if(!$con)
{
//echo "Connection error",myasqli_connect_error();
}
else
{
//echo"<h3>Database connection success</h3>";
}
?>