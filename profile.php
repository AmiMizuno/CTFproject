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
$i=0;
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) 
    {
		$i+=1;
		$login=$line['login'];$email=$line['email'];$info=$line['info'];
	}
if($i>0)
{
$a=sprintf('<html>
<body bgcolor="#641c10">
<p><center><img src="1.png" alt="mikky"></center></p>
<font color="#fff2b4"><p><center><h1>ONLINE БАР</h1></center></p></font>
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
<p><center><table>
 <tr><td><img src="br.png" alt="mikky"></td>
 <td>
<p><center><font color="#fff2b4"><h3>Профиль</h3>
 <table width="300" cellspacing="2"  border="2" bgcolor="#fff2b4">
				 <tr>
				   <td><b>Логин</b></td>
				   <td>%s</td>
				 </tr>
				 <tr>
				  <td> <b>Почта</b></td>
				   <td>%s</td>
				 </tr>
				 <tr>
				   <td><b>О себе</b></td>
				   <td>%s</td>
				 </tr>
				 
			   </table>
 <button>
    <img src="df.png" alt="" style="vertical-align:middle"> 
    Мои заказы
   </button>
   </center></p>
   </td>
   </table>
     </center></p>',$login,$email,$info);
echo $a;
}
else echo '<html>
<body bgcolor="#641c10">
<p><center><img src="1.png" alt="mikky"></center></p>
<font color="#fff2b4"><p><center><h1>ONLINE БАР</h1></center></p></font>
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
<p><center><table>
 <tr><td><img src="12.gif" alt="mikky"></td>
 <td>
<p><center><font color="#fff2b4"><h3>Вы не аторизованы</h3>
 <table width="300" cellspacing="2"  border="2" bgcolor="#fffcff">
				 <tr>
				   <td><b>Логин</b></td>
				   <td>------</td>
				 </tr>
				 <tr>
				  <td> <b>Почта</b></td>
				   <td>------</td>
				 </tr>
				 <tr>
				   <td><b>О себе</b></td>
				   <td>------</td>
				 </tr>
				 
			   </table>

   </center></p>
   </td>
   </table>
     </center></p>';
}
else
echo '<html>
<body bgcolor="#641c10">
<p><center><img src="1.png" alt="mikky"></center></p>
<font color="#fff2b4"><p><center><h1>ONLINE БАР</h1></center></p></font>
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
<p><center><table>
 <tr><td><img src="12.gif" alt="mikky"></td>
 <td>
<p><center><font color="#fff2b4"><h3>Вы не аторизованы</h3>
 <table width="300" cellspacing="2"  border="2" bgcolor="#fff2b4">
				 <tr>
				   <td><b>Логин</b></td>
				   <td>------</td>
				 </tr>
				 <tr>
				  <td> <b>Почта</b></td>
				   <td>------</td>
				 </tr>
				 <tr>
				   <td><b>О себе</b></td>
				   <td>------</td>
				 </tr>
				 
			   </table>

   </center></p>
   </td>
   </table>
     </center></p>';


	

?>


</html>