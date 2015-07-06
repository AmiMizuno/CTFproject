<html>
<style>
#dva {
  width: 6em;
}
</style>
<body bgcolor="#641c10">
<p><center><img src="1.png" alt="mikky"></center></p>
<font color="#fff2b4"><p><center><h1>ТАВЕРНА МО</h1></center></p></font>
<p><center><img src="menu.png" usemap="#map1" border="0">
      <map name="map1">  
	  <area shape="rect" coords="110,20, 200,192"
                href="#" alt="главная">
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
                href="#" alt="выход">
		
      </map></center></p>
	  
	  
	  
<?php

if (isset($_COOKIE['userid']))   
{

$link = mysql_connect('127.0.0.1', 'root', '')
    or die('Не удалось соединиться: ' . mysql_error());
mysql_select_db('ctfbd') or die('Не удалось выбрать базу данных');
$us=$_COOKIE['userid'];
$query = "SELECT * FROM users WHERE info2='$us'";
$result = mysql_query($query) or die('Запрос не удался: '. mysql_error());
$i=0;
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) 
    {
		$i+=1;
		
	}
if($i>0)
{
	echo '<p><center><table>
 
 <td>
<p><center><font color="#fff2b4"><img src="df1.png">

<form name="forma1">
 <table width="300" cellspacing="2"  border="2" bgcolor="#fff2b4">
				    <tr>
		<th></th>	
        <th>Наименование</th>
		<th>Количество</th>
        <th>Цена (руб.)</th>
		
    </tr>
    <tr>
        <td> <input type="checkbox" name="wsk1" value="yes1"></td><td>Виски «Chivas Regal»</td><td> <input type="number" name="chival" id="dva" pattern="^[ 0-9]+$"   value="y1" min="0"></td><td>4000</td>
    </tr>
    <tr>
        <td> <input type="checkbox" name="vodka" value="yes2"></td><td>Водка «Абсолют»</td><td> <input type="number" min="0" name="absol" id="dva" pattern="^[ 0-9]+$" value="y2"></td><td>1149</td>
    </tr>
    <tr>
        <td> <input type="checkbox" name="wsk2" value="yes3"></td><td>Виски Johnnie Walker</td><td> <input type="number" min="0" name="johnie" id="dva" pattern="^[ 0-9]+$" value="y3"></td><td>3500</td>
    </tr>
	<tr>
        <td> <input type="checkbox" name="martini" value="yes4"></td><td>Мартини Bianco</td><td> <input type="number" min="0" name="bianco" id="dva" pattern="^[ 0-9]+$" value="y4"></td><td>900</td>
    </tr>	 
	<tr>
        <td> <input type="checkbox" name="liker" value="yes5"></td><td>Ликер De Kuyper Creme de Cassis</td><td> <input type="number" min="0" name="dekuyper" id="dva" pattern="^[ 0-9]+$"  value="y5"></td><td>405</td>
    </tr>	
		<tr>
        <td> <input type="checkbox" name="jack" value="yes6"></td><td>Виски Jack Daniels № 7</td><td> <input type="number" min="0" name="jd" id="dva" pattern="^[ 0-9]+$"  value="y6"></td><td>2669</td>
    </tr>
	
			   </table>
			 
<tr><td>

<p><center><input type="submit" name="submit" value="Сделать заказ"></center></p>

  

</form></td>
<tr><td><img src="hm.png" alt="mikky"></td>
   </center></p>
   </td>
   </table>
     </center></p>';
	if(isset($_REQUEST['wsk1'])||isset($_REQUEST['vodka'])||isset($_REQUEST['wsk2'])||isset($_REQUEST['martini'])||isset($_REQUEST['liker'])||isset($_REQUEST['jack']))
	{
	$chivas=0;
	$vodka=0;
	$johnnie=0;
	$bianco=0;
	$kuyper=0;
	$jack=0;
	
	if(isset($_REQUEST['wsk1']))
		$chivas=$_REQUEST['chival'];
	if(isset($_REQUEST['vodka']))
		$vodka=$_REQUEST['absol'];
	if(isset($_REQUEST['wsk2']))
		$johnnie=$_REQUEST['johnie'];
	if(isset($_REQUEST['martini']))
		$bianco=$_REQUEST['bianco'];
	if(isset($_REQUEST['liker']))
		$kuyper=$_REQUEST['dekuyper'];
	if(isset($_REQUEST['jack']))
		$jack=$_REQUEST['jd'];
	$sum=$chivas*4000+$vodka*1149+$johnnie*3500+$bianco*900+$kuyper*405+$jack*2669;
	$query = "INSERT INTO purchases (userid, JD, AV,Martini,Whiskey,JW,Liqueur,sum)
VALUES ('$us','$jack','$vodka','$bianco','$chivas','$johnnie','$kuyper','$sum')";
$result = mysql_query($query) or die('Запрос не удался: '. mysql_error());
echo "<h2>Заказ успешно оформлен!</h2>";
}		
}
else
echo '<p align="center" style="color:#fff2b4;font-size:25pt" >Вы не авторизованы!</p>';
}
else
echo '<p align="center" style="color:#fff2b4;font-size:25pt" >Вы не авторизованы!</p>';
?>




</html>