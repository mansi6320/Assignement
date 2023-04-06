<?php
$url='localhost';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"student89-3530313543fa");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
?>