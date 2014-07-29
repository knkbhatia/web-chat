<?php

require 'core.php';
require 'conn.php';
//$que='ALTER TABLE `mytable` DELETE `names` VARCHAR( 255 ) NOT NULL' ;
//mysql_query($que);
if(!loggedin())
{

//echo 'register';
if(isset($_POST['username'])&&isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['password_again']))
{
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$password_again=$_POST['password_again'];
$password_hash=md5($password);
if(!empty($username)&&!empty($email)&&!empty($password)&&!empty($password_again))
{
if($password!=$password_again)
{
header('Location: login_reg1.html#toregister');
//echo '<script type="text/javascript">\n';
//echo 'alert("passwords do not match")';
//echo '</script>';
//echo '<br>'.'password do not match ! please enter same password'.'<br><br>';
}
else
{
$query="SELECT username FROM users WHERE username='$username'";
$query_run=mysql_query($query);
if(mysql_num_rows($query_run)==1)
{
header('Location: login_reg2.html#toregister');
//echo '<script type="text/javascript">\n'
 //    , 'window.alert("username already exists");'
  //,'</script>';
}
else
{

$query= "INSERT INTO `users`(`id`, `username`, `email`, `password`) VALUES ('','$username','$email','$password_hash')";
if($query_run=mysql_query($query))
{
mysql_query("INSERT INTO `s_members`(`id`, `name`, `pass`) VALUES ('','$username','$password_hash')");
mysql_query("INSERT INTO `cs_profiles`(`id`, `name`, `first_name`, `last_name`, `email`, `password`, `salt`, `status`, `role`, `about`, `date_reg`, `date_nav`, `color`, `rate`, `rate_count`) VALUES ('','$username','$username','','$email','$password_hash','testing','active','9','','2013-10-28 00:00:00','','','','')");
header('Location: login_reg5.html');
?>

<?php 
//header('Location : register_success.php');

}
else
{
echo mysql_error();
echo "<script type='text/javascript'>\n";
echo 'we could not register you !!';
echo "</script>";
}

}
}


}
else
{

echo "<script  type='text/javascript'>\n";
echo "alert('MUST FILL ALL FIELDS plzz!!!!');\n";
echo "</script>";


}
}

?>

<?php
}
else if(loggedin())
{
header('Location: login_reg3.html');
//echo "<script type=text/javascript>\n";
//echo 'you\'r already register and logged in !!';
//echo "</script>";
}

?>