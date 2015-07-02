<html>
<body bgcolor="#fff2b4">
<p><center><img src="1.png" alt="mikky"></center></p>
<font color="#641c10"><p><center><h1>PROJECT</h1></center></p></font>



 <p><center><form name="forma1">
     <input type="text" name="LOGIN" size="40"
            maxlength="40" value="	LOGIN">
<input type="text" name="PAROL" size="40"
            maxlength="40" value="	PAROL">
  <input type="submit" name="submit" value="ОТПРАВИТЬ">
</form>





<form name="forma1">
    
 <table  border="0" cellspacing="5" cellpadding="5">

  <font color="#ef6900"><h2>Регистрация</h2></font>

   <tr>
    <td align="right" valign="top">Логин</td>
    <td><input type="text" name="name" size="40"></td>
   </tr>

   <tr>
    <td align="right" valign="top">e-mail</td>
    <td><input type="text" name="e-mail" size="40"></td>
   </tr>

   <tr>
    <td align="right" valign="top" >Пароль</td>
    <td>
     <input type="password" name="password" size="40">
    </td>
   </tr>

   <tr>
    <td align="right" valign="top" >Повтор пароля</td>
    <td>
     <input type="password" name="password2" size="40">
    </td>
   </tr>
   <tr>
    <td align="right" valign="top">О себе</td>
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

</form>

   </center></p>
<?php

$link = mysql_connect('127.0.0.1', 'root', '')
    or die('Не удалось соединиться: ' . mysql_error());
mysql_select_db('ctfbd') or die('Не удалось выбрать базу данных');
$name=$_GET["name"];
$mail=$_GET["e-mail"];
$info=$_GET["info"];
$passwd=$_GET["password2"];
$query = "SELECT * FROM users WHERE login='$name'";
$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());


$i=0;
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) 
    foreach ($line as $col_value)
		$i+=1;


if($i==0)
{
	mysql_free_result($result);
	$query = "INSERT INTO users(login, password,email,info) VALUES ('$name','$passwd','$mail','$info')";
	$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());
}
else
	{
		mysql_free_result($result);
		echo "Логин занят";
	}

// Выполняем SQL-запрос
$query = 'SELECT * FROM users';
$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());

// Выводим результаты в html
echo "<table>\n";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

// Освобождаем память от результата
mysql_free_result($result);
echo 'Привет ' . htmlspecialchars($_GET["name"]) . '!';

?>


</html>