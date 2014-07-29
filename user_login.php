<?php



if(isset($_POST['username'])&&isset($_POST['password']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$password_hash=md5($password);
if(!empty($username)&&!empty($password))
{
$query="SELECT id FROM users WHERE username='$username' AND password='$password_hash'";
//echo '<br>'.'before qry';
if($query_run=mysql_query($query))
{
//echo '<br>'.'q run';
$query_num_rows=mysql_num_rows($query_run);
if($query_num_rows==0)
{
header('Location: login_reg4.html');
}
else if($query_num_rows==1)
{
//echo 'ok done ';
$user_id=mysql_result($query_run,0,'id');
$_SESSION['user_id']=$user_id;
header('Location: indexlogin.php');
}
}

}
else
{
echo 'plzz fill properly';
}
}

?>