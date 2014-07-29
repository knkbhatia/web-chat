<?php

$host='localhost';
$user='root';
$pass='';
$my_database='final';
if(mysql_connect($host,$user,$pass))

{
if(mysql_select_db($my_database))
{
echo '<br/>';


}}
ELSE
{
die(mysql_error());
}

?>