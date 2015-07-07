<html>
<body background="rr5.jpg">
 <table style="border-radius: 8px; width: 100%;height: 100%" border="0">
   <tr>
   <td  
  style="width: 15%; height: 100%; vertical-align: top;"><img src="1234.png"><br><br><br><img src="2345.png"><img src="234.png"></th></td>

    <th style="vertical-align: top; text-align:center;">
	<table style="border-radius: 20px; border-color: #000000; width: 100%;height: 100%" border="0" bgcolor="#641c10"><th style="height: 100%; vertical-align: top; text-align:center;" >
<font color="#fff2b4"><img src="0.png" alt="mikky">
<h1>ONLINE БАР</h1></font>
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
				<table align="center">
				<tr><td>
				<table>
				
				
<?php
	$link = mysql_connect('127.0.0.1', 'root', '')
	or die('Не удалось соединиться: ' . mysql_error());
	mysql_select_db('ctfbd') or die('Не удалось выбрать базу данных');
	$query = "SELECT * FROM comments ORDER BY id DESC LIMIT 10;";
	$result = mysql_query($query) or die('Запрос не удался: '. mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) 
    {
		echo '<tr><td><font color="#fff204">[',$line['data'],']</td><td><font color="#f0f2b4">',$line['user'],':</td><td><font color="#fff2b4">',$line['text'],'</td></tr>';
	}

	?>	
	</table>	</td></tr><tr>
	<td>
	<form  name="fm2" method="post">
    <p align="center"><font color="#fff2b4"><b>Введите ваш отзыв:</b></p>
    <p align="center"><textarea rows="10" cols="45" name="text"></textarea></p>
    <p align="center"><input type="submit" value="Отправить"></p>
  </form>
      </map>
	  </td>
	  </tr>
	  </table>
	  <?php

if(isset($_POST["text"]))
{
	$text=$_POST["text"];
	$b=0;
	$us=0;
	if(isset($_COOKIE['userid']))
		$us=$_COOKIE["userid"];	
	
	$query = "SELECT * FROM users WHERE info2='$us'";
	$result = mysql_query($query) or die('Запрос не удался: '. mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) 
    {
		$us=$line['login'];
		$b=1;
	}
	if($b==1)
	{
		$query = "INSERT INTO comments (user, text)
		VALUES ('$us','$text')";
		$result = mysql_query($query) or die('Запрос не удался: '. mysql_error());
	}
	else
		echo 'Записи могут делать только авторизованные пользователи';
}
?>
	  </th></table></th>
	<td style="width: 15%; height: 100%; vertical-align: top;" ><img src="67.png"><br><br><br><img src="76.png"><img src="678.png"></td>
   </tr>
 </table></center></p>



</html>