<html>
<body background="rr5.jpg">
 <table style="border-radius: 8px; width: 100%;height: 100%" border="0">
   <tr>
   <td  
  style="width: 15%; height: 100%; vertical-align: top;"><img src="1234.png"><br><br><br><img src="2345.png"><img src="234.png"></th></td>

    <th style="vertical-align: top; text-align:center;">
	<table style="border-radius: 20px; border-color: #000000; width: 100%;height: 100%" border="0" bgcolor="#641c10"><th style="height: 100%; vertical-align: top; text-align:center;" >
<font color="#fff2b4"><img src="0.png" alt="mikky"><h1>ONLINE БАР</h1></center></p></font>
<p><center><img src="menu.png" usemap="#map1" border="0">
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
<?php
$b=false;
$us='asd';
$link = mysql_connect('127.0.0.1', 'root', '')
    or die('Не удалось соединиться: ' . mysql_error());
mysql_select_db('ctfbd') or die('Не удалось выбрать базу данных');
if(count($_POST)>0)
{
$name=$_POST["name"];
$passwd=md5($_POST["password"]);
$query = "SELECT * FROM users WHERE login='$name' AND password='$passwd'";
$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());


$i=0;
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) 
    {
		setcookie("userid",$line['info2']);
		$b=true;
		$i+=1;
		$us=$line['info2'];
		$_COOKIE['userid']=$line['info2'];
	}
		


if($i==0)
{
	
	echo '<p align="center" style="color:#fff2b4;">Неверный логин или пароль.</p>';
}

}
if (isset($_COOKIE['userid'])||$b)   
{
	if(isset($_COOKIE['userid']))
		$us=$_COOKIE["userid"];
	
$query = "SELECT * FROM users WHERE info2='$us'";
$result = mysql_query($query) or die('Запрос не удался: '. mysql_error());
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) 
    {
		echo '<p align="center" style="color:#fff2b4;">Вы успешно авторизованы.<br>Добро пожаловать, ',$line['login'],'!</p>';
	}
}
	


?>
<form name="forma1" method="post">
    
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

   </center></p></th></table></th><td style="width: 15%; height: 100%; vertical-align: top;" ><img src="67.png"><br><br><br><img src="76.png"><img src="678.png"></td>
   </tr>
 </table></center></p>



</html>