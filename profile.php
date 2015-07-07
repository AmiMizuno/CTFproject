<html>
<body background="rr5.jpg">
 <table style="border-radius: 8px; width: 100%;height: 100%" border="0">
   <tr>
   <td  
  style="width: 15%; height: 100%; vertical-align: top;"><img src="1234.png"><br><br><br><img src="2345.png"><img src="234.png"></th></td>

    <th style="vertical-align: top; text-align:center;">
	<table style="border-radius: 20px; border-color: #000000; width: 100%;height: 100%" border="0" bgcolor="#641c10"><th style="height: 100%; vertical-align: top; text-align:center;" >
<font color="#fff2b4"><img src="0.png" alt="mikky"><h1>ONLINE БАР</h1></p></font>
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
$a=sprintf('
			<tr><td><img src="br.png" alt="mikky"></td>
			<td>
			<p><center><font color="#fff2b4"><h3>Профиль</h3>
			<table style="border-radius: 8px;width="300" cellspacing="2"  border="0" bgcolor="#fff2b4">
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

   ',$login,$email,$info);
echo $a;

$query = "SELECT * FROM purchases WHERE userid='$us'";
$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());


$i=0;
echo '<p align="center" style="color:#fff2b4; font-size:16pt">Ваши заказы:</p><table style="border-radius: 10px; cellspacing="2"  border="0" bgcolor="#fff2b4"><tr bgcolor="#b93822"><td><font color="#fff2b4">Виски «Chivas Regal»</td> <td><font color="#fff2b4">Водка «Абсолют»</td><td><font color="#fff2b4">Виски Johnnie Walker</td><td><font color="#fff2b4">Мартини Bianco</td><td><font color="#fff2b4">Ликер De Kuyper Creme de Cassis</td><td><font color="#fff2b4">Виски Jack Daniels № 7</td><td><font color="#fff2b4"><h2>Сумма(руб.)</h2></td></tr>';
$ii=0;
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) 
    foreach ($line as $col_value)
		{
			
			$i+=1;
			if($ii==9)
			$ii=0;
			if($ii==0)
			{
				$a=sprintf('<tr><td>%d</td> <td>%d</td><td>%d</td><td>%d</td><td>%d</td><td>%d</td><td>%d</td></tr>',$line['Whiskey'],$line['AV'],$line['JW'],$line['Martini'],$line['Liqueur'],$line['JD'],$line['Sum']);
				echo $a;
			}
			$ii+=1;
		}
if($i==0)
echo '<tr><td colspan="7"><p align="center" style="color; font-size:16pt">Вы еще не совершали покупок</p></td></tr>';

echo'</p></table></center></p>
   </td>
   </table>
     </center></p>';
}
else echo '
					<tr><td><img src="12.gif" alt="mikky"></td>
					<td>
					<p><center><font color="#fff2b4"><h2>Вы не авторизированы!</h2>
					
				

   </center></p>
   </td>
   </table>
     </center></p>';
}
else
echo '
				 <tr><td><img src="12.gif" alt="mikky"></td>
					<td>
					<p><center><font color="#fff2b4"><h2>Вы не авторизированы!</h2>
					

   </center></p>
   </td>
   </table>
     </center></p>';


	

?>
</center></p></th></table></th><td style="width: 15%; height: 100%; vertical-align: top;" ><img src="67.png"><br><br><br><img src="76.png"><img src="678.png"></td>
   </tr>
 </table></center></p>

</html>