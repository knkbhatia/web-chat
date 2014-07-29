<?php
require 'core.php';
require 'conn.php';
if(loggedin())
{

$name = getuserfield('username');
$query="SELECT firstname FROM `profile` where username='$name'";
$result=mysql_query($query);
$number=mysql_num_rows($result);
if($number==0)
{
//$lastname=getuserfield('lastname');
//echo 'you logged in '.$name.'<a href="logout.php"><strong><u>Log out</u></strong></a>';
//echo '<br>'.'<a href="codes.html"><strong>GO FOR TUTORIAL</strong></a>';
header('Location: setprofile.html');
}
else
{
header('Location: tweet.php');
//echo 'you logged in '.$name.'<a href="logout.php"><strong><u>Log out</u></strong></a>';
}
}
else
{
include 'user_login.php';
}
?>