<?php
include 'conn.php';
include 'core.php';

if(loggedin())
{
$name = getuserfield('username');
//echo '<div id="welcome">';
//echo 'Welcome '.$name;

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$description=$_POST['description'];
$teachstud=$_POST['teachstud'];
$joindate=$_POST['joindate'];
$hobbies=$_POST['hobbies'];
$query= "INSERT INTO `profile`(`username`, `firstname`, `lastname`, `description`, `teachstud`, `joindate`, `hobbies`) VALUES ('$name','$firstname','$lastname','$description','$teachstud','$joindate','$hobbies')";
mysql_query($query);
header('Location: tweet.php');
}

?>