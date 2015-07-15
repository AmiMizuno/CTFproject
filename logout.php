<?php
if (isset($_COOKIE['userid']))   
{
$login='login';$email='e-mail';$info='info';
$link = mysql_connect('127.0.0.1', 'root', '')
    or die('Не удалось соединиться: ' . mysql_error());
mysql_select_db('ctfbd') or die('Не удалось выбрать базу данных');
$us=$_COOKIE["userid"];
$query = "SELECT * FROM users WHERE info2='$us'";
$result = mysql_query($query) or die('Запрос не удался: '. mysql_error());
$a='0';

while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) 
    {
		$a.=$line['password'];
		$a.='0';
	}
		setcookie ("userid", $a);
		}
		header ('Location: index.php');  
   exit();

?>