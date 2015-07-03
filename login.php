<html>
<body bgcolor="#641c10">
<p><center><img src="1.png" alt="mikky"></center></p>
<font color="#fff2b4"><p><center><h1>ТАВЕРНА МО</h1></center></p></font>



<p><center>
<form name="forma1">
    
 <table  border="0" cellspacing="5" cellpadding="5">

  <font color="#ef6900"><h2>Вход</h2></font>

   <tr>
    <td align="right" valign="top"><font color="#fff2b4">Логин</td>
    <td><input type="text" name="name" size="40"></td>
   </tr>


   <tr>
    <td align="right" valign="top" ><font color="#fff2b4">Пароль</td>
    <td>
     <input type="password" name="password" size="40">
    </td>
   </tr>

   <tr>
    <td align="right" colspan="2">
     <input type="submit" name="submit" value="Отправить">
     <input type="reset" name="reset" value="Очистить">
    </td>
   </tr>

 </table>

</form>

   </center></p>
<?php

$link = mysql_connect('127.0.0.1', 'root', '')
    or die('Не удалось соединиться: ' . mysql_error());
mysql_select_db('ctfbd') or die('Не удалось выбрать базу данных');
if(count($_GET)>0)
{
$name=$_GET["name"];
$passwd=$_GET["password"];
$query = "SELECT * FROM users WHERE login='$name' AND password='$passwd'";
$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());


$i=0;
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) 
    {
		setcookie("userid",$line['info2']);
		$i+=1;
	}
		


if($i==0)
{
	
	echo "Неверный логин или пароль";
}
}
if (isset($_COOKIE['userid']))   
{
$us=$_COOKIE["userid"];
$query = "SELECT * FROM users WHERE info2='$us'";
$result = mysql_query($query) or die('Запрос не удался: '. mysql_error());
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) 
    {
		echo "Hello, ",$line['login'],'!';
	}
}
	


?>


</html>