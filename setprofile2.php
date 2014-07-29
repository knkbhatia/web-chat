<?php
include 'conn.php';
include 'core.php';
if(loggedin())
{
$name = getuserfield('username');

$teachstud=$_POST['teachstud'];
$joindate=$_POST['joindate'];
$hobbies=$_POST['hobbies'];
if(isset($teachstud))
echo $teachstud;

mysql_query("UPDATE profile SET teachstud='$teachstud', joindate='$joindate', hobbies='$hobbies' WHERE username='$name'");
header('Location: tweet.php');
}
?>