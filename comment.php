<?php 
include 'conn.php';
include 'core.php';

if(loggedin())
{
$name = getuserfield('username');

echo "WELCOME".$name;
$comment=$_POST['comment'];

if(!empty($comment))
{
$query="INSERT INTO `comment`(`username`, `comment`) VALUES ('$name','$comment')";
if(mysql_query($query))
header('Location: tweet.php');
}
}
?>