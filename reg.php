<html>
<body bgcolor="#641c10">
<p><center><img src="1.png" alt="mikky"></center></p>
<font color="#fff2b4"><p><center><h1>ТАВЕРНА МО</h1></center></p></font>



<p><center>
<form name="forma1">
    <font color="#ef6900">
 <table  border="0" cellspacing="5" cellpadding="5">

  <h2>Регистрация</h2>

   <tr>    
    <td align="right" valign="top"><font color="#fff2b4">Логин</td>
    <td><input type="text" name="name" size="40"></td>
   </tr>

   <tr>
    <td align="right" valign="top"><font color="#fff2b4">E-mail</td>
    <td><input type="text" name="e-mail" size="40"></td>
   </tr>

   <tr>
    <td align="right" valign="top" ><font color="#fff2b4">Пароль</td>
    <td>
     <input type="password" name="password" size="40">
    </td>
   </tr>

   <tr>
    <td align="right" valign="top" ><font color="#fff2b4">Повтор пароля</td>
    <td>
     <input type="password" name="password2" size="40">
    </td>
   </tr>
   <tr>
    <td align="right" valign="top"><font color="#fff2b4">О себе</td>
    <td>
     <input type="info" name="info" size="40">
    </td>
   </tr>
   <tr>
    <td align="right" colspan="2">
     <input type="submit" name="submit" value="Отправить">
     <input type="reset" name="reset" value="Очистить">
    </td>
   </tr>

 </table>
</font>
</form>

   </center></p>
<?php

$link = mysql_connect('127.0.0.1', 'root', '')
    or die('Не удалось соединиться: ' . mysql_error());
mysql_select_db('ctfbd') or die('Не удалось выбрать базу данных');
if(count($_GET)>0)
{
$name=$_GET["name"];
$mail=$_GET["e-mail"];
$info=$_GET["info"];
$passwd=$_GET["password2"];
$sum=$name+$mail+$info+$passwd+rand(0,count($passwd));
$trash=md5($sum,false);
$query = "SELECT * FROM users WHERE login='$name'";
$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());


$i=0;
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) 
    foreach ($line as $col_value)
		$i+=1;


if($i==0)
{
	mysql_free_result($result);
	$query = "INSERT INTO users(login, password,email,info,info2) VALUES ('$name','$passwd','$mail','$info','$trash')";
	$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());
	echo "Пользователь ", $name," успешно зарегистрирован.",'<br><img src="22.png" alt="uhu">';
}
else
	{
		mysql_free_result($result);
		echo "Логин занят",'<br><img src="23.png" alt="doh">';
	
	}
}

?>


</html>