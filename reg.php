<html>
<body background="rr5.jpg">
 <table style="border-radius: 8px; width: 100%;height: 100%" border="0">
   <tr>
   <td  
  style="width: 15%; height: 100%; vertical-align: top;"><img src="1234.png"><br><br><br><img src="2345.png"><img src="234.png"></th></td>

    <th style="vertical-align: top; text-align:center;">
	<table style="border-radius: 20px; border-color: #000000; width: 100%;height: 100%" border="0" bgcolor="#641c10"><th style="height: 100%; vertical-align: top; text-align:center;" >
<font color="#fff2b4"><img src="0.png" alt="mikky"><h1>ONLINE БАР</h1></font>

<img src="menu.png" usemap="#map1" border="0">
      <map name="map1">  
	  <area shape="rect" coords="110,20, 200,192"
                href="index.php" alt="главная">
	  <area shape="rect" coords="210,80, 300,192"
                href="reg.php" alt="регистрация">
		<area shape="rect" coords="320,20, 400,192"
                href="orders.php" alt="заказы">
		<area shape="rect" coords="410,20, 450,82"
                href="beer.php" alt="пиво">
		<area shape="rect" coords="420,80, 510,192"
                href="catalog.php" alt="каталог">
          <area shape="rect" coords="521,20, 620,192"
                href="profile.php" alt="профиль">
		  <area shape="rect" coords="640,90, 720,192"
                href="login.php" alt="вход">
				<area shape="rect" coords="640,30, 720,70"
                href="logout.php" alt="выход">
		
      </map></center></p>

<p><center>
<form name="forma1" method="post">
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
if(isset($_POST["name"]) and isset ($_POST["e-mail"]) and isset($_POST["info"]) and isset($_POST["password2"]) and isset($_POST["password"]))
{
$p = '#^[aA-zZ0-9\-_]+$#';
if(!preg_match($p,$_POST["name"]) or !preg_match($p,$_POST["e-mail"]) or !preg_match($p,$_POST["info"]) or !preg_match($p,$_POST["password2"]) or !preg_match($p,$_POST["password"]))
	echo 'Имеются запрещённые символы';
	else{

if($_POST["password2"]!=$_POST["password"])
	echo  '<p align="center" style="color:#fff2b4;font-size:25pt" >Пароли не совпадают</p>';
else
{
$name=$_POST["name"];
$mail=$_POST["e-mail"];
$info=$_POST["info"];
$passwd=md5($_POST["password2"]);
if ($name=="" or $mail=="" or $info=="" or $passwd=="" )
{echo '<p align="center" style="color:#fff2b4;font-size:25pt" >Все поля должны быть заполнены!</p>';
	
}
else{
$sum=$name+rand(0,count($passwd))+$name+$name+rand(0,count($passwd))+$name;
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
	echo '<p align="center" style="color:#fff2b4;font-size:25pt" >Пользователь ', $name,' успешно зарегистрирован.</p>;','<br><img src="22.png" alt="uhu">';
}
else
	{
		mysql_free_result($result);
		echo '<p align="center" style="color:#fff2b4;font-size:25pt" > Логин занят.</p><img src="23.png" alt="doh"><br>';
	
	}
	}
}
}
}
?>

</th></table></th><td style="width: 15%; height: 100%; vertical-align: top;" ><img src="67.png"><br><br><br><img src="76.png"><img src="678.png"></td>
   </tr>
 </table></center></p>
</html>